@extends('dashboard.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>{{ ucfirst(basename(Request::path())) }}</h1>
</div>

<div class="row">
    <div class="col-lg-6 pe-lg-3 mb-4">
        <div class="card shadow rounded mb-4 p-4">
            <div class="row">
                <div class="col">
                    <div>
                        <p>
                            Status Pendaftaran :
                        </p>
                        <h2 class="pt-2">Dibuka</h2>
                    </div>
                </div>
                <div class="ms-auto col-2">
                    <div class="btn btn-secondary d-flex align-items-center gap-2 py-2 px-3">
                        <i class="bx bx-edit"></i>
                        <p>
                            Ubah
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow rounded">
            <div class="fs-4 justify-content-center d-flex mt-4">
                <h3 class="fs-4 justify-content-center d-flex mt-3">Biaya Pendaftaran</h3>
            </div>
            <table class="teks text-start mx-5 mt-4 mb-1">
                <tr class="pb-1">
                    <td>
                        <p><i class="bx bx-money me-4"></i>Biaya Pendaftaran :</p>
                    </td>
                    <td>
                        <p>Rp 800.000,-</p>
                    </td>
                </tr>
                <tr class="pb-1">
                    <td>
                        <p><i class="bx bx-detail me-4"></i>Biaya Masuk :</p>
                    </td>
                    <td>
                        <p>Rp 800.000,-</p>
                    </td>
                </tr>
                <tr class="pb-1">
                    <td>
                        <p><i class="bx bx-task me-4"></i>SPP Bulanan :</p>
                    </td>
                    <td>
                        <p>Rp 800.000,-</p>
                    </td>
                </tr>
                <tr class="pb-1">
                    <td>
                        <p><i class="bx bx-file me-4"></i>Biaya Daftar Ulang :</p>
                    </td>
                    <td>
                        <p>Rp 800.000,-</p>
                    </td>
                </tr>
            </table>
            <button type="button" class="btn btn-primary p-2 m-4">Ubah Data</button>
        </div>
    </div>
    <div class="col-lg-6 ps-lg-3 mb-4">
        <div class="card p-4 shadow p-3 bg-body-tertiary rounded">
            <div class="d-flex justify-content-between align-items-end mx-3">
                <h3 class="fs-4 justify-content-center d-flex mt-3">Alur Pendaftaran</h3>
                <div class="btn btn-secondary d-flex align-items-center gap-2 py-2 px-3">
                    <i class="bx bx-edit"></i>
                    <p>
                        Ubah
                    </p>
                </div>
            </div>
            <div class="mt-4 mx-2">
                <div class="d-flex align-items-center rounded bg-light d-flex mb-2">
                    <p class="p-3">1.</p>
                    <p class="p-3">Membayar uang pendaftaran</p>
                </div>
                <div class="d-flex align-items-center rounded bg-light d-flex mb-2">
                    <p class="p-3">2.</p>
                    <p class="p-3">Membayar uang pendaftaran</p>
                </div>
                <div class="d-flex align-items-center rounded bg-light d-flex mb-2">
                    <p class="p-3">3.</p>
                    <p class="p-3">Membayar uang pendaftaran</p>
                </div>
                <div class="d-flex align-items-center rounded bg-light d-flex mb-2">
                    <p class="p-3">4.</p>
                    <p class="p-3">Membayar uang pendaftaran</p>
                </div>
                <div class="d-flex align-items-center rounded bg-light d-flex mb-2">
                    <p class="p-3">5.</p>
                    <p class="p-3">Membayar uang pendaftaran</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6 pe-lg-3">
        <div class="card p-4 shadow p-3 bg-body-tertiary rounded">
            <h3 class="fs-4 justify-content-center d-flex mt-3">Agenda Pendaftaran</h3>
            <div class="teks mt-4 mx-2">
                <div class="justify-content-end align-items-center rounded bg-light d-flex mb-2">
                    <p class="p-3 me-auto ">Membayar uang pendaftaran</p>
                    <button type="button" class="btn btn-secondary py-1 px-2 me-1">
                        <i class="bx bx-edit"></i>
                    </button>
                    <button type="button" class="btn btn-danger py-1 px-2 me-3">
                        <i class="bx bx-trash"></i>
                    </button>
                </div>
                <div class="justify-content-end align-items-center rounded bg-light d-flex mb-2">
                    <p class="p-3 me-auto ">Membayar uang pendaftaran</p>
                    <button type="button" class="btn btn-secondary py-1 px-2 me-1">
                        <i class="bx bx-edit"></i>
                    </button>
                    <button type="button" class="btn btn-danger py-1 px-2 me-3">
                        <i class="bx bx-trash"></i>
                    </button>
                </div>
                <div class="justify-content-end align-items-center rounded bg-light d-flex mb-2">
                    <p class="p-3 me-auto ">Membayar uang pendaftaran</p>
                    <button type="button" class="btn btn-secondary py-1 px-2 me-1">
                        <i class="bx bx-edit"></i>
                    </button>
                    <button type="button" class="btn btn-danger py-1 px-2 me-3">
                        <i class="bx bx-trash"></i>
                    </button>
                </div>
            </div>
            <form action="" method="post" class="mt-3 mx-2">
                <div class="input-group">
                    <input required name="" type="text" class="form-control px-3 py-2" placeholder="Tambah Syarat Baru">
                    <button type="submit" class="btn btn-success px-3 py-2">Tambah +</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-6 ps-lg-3 mb-4">
        <div class="card p-4 shadow p-3 bg-body-tertiary rounded">
            <h3 class="fs-4 justify-content-center d-flex mt-3">Syarat Pendaftaran</h3>
            <div class="teks mt-4 mx-2">
                <div class="justify-content-end align-items-center rounded bg-light d-flex mb-2">
                    <p class="p-3 me-auto ">Membayar uang pendaftaran</p>
                    <button type="button" class="btn btn-secondary py-1 px-2 me-1">
                        <i class="bx bx-edit"></i>
                    </button>
                    <button type="button" class="btn btn-danger py-1 px-2 me-3">
                        <i class="bx bx-trash"></i>
                    </button>
                </div>
            </div>
            <form action="" method="post" class="mt-3 mx-2">
                <div class="input-group">
                    <input required name="" type="text" class="form-control px-3 py-2" placeholder="Tambah Syarat Baru">
                    <button type="submit" class="btn btn-success px-3 py-2">Tambah +</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@section('css')
<style>

</style>
@endsection