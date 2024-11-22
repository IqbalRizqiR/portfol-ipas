@extends('layouts.dashboard')

@section('title')
    Edit setting
@endsection

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah setting</h1>
</div>

<!-- Content Row -->
<div class="page-inner mt--5">
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Tambah setting</div>
						<a href="{{ route('setting.index') }}" class="btn btn-primary btn-sm ml-auto">Back</a>
					</div>
				</div>

				<div class="card-body">
					<form action="{{ route('setting.update', 1) }}" method="POST" enctype="multipart/form-data">
						@csrf
                        @method('PUT')
                        <div class="form-group">
							<label for="judul">Nama Kelompok</label>
							<input type="text" class="form-control" value="{{ $setting->nama_kelompok }}" name="nama_kelompok">
						</div>
                        <div class="form-group">
							<label for="judul">Logo Kelompok</label>
							<input type="file" class="form-control" value="{{ $setting->logo_kelompok }}" name="logo_kelompok">
						</div><div class="form-group">
							<label for="judul">Short Tentang Kelompok</label>
							<textarea class="form-control" name="short_aboutus">{{ $setting->short_aboutus }}</textarea>
						</div><div class="form-group">
							<label for="judul">Short Tentang Project</label>
							<textarea class="form-control" name="short_tentangproject">{{ $setting->short_tentangproject }}</textarea>
						</div><div class="form-group">
							<label for="judul">Text Tentang Kelompok</label>
							<textarea class="form-control" name="text_aboutus">{{ $setting->text_aboutus }}</textarea>
						</div><div class="form-group">
							<label for="judul">Text Tentang Project</label>
							<textarea class="form-control" name="text_tentangproject">{{ $setting->text_tentangproject }}</textarea>
						</div><div class="form-group">
							<label for="judul">Landasan Teori</label>
							<textarea class="form-control" name="text_landasanteori">{{ $setting->text_landasanteori }}</textarea>
						</div><div class="form-group">
							<label for="judul">Alat</label>
							<textarea class="form-control" name="text_alat">{{ $setting->text_alat }}</textarea>
						</div><div class="form-group">
							<label for="judul">Bahan</label>
							<textarea class="form-control" name="text_bahan">{{ $setting->text_bahan }}</textarea>
						</div><div class="form-group">
							<label for="judul">Hasil</label>
							<textarea class="form-control" name="text_hasil">{{ $setting->text_hasil }}</textarea>
						</div><div class="form-group">
							<label for="judul">Kesimpulan</label>
							<textarea class="form-control" name="text_kesimpulan">{{ $setting->text_kesimpulan }}</textarea>
						</div><div class="form-group">
							<label for="judul">Jadwal Kegiatan</label>
							<input type="file" class="form-control" value="{{ $setting->jadwalkegiatan }}" name="jadwalkegiatan">
						</div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm" type="submit">Save</button>
                        </div>
@endsection
