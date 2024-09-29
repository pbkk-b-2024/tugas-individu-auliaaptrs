<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    public function index(Request $request)
    {
        $katakunci = $request->input('katakunci');
        $jumlahbaris = 5;

        if (!empty($katakunci)) {
            $data = Pengguna::where('id', 'like', "%$katakunci%")
                ->orWhere('email', 'like', "%$katakunci%")
                ->orWhere('nama', 'like', "%$katakunci%")
                ->orWhere('telpon', 'like', "%$katakunci%")
                ->orWhereHas('role', function ($query) use ($katakunci) {
                    $query->where('nama_role', 'like', "%$katakunci%");
                })
                ->paginate($jumlahbaris);
        } else {
            $data = Pengguna::orderBy('nama', 'asc')->paginate($jumlahbaris);
        }

        return view('pertemuan2.pengguna.index', ['data' => $data]);
    }

    public function create()
{
    // Fetch all roles from the database
    $roles = Role::all();
    
    // Pass roles to the view
    return view('pertemuan2.pengguna.create', ['roles' => $roles]);
}


    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|unique:pengguna,email',
            'password' => 'required',
            'telpon' => 'required',
            'role' => 'required',
        ], [
            'nama.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Email sudah pernah digunakan',
            'password.required' => 'Password wajib diisi',
            'telpon.required' => 'Nomor telepon wajib diisi',
            'role.required' => 'Role wajib diisi',
        ]);

        $data = [
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'telpon' => $request->telpon,
            'role_id' => $request->role,
        ];

        Pengguna::create($data);
        return redirect()->route('crud-Pengguna.index')->with('success', 'Pengguna "' . $request->nama . '" sukses ditambahkan');
    }

    public function edit(string $id)
    {
        $data = Pengguna::findOrFail($id);
        $roles = Role::all();
        
        return view('pertemuan2.pengguna.edit', ['data' => $data, 'roles' => $roles]);
    }

    public function update(Request $request, string $id)
{
    $request->validate([
        'nama' => 'required',
        'password' => 'nullable|min:6',  // Use nullable if password is optional
        'telpon' => 'required',
        'role' => 'required',
    ], [
        'nama.required' => 'Nama wajib diisi',
        'password.min' => 'Password harus memiliki minimal 6 karakter',
        'telpon.required' => 'Nomor telepon wajib diisi',
        'role.required' => 'Role wajib diisi',
    ]);

    $pengguna = Pengguna::findOrFail($id);

    // Prepare the data for update
    $data = [
        'nama' => $request->nama,
        'telpon' => $request->telpon,
        'role_id' => $request->role,
    ];

    // Only hash the password if it's present in the request
    if ($request->filled('password')) {
        $data['password'] = Hash::make($request->password);
    }

    $pengguna->update($data);
    return redirect()->route('crud-Pengguna.index')->with('success', 'Berhasil melakukan update data');
}

    public function destroy(string $id)
    {
        $pengguna = Pengguna::findOrFail($id);
        $pengguna->delete();
        return redirect()->route('crud-Pengguna.index')->with('success', 'Berhasil melakukan delete data');
    }
}
