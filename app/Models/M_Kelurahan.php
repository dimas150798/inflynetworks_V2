<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Kelurahan extends Model
{
    use HasFactory;

    protected $table = 'data_kelurahan';
    protected $primaryKey = 'id_kelurahan';
    public $timestamps = false;

    protected $fillable = [
        'id_kelurahan',
        'nama_kelurahan',
        'id_kecamatan'
    ];
}
