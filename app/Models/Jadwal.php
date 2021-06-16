<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';
    protected $fillable = ['id_jadwal','id_semester','id_kelas','kode_matkul','hari','jam_mulai','jam_selesai'];
    protected $primaryKey = 'id_jadwal';
}
