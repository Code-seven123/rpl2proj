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

    @dd($siswa)
</div>
@endsection
