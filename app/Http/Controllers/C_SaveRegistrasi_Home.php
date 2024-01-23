<?php

namespace App\Http\Controllers;

use App\Models\M_Registrasi_Pelanggan;
use Illuminate\Http\Request;

class C_SaveRegistrasi_Home extends Controller
{
    function SaveHome_10(Request $request)
    {
        // Validasi data input
        $request->validate(
            [
                'pembelian_paket'       => 'required',
                'nama_user'             => 'required',
                'nik_user'              => 'required',
                'tlp_user'              => 'required',
                'alamat_user'           => 'required',
                'kota'                  => 'required',
                'kecamatan'             => 'required',
                'kelurahan'             => 'required'
            ],
            [
                'pembelian_paket.required'  => htmlspecialchars('Pembelian Wajib Di isi !', ENT_QUOTES, 'UTF-8'),
                'nama_user.required'        => htmlspecialchars('Nama Lengkap Wajib Di isi !', ENT_QUOTES, 'UTF-8'),
                'nik_user.required'         => htmlspecialchars('NIK Wajib Di isi !', ENT_QUOTES, 'UTF-8'),
                'tlp_user.required'         => htmlspecialchars('Telepon Wajib Di isi !', ENT_QUOTES, 'UTF-8'),
                'alamat_user.required'      => htmlspecialchars('Alamat Wajib Di isi !', ENT_QUOTES, 'UTF-8'),
                'kota.required'             => htmlspecialchars('Kota / Kabupaten Wajib Di isi !', ENT_QUOTES, 'UTF-8'),
                'kecamatan.required'        => htmlspecialchars('Kecamatan Wajib Di isi !', ENT_QUOTES, 'UTF-8'),
                'kelurahan.required'        => htmlspecialchars('Kelurahan Wajib Di isi !', ENT_QUOTES, 'UTF-8')
            ]
        );

        // Data Registrasi
        M_Registrasi_Pelanggan::create([
            'pembelian_paket'   => $request->pembelian_paket,
            'nama_user'         => $request->nama_user,
            'nik_user'          => $request->nik_user,
            'alamat_user'       => $request->alamat_user,
            'id_kota'           => $request->kota,
            'id_kelurahan'      => $request->kelurahan,
            'id_kecamatan'      => $request->kecamatan,
            'tlp_user'          => $request->tlp_user,
            'sumber_info'       => $request->sumber_info,
            'nama_informan'     => $request->nama_informan,
            'status'            => "Berlangganan Baru"
        ]);

        return redirect()->route('dashboard.home')->with('alert-success', 'Registrasi Berhasil, Tunggu Konfirmasi Dari Admin');
    }
}
