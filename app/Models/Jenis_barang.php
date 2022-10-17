<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_barang extends Model
{
    use HasFactory;

    public $fillable = ['nama_barang', 'merk', 'ketahanan', 'lama_pemakaian', 'jumlah', 'tempat'];

    public $timestamps = true;

    public function barang()
    {
        return $this->hasOne(Barang::class, 'id_jenis_barang');
    }
}
