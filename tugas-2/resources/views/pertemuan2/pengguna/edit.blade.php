<!-- resources/views/pertemuan2/pengguna/edit.blade.php -->

@extends('layout.base')

@section('title', 'Edit Pengguna')
@section('content')

@if ($errors->any())
<div class="pt-3">
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif

<!-- START FORM -->
<form action='{{ url("pertemuan2/crud-Pengguna/{$data->id}") }}' method='post'>
    @csrf
    @method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href ='{{ url('pertemuan2/crud-Pengguna') }}' class="btn btn-secondary"><< kembali</a>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name='email' id="email" value="{{ $data->email }}" placeholder="Masukkan email">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' id="nama" value="{{ $data->nama }}" placeholder="Masukkan nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name='password' id="password" placeholder="Masukkan password (kosongkan jika tidak ingin mengubah)">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="telpon" class="col-sm-2 col-form-label">No. Telepon</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='telpon' id="telpon" value="{{ $data->telpon }}" placeholder="Masukkan no. telepon">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="role" class="col-sm-2 col-form-label">Role</label>
            <div class="col-sm-10">
                <select class="form-select" name="role" id="role">
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}" {{ $role->id == $data->role_id ? 'selected' : '' }}>
                            {{ $role->nama_role }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="submit" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
            </div>
        </div>
    </div>
</form>
@endsection
<!-- AKHIR FORM -->
