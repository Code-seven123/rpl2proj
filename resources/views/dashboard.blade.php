@extends('layouts.app')

@section('content')
<a class="btn btn-success ms-5" href="home/create">ADD</a>
    <table class="table table-striped">
        <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">MERK</th>
              <th scope="col">NAMA</th>
              <th scope="col">HARGA</th>
              <th scope="col">OPSI</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->merk_motor }}</td>
                    <td>{{ $item->nama_motor }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>
                      <form action="{{ route('home.destroy', $item->id) }}" method="delete" onsubmit="return confirm('Apakah anda yakin?')">
                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                          <a class="btn btn-outline-warning" href="{{ route('home.edit', $item->id) }}">EDIT</a>
                          <button class="btn btn-outline-danger" type="submit">DELETE</button>
                        </div>
                      </form>
                    </td>
                </tr>
            @endforeach
          </tbody>
    </table>
@endsection