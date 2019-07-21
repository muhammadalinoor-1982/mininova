<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']='DOCTOR LIST';
        $data['doctors']=Doctor::withTrashed()->orderBy('id','desc')->get();
        $data['serial']=1;
        return view('Admin.Doctor.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']='NEW DOCTOR';
        return view('Admin.Doctor.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'doctor_name'       =>'required',
            'doctor_degree'     =>'required',
            'doctor_position'   =>'required',
            'doctor_email'      =>'required|email|unique:doctors',
            'doctor_phone'      =>'required',
            'doctor_image'      =>'required',
            'doctor_password'   =>'required|confirmed',
        ]);

        $doctor = $request->except('_token','doctor_password');
        $doctor['doctor_password'] = bcrypt($request->doctor_password);

        if($request->hasFile('doctor_image')) {
            $file = $request->file('doctor_image');
            $file->move('images/doctor/', $file->getClientOriginalName());
            $doctor['doctor_image'] = 'images/doctor/'.$file->getClientOriginalName();
        }

        Doctor::create($doctor);
        session()->flash('message','Doctor created successfully');
        return redirect()->route('doctor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        $data['title']='EDIT DOCTOR';
        $data['doctor']=$doctor;
        return view('Admin.Doctor.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        $request->validate([
            'doctor_name'       =>'required',
            'doctor_degree'     =>'required',
            'doctor_position'   =>'required',
            'doctor_email'      =>'required|email|unique:doctors,doctor_email,'.$doctor->id,
            'doctor_phone'      =>'required',
            'doctor_password'   =>'confirmed',
        ]);

        $doctor_r = $request->except('_token','_method','doctor_password');
        if($request->has('doctor_password'))
        {
        $doctor['doctor_password'] = bcrypt($request->doctor_password);
        }

        if($request->hasFile('doctor_image')) {
            $file = $request->file('doctor_image');
            $file->move('images/doctor/', $file->getClientOriginalName());
            File::delete($doctor->doctor_image);
            $doctor_r['doctor_image'] = 'images/doctor/'.$file->getClientOriginalName();
        }

        $doctor->update($doctor_r);
        session()->flash('message','Doctor information updated successfully');
        return redirect()->route('doctor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        session()->flash('message','Doctor Trashed successfully');
        return redirect()->route('doctor.index');
    }
    public function restore($id)
    {
        $doctor = Doctor::onlyTrashed()->findOrFail($id);
        $doctor->restore();
        session()->flash('message','Doctor Restore successfully');
        return redirect()->route('doctor.index');
    }
    public function delete($id)
    {
        $doctor = Doctor::onlyTrashed()->findOrFail($id);
        File::delete($registration->staff_image);
        $doctor->forceDelete();
        session()->flash('message','Doctor deleted successfully');
        return redirect()->route('doctor.index');
    }
}
