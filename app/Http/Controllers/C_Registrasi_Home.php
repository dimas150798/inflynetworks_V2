<?php

namespace App\Http\Controllers;

use App\Models\M_Kecamatan;
use App\Models\M_Kelurahan;
use App\Models\M_Kota;
use App\Models\M_Registrasi_Pelanggan;
use Illuminate\Http\Request;

class C_Registrasi_Home extends Controller
{
    public function Home_10()
    {
        $title  = 'Registrasi - Home 10';
        $paket  = 'Paket 10 Mbps - Rp. 150.000';

        $kota       = M_Kota::all();
        $kecamatan   = M_Kecamatan::all();

        return view('registrasi/V_Home_10', compact('title', 'paket', 'kota', 'kecamatan'));
    }

    public function Home_20()
    {
        $title = 'Registrasi - Home 20';
        $paket = 'Paket 20 Mbps - Rp. 200. 000';

        $kota       = M_Kota::all();
        $kecamatan   = M_Kecamatan::all();

        return view('registrasi/V_Home_20', compact('title', 'paket', 'kota', 'kecamatan'));
    }

    public function Home_30()
    {
        $title = 'Registrasi - Home 30';
        $paket = 'Paket 30 Mbps - Rp. 250. 000';

        $kota       = M_Kota::all();
        $kecamatan   = M_Kecamatan::all();

        return view('registrasi/V_Home_30', compact('title', 'paket', 'kota', 'kecamatan'));
    }

    public function Home_50()
    {
        $title = 'Registrasi - Home 50';
        $paket = 'Paket 50 Mbps - Rp. 320. 000';

        $kota       = M_Kota::all();
        $kecamatan   = M_Kecamatan::all();

        return view('registrasi/V_Home_50', compact('title', 'paket', 'kota', 'kecamatan'));
    }

    public function Home_100()
    {
        $title = 'Registrasi - Home 100';
        $paket = 'Paket 100 Mbps - Rp. 499. 000';

        $kota       = M_Kota::all();
        $kecamatan   = M_Kecamatan::all();

        return view('registrasi/V_Home_100', compact('title', 'paket', 'kota', 'kecamatan'));
    }

    public function getKecamatan($id)
    {
        $kecamatan = M_Kecamatan::where('id_kota', $id)->get();
        return response()->json($kecamatan);
    }

    public function getKelurahan($id)
    {
        $kelurahan = M_Kelurahan::where('id_kecamatan', $id)->get();
        return response()->json($kelurahan);
    }

    function Simpan_Registrasi(Request $request)
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