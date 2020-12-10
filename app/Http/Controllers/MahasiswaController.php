<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    //
    public function index(){
        return Mahasiswa::all();
    }

    public function create(request $request){
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat=$request->alamat;
        $mahasiswa->save();
        return  "Data Berhasil Masuk";
    }

    public function update(request $request, $id){
        $nama = $request->nama;
        $alamat = $request->alamat;

        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nama =$nama;
        $mahasiswa->alamat =$alamat;
        $mahasiswa->save();
        return "Data Berhasil Update";
             
    }

    public function delete($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return "Data Berhasil di Hapus";
    }
}
