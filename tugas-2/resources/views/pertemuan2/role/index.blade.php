@extends('layout.base')

@section('title', 'List Role')

@section('content')
<div class="container">

    <!-- Pencarian -->
    <form method="GET" action="{{ route('crud-role.index') }}" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari role..." value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit">Cari</button>
        </div>
    </form>

    <!-- Add Role Button -->
    <a href="{{ route('crud-role.create') }}" class="btn btn-primary mb-4">Tambah Role</a>

    <!-- Daftar Roles -->
    <table class="table" id="roleTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($roles as $role)
                <tr>
                    <td>{{ $role->id }}</td>
                    <td>{{ $role->nama_role }}</td>
                    <td>
                        <a href="{{ route('crud-role.edit', $role->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('crud-role.destroy', $role->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus role ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">Tidak ada data role ditemukan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Pagination -->
    {{ $roles->links() }}
</div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#roleTable').DataTable({
                paging: true,
                searching: true,
                ordering: true
            });
        });
    </script>
@endpush
