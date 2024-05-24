@extends('layout.master')

@section('judul')
  Halaman Edit Cast
@endsection

@section('content')
    <form action="/cast/{{ $cast->id }}" method="POST">
        @method('put')
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
        <label >Nama</label>
        <input type="text" name="nama" value="{{ $cast->nama }}" class="form-control">
        
        </div>
        <div class="form-group">
        <label >Umur</label>
        <input type="number" name="umur" value="{{ $cast->umur }}" class="form-control" >
        </div>

        <div class="form-group">
        <label >Bio</label>
        <textarea name="bio" class="form-control"  cols="30" rows="10">{{ $cast->bio }}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection