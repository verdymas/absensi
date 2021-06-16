<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function index(){

        $id = auth()->user()->id;
        $server="localhost";
        $username="root";
        $pass="";
        $db="absensi";
        $koneksi =mysqli_connect($server,$username,$pass,$db) or die (mysqli_error());
        $id = auth()->user()->id;
        $absen =$koneksi->query("SELECT *
        FROM mahasiswa as m
        JOIN kelas as k ON m.id_kelas = k.id_kelas
        JOIN semester as s ON m.id_semester = s.id_semester WHERE user_id = $id ");

            while($pecah=$absen->fetch_assoc()){
                $kelas=$pecah['id_kelas'];
                 $semester= $pecah['semester'];
                 $jam= date('H:i:s'); 
            
                $absensi =$koneksi->query("SELECT *
                FROM jadwal as j
                JOIN kelas as k ON j.id_kelas = k.id_kelas
                JOIN semester as s ON j.id_semester = s.id_semester
                WHERE k.id_kelas = $kelas AND s.id_semester = $semester AND 
                j.jam_mulai LIKE $jam");
                
            }

        return view('absensi.index')->with('absen',$absen)->with('absensi',$absensi);
    }
}
