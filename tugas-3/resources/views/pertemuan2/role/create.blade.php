@extends('layout.base')

@section('title', 'Tambah Role')

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah Role</h1>

    <form method="POST" action="{{ route('crud-role.store') }}">
        @csrf

        <div class="form-group">
            <label for="nama_role">Nama Role</label>
            <input type="text" name="nama_role" id="nama_role" class="form-control" value="{{ old('nama_role') }}" required>
            @error('nama_role')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary" style="background-color: #007bff; border-color: #007bff;">Simpan</button>
        <a href="{{ route('crud-role.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
