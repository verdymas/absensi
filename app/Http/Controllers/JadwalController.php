<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    public function data()
    {
       $jadwal = Jadwal::all();
        
        return view('jadwal.jadwal', compact('jadwal'));
    }

    public function tambah()
    {
        return view('jadwal.tambah');
    }
    public function addProcess(Request $request)
    {
        Jadwal::create([
            'id_jadwal' => $request->jd,
            'id_semester' => $request->smt,
            'id_kelas' => $request->kls,
            'kode_matkul' => $request->kodemk,
            'hari' => $request->hari,
            'jam_mulai' => $request->jm,
            'jam_selesai' => $request->js,
        ]);
        return redirect('/jadwal')->with('status', 'Jadwal berhasil di tambah!');
    }

    public function datadua()
    {
       $jadwal = Jadwal::all();
        
        return view('jadwal2.index', compact('jadwal'));

    }
}
