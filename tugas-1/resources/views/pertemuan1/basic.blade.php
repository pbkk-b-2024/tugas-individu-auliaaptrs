@extends('layout.base')

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white py-3">
            <h1 class="h4 mb-0">Basic Routing</h1>
        </div>
        <div class="card-body p-4">
            <p class="lead">Routing di Laravel memungkinkan Anda untuk menghubungkan URL aplikasi Anda dengan logika tertentu menggunakan closure. Ini adalah cara paling sederhana dan ekspresif untuk mendefinisikan route dan perilaku tanpa perlu file konfigurasi routing yang rumit.</p>

            <h2 class="h5 mt-4">Contoh Routing Dasar</h2>
            <p class="mb-3">Berikut adalah contoh sederhana dari routing dasar di Laravel:</p>
            <pre class="bg-light p-3 rounded"><code>use Illuminate\Support\Facades\Route;

Route::get('/greeting', function () {
    return 'Hello World';
});</code></pre>
            <p class="mt-3">Route di atas menerima URI <code>/greeting</code> dan menggunakan closure untuk mengembalikan pesan <strong>"Hello World"</strong>. Anda dapat mengakses route ini dengan membuka <code>/greeting</code> di browser Anda.</p>

            <p class="mt-3">Klik tombol di bawah ini untuk langsung melihat contoh routing dasar di Laravel:</p>
            <a href="{{ url('/greeting') }}" class="btn btn-success">Go to Greeting Page</a>
        </div>
    </div>
</div>
@endsection
