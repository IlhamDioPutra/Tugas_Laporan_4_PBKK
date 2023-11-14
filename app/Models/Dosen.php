<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $fillable = ['nip','nama'];
    // Menggunakan protected agar tabel bisa di akses dan mendefinisikan tabel mana yang akan di isi
    protected $table = 'dosen';
    // Karena tidak menggunakan timestamps maka timestamps di berikan nilai false
    public $timestamps = false;
    public function mahasiswas()
    {
        return $this->hasMany(mahasiswa::class,'nip_dosen', 'nip');    
    }
}
