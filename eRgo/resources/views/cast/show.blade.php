@extends('layout.master')

@section('judul')
    halaman detail cast
@endsection

@section('content')

    <div class="card">
        <div class="card-header bg-info">
          Cast
        </div>
        <div class="card-body ">
            <h3>Nama : {{ $cast->nama }}</h3>
            <hr>
            <p class="card-text">Umur :  {{ $cast->umur }}</p>
            <p class="card-text">Bio  : {{ $cast->bio }}</p>
        </div>
      </div>

    <a href="/cast" class="btn btn-sm btn-primary">kembali</a>


@endsection