<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = 'matkul';
    protected $fillable = ['kode_matkul','nama_matkul','sks'];
    protected $primaryKey = 'kode_matkul';
}
