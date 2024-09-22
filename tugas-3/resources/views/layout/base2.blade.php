@extends('layout.template')

@section('sidebar')
    <li class="nav-item has-treeview {{ request()->is('pertemuan2/*') ? 'menu-open' : '' }}">
        <a href="#" class="nav-link {{ request()->is('pertemuan2/*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
                Pertemuan 2
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <!-- List Buku -->
            <li class="nav-item">
                <a href="{{ route('crud-buku.index') }}" class="nav-link {{ request()->routeIs('crud-buku.index') ? 'active' : '' }}">
                    <i class="fas fa-list nav-icon"></i>
                    <p>List Buku</p>
                </a>
            </li>
            <!-- Tambah Buku -->
            <li class="nav-item">
                <a href="{{ route('crud-buku.create') }}" class="nav-link {{ request()->routeIs('crud-buku.create') ? 'active' : '' }}">
                    <i class="fas fa-plus-circle nav-icon"></i>
                    <p>Tambah Buku</p>
                </a>
            </li>
            <!-- List Kategori -->
            <li class="nav-item">
                <a href="{{ route('crud-kategori.index') }}" class="nav-link {{ request()->routeIs('crud-kategori.index') ? 'active' : '' }}">
                    <i class="fas fa-list nav-icon"></i>
                    <p>List Kategori</p>
                </a>
            </li>
            <!-- Tambah Kategori -->
            <li class="nav-item">
                <a href="{{ route('crud-kategori.create') }}" class="nav-link {{ request()->routeIs('crud-kategori.create') ? 'active' : '' }}">
                    <i class="fas fa-plus-circle nav-icon"></i>
                    <p>Tambah Kategori</p>
                </a>
            </li>
            <!-- List Pengguna -->
            <li class="nav-item">
                <a href="{{ route('crud-Pengguna.index') }}" class="nav-link {{ request()->routeIs('crud-Pengguna.index') ? 'active' : '' }}">
                    <i class="fas fa-users nav-icon"></i>
                    <p>List Pengguna</p>
                </a>
            </li>
            <!-- List Role -->
            <li class="nav-item">
                <a href="{{ route('crud-role.index') }}" class="nav-link {{ request()->routeIs('crud-role.index') ? 'active' : '' }}">
                    <i class="fas fa-users nav-icon"></i>
                    <p>List Role</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="logout" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Logout
            </p>
        </a>
    </li>
    
@endsection
