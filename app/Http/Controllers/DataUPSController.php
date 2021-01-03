<?php

namespace App\Http\Controllers;

use App\dataUps;
use Illuminate\Http\Request;

class DataUPSController extends Controller
{
    //
    public function index()
    {
        $data =  dataUps::latest()->get();
        return view('dataups', ['data'=>$data]);
    }

    public function create(request $request){
        $data = new dataUps;
        $data->charge=$request->charge;
        $data->load=$request->load;
        $data->frekuensi=$request->frekuensi;
        $data->runtime=$request->runtime;
        $data->VinR=$request->teg_input_R;
        $data->VinS=$request->teg_input_S;
        $data->VinT=$request->teg_input_T;$data->IinR=$request->arus_input_R;$data->IinS=$request->arus_input_S;$data->IinT=$request->arus_input_T;$data->VoutR=$request->teg_out_R;$data->VoutS=$request->teg_out_S;$data->VoutT=$request->teg_out_T;
        $data->IoutR=$request->arus_out_R;$data->IoutS=$request->arus_out_S;$data->IoutT=$request->arus_out_T;
        $data->save();
        return "Data UPS Berhasil Masuk";

    }

}
