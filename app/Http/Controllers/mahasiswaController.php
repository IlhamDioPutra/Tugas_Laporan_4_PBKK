<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // Ini adalah kondisi tabel pencarian dimana jika ada katakunci yang dicari maka akan dilakukan kondisi if dan jika tidak maka else.
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 2;
        if(!empty($katakunci)) { //Jika ada isi katakunci maka akan ditampilkan data yang mirip dengan data yang dicari baik dari sisi npm nama maupun jurusan.
            $data = mahasiswa::where('npm','like',"%$katakunci%")
                ->orWhere('nama','like',"%$katakunci%")
                ->orWhere('jurusan','like',"%$katakunci%")
                ->paginate($jumlahbaris);
        }
        else {
            $data = mahasiswa::with('dosen')->orderBy('npm')->paginate($jumlahbaris); //Jika tidak ada pencarian maka menampilkan data asli saja ->orderBy('npm')->paginate($jumlahbaris)
        }
        return view('mahasiswa.index', compact('data'));

        //  "dosen" => dosen::with('mahasiswa')->get()
         //view yang ditampilkan adalah di url mahasiswa/index.template
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Dosen::all();
        return view('mahasiswa.create',[
            'datas' => $data
        ]);
        //menampilkan halaman create untuk mahasiswa
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Disini adalah kondisi di dalam mengisi data yaitu :
        Session::flash('npm',$request->npm);
        Session::flash('nama',$request->nama);
        Session::flash('jurusan',$request->jurusan);
        Session::flash('nip_dosen',$request->nip_dosen);
        $request->validate([
            'npm'=>'required|unique:mahasiswa,npm', // npm harus di isi dan tidak boleh sama (unique) satu sama lain antar npm
            'nama'=>'required', // kolom nama harus diisi
            'jurusan'=>'required', // kolom jurusan harus diisi
            'nip_dosen'=>'required', // kolom jurusan harus diisi
        ],
        [
            'npm.required'=>'npm WAJIB DI ISI', // pesan error jika npm tidak diisi 
            'npm.unique'=>'npm YANG DI INPUT TELAH DIGUNAKAN', // pesan error jika memasukkan npm yang telah pernah dimasukkan
            'nama.required'=>'nama WAJIB DI ISI', // pesan error jika kolom nama tidak diiis
            'jurusan.required'=>'jurusan WAJIB DI ISI', // pesan error jika kolom jurusan tidak diisi
        ]
    );
        $data = [
            'npm' => $request->npm, // data npm diambil dari request npm yang ada di form post di mahasiswa/create.blade.php
            'nama' => $request->nama, // data nama diambil dari request npm yang ada di form post di mahasiswa/create.blade.php
            'jurusan' => $request->jurusan,// data jurusan diambil dari request npm yang ada di form post di mahasiswa/create.blade.php
            'nip_dosen' => $request->nip_dosen,// data NIP diambil dari request npm yang ada di form post di mahasiswa/create.blade.php
        ];
        mahasiswa::create($data); // jika selesai semua diatas maka data akan dibuat
        return redirect()->to('mahasiswa')->with('success','Data berhasil ditambahkan'); 
        //  mengalihkan ke halaman mahasiswa dan menampilkan pesan data berhasil dibuat
        //  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) 
    {
       $data = mahasiswa::where('npm',$id)->first(); // fungsi edit dimana data diambil dari parameter id dan id adalah npm
       return view('mahasiswa/edit')->with('data',$data); // mengalihkan ke halaman mahasiswa/edit bersamaan dengan data dimana data yang dibawa adalah berdasarkan npm
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // pada update mirip seperti create namun npm tidak bisa diganti di sini
        $request->validate([
            'nama'=>'required',
            'jurusan'=>'required',
        ],
        [
            'nama.required'=>'nama WAJIB DI ISI',
            'jurusan.required'=>'jurusan WAJIB DI ISI',
        ]
    );
        $data = [
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
        ];
        mahasiswa::where('npm',$id)->update($data); // mengupdate data sesuai nama dan jurusan yang telah kita input disini dan dan data lama suatu npm yang kita edit akan digantikan dengan data ini
        return redirect()->to('mahasiswa')->with('success','Data berhasil diupdate'); // akan ke halaman mahasiswa bersamaan dengan pesan data berhasil di update
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        mahasiswa::where('npm',$id)->delete(); // menghapus data berdasarkan npm yang dipilih
        return redirect()->to('mahasiswa')->with('success','Data berhasil dihapus'); // ke halaman mahasiswa bersamaan dengan pesan data pesan berhasil dihapus
    }
}
