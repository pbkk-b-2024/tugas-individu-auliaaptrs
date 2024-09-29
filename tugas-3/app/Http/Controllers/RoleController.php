<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Basic search functionality assuming `search` method is defined in Role model
        $search = $request->input('search');
        $roles = Role::when($search, function ($query, $search) {
            return $query->where('nama_role', 'like', "%{$search}%");
        })->paginate(10);
        
        return view('pertemuan2.role.index', ['roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pertemuan2.role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_role' => 'required|unique:role,nama_role',
            // Tambahkan aturan validasi lainnya jika perlu
        ], [
            'nama_role.required' => 'Nama role wajib diisi',
            'nama_role.unique' => 'Nama role sudah ada',
            // Tambahkan pesan error lainnya jika perlu
        ]);

        Role::create($validatedData);
        return redirect()->route('crud-role.index')->with('success', 'Role berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        return view('pertemuan2.role.edit', ['role' => $role]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $validatedData = $request->validate([
            'nama_role' => 'required|unique:role,nama_role,' . $role->id,
            // Add other validation rules as needed
        ], [
            'nama_role.required' => 'Nama role wajib diisi',
            'nama_role.unique' => 'Nama role harus unik',
            // Add other custom error messages as needed
        ]);

        $role->update($validatedData);
        return redirect()->route('crud-role.index')->with('success', 'Role berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('crud-role.index')->with('success', 'Role berhasil dihapus');
    }
}
