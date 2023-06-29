<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pulang extends Model
{
    use HasFactory;
    protected $table = 'pulang';
    protected $fillable = ['waktu','id_absen'];
 
    public $timestamp = 'false'; 

    public function Data()
    {
        return $this->belongsTo(Data::class);
    }   
}
