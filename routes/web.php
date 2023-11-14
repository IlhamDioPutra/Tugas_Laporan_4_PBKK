<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\mahasiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { //ini adalah routing default ketika kita sudah terhubung dengan 
    return view('welcome');   //server laravel dan klik link maka ini akan tertampil welcome.blade.php
});



// Route::get('/dataSiswa', function () { //ini adalah routing deault url kita tambahkan/dataSiswa pada
//     return view('dataSiswa');          //server laravel maka akan dialihkan ke halaman dataSiswa.blade.php dan ditampilkan halamannya
// });

// Route::get('/dataGuru', function () { //ini adalah routing deault url kita tambahkan/dataGuru pada
//     return view('dataGuru');          //server laravel maka akan dialihkan ke halaman dataGuru.blade.php dan ditampilkan halamannya
// });

Route::resource('mahasiswa',mahasiswaController::class);
// Route::resource('dataGuru',DosenController::class);
Route::get('/dataGuru', [DosenController::class,'index']);





// Route::get('/books', [BookController::class, "index"]);
// Route::get('/books/store', [BookController::class, "store"]);