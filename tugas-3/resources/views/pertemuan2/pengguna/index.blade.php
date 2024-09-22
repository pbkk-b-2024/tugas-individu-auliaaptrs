@extends('layout.base')

@section('title', 'List Pengguna')

@section('content')
    <!-- START DATA -->
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
            <form class="d-flex" action="{{ url('pertemuan2/crud-Pengguna') }}" method="get">
                <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                <button class="btn btn-secondary" type="submit">Cari</button>
            </form>
        </div>
        
        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <a href="{{ route('crud-Pengguna.create') }}" class="btn btn-primary">+ Tambah Data</a>
        </div>
      
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col-md-2">Nama</th>
                    <th class="col-md-3">Email</th>
                    <th class="col-md-2">Telepon</th>
                    <th class="col-md-2">Role</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = $data->firstItem(); ?>
                @foreach($data as $item)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->telpon }}</td>
                    <td>{{ $item->role->nama_role }}</td> <!-- Display role name -->
                    <td>
                        <a href="{{ url('pertemuan2/crud-Pengguna/'.$item->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                        <form onsubmit="return confirmDeletion()" class='d-inline' action="{{ url('pertemuan2/crud-Pengguna/'.$item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php $i++ ?>
                @endforeach
            </tbody>
        </table>
        {{ $data->links() }} <!-- Ensure pagination is correct -->
    </div>
@endsection

@push('scripts')
<script>
function confirmDeletion() {
    return confirm('Apakah Anda yakin ingin menghapus data ini?');
}
</script>
@endpush
