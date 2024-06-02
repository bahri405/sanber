@extends('layout.master')

@section('judul')
    halaman detail film
@endsection

@section('content')

    <div class="card mb-3" style="max-width: 100%;">
        <div class="row no-gutters">
        <div class="col-md-3">
            <img  src="{{ asset('image/'.$film->poster) }}" class="" style="height: auto; width:auto;">
        </div>
        <div class="col-md-8">
            <div class="card-body">
            <h5 class="card-title">{{ $film->judul }}</h5>
            <p class="card-text">{{ $film->ringkasan }}</p>
            <p class="card-text"><small class="text-muted">{{ $film->tahun }}</small></p>
            <span class="badge badge-info">{{ $film->genre->nama}}</span>
            
            
            </div>
        </div>
        </div>
    </div>
    <hr>
    <h4>List Komentar & point</h4>
        @forelse ($film->kritik as $item)
            <div class="media my-3">
                <img src="https://dummyimage.com/300/09f.png/fff" class="mr-3" style="border-radius: 50%; height:50px; width:auto;" alt="...">
                <div class="media-body">
                    <h5 class="m-1 text-dark">{{ $item->user->name }}</h5>
                    <hr>
                    <p>Review: {{ $item->content }}</p>
                    <p>Point: {{ $item->point }} / 10</p>
                </div>
            </div>
        @empty
            <h4>Belum ada komentar</h4>
        @endforelse

    <form  method="post" action="/kritik/{{ $film->id }}" class="my-5">
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
            <textarea name="content" class="form-control my-2" placeholder="isi review" cols="30" rows=""></textarea>
        </div>
        <div class="form-group">
            <label >Point</label>
            <input type="number" name="point" " class="form-control">
        </div>

        <button class="btn btn-sm btn-secondary" type="submit">review</button>
    </form>

    <hr>

    <a href="/film" class="btn btn-sm btn-primary">kembali</a>
@endsection