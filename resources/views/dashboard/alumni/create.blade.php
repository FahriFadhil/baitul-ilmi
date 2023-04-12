@extends('dashboard.layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h1>Tambah Alumni</h1>
    <a class="btn btn-secondary py-2 px-3" href="/dashboard/alumni">&larr; Kembali</a>
</div>


<div class="col-lg-3 align-items-center d-flex justify-content-center">
    <img src="{{ asset('icon/logo.png') }}" alt="..." class="card-img my-1 ms-auto mt-4" style="max-width: 15rem;">
</div>

<div class="col-md-5 mt-4">
    <input class="form-control px-3 py-2" type="text" placeholder="Nama Siswa">
</div>
<div class="col-md-5 mt-3">
    <input class="form-control px-3 py-2" type="text" placeholder="No induk">
</div>

<div class="col-md-5 mt-3">
    <select class="form-control px-3 py-2" type="text" placeholder="Tahun Kelulusan">
        <option value="2018-2019">Tahun Kelulusan : 2018-2019</option>
        <option value="2019-2020">Tahun Kelulusan : 2019-2020</option>
        <option value="2020-2021">Tahun Kelulusan : 2020-2021</option>
        <option value="2021-2022">Tahun Kelulusan : 2021-2022</option>
    </select>
</div>
<div class="col-md-5 mt-3">
    <select class="form-control px-3 py-2" type="text" placeholder="Jenis Kelamin">
        <option value="Laki Laki">Laki Laki</option>
        <option value="perempuan">Perempuan</option>
    </select>
</div>
<button type="submit" class="btn btn-success p-2 mt-3">Tambah</button>
@endsection