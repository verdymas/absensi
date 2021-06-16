<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pengumuman;

class PengumumanController extends Controller
{
    public function data()
    {
        $pengumuman = DB::table('pengumuman')->get();
        

        return view('pengumuman.pengumuman', ['pengumuman' => $pengumuman]);
    }
    public function tambah()
    {
        return view('pengumuman.tambah');
    }
    public function addProcess(Request $request)
    {
        Pengumuman::create([
            'id' => $request->id,
            'judul' => $request->judul,
            'pengumuman' => $request->pengumuman
        ]);
        return redirect('/pengumuman')->with('status', 'Pengumuman berhasil di tambah!');
    }    
    public function edit($id){
        $pengumuman = Pengumuman::find($id);
        return view('pengumuman.edit',compact('pengumuman'));
    }

    public function update(Pengumuman $pengumuman, Request $request){
        Pengumuman::where('id', $pengumuman->id)->update([
            'id' => $request->id,
            'judul' => $request->judul,
            'pengumuman' => $request->pengumuman,
            'updated_at' =>  date('Y-m-d')
            ]);
            return redirect('pengumuman')->with('status', 'Data Pengumuman Berhasil Diubah!'); 
    }

    public function delete($id){
        $pengumuman = Pengumuman::find($id);
        $pengumuman->delete($pengumuman);
        return redirect('pengumuman')->with('status', 'Data Pengumuman Berhasil Dihapus!');
  }
  public function datadua()
    {
        $pengumuman = DB::table('pengumuman')->get();
        

        return view('pengumuman2.index', ['pengumuman' => $pengumuman]);
    }
}
