<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;
    // field apa saja yang bisa di isi
    public $fillable = ['nama_ruangan', 'kapasitas_ruangan', 'gedung', 'lokasi'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;


}
