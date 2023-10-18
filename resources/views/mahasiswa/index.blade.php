{{-- Tag html berasal dari template dan bootstrap dan lainnya juga dari template --}}
@extends('layout.template')
{{-- Isi konten yang dimaksud ini akan berkolerasi dengan yield konten di template --}}
@section('konten')
    
<!-- START DATA -->
<div class="my-3 p-3 bg-body rounded shadow-sm">
    {{-- Ini adalah tombl untuk kembali --}}
    <a href="{{ url('/')}}" class="btn btn-secondary" style="margin-bottom: 20px" ><< Kembali</a>
    <!-- FORM PENCARIAN -->
    <div class="pb-3">
        <form class="d-flex" action="{{ url('mahasiswa') }}" method="get">
            <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}"
                placeholder="Masukkan kata kunci" aria-label="Search">
            <button class="btn btn-secondary" type="submit">Cari</button>
        </form>
    </div>

    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
        <a href='{{ url('mahasiswa/create') }}' class="btn btn-primary">+ Tambah Data</a>
    </div>
    {{-- Tabel yang berisi 5 kolom yaitu no, npm, nama, jurusan, dan aksi --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-3">NPM</th>
                <th class="col-md-4">Nama</th>
                <th class="col-md-2">Jurusan</th>
                <th class="col-md-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            {{-- Mengisi data dengan perulangan foreach  --}}
            <?php $i = $data->firstItem() ?>
            @foreach ($data as $item)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $item->npm }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->jurusan }}</td>
                <td>
                    {{-- Tombol edit data --}}
                    <a href='{{ url('mahasiswa/'.$item->npm.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                    {{-- Form hapus data --}}
                    <form  onsubmit= "return confirm('Yakin akan menghapus data ?')" action="{{ url('mahasiswa/'.$item->npm) }}" class="d-inline" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Del</button>
                    </form>
                
                </td>
            </tr>
            <?php $i++?>
            @endforeach
        </tbody>
    </table>
    {{ $data->withQueryString()->links() }}

</div>
<!-- AKHIR DATA -->
@endsection
