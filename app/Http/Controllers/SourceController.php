<?php

namespace App\Http\Controllers;

use App\Source;
use Illuminate\Http\Request;

class SourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title']='SOURCE LIST';
        $data['sources']=Source::withTrashed()->orderBy('id','desc')->get();
        $data['serial']=1;
        return view('Admin.Source.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']='NEW Source';
        return view('Admin.Source.create',$data);
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
            'status'=>'required',
        ]);

        $source = $request->except('_token');
        $source['created_by'] = 1;
        Source::create($source);
        session()->flash('message','Source created successfully');
        return redirect()->route('source.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function show(Source $source)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function edit(Source $source)
    {
        $data['title']='EDIT SOURCE';
        $data['source']=$source;
        return view('Admin.Source.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Source $source)
    {
        $request->validate([
            'status'         =>'required',
        ]);

        $source_r = $request->except('_token', '_method');

        $source->update($source_r);
        $source_r['updated_by'] = 1;
        session()->flash('message','Source information updated successfully');
        return redirect()->route('source.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function destroy(Source $source)

    {
        $source->delete();
        session()->flash('message','Source Trashed successfully');
        return redirect()->route('source.index');
    }
        public function restore($id)
        {
        $source = Source::onlyTrashed()->findOrFail($id);
        $source->restore();
        session()->flash('message','Source Restore successfully');
        return redirect()->route('source.index');
    }
        public function delete($id)
    {
        $source = Source::onlyTrashed()->findOrFail($id);
        $source->forceDelete();
        session()->flash('message','Source deleted successfully');
        return redirect()->route('source.index');
    }

}
