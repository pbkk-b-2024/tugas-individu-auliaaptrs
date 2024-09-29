@extends('layout.base')

@section('title', 'Edit Role')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Role</h1>

    <!-- Form untuk mengedit role -->
    <form method="POST" action="{{ route('crud-role.update', $role->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_role" class="form-label">Nama Role</label>
            <input type="text" class="form-control @error('nama_role') is-invalid @enderror" id="nama_role" name="nama_role" value="{{ old('nama_role', $role->nama_role) }}">
            @error('nama_role')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('crud-role.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
