@extends('template')

@section('title', 'Mahasiswa')

@section('content')
<div class="container">
    <h4 class="mt-5 mb-3">Data Mahasiswa</h4>
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $student->nama_mahasiswa }}</h5>
                    <p class="card-text">{{ $student->nim }}</p>
                    <a href="/student" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection