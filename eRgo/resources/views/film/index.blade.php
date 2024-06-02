@extends('layout.master')

@section('judul')
    Halaman List Film
@endsection


@section('content')
<a href="/film/create"  class="btn btn-sm btn-primary mb-3">Tambah Film</a>
    
    <div class="row">
        @forelse ($film as $item)
            <div class="col-3" >
                <div class="card" >
                    
                    <img  src="{{ asset('image/'.$item->poster) }}" class="card-img-top img-fluid" style="height: 270px; object-fit:center;">
                    <div class="card-body">
                        <h2 class="text-center" >{{ $item->judul }}</h2>
                        <span class="badge badge-info">{{ $item->genre->nama}}</span>
                        <p class="card-text">Tahun  : {{ $item->tahun }}</p>
                        <a href="/film/{{ $item->id }}" class="text-dark btn btn-outline-secondary btn-block btn-sm">Read me</a>
                        @auth
                        <div class="my-2 row">
                            <div class="col">
                                <a href="/film/{{ $item->id }}/edit" class="text-dark btn btn-block btn-sm btn-outline-warning">Edit</a>
                            </div>
                            <div class="col">
                                <form  action="/film/{{ $item->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" id="delete" class="text-dark btn btn-block btn-sm btn-outline-danger" value="Delete">
                                </form>
                            </div>
                        </div>
                        @endauth
                    </div>
                </div>
            </div>
        @empty
        <h2>Tidak ada Film</h2>
        @endforelse
    </div>
@endsection

