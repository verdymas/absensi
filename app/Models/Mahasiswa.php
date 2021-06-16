<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['nim','nama_mhs','prodi','semester','ttl','jenis_kelamin','alamat_lengkap','agama','user_id'];
    protected $primaryKey = 'id';


    public function user()
        {
        return $this->hasMany(User::class);
        }

    }