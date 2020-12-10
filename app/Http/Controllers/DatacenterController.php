<?php

namespace App\Http\Controllers;

use App\Datacenter;
use Illuminate\Http\Request;


class DatacenterController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request){
        $data = new Datacenter;
        $data->temperature = $request->temperature;
        $data->humidity=$request->humidity;
        $data->save();
        return  "Data Berhasil Masuk";
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
     * @param  \App\Datacenter  $datacenter
     * @return \Illuminate\Http\Response
     */
    public function show(Datacenter $datacenter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Datacenter  $datacenter
     * @return \Illuminate\Http\Response
     */
    public function edit(Datacenter $datacenter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Datacenter  $datacenter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datacenter $datacenter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Datacenter  $datacenter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datacenter $datacenter)
    {
        //
    }
}
