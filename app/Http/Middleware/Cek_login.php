<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Cek_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$levels)
    {
    //     if (!Auth::check()) {
    //         return redirect('/login');
    //     }

    //     $user = Auth::user();

    //     if ($user->level == $role) {
    //         return $next($request);
    //         # code...
    //     }
    //     return redirect('/login')->with('error',"Anda tidak punya akses");
    //     //return $next($request);
    // }


        if(in_array($request->user()->level, $levels)){
            return $next($request);
        }

        // if(Auth::guard('usersiswa')->check()){
        //     return ('/halaman-siswa');
        // }

           return redirect('/login')->with('error',"Anda tidak punya akses");
}
}