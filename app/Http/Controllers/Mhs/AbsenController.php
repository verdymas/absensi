<?php

namespace App\Http\Controllers\Mhs;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function index()
    {
        $mhs = DB::table('mahasiswa AS m')
            ->join('kelas AS k', 'm.id_kelas', 'k.id_kelas')
            ->join('semester AS s', 's.id_semester', 'k.id_semester')
            ->select('m.*', 'k.*', 's.semester AS smt')
            ->where('user_id', auth()->user()->mahasiswa_id)
            ->first();

        $sdh = DB::table('absen AS a')
            ->where(['nim' => $mhs->nim, 'tanggal' => date('Y-m-d')])
            ->pluck('id_jadwal');

        $absen = DB::table('mahasiswa AS m')
            ->join('kelas AS k', 'm.id_kelas', 'k.id_kelas')
            ->join('jadwal AS j', 'j.id_kelas', 'k.id_kelas')
            ->join('matkul AS mt', 'mt.kode_matkul', 'j.kode_matkul')
            ->where([
                'user_id' => auth()->user()->mahasiswa_id,
                ['jam_mulai', '<', date('H:i:s')],
                ['jam_selesai', '>', date('H:i:s')],
            ])
            ->whereRaw('DAYOFWEEK(CURDATE()) = int_hari')
            ->whereNotIn('j.id_jadwal', $sdh)
            ->first();

        // return response()->json($absen);

        return view('mhs.absen.index')->with(['absen' => $absen, 'mhs' => $mhs]);
    }

    public function hadir(Request $request)
    {
        DB::table('absen')->insert([
            'id_jadwal' => $request->id_jadwal,
            'nim' => $request->nim,
            'nama_lengkap' => $request->nama_mhs,
            'prodi' => $request->prodi,
            'tanggal' => date('Y-m-d'),
            'matkul' => $request->matkul,
            'keterangan' => 'Hadir',
        ]);

        return redirect()->route('absensi')->with('status', 'Absen Berhasil');
    }
}
