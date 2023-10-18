{{-- Pada dasarnya hampir sama dengan halaman create tapi ada perbedaan sedikit --}}
@extends('layout.template')

@section('konten')

    <!-- START FORM -->
    <form action='{{ url('mahasiswa/'.$data->npm) }}' method='post'>
        @csrf
        {{-- Menggunakan method put karena update data --}}
        @method('PUT')
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href="{{ url('mahasiswa')}}" class="btn btn-secondary" ><< Kembali</a>
            <div class="mb-3 row">
                {{-- NPM tidak bisa diubah --}}
                <label for="nim" class="col-sm-2 col-form-label">NPM</label>
                <div class="col-sm-10">
                    {{ $data->npm }}
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' id="nama" value = "{{ Session::get('nama') }}" >
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jurusan' id="jurusan" value = "{{ Session::get('jurusan') }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
    </form>
    </div>
    <!-- AKHIR FORM -->
@endsection
