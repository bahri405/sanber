@extends('layout.master')

@section('judul')
  Halaman Edit Film
@endsection

@section('content')
<h2> Edit Film</h2>
    <form action="/film/{{ $film->id }}" method="post" enctype="multipart/form-data">
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
        @method('put')
        <div class="form-group">
            <label >Genre </label>
            <select name="genre_id" id="" class="form-control">
                <option value="">---Pilih---</option>
                @forelse ($genre as $item)
                @if ($item->id == $film->genre_id)
                    <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                @else
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endif
                
                @empty
                <option value="">Tidak ada genre</option>
                @endforelse
            </select>
        </div>
        
        <div class="form-group">
            <label >Judul Film</label>
            <input type="text" name="judul" value="{{ $film->judul }}" class="form-control">
        </div>
        <div class="form-group">
            <label >Ringkasan Film</label>
            <textarea name="ringkasan" id=""  class="form-control" cols="30" rows="10">{{ $film->ringkasan }}</textarea>
        </div>
        <div class="form-group">
            <label >Tahun Film</label>
            <input type="number" name="tahun" value="{{ $film->tahun }}" class="form-control">
        </div>
        <div class="form-group">
            <label >Poster Film</label>
            <input type="file" name="poster" class="form-control">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection