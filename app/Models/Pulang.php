<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pulang extends Model
{
    use HasFactory;
    protected $table = 'pulang';
    protected $fillable = ['waktu','id_absen'];
    protected $primaryKey = 'id_absen';
    public $timestamp = 'false'; 
    

    public function data(): BelongsTo
    {
        return $this->belongsTo(Data::class);
    }   
}
