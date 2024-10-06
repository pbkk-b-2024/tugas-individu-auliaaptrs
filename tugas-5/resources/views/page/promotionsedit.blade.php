@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <h1>Edit Promotion</h1>

    <form action="{{ route('promotions.update', $promotion->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="photo">Promotion Photo</label>
            <input type="file" name="photo" class="form-control">
            <img src="{{ asset('storage/' . $promotion->photo) }}" alt="Current Photo" width="100">
        </div>

        <div class="form-group">
            <label for="caption">Caption</label>
            <input type="text" name="caption" class="form-control" value="{{ $promotion->caption }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update Promotion</button>
    </form>
</div>
@endsection
