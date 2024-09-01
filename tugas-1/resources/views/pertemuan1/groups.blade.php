@extends('layout.base')

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white py-3">
            <h1 class="h4 mb-0">Route Groups</h1>
        </div>
        <div class="card-body p-4">
            <p class="lead">Route groups di Laravel memungkinkan Anda untuk mengelompokkan beberapa route dengan pengaturan yang sama, seperti prefix atau middleware. Ini membantu dalam mengelola dan menyederhanakan konfigurasi routing aplikasi Anda.</p>

            <h2 class="h5 mt-4">Contoh Definisi Route Groups</h2>
            <p class="mb-3">Berikut adalah contoh bagaimana Anda dapat menggunakan route groups di file <code>routes/web.php</code>:</p>
            <pre class="bg-light p-3 rounded"><code>use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    })->name('admin.dashboard');

    Route::get('/settings', function () {
        return 'Admin Settings';
    })->name('admin.settings');
});</code></pre>

            <h2 class="h5 mt-4">Penjelasan</h2>
            <ul class="mb-3">
                <li><strong><code>Route::prefix('admin')->group(...)</code></strong>: Mendefinisikan route group dengan prefix <code>admin</code>. Semua route di dalam group ini akan memiliki prefix <code>/admin</code> di URL mereka.</li>
                <li><strong><code>Route::get('/dashboard', ...)</code></strong>: Mendefinisikan route GET untuk <code>/admin/dashboard</code> dengan nama <code>admin.dashboard</code>.</li>
                <li><strong><code>Route::get('/settings', ...)</code></strong>: Mendefinisikan route GET untuk <code>/admin/settings</code> dengan nama <code>admin.settings</code>.</li>
            </ul>

            <h2 class="h5 mt-4">Middleware</h2>
            <p class="mb-3">Anda juga dapat menambahkan middleware pada route group untuk menerapkan middleware ke semua route di dalam group:</p>
            <pre class="bg-light p-3 rounded"><code>Route::middleware(['auth'])->group(function () {
    Route::get('/profile', function () {
        return 'User Profile';
    })->name('user.profile');
});</code></pre>

            <p class="mt-3">Pada contoh di atas, middleware <code>auth</code> diterapkan pada semua route di dalam group, memastikan bahwa hanya pengguna yang terautentikasi yang dapat mengakses route tersebut.</p>
        </div>
    </div>
</div>
@endsection
