@extends('layout.master')

@section('judul')
    halaman Cast
@endsection


@section('content')
<a href="/cast/create" id="tambah" class="btn btn-sm btn-primary">Tambah</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Umur</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($cast as $key => $item)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $item ->nama  }}</td>
                    <td>{{ $item->umur }}</td>
                    
                    <td>
                        
                        <form action="/cast/{{ $item->id }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="/cast/{{ $item->id }}" class="bt btn-sm btn-info">Detail</a>
                            <a href="/cast/{{ $item->id }}/edit" class="bt btn-sm btn-warning">Edit</a>
                            <input type="submit" id="delete" class="btn btn-sm btn-danger" value="Delete">
                        </form>
                    </td>
            @empty
                <p>No users</p>
            @endforelse
        
        </tbody>
    </table>
@endsection

