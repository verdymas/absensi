<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;
use App\Models\User;

class MahasiswaController extends Controller
{
    public function data()
    {
       $mahasiswa = Mahasiswa::all();
        
        return view('mahasiswa.mahasiswa', compact('mahasiswa'));

    }
    public function tambah()
    {
        return view('mahasiswa.tambah');
    }
    public function addProcess(Request $request)
    {
        //insert ke tabel user   
        // $user = new \App\Models\User;
        // $user->level = 'mahasiswa';
        // $user->name = $request->namamhs;
        // $user->email = $request->email;
        // $user->password = Hash::make($request->password);
        // $user->remember_token = \Str::random(60);
        // $user->save(); 

        // $request->request->add(['user_id' => $user->id ]);
        Mahasiswa::create([
            'mahasiswa_id' => User::all()->last()->id,
            'nim' => $request->nim,
            'nama_mhs' => $request->namamhs,
            'prodi' => $request->prodi,
            'semester' => $request->semester,
            'ttl' => $request->ttl,
            'jenis_kelamin' => $request->jenkel,
            'alamat_lengkap' => $request->alamat,
            'agama' => $request->agama
        ]);
        User::create([
            'username' => $request->nim,
            'password' => \Hash::make($request->nim),
            'level' => "mahasiswa"
        ]);
        return redirect('/mahasiswa')->with('status', 'Mahasiswa berhasil di tambah!');
    }    
    public function edit($id){
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit',compact('mahasiswa'));
    }

    public function detail($id){
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.detail',compact('mahasiswa'));
    }

    public function update(Mahasiswa $mahasiswa, Request $request){
        Mahasiswa::where('id', $mahasiswa->id)->update([
            'nim' => $request->nim,
            'nama_mhs' => $request->namamhs,
            'prodi' => $request->prodi,
            'semester' => $request->semester,
            'ttl' => $request->ttl,
            'jenis_kelamin' => $request->jenkel,
            'alamat_lengkap' => $request->alamat,
            'agama' => $request->agama,
            'updated_at' =>  date('Y-m-d')
            ]);
            return redirect('mahasiswa')->with('status', 'Data Mahasiswa Berhasil Diubah!'); 
    }

    public function delete($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete($mahasiswa);
        return redirect('mahasiswa')->with('status', 'Data Mahasiswa Berhasil Dihapus!');
  }
}

