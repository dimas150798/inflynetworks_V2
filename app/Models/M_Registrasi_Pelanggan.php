<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Registrasi_Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'data_user';
    protected $primaryKey = 'id_user';
    public $timestamps = false;

    protected $fillable = [
        'id_user',
        'pembelian_paket',
        'nama_user',
        'nik_user',
        'alamat_user',
        'id_kota',
        'id_kelurahan',
        'id_kecamatan',
        'tlp_user',
        'sumber_info',
        'nama_informan',
        'status',
        'tanggal'
    ];
}
