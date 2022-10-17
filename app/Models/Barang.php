<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    public $fillable = ['id_jenis_barang'];

    public $timestamps = true;

    public function jenis_barang()
    {
        return $this->belongsTo(Jenis_barang::class, 'id_jenis_barang');
    }


}
