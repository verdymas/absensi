<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Rekap;
use PDF;
use Excel;
use App\Exports\AbsenExport;

class RekapController extends Controller
{
    public function data()
    {
        $absensi = DB::table('absen')->get();
                

        return view('rekap.rekap', ['absensi' => $absensi]);
    }

    public function DownloadPDF()
    {

        $absensi = DB::table('absen')->get();
    	$pdf = PDF::loadview('rekap.rekapPDF',compact('absensi'));
    	return $pdf->download('absensi.pdf');
    }

    public function exportIntoExcel()
    {
    	return Excel::download(new AbsenExport,'employeelist.xlsx');
    }

    public function exportIntoCSV()
    {
    	return Excel::download(new AbsenExport,'employeelist.csv');
    }


}