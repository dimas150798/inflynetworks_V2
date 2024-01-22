<?php

namespace App\Http\Controllers;

use App\Models\M_Kecamatan;
use App\Models\M_Kelurahan;
use App\Models\M_Kota;
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
}
