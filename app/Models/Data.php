<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $table = 'masuk';
    protected $fillable = ['id','nama','waktu','tanggal','foto','id_absen'];  

    public $timestamp = 'false';    

    public function Pulang()
    {
        return $this->hasOne(Pulang::class);
    }
}
