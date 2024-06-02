@extends('layout.master')

@section('judul')
    Halaman Genre
@endsection


@section('content')
<a href="/genre/create"  class="btn btn-sm btn-primary">Tambah</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($genre as $key => $item)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $item->nama }}</td>
                    
                    <td>
                        
                        <form action="/genre/{{ $item->id }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="/genre/{{ $item->id }}" class="btn btn-sm btn-info">Detail</a>
                            <a href="/genre/{{ $item->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                            <input type="submit" id="delete" class="btn btn-sm btn-danger" value="Delete">
                        </form>
                    </td>
                </tr>
            @empty
                <p>No users</p>
            @endforelse
        
        </tbody>
    </table>
@endsection

