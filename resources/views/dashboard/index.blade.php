@extends('dashboard.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>{{ ucfirst(basename(Request::path())) }}</h1>
</div>

<div class="py-4">
    <div class="d-flex justify-content-between align-items-center">
        <h3>Overview Pendaftaran</h3>
        <a href="">Lihat Selengkapnya &raquo;</a>
    </div>
    <div class="card border-0 p-4 my-3">

    </div>
    <div class="row gap-5">
        <div class="col-lg my-3">
            <div class="d-flex justify-content-between align-items-center">
                <h3>Overview Berita</h3>
                <a href="">Lihat Selengkapnya &raquo;</a>
            </div>
            <div class="card border-0 p-4 my-3">
                <div class="col p-2">
                    <a class="card card-news border-0" href="/dashboard/news/detail">
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
        </div>
        <div class="col-lg my-3">
            <div class="d-flex justify-content-between align-items-center">
                <h3>Overview Gallery</h3>
                <a href="">Lihat Selengkapnya &raquo;</a>
            </div>
            <div class="card card-gallery border-0 p-4 my-3">
                <div class="row row-cols-1 row-cols-lg-2">
                    <div class="col p-2">
                        <div class="card">
                            <img src="{{ asset('icon/logo.png') }}" alt="..." class="card-img p-1">
                            <div class="card-img-overlay p-3 text-white">
                                <div class="card-action">
                                    <a href="" class="btn btn-lg btn-danger" onclick="confrim('Yakin Menghapus Gallery Ini?\nHal ini tidak dapat diulang')"><i class='bx bx-trash p-2'></i></a>
                                </div>
                                <p class="card-title">Lorem sit amet, consectetur adipisicing elit. Temporibus, placeat?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col p-2">
                        <div class="card">
                            <img src="{{ asset('icon/logo.png') }}" alt="..." class="card-img p-1">
                            <div class="card-img-overlay p-3 text-white">
                                <div class="card-action">
                                    <a href="" class="btn btn-lg btn-danger" onclick="confrim('Yakin Menghapus Gallery Ini?\nHal ini tidak dapat diulang')"><i class='bx bx-trash p-2'></i></a>
                                </div>
                                <p class="card-title">Lorem sit amet, consectetur adipisicing elit. Temporibus, placeat?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col p-2">
                        <div class="card">
                            <img src="{{ asset('icon/logo.png') }}" alt="..." class="card-img p-1">
                            <div class="card-img-overlay p-3 text-white">
                                <div class="card-action">
                                    <a href="" class="btn btn-lg btn-danger" onclick="confrim('Yakin Menghapus Gallery Ini?\nHal ini tidak dapat diulang')"><i class='bx bx-trash p-2'></i></a>
                                </div>
                                <p class="card-title">Lorem sit amet, consectetur adipisicing elit. Temporibus, placeat?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col p-2">
                        <div class="card">
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
            </div>
        </div>
    </div>
</div>

@endsection

@section('css')

<style>
    .card-news {
        transition: .3s;
        cursor: pointer;
        text-decoration: none;
        color: black;
    }

    .card-news:hover {
        background-color: hsl(0, 0%, 95%);
    }

    .card-gallery {
        display: block;
    }

    .card-gallery:hover .card-img-overlay {
        display: block;
    }

    .card-gallery .card-img-overlay {
        display: none;
        transition: .3s;
        backdrop-filter: blur(4px);
    }

    .card-gallery .card-img-overlay .card-title {
        position: absolute;
        bottom: .5rem;
        text-shadow: .5px .5px 0 black;
    }
</style>

@endsection