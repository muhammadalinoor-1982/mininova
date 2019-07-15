<?php

namespace App\Http\Controllers;

use App\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']='STAFF LIST';
        $data['registrations']=Registration::orderBy('id','desc')->get();
        $data['serial']=1;
        return view('Admin.Authentication.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']='CREATE NEW STAFF';
        return view('Admin.Authentication.create',$data);
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
            'staff_name'        =>'required',
            'staff_email'       =>'required|email',
            'staff_phone'       =>'required',
            'staff_gender'      =>'required',
            'staff_password'    =>'required',
            'staff_status'      =>'required',
        ]);

        $registration = $request->except('_token');

        if($request->hasFile('staff_image')) {
            $file = $request->file('staff_image');
            $file->move('images/staff/', $file->getClientOriginalName());
            $registration['staff_image'] = 'images/staff/'.$file->getClientOriginalName();
        }

        Registration::create($registration);
        session()->flash('message','Staff created successfully');
        return redirect()->route('registration.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration)
    {
        $data['title']='EDIT STAFF INFORMATION';
        $data['registration']=$registration;
        return view('Admin.Authentication.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registration $registration)
    {
        $request->validate([
            'staff_name'        =>'required',
            'staff_email'       =>'required|email',
            'staff_phone'       =>'required',
            'staff_gender'      =>'required',
            'staff_password'    =>'required',
            'staff_status'      =>'required',
        ]);

        $registration_r = $request->except('_token');

        if($request->hasFile('staff_image')) {
            $file = $request->file('staff_image');
            $file->move('images/staff/', $file->getClientOriginalName());
            File::delete($registration->staff_image);
            $registration_r['staff_image'] = 'images/staff/'.$file->getClientOriginalName();
        }

        $registration->update($registration_r);
        session()->flash('message','Staff information updated successfully');
        return redirect()->route('registration.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration)
    {
        File::delete($registration->staff_image);
        $registration->delete();
        session()->flash('message','Staff deleted successfully');
        return redirect()->route('registration.index');
    }

}
