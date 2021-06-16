<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Matkul;

class MatkulController extends Controller
{
    public function data()
    {
        $matkul = DB::table('matkul')->get();
        

        return view('matkul.matkul', ['matkul' => $matkul]);
    }
    public function tambah()
    {
        return view('matkul.tambah');
    }
    public function addProcess(Request $request)
    {
        Matkul::create([
            'kode_matkul' => $request->kodemk,
            'nama_matkul' => $request->namamk,
            'sks' => $request->sks
        ]);
        return redirect('/matkul')->with('status', 'Mata Kuliah berhasil di tambah!');
    }    
    public function edit($kodemk){
        $matkul = Matkul::find($kodemk);
        return view('matkul.edit',compact('matkul'));
    }

    public function update(Matkul $matkul, Request $request){
        Matkul::where('kode_matkul', $matkul->kodemk)->update([
            'kode_matkul' => $request->kodemk,
            'nama_matkul' => $request->namamk,
            'sks' => $request->sks,
            'updated_at' =>  date('Y-m-d')
            ]);
            return redirect('matkul')->with('status', 'Data Mata Kuliah Berhasil Diubah!'); 
    }

    public function delete($kodemk){
        $matkul = Matkul::find($kodemk);
        $matkul->delete($matkul);
        return redirect('matkul')->with('status', 'Data Mata Kuliah Berhasil Dihapus!');
  }
  public function datadua()
  {
      $matkul = DB::table('matkul')->get();

      return view('matkul2.index', ['matkul' => $matkul]);
  }

}