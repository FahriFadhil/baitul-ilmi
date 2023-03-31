@extends('dashboard.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>{{ ucfirst(basename(Request::path())) }}</h1>
    <div class="action gap-4 row align-items-center">
        <div class="col search-bar">
            <input type="text" class="col py-2 px-3 rounded" placeholder="Cari Berita...">
        </div>
        <a class="col btn btn-primary py-2 px-3" href="/dashboard/news/create">Tambah Berita +</a>
    </div>
</div>

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 row-cols-xl-5 py-4">

    <div class="col p-2">
        <a class="card border-0" href="/dashboard/news/detail">
            <img src="{{ asset('icon/logo.png') }}" alt="..." class="card-img p-1">
            <div class="card-body p-3">
                <h5 class="card-title">Baitul 'Ilmi Membuka Pendaftaran</h5>
                <div class="card-text pt-3">
                    <p style="font-size: 15px;" class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                    <div class="d-flex justify-content-between pt-3">
                        <p>
                            Luzman Rifqi
                        </p>
                        <p>
                            28 Maret, 2023
                        </p>
                    </div>
                </div>
            </div>
        </a>
    </div>

</div>

@endsection
@section('css')

<style>
    .card {
        transition: .3s;
        cursor: pointer;
        text-decoration: none;
        color: black;
    }

    .card:hover {
        background-color: hsl(0, 0%, 95%);
    }

    .search-bar input {
        outline: none;
        border: none;
        padding: .25rem .5rem;
        width: 20rem;
    }
</style>

@endsection