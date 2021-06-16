<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Viewabsen;

class ViewabsenController extends Controller
{
    public function data()
    {
        $absensi = DB::table('absen')->get();
                

        return view('viewabsen.index', ['absensi' => $absensi]);
    }


}


