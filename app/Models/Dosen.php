<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
protected $table = 'dosen';
protected $fillable = ['nama_dosen','matkul','ttl','jenis_kelamin','alamat_lengkap','agama'];
protected $primaryKey = 'nidn';
}
