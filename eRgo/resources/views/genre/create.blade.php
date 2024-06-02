@extends('layout.master')

@section('judul')
  Halaman Tambah Genre
@endsection

@section('content')
<h2> Tambah Data </h2>
    <form action="/genre" method="post">
        {{-- validaton --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @csrf
        <div class="form-group">
            <label >Nama Genre</label>
            <input type="text" name="nama" class="form-control">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection