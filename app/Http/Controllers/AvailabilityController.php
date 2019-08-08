<?php

namespace App\Http\Controllers;

use App\availability;
use Illuminate\Http\Request;

class AvailabilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']='AVAILABILITY LIST';
        $data['availabilities']=Availability::withTrashed()->orderBy('id','desc')->get();
        $data['serial']=1;
        return view('Admin.Availability.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']='NEW AVAILABILITY';
        return view('Admin.Availability.create',$data);
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
            'availability_of_doctors'=>'required',
        ]);

        $availability = $request->except('_token');
        $availability['created_by'] = 1;
        Availability::create($availability);
        session()->flash('message','Availability created successfully');
        return redirect()->route('availability.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\availability  $availability
     * @return \Illuminate\Http\Response
     */
    public function show(availability $availability)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\availability  $availability
     * @return \Illuminate\Http\Response
     */
    public function edit(availability $availability)
    {
        $data['title']='EDIT AVAILABILITY';
        $data['availability']=$availability;
        return view('Admin.Availability.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\availability  $availability
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, availability $availability)
    {
        $request->validate([
            'availability_of_doctors'=>'required',
        ]);

        $availability_r = $request->except('_token', '_method');

        $availability->update($availability_r);
        $availability_r['updated_by'] = 1;
        session()->flash('message','Availability updated successfully');
        return redirect()->route('availability.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\availability  $availability
     * @return \Illuminate\Http\Response
     */
    public function destroy(availability $availability)
    {
        $availability->delete();
        session()->flash('message','Availability Trashed successfully');
        return redirect()->route('availability.index');
    }
    public function restore($id)
    {
        $availability = Availability::onlyTrashed()->findOrFail($id);
        $availability->restore();
        session()->flash('message','Availability Restore successfully');
        return redirect()->route('availability.index');
    }
    public function delete($id)
    {
        $availability = Availability::onlyTrashed()->findOrFail($id);
        $availability->forceDelete();
        session()->flash('message','Availability deleted successfully');
        return redirect()->route('availability.index');
    }
}
