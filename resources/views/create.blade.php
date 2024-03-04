@extends('layouts.app')

@section('content')
<form action="{{ route('home.store') }}" method="post">
    @csrf
    <div class="mb-4">
      <label for="merk" class="form-label">MERK MOTOR</label>
      <input type="text" class="form-control" id="merk" name="merk">
    </div>
    <div class="mb-4">
        <label for="nama" class="form-label">NAMA MOTOR</label>
        <input type="text" class="form-control" id="nama" name="nama">
      </div>
      <div class="mb-4">
        <label for="harga" class="form-label">HARGA MOTOR</label>
        <input type="number" class="form-control" id="harga" name="harga">
      </div>
    <button type="submit" class="btn btn-primary">SAVE</button>
    <a href="/home" class="btn btn-outline-success">BACK</a>
  </form>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection