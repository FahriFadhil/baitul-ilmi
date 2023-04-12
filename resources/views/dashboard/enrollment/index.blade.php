@extends('dashboard.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>{{ ucfirst(basename(Request::path())) }}</h1>
    <a class="btn btn-primary py-2 px-3" data-bs-toggle="modal" href="dashboard/enrollment/create" data-bs-target="#add-gallery" type="button">Add +</a>

</div>

<div class="row py-4">
    <div class="card text-center mb-3 d-flex justify-content-center align-items shadow p-3 mb-5 bg-body-tertiary rounded"
        style="width: 18rem; height:4rem;">

    </div>

</div>
<div class="row gap-4">
    <div class="col-md-5">
        <div class="card mb-3 p-4 shadow p-3 mb-5 bg-body-tertiary rounded" style=" height:280px;">
            <div class="fs-4 justify-content-center d-flex">
                <h3 class="text-center justify-content-center d-flex align-items-center">Biaya Pendaftaran</h3>
            </div>
            <div class="teks mt-4 mx-4 text-start">
                <p><i class="bx bx-money me-4"></i>Biaya Pendaftaran</p>
                <p class="mt-1"><i class="bx bx-detail me-4"></i>Biaya Masuk</p>
                <p class="mt-1"><i class="bx bx-task me-4"></i>SPP Bulanan</p>
                <p class="mt-1"><i class="bx bx-file me-4"></i>Biaya Daftar Ulang</p>
            </div>
            <button type="button" class="btn btn-primary p-2 m-4">Edit</button>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-3 align-items-center p-4 shadow p-3 mb-5 bg-body-tertiary rounded"
            style="width: 44rem; height:280px;">
            <h3 class="fs-4 a">Alur Pendaftaran</h3>
        </div>
    </div>
</div>
<div class="row gap-4">
    <div class="col-md-6">
        <div class="card mb-3 p-4 shadow p-3 mb-5 bg-body-tertiary rounded" style="">
            <h3 class="fs-4 a justify-content-center d-flex mt-3">Syarat Pendaftaran</h3>
            <div class="teks mt-5 mx-4 text-start">
                <div class="justify-content-end bg-light d-flex">
                    <p class="p-3 me-auto ">Membayar uang pendaftaran</p>
                    <button type="button" class="btn btn-primary px-4 m-2 mx-0 ">Edit</button>
                    <button type="button" class="btn btn-danger mx-0 px-4 my-2">Edit</button>
                </div>
                <div class="mt-3 d-flex justify-content-end bg-light">
                    <p class="p-3 me-auto">Mengisi formulir pendaftaran</p>
                    <button type="button" class="btn btn-primary px-4 mx-0 m-2">Edit</button>
                    <button type="button" class="btn btn-danger mx-0 px-4 my-2">Edit</button>
                </div>
                <div class="mt-3 bg-light d-flex justify-content-end">
                    <p class="p-3 me-auto">Menyiapkan berkas-berkas persyaratan</p>
                    <button type="button" class="btn btn-primary px-4 mx-0 m-2">Edit</button>
                    <button type="button" class="btn btn-danger mx-0 px-4 my-2">Edit</button>
                </div>
                <div class="mt-3 bg-light d-flex justify-content-end">
                    <p class="p-3 me-auto">Foto copy akta kelahiran (1 lembar)</p>
                    <button type="button" class="btn btn-primary px-4 mx-0 m-2">Edit</button>
                    <button type="button" class="btn btn-danger mx-0 px-4 my-2">Edit</button>
                </div>
                <div class="mt-3 bg-light d-flex justify-content-end">
                    <p class="p-3 me-auto">Nomor NISN siswa (1 lembar)</p>
                    <button type="button" class="btn btn-primary px-4 mx-0 m-2">Edit</button>
                    <button type="button" class="btn btn-danger mx-0 px-4 my-2">Edit</button>
                </div>
                <div class="mt-3 bg-light d-flex justify-content-end">
                    <p class="p-3 me-auto">Foto copy Kartu Keluarga (KK) (1 lembar)</p>
                    <button type="button" class="btn btn-primary px-4 mx-0 m-2">Edit</button>
                    <button type="button" class="btn btn-danger mx-0 px-4 my-2">Edit</button>
                </div>
                <div class="mt-3 bg-light d-flex justify-content-end">
                    <p class="p-3 me-auto">Foto copy KTP kedua orang tua</p>
                    <button type="button" class="btn btn-primary px-4 mx-0 m-2">Edit</button>
                    <button type="button" class="btn btn-danger mx-0 px-4 my-2">Edit</button>
                </div>
                <div class="mt-3 bg-light d-flex justify-content-end">
                    <p class="p-3 me-auto">Biaya Pendaftaran</p>
                    <button type="button" class="btn btn-primary px-4 mx-0 m-2">Edit</button>
                    <button type="button" class="btn btn-danger mx-0 px-4 my-2">Edit</button>
                </div>
                <div class="mt-3 bg-light d-flex justify-content-end">
                    <p class="p-3 me-auto">Biaya Pendaftaran</p>
                    <button type="button" class="btn btn-primary px-4 mx-0 m-2">Edit</button>
                    <button type="button" class="btn btn-danger mx-0 px-4 my-2">Edit</button>
                </div>
                <div class="mt-3 bg-light d-flex justify-content-end">
                    <p class="p-3 me-auto">Biaya Pendaftaran</p>
                    <button type="button" class="btn btn-primary px-4 mx-0 m-2">Edit</button>
                    <button type="button" class="btn btn-danger mx-0 px-4 my-2">Edit</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-3  p-4 shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 37.4rem;">
            <h3 class="fs-4 align-items-center">Agenda Pendaftaran</h3>
            <div class="mt-4 fs-5">
                Waktu Pendaftaran
            </div>
            <div class="input-group mt-2 ">
                <input class="form-control px-3 py-2" type="date">
                <div class="input-group-prepend">
                    <div class="input-group-text py-2 px-3 bg-light rounded-0">
                        Sampai
                    </div>
                </div>
                <input class="form-control px-3 py-2" type="date">
            </div>
            <div class="mt-4 fs-5">
                Waktu Pendaftaran
            </div>
            <div class="input-group mt-2 ">
                <input class="form-control px-3 py-2" type="date">
                <div class="input-group-prepend">
                    <div class="input-group-text py-2 px-3 bg-light rounded-0">
                        Sampai
                    </div>
                </div>
                <input class="form-control px-3 py-2" type="date">
            </div>
            <div class="mt-4 fs-5">
                Waktu Pendaftaran
            </div>
            <div class="input-group mt-2 ">
                <input class="form-control px-3 py-2" type="date">
            </div>
            <div class="mt-4 fs-5 m-0">
                Waktu Pendaftaran
            </div>
            <div class="input-group mt-2 ">
                <input class="form-control px-3 py-2" type="date">
                <div class="input-group-prepend">
                    <div class="input-group-text py-2 px-3 bg-light rounded-0">
                        Sampai
                    </div>
                </div>
                <input class="form-control px-3 py-2" type="date">
            </div>
        </div>
    </div>
</div>

@endsection
@section('css')
<style>

</style>
@endsection
