<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
    // Menggunakan fillable dan memasukkan nama array yang bisa dimasukkan nilainya, nama array berdasarkan nama kolom tabel yang diinginkan
    protected $fillable = ['npm','nama','jurusan'];
    // Menggunakan protected agar tabel bisa di akses dan mendefinisikan tabel mana yang akan di isi
    protected $table = 'mahasiswa';
    // Karena tidak menggunakan timestamps maka timestamps di berikan nilai false
    public $timestamps = false;
}
