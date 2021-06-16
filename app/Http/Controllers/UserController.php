<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function data()
    {
       $admin = User::where('level','admin')->get();
        
        return view('admin.index', compact('admin'));

    }
    public function tambah()
    {
        return view('admin.tambah');
    }
    public function addProcess(Request $request)
    {
        User::create([
            'level' => 'admin',
            'name' => $request->nm,
            'username' => $request->username,
            'email' => $request->email,
            'password' => \Hash::make($request->password)
        ]);
        return redirect('/halaman_admin')->with('status', 'Admin berhasil di tambah!');
    }    
    public function edit($id){
        $admin = User::find($id);
        return view('admin.edit',compact('admin'));
    }

    public function update($id, Request $request){
        User::where('id', $id)->update([
            'name' => $request->nm,
            'username' => $request->username,
            'email' => $request->email,
            'password' => \Hash::make($request->password),
            'updated_at' =>  date('Y-m-d')
            ]);
            return redirect('/halaman_admin')->with('status', 'Data Berhasil Diubah!'); 
    }

    public function delete($id){
        $admin = User::find($id);
        $admin->delete($admin);
        return redirect('/halaman_admin')->with('status', 'Data Admin Berhasil Dihapus!');
  }
  
}
