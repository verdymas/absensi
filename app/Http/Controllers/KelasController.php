<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kelas;
use App\Models\Semester;

class KelasController extends Controller
{
    public function data()
    {
        $kelas = DB::table('kelas')->get();
        $semester= DB::table('semester')->get();
        $ganjil = DB::table('kelas')
                ->where('id_semester', 1)        
                ->get();
        $genap = DB::table('kelas')
                ->where('id_semester', 2)        
                ->get();
        return view('kelas.kelas',compact('kelas', 'semester', 'ganjil', 'genap'));

        
    }


}
