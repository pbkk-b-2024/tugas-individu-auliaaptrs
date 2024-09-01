@extends('layout.base')

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white py-3">
            <h1 class="h4 mb-0">Named Routes</h1>
        </div>
        <div class="card-body p-4">
            <p class="lead">Named routes memungkinkan Anda memberikan nama pada rute, sehingga memudahkan referensi dan pengelolaan URL di aplikasi Anda.</p>

            <h2 class="h5 mt-4">Contoh Definisi Rute</h2>
            <p class="mb-3">Berikut adalah contoh definisi rute dengan nama <code>named</code> di file <code>routes/web.php</code>:</p>
            <pre class="bg-light p-3 rounded"><code>use App\Http\Controllers\Pertemuan1Controller;
use Illuminate\Support\Facades\Route;

Route::get('/pertemuan1/named', [Pertemuan1Controller::class, 'named'])->name('named');</code></pre>

            <h2 class="h5 mt-4">Penjelasan</h2>
            <ul class="mb-3">
                <li><strong><code>Route::get('/pertemuan1/named', [Pertemuan1Controller::class, 'named'])</code></strong>: Mendefinisikan rute GET yang akan memanggil metode <code>named</code> di <code>Pertemuan1Controller</code> ketika URL <code>/pertemuan1/named</code> diakses.</li>
                <li><strong><code>->name('named')</code></strong>: Memberikan nama <code>named</code> pada rute ini, sehingga Anda bisa merujuk ke rute ini menggunakan nama <code>named</code> di tempat lain dalam aplikasi, seperti dalam link atau redirect.</li>
            </ul>

            <h2 class="h5 mt-4">Metode Controller</h2>
            <p class="mb-3">Pastikan Anda memiliki metode <code>named</code> di dalam <code>Pertemuan1Controller</code>:</p>
            <pre class="bg-light p-3 rounded"><code>namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pertemuan1Controller extends Controller
{
    public function named()
    {
        return view('pertemuan1.named'); 
    }
}</code></pre>

            <p class="mt-3">Dengan cara ini, Anda dapat menggunakan <code>route('named')</code> untuk menghasilkan URL atau melakukan redirect ke rute ini.</p>
        </div>
    </div>
</div>
@endsection
