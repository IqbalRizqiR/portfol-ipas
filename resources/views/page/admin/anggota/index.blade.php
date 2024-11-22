@extends('layouts.dashboard')

@section('title')
    Anggota
@endsection

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Anggota</h1>
    <a href="{{ route('anggota.create') }}" class="btn btn-primary">Tambah Data</a>
    {{--  <p>Periode : 2020-2021</p>  --}}

    {{--  <a href="{{ route('jenis.create') }}" class="btn btn-primary">Tambah Data</a>s  --}}
</div>

<!-- Content Row -->
<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>Nama Anggota</th>
                <th class="text-center">Aksi</th>
            </tr>
            @forelse ($anggota as $row)
                <tr>
                    <th>{{ $row->name }}</th>
                    <th class="text-center">
                        <a href="{{ route('anggota.edit', $row->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('anggota.destroy', $row->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                Hapus
                            </button>

                        </form>
                    </th>
                </tr>
            @empty
                <td colspan="4" class="text-center">Data Masih Kosong!</td>
            @endforelse
        </table>
    </div>
</div>
@endsection
