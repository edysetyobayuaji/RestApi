<?php

namespace App\Http\Controllers;

use App\Genset;
use Illuminate\Http\Request;

class GensetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    
    public function create(request $request)
    {
        //
        $data = new Genset;
        $data->v_battrey=$request->teg_battrey;
        $data->rpm=$request->rpm;
        $data->v_out=$request->teg_out;
        $data->save();
        return "Data Genset Berhasil Masuk";      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Genset  $genset
     * @return \Illuminate\Http\Response
     */
    public function show(Genset $genset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Genset  $genset
     * @return \Illuminate\Http\Response
     */
    public function edit(Genset $genset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Genset  $genset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Genset $genset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Genset  $genset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genset $genset)
    {
        //
    }
}
