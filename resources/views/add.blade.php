@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form action="{{ route('home.store') }}" method="post" class="col-md-4 bg-dark text-light p-4 rounded">
            @csrf
            <h1 class="justify-content-center row">Tambah Data</h1>
            <div class="form-group">
                <label for="nis">NIS</label>
                <input type="text" maxlength="5" name="nis" placeholder="nis" class="form-control mt-2">
                @error('nis')
                <div class="alert">
                    <p class="text-red red">{{ $message }}</p>
                </div>    
            @enderror
            </div>
            <div class="form-group">
                <label for="nama">NAMA</label>
                <input type="text" name="nama" placeholder="nama" class="form-control mt-2">
            </div>
            <div class="form-group">
                <label for="jk">JENIS KELAMIN</label>
                <select name="jk" id="jk" class="form-control mt-2">
                    <option value="1">laki laki</option>
                    <option value="0">perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kelas">KELAS</label>
                <input type="text" name="kelas" placeholder="kelas" class="form-control mt-2">
            </div>
            <div class="form-group">
                <label for="alamat">ALAMAT</label>
                <textarea name="alamat" id="alamat" rows="5" placeholder="alamat" class="form-control mt-2"></textarea>
            </div>
            <div class="form-group row justifi-content-center p-2">
                <button class="btn btn-success col p-2" type="submit">SAVE</button>
                <a class="btn btn-warning col p-2" href="/home">CLOSE</a>
            </div>
        </form>
    </div>
</div>
@endsection