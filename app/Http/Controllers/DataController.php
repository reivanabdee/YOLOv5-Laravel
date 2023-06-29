<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Data;
// use App\Models\Pulang;

class DataController extends Controller
{
    public function index(){ 
        $urut = 1;
        $data = Data::all();
        // dd($data);
        return view('home', ['namalist' => $data, 'no_urut' => $urut]);
    }
    public function kehadiran(){ 
        $urut = 1;
        $data = Data::all();
        // dd($data);
        return view('kehadiran', ['namalist' => $data, 'no_urut' => $urut]);
    }
    public function coba(){ 
        $urut = 1;
        $dt = Data::all();
        return view('kehadiran',compact('dt'));
    }
    // public function kehadiran(){
    //     return view('kehadiran');
    // }

    }

