<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\User;


class ProfilController extends Controller
{
    
    public function profil($id)
    {
    $mahasiswa = Mahasiswa::all();
     return view('profil.profilmhs',compact('mahasiswa'));
    }

    
    public function update_profil_mahasiswa()
    {
         $profil = Auth::user();
         $profil->update([
            'nama' => request('nama'),
            'email' => request('email'),
            'level' => request('level'),
  
        ]);

      Alert::success('Sukses','Data Berhasil Diedit');
         return redirect()->to('/halaman_admin_profil-admin');

    }
    

    public function update_profil_admin()
    {
         $profil = Auth::user();
         $profil->update([
            'name' => request('name'),
            'email' => request('email'),
            'level' => request('level'),
  
        ]);

      Alert::success('Sukses','Data Berhasil Diedit');
         return redirect()->to('/halaman_profil_admin');

    }

    

    public function update_password_admin(Request $request)
    {
         $profil = Auth::user();
         $profil->update([
         'password' => \Hash::make($request->password),

        ]);

          Alert::success('Sukses','Data Berhasil Diedit');
         return redirect()->to('/halaman_profil_admin');

        }
    
    }
