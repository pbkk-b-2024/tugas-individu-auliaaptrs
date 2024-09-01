@extends('layout.base')

@section('title', 'Genap Ganjil')

@section('content')
    <h1>Masukkan Angka</h1>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Get Request
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('genap-ganjil') }}" method="GET">
                <label for="n">Enter a number (n):</label>
                <input type="text" name="n" id="n" min="1" required>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    @if (isset($numberDetails) && count($numberDetails) > 0)
        <h2>Hasil</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>Nomor Urut</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($numberDetails as $detail)
                    <tr>
                        <td>{{ $detail['number'] }}</td>
                        <td>{{ $detail['type'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
