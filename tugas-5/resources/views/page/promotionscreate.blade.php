@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <h1>Create New Promotion</h1>

    <form action="{{ route('promotions.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="photo">Promotion Photo</label>
            <input type="file" name="photo" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="caption">Caption</label>
            <input type="text" name="caption" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Create Promotion</button>
    </form>
</div>
@endsection
