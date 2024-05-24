@extends('layout.master')

@section('judul')
    halaman detail cast
@endsection

@section('content')

    <h1>{{ $cast->nama }}</h1>
    <h1>{{ $cast->umur }}</h1>
    

    <a href="/cast" class="btn btn-sm btn-primary">kembali</a>


@endsection