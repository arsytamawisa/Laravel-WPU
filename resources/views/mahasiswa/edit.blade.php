@extends('template')

@section('title', 'Mahasiswa')

@section('content')
<div class="container">
    <h4 class="mt-5 mb-5">Form Edit | Data Mahasiswa</h4>
    <form method="post" action="/student/{{ $student->id }}">@csrf @method('patch')
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nomor Induk Mahasiswa</label>
                <input name="nim" value="{{ $student->nim }}" type="text"
                    class="form-control @error('nim') is-invalid @enderror">
                @error('nim')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>Nama Mahasiswa</label>
                <input name="nama_mahasiswa" value="{{ $student->nama_mahasiswa }}" type="text"
                    class="form-control @error('nama_mahasiswa') is-invalid @enderror">
                @error('nama_mahasiswa')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class=" form-group">
            <label>Address</label>
            <input type="text" class="form-control" placeholder="1234 Main St">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>City</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label>State</label>
                <select class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
        </div>
        <a href="/student" class="btn btn-danger mt-3 ml-4 float-right">Kembali</a>
        <button type="submit" class="btn btn-primary mt-3 float-right">Update </button>
    </form>
</div>
@endsection