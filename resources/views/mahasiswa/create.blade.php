@extends('layout.template')
{{-- Tag html berasal dari template dan bootstrap dan lainnya juga dari template --}}

@section('konten')
{{-- Isi konten yang dimaksud ini akan berkolerasi dengan yield konten di template --}}

    <!-- START FORM -->
    {{-- form action post dan data akan di kirim ke halaman ini sendiri --}}
    <form action='{{ url('mahasiswa') }}' method='post'> 
        {{-- Token --}}
        @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            {{-- //tombol kembali // --}}
            <a href="{{ url('mahasiswa')}}" class="btn btn-secondary" > << Kembali</a> 
            <div class="mb-3 row">
                {{-- untuk NPM --}}
                <label for="nim" class="col-sm-2 col-form-label">NPM</label>
                <div class="col-sm-10">
                    {{-- Npm inputannya text dan valuenya bisa berdasarkan session get --}}
                    <input type="text" class="form-control" name='npm' id="npm" value = "{{ Session::get('npm') }}">
                </div>
            </div>
            <div class="mb-3 row">
                {{-- untuk nama --}}
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    {{-- Npm inputannya text dan valuenya bisa berdasarkan session get --}}
                    <input type="text" class="form-control" name='nama' id="nama" value = "{{ Session::get('nama') }}" >
                </div>
            </div>
            <div class="mb-3 row">
                {{-- Untuk jurusan --}}
                <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                     {{-- jurusan inputannya text dan valuenya bisa berdasarkan session get --}}
                    <input type="text" class="form-control" name='jurusan' id="jurusan" value = "{{ Session::get('jurusan') }}">
                </div>
            </div>
            <div>
                <label class="mb-2 block font-semibold" for="nip_dosen">Author <span class="text-red-500">*</span></label>
                <select name="nip_dosen" required id="nip_dosen" class="form-control">
                  <option value="">Select author name</option>
                   @foreach ($datas as $data)
                   <option value="{{ $data->nip }}">{{ $data->nama }}</option>
                   @endforeach
                </select>
              </div>
            <div class="mb-3 row">
                {{-- <label for="jurusan" class="col-sm-2 col-form-label"></label> --}}
                {{-- Tombol submit --}}
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
    </form>
    </div>
    <!-- AKHIR FORM -->
@endsection
