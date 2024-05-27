@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-body">
    @if (session('status'))
             <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>
    <a href="/home/create" class="btn btn-outline-success">ADDING DATA</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <td>NIS</td>
                <td>NAMA</td>
                <td>JENIS KELAMIN</td>
                <td>KELAS</td>
                <td>ALAMAT</td>
                <td>OPSI</td>
            </tr>
          </thead>
          <tbody>
            @foreach ($siswa as $item)
                <tr>
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jk == '1' ? 'laki laki' : 'perempuan' }}</td>
                    <td>{{ $item->kelas }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>
                        <form action="{{ route('home.destroy', $item->id ) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="btn-group">
                                <a href="{{ route('home.edit', $item->id) }}" class="btn btn-outline-warning">EDIT</a>
                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?')">DELETE</button>
                        </div>
                        </form>
                    </td>
                </tr>
            @endforeach
          </tbody>
    </table>

</div>
@endsection
