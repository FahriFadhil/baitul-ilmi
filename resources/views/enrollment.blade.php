@extends('layouts.app')

@section('content')

<main id="enrollment-page">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/1200x800?school" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1200x801?school" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1200x802?school" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <div class="carousel-text text-center">
            <h1 class="h2">
                Pendaftaran Peserta Didik Baru
                @if($data_status['0']->status == 1)
                Tahun Ajaran {{ $data_status['0']->tahun_ajaran }}
                @else
                @endif
            </h1>
            <div class="divider d-none d-md-block"></div>
            <p class="quote d-none d-md-block">
                Sekolah SMA Islam Terpadu Baitul 'Ilmi membuka pendaftaran bagi <b>siswa putri SMA dan sederajat,</b>
                @if($data_status['0']->status == 1)
                untuk tahun ajaran {{ $data_status['0']->tahun_ajaran }}.
                @else
                @endif
            </p>
            @if($data_status['0']->status == 1)
            <a href="" class="btn btn-success btn-lg mt-3"> Daftar Sekarang</a>
            @else
            @endif
        </div>
    </div>
    <div class="container">
        <section class="alur">
            <h1 class="text-center">Alur Pendaftaran</h1>
            <div class="tree">
                <div class="row mt-4 g-4">
                    <div class="d-sm-none d-md-flex col-4 m-auto graph">
                        <div class="vertical-line"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                    </div>
                    <div class="ms-auto col">
                        @foreach($data_alur as $alur)
                        <div class="card">
                            <div class="row align-items-center">
                                <div class="col-3 p-0 rounded title-point">
                                    <h1 class="text-center m-0 border-end">{{ $loop->iteration }}</h1>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h4>{{ $alur->nama_alur }}</h4>
                                        <p>{{ $alur->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
        </section>
        <section class="biaya">
            <h1 class="text-center">Biaya Pendaftaran</h1>
            <div class="row mt-5">
                @foreach($data_biaya as $biaya)
                <div class="col-md mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center mt-2">{{ $biaya->nama_biaya }}</h4>
                        </div>
                        <div class="card-body text-center">
                            <h5>{{ $biaya->jumlah_biaya }}</h5>
                            <hr>
                            <div class="card-text">
                                {{ $biaya->description }}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <section class="syarat">
            <h1 class="text-center">Persyaratan Pendaftaran</h1>
            <div class="row mt-5 row-cols-1 row-cols-md-2">
                @foreach($data_syarat as $syarat)
                <div class="col mb-4 mx-auto">
                    <div class="card">
                        <div class="row align-items-center">
                            <div class="col-3 p-0 rounded title-point">
                                <h1 class="text-center m-0 border-end">{{ strtoupper(chr(96 + $loop->iteration)) }}</h1>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <div class="card-text">
                                        {{ $syarat->syarat }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        @if($data_status['0']->status == 1)
        <section class="agenda">
            <h1 class="text-center">Agenda Penerimaan Tahun Ajaran 2023/2024</h1>
            <div class="row mt-5 row-cols-1 row-cols-lg-2">
                @foreach($data_agenda as $agenda)
                <div class="col mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-text">
                                <h5>{{ $agenda->agenda }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <div class="row d-flex mb-5">
            <h3>Lakukan Pendaftaran Sekarang</h3>
            <a href="" class="btn btn-success btn-lg mt-3"> Daftar Sekarang</a>
        </div>
        @else
        @endif
    </div>
    </div>
</main>

@endsection