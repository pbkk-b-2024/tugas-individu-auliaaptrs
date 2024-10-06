@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h1>Daftar Promosi</h1>
    <a href="{{ route('promotions.create') }}" class="btn btn-primary">Tambah Promosi</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Foto</th>
                <th>Caption</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($promotions as $promotion)
            <tr>
                <td>{{ $promotion->id }}</td>
                <td><img src="{{ asset('storage/' . $promotion->photo) }}" alt="{{ $promotion->caption }}" width="100"></td>
                <td>{{ $promotion->caption }}</td>
                <td>
                    <a href="{{ route('promotions.edit', $promotion) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('promotions.destroy', $promotion) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
