@extends('dashboard.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>{{ ucfirst(basename(Request::path())) }}</h1>
    <div class="action gap-4 row align-items-center">
        <div class="col search-bar">
            <input type="text" class="col py-2 px-3 rounded" placeholder="Cari Gallery...">
        </div>
        <a class="col btn btn-primary py-2 px-3" href="/dashboard/gallery/create">Tambah Gallery +</a>
    </div>
</div>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-6 py-4">

    <div class="col p-2">
        <div class="card border-0">
            <img src="{{ asset('icon/logo.png') }}" alt="..." class="card-img p-1">
            <div class="card-img-overlay p-3 text-white">
                <div class="card-action">
                    <a href="" class="btn btn-lg btn-danger" onclick="confrim('Yakin Menghapus Gallery Ini?\nHal ini tidak dapat diulang')"><i class='bx bx-trash p-2'></i></a>
                </div>
                <p class="card-title">Lorem sit amet, consectetur adipisicing elit. Temporibus, placeat?</p>
            </div>
        </div>
    </div>

</div>

@endsection

@section('css')
<style>
    .card {
        display: block;
    }

    .card:hover .card-img-overlay {
        display: block;
    }

    .card .card-img-overlay {
        display: none;
        transition: .3s;
        backdrop-filter: blur(4px);
    }

    .card .card-img-overlay .card-title {
        position: absolute;
        bottom: .5rem;
        text-shadow: .5px .5px 0 black;
    }

    .search-bar input {
        outline: none;
        border: none;
        padding: .25rem .5rem;
        width: 20rem;
    }
</style>
@endsection