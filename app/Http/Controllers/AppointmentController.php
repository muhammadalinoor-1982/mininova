<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']='APPOINTMENT LIST';
        $data['appointments']=Appointment::withTrashed()->orderBy('id','desc')->get();
        $data['serial']=1;
        return view('Admin.Appointment.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']='NEW APPOINTMENT';
        return view('Admin.Appointment.create',$data);
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
            'appointment_name'=>'required',
            'status'=>'required',
        ]);

        $appointment = $request->except('_token');
        $appointment['created_by'] = 1;
        Appointment::create($appointment);
        session()->flash('message','Appointment created successfully');
        return redirect()->route('appointment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        $data['title']='EDIT APPOINTMENT';
        $data['appointment']=$appointment;
        return view('Admin.Appointment.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        $request->validate([
            'appointment_name'=>'required',
            'status'         =>'required',
        ]);

        $appointment_r = $request->except('_token', '_method');

        $appointment->update($appointment_r);
        $appointment_r['updated_by'] = 1;
        session()->flash('message','Appointment updated successfully');
        return redirect()->route('appointment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        session()->flash('message','Appointment Trashed successfully');
        return redirect()->route('appointment.index');
    }
    public function restore($id)
    {
        $appointment = Appointment::onlyTrashed()->findOrFail($id);
        $appointment->restore();
        session()->flash('message','Appointment Restore successfully');
        return redirect()->route('appointment.index');
    }
    public function delete($id)
    {
        $appointment = Appointment::onlyTrashed()->findOrFail($id);
        $appointment->forceDelete();
        session()->flash('message','Appointment deleted successfully');
        return redirect()->route('appointment.index');
    }
}
