@extends('layout.template')

@section('sidebar')
    <x-menu-tree title="Pertemuan 2" icon="fas fa-tachometer-alt" :active="request()->is('pertemuan2/*')">

        <x-menu-item title="List Buku" icon="fas fa-list" :href="route('crud-buku.index')" :active="request()->routeIs('crud-buku.index')">
        </x-menu-item>

        <x-menu-item title="List Kategori" icon="fas fa-list" :href="route('crud-kategori.index')" :active="request()->routeIs('crud-kategori.index')">
        </x-menu-item>

        
        <x-menu-item title="List Pengguna" icon="fas fa-users" :href="route('crud-Pengguna.index')" :active="request()->routeIs('crud-Pengguna.index')">
        </x-menu-item>

        <x-menu-item title="List Role" icon="fas fa-users" :href="route('crud-role.index')" :active="request()->routeIs('crud-role.index')">
        </x-menu-item>

    </x-menu-tree>
@endsection
