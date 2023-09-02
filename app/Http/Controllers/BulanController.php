<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\Pulang;

class BulanController extends Controller
{

    public function coba2(){ 
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
}
