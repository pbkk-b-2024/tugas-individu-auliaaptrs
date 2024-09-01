@extends('layout.base')

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white py-3">
            <h1 class="h4 mb-0">Fallback Route di Laravel</h1>
        </div>
        <div class="card-body p-4">
            <p class="lead">Fallback route adalah fitur di Laravel yang memungkinkan Anda menentukan rute yang akan diakses ketika tidak ada rute lain yang cocok dengan permintaan yang masuk.</p>

            <h2 class="h5 mt-4">Contoh Definisi Rute Fallback</h2>
            <p class="mb-3">Berikut adalah contoh penggunaan <code>Route::fallback</code> di file <code>routes/web.php</code>:</p>
            <pre class="bg-light p-3 rounded"><code>Route::fallback(function () {
    return redirect('/');
});</code></pre>

            <h2 class="h5 mt-4">Penjelasan</h2>
            <ul class="mb-3">
                <li><strong><code>Route::fallback(function () { ... })</code></strong>: Mendefinisikan rute fallback yang akan dipanggil jika tidak ada rute lain yang cocok dengan permintaan yang masuk.</li>
                <li><strong><code>return redirect('/');</code></strong>: Mengarahkan pengguna kembali ke halaman utama aplikasi (root URL <code>/</code>) ketika rute fallback dipanggil. Ini menggantikan tampilan halaman "404 Not Found" dengan pengalihan ke halaman utama.</li>
            </ul>

            <p class="mt-3">Dengan menggunakan fallback route, Anda memastikan bahwa permintaan ke URL yang tidak dikenal akan ditangani dengan cara yang lebih terkontrol, yaitu dengan mengarahkan pengguna ke halaman utama aplikasi Anda.</p>
        </div>
    </div>
</div>
@endsection
