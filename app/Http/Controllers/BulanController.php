<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bulan;
// use App\Models\Data;
class BulanController extends Controller
{
        public function bln(){ 
        $test = '';
        $bulan = bulan::all();
        // dd($data);
        return view('kehadiran', ['bulan' => $bulan, 'tes' => $test]);
    }
}
