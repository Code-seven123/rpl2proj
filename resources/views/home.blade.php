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

    <table class="table table-striped">
        <thead>
            <tr>
                <td>NIS</td>
                <td>NAMA</td>
                <td>JENIS KELAMIN</td>
                <td>KELAS</td>
                <td>ALAMAT</td>
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
                </tr>
            @endforeach
          </tbody>
    </table>

</div>
@endsection
