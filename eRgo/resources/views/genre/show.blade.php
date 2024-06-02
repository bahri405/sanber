@extends('layout.master')

@section('judul')
    halaman detail Genre
@endsection

@section('content')


    <h3 class="">Genre  {{ $genre->nama }}</h3>
    
    <div class="row">
    @forelse ($genre->films as $item)
        <div class="col-3">

            <div class="card" >
                <img  src="{{ asset('image/'.$item->poster) }}" class="card-img-top img-fluid" style="height: 270px; object-fit:center;">
                <div class="card-body">
                    <h2 class="text-center" >{{ $item->judul }}</h2>
                    <p class="card-text">Tahun  : {{ $item->tahun }}</p>
                    <a href="/film/{{ $item->id }}" class="btn btn-secondary btn-block btn-sm">Read me</a>
                </div>
            </div>
        </div>
    
    @empty
        <h3>kosong</h3>
    @endforelse
    </div>
    

    <a href="/genre" class="btn btn-sm btn-primary">kembali</a>


@endsection