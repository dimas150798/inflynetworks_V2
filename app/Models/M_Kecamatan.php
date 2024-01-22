<?php

namespace App\Models;

use App\Http\Controllers\C_Kota;
use App\Http\Controllers\C_KotaDropdown;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Kecamatan extends Model
{
    use HasFactory;

    protected $table = 'data_kecamatan';
    protected $primaryKey = 'id_kecamatan';
    public $timestamps = false;

    protected $fillable = [
        'id_kecamatan',
        'nama_kecamatan',
        'id_kota'
    ];
}
