<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ExsportAbsen extends Model
{
    protected $table = 'absen';

    public static function getAbsen()
    {
    	$record = DB::table('absen')->select('no','nim','nama_lengkap','prodi','tanggal','matkul','keterangan')->get()->toArray();
    	return $record;
    }
}

