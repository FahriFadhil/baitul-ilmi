@extends('dashboard.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>Edit Status Pendaftaran</h1>
    <a class="btn btn-secondary py-2 px-3" href="/dashboard/pendaftaran">&larr; Kembali</a>
</div>

<div class="row">
    <div class="col-md-5">
    <form method="post" action="{{ route('status.update', $data_status->id) }}">
            @csrf
            @method('put')
            <div class="col-lg-4 align-items-center d-flex justify-content-center mt-4">
                <img src="{{ asset('icon/logo.png') }}" alt="..." class="card-img my-1 ms-auto mt-4"
                    style="width:28rem; height:20rem; padding-left: 9rem;">
            </div>

            <select name="status" class="form-control my-3 px-3 py-2">
              <option value="0">Ditutup</option>
              <option value="1">Dibuka</option>
            </select>

            <label for="">Tahun Ajaran</label>
            <input required class="form-control mt-1 px-3 py-2" name="tahun_ajaran" type="text" value="{{ $data_status->tahun_ajaran }}">
            
            <button class="btn btn-success px-4 py-2 mt-3" type="submit">Edit</button>
        </form>
    </div>
</div>

@endsection