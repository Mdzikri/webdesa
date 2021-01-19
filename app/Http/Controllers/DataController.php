<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function view()
    {
        $data=Data::all();
        return view('data.v_data',compact('data'));
        
    }




    public function index()
    {
        $data=Data::all();
        return view('data.data',compact('data'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('data.c_data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Data::create([
            'nama'=>$request->nama,
            'nik'=>$request->nik,
            'alamat'=>$request->alamat,
            'dusun'=>$request->dusun,
        ]);

        return redirect('/v_data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $update=Data::findorfail($id);
        return view('data.u_data',compact('update'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update=Data::findorfail($id);
        $update->update($request->all());
        return redirect('/v_data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $maha=Data::findorfail($id);
        $maha->delete();
        return back();
    }
}
