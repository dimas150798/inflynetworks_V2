<?php

namespace App\Models;

use App\Http\Controllers\C_Kecamatan;
use App\Http\Controllers\C_Kota;
use COM;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Kota extends Model
{
    use HasFactory;

    protected $table = 'data_kota';
    protected $primaryKey = 'id_kota';
    public $timestamps = false;

    protected $fillable = [
        'id_kota',
        'nama_kota'
    ];
}
