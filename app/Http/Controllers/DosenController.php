<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function data()
    {
       $dosen = Dosen::all();
        
        return view('dosen.index', compact('dosen'));

    }
    public function form_tambah()
    {
        return view('dosen.form_tambah');
    }
    public function addProcess(Request $request)
    {
        Dosen::create([
            'nidn' => $request->nidn,
            'nama_dosen' => $request->namadosen,
            'matkul' => $request->matkul,
            'ttl' => $request->ttl,
            'jenis_kelamin' => $request->jenkel,
            'alamat_lengkap' => $request->alamat,
            'agama' => $request->agama
        ]);
        return redirect('/dosen')->with('status', 'Dosen berhasil di tambah!');
    }


    public function edit($nidn){
        $dosen = Dosen::find($nidn);
        return view('dosen.edit',compact('dosen'));
    }

    public function update(Dosen $dosen, Request $request){
        Dosen::where('nidn', $dosen->nidn)->update([
                'nidn' => $request->nidn,
                'nama_dosen' => $request->namadosen,
                'matkul' => $request->matkul,
                'ttl' => $request->ttl, 
                'jenis_kelamin' => $request->jenkel,
                'alamat_lengkap' => $request->alamat,
                'agama' => $request->agama,
                'updated_at' =>  date('Y-m-d')
            ]);
            return redirect('dosen')->with('status', 'Data Dosen Berhasil Diubah!'); 
    }

    public function delete($nidn){
        $dosen = Dosen::find($nidn);
        $dosen->delete($dosen);
        return redirect('dosen')->with('status', 'Data Dosen Berhasil Dihapus!');
  }

  public function datadua()
    {
       $dosen = Dosen::all();
        
        return view('dosen2.index', compact('dosen'));

    }
}
