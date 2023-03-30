@extends('dashboard.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>{{ ucfirst(basename(Request::path())) }}</h1>
    <p class="btn btn-primary py-2 px-3" data-bs-toggle="modal" data-bs-target="#add-gallery" type="button">Add +</p>
</div>

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 py-4">

    <div class="col p-2">
        <a class="card border-0">
            <img src="{{ asset('icon/logo.png') }}" alt="..." class="card-img p-1">
            <div class="card-body p-3">
                <h4 class="card-title">Baitul 'Ilmi Membuka Pendaftaran</h4>
                <div class="card-text pt-2">
                    <p>
                        Dibuka Pendaftran dari Tanggal Lorem ipsum dolor sit amet.
                    </p>
                    <div class="d-flex justify-content-between pt-1">
                        <div class="text-muted text-sm">
                            By: Luzman Rifqi
                        </div>
                        <div class="text-muted text-sm">
                            28 Maret, 2023
                        </div>
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

</style>

@endsection