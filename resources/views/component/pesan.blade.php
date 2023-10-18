{{-- // kondisi jika ada session yang memiliki 'success' maka akan dilaksanakan pesan dibawahhnya --}}
@if (Session::has('success')) 
    <div class="pt-3">
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    </div>
@endif
{{-- // kondisi jika ada eror maka akan dilaksanakan pesan dibawahhnya --}}
@if ($errors->any())
    <div class="pt-3">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>    
@endif