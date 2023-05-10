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
                        <h3 class="fs-4">
                            Status Pendaftaran :
                        </h3>
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
        <div class="card shadow rounded px-4">
            <div class="fs-4 justify-content-center d-flex mt-3">
                <h3 class="fs-4 justify-content-center d-flex mt-3">Biaya Pendaftaran</h3>
            </div>
            <div class="mx-2 mt-4 mb-4">

                @foreach($data_biaya as $row)
                <div class="justify-content-end align-items-center rounded bg-light d-flex my-1">
                    <p class="px-3 py-2">{{ $row->nama_biaya }}</p>:
                    <p class="px-3 py-2 me-auto">{{ $row->jumlah_biaya }}</p>
                    <a href="{{ route('biaya.edit', $row->id) }}" class="btn btn-sm btn-secondary py-1 px-2 me-3">
                        <i class="bx bx-edit"></i>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="col-lg-6 ps-lg-3 mb-4">
        <div class="card p-4 shadow p-3 bg-body-tertiary rounded">
            <div class="d-flex justify-content-center align-items-end mx-3">
                <h3 class="fs-4 justify-content-center d-flex mt-2">Alur Pendaftaran</h3>
            </div>
            <div class="mt-4 mx-2">

                @foreach($data_alur as $row)
                <div class="justify-content-end align-items-center rounded bg-light d-flex mb-2">
                    <p class="p-3 me-auto">{{ $row->nama_alur }}</p>
                    <a href="{{ route('alur.edit', $row->id) }}" class="btn btn-sm btn-secondary py-1 px-2 me-3">
                        <i class="bx bx-edit"></i>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6 pe-lg-3 mb-4">
        <div class="card p-4 shadow p-3 bg-body-tertiary rounded">
            <h3 class="fs-4 justify-content-center d-flex mt-2">Syarat Pendaftaran</h3>
            <div class="teks mt-4 mx-2">
                @foreach($data_syarat as $row)
                <div class="justify-content-end align-items-center rounded bg-light d-flex mb-2">
                    <p class="p-3 me-auto w-75">{{ $row->syarat }}</p>
                    <form action="/dashboard/enrollment/syarat/{{$row->id}}" method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <a href="{{ route('syarat.edit', $row->id) }}" type="button" class="btn btn-secondary py-1 px-2 me-1">
                            <i class="bx bx-edit"></i>
                        </a>
                        <button type="submit" class="btn btn-danger py-1 px-2 me-3">
                            <i class="bx bx-trash"></i>
                        </button>
                    </form>
                </div>
                @endforeach
            </div>
            <form action="/dashboard/enrollment/syarat" method="post" class="mt-3 mx-2">
                @csrf
                <div class="input-group">
                    <input required name="syarat" type="text" class="form-control px-3 py-2" placeholder="Tambah Syarat Baru">
                    <button type="submit" class="btn btn-success px-3 py-2">Tambah +</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-6 ps-lg-3 mb-4">
        <div class="card p-4 shadow p-3 bg-body-tertiary rounded">
            <h3 class="fs-4 justify-content-center d-flex mt-2">Agenda Pendaftaran</h3>
            <div class="teks mt-4 mx-2">
                @foreach($data_agenda as $row)
                <div class="justify-content-end align-items-center rounded bg-light d-flex mb-2">
                    <p class="p-3 me-auto w-75">{{ $row->agenda }}</p>
                    <form action="/dashboard/enrollment/agenda/{{$row->id}}" method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <a href="{{ route('agenda.edit', $row->id) }}" type="button" class="btn btn-secondary py-1 px-2 me-1">
                            <i class="bx bx-edit"></i>
                        </a>
                        <button type="submit" class="btn btn-danger py-1 px-2 me-3">
                            <i class="bx bx-trash"></i>
                        </button>
                    </form>
                </div>
                @endforeach
            </div>
            <form action="/dashboard/enrollment/agenda/" method="post" class="mt-3 mx-2">
                @csrf
                <div class="input-group">
                    <input required name="agenda" type="text" class="form-control px-3 py-2" placeholder="Tambah Agenda Baru">
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