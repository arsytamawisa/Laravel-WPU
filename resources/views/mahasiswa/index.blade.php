@extends('template')

@section('title', 'Mahasiswa')

@section('content')
<div class="container">

	<!-- FlashData -->
	@if (session('status'))
	<div class="alert alert-success mt-5">
		{{ session('status') }}
	</div>
	@endif

	<div class="row">
		<div class="col-md-6">
			<h4 class="mt-5 mb-3">Daftar Mahasiswa</h4>
		</div>
		<div class="col-md-6">
			<a href="student/create" class="btn btn-secondary mt-5 mb-3 float-right">Tambah Data</a>
		</div>
	</div>
	<table class="table table-hover">
		<thead class="thead-dark">
			<tr>
				<th>#</th>
				<th>NPM</th>
				<th>Nama</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			@foreach($student as $key => $value)
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{ $value->nim }}</td>
				<td>{{ $value->nama_mahasiswa }}</td>
				<td>
					<a href="student/{{ $value->id }}" class="badge badge-info">Detail</a>
					<a href="student/{{ $value->id }}/edit" class="badge badge-success">Edit</a>
					<form action="student/{{ $value->id }}" method="post" class="d-inline">@method('delete') @csrf
						<button type="submit" class="badge badge-danger">Hapus</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection