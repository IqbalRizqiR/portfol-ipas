@extends('layouts.dashboard')

@section('title')
    anggota
@endsection

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah anggota</h1>
</div>

<!-- Content Row -->
<div class="page-inner mt--5">
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Tambah anggota</div>
						<a href="{{ route('anggota.index') }}" class="btn btn-primary btn-sm ml-auto">Back</a>
					</div>
				</div>

				<div class="card-body">
					<form action="{{ route('anggota.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
                        <div class="form-group">
							<label for="judul">Nama Anggota</label>
							<input type="text" class="form-control" name="name">
						</div>
                        <div class="form-group">
							<label for="judul">Job Anggota</label>
							<input type="text" class="form-control" name="job">
						</div><div class="form-group">
							<label for="judul">Role Anggota</label>
							<input type="text" class="form-control" name="role">
						</div><div class="form-group">
							<label for="judul">Kelas Anggota</label>
							<input type="text" class="form-control" name="class">
						</div><div class="form-group">
							<label for="judul">Umur Anggota</label>
							<input type="text" class="form-control" name="age">
						</div><div class="form-group">
							<label for="judul">Deskripsi Singkat Anggota</label>
							<input type="text" class="form-control" name="descript">
						</div><div class="form-group">
							<label for="judul">Motto Anggota</label>
							<input type="text" class="form-control" name="motto">
						</div><div class="form-group">
							<label for="judul">Foto Anggota</label>
							<input type="file" class="form-control" name="photo">
						</div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm" type="submit">Save</button>
                        </div>
@endsection
