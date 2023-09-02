<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\Pulang;

class DataController extends Controller
{
    public function index(){ 
        $urut = 1;
        // $dt = Pulang::all();
        // $dt = Data::with('pulang')->where('waktu')->orderBy('id_absen');
        // return view('kehadiran',compact('dt'));
        $dt = Data::select(
            "masuk.*",  
            "pulang.pulang as pulang_waktu"
        )
        ->leftjoin("pulang", "pulang.id_absen", "=", "masuk.id_absen")
        ->get();
        return view('home',compact('dt'));}
    public function kehadiran(){ 
        $urut = 1;
        $data = Data::all();
        // dd($data);
        return view('kehadiran', ['namalist' => $data, 'no_urut' => $urut]);
    }
    public function coba(){ 
        $urut = 1;
        // $dt = Pulang::all();
        // $dt = Data::with('pulang')->where('waktu')->orderBy('id_absen');
        // return view('kehadiran',compact('dt'));
        $dt = Data::select(
            "masuk.*",  
            "pulang.pulang as pulang_waktu"
        )
        ->leftjoin("pulang", "pulang.id_absen", "=", "masuk.id_absen")
        ->get();
        return view('kehadiran',compact('dt'));
        
        
    }
    public function cetak(){ 
        $urut = 1;
        // $dt = Pulang::all();
        // $dt = Data::with('pulang')->where('waktu')->orderBy('id_absen');
        // return view('kehadiran',compact('dt'));
        $dt = Data::select(
            "masuk.*",  
            "pulang.pulang as pulang_waktu"
        )
        ->leftjoin("pulang", "pulang.id_absen", "=", "masuk.id_absen")
        ->get();
        return view('print',compact('dt'));
        
        
    }
    // public function kehadiran(){
    //     return view('kehadiran');
    // }

}

