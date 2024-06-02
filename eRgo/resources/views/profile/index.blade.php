@extends('layout.master')

@section('judul')
Halaman Profile
@endsection

@section('content')
    <form action="/profile/{{ $profile->id }}" method="POST">
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
            <label >Nama User </label>
            <input type="text"  value="{{ $profile->user->name }}" class="form-control " disabled>
        </div>
        <div class="form-group">
            <label >Email User </label>
            <input type="text"  value="{{ $profile->user->email }}" class="form-control" disabled>
        </div>
        <div class="form-group">
            <label >Umur</label>
            <input type="number" name="umur" value="{{ $profile->umur }}" class="form-control" >
        </div>

        <div class="form-group">
            <label >Bio</label>
            <textarea name="bio" class="form-control"  cols="30" rows="5">{{ $profile->bio }}</textarea>
        
        <div class="form-group">
            <label >Alamat</label>
            <textarea name="alamat" class="form-control"  cols="30" rows="5">{{ $profile->alamat }}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection