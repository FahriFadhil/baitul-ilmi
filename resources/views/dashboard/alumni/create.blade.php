@extends('dashboard.layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h1>Tambah Alumni</h1>
    <a class="btn btn-secondary py-2 px-3" href="/dashboard/alumni">&larr; Kembali</a>
</div>

<div class="row">
    <div class="col-md-5">

        <form method="post" action="{{route('alumni.store')}}">
            @csrf
            <div class="col-lg-4 align-items-center d-flex justify-content-center">
                <img src="{{ asset('icon/logo.png') }}" alt="..." class="card-img my-1 ms-auto mt-4"
                    style="max-width: 30rem;">
            </div>


            <input required class="form-control mt-3 px-3 py-2" name="name" type="text" placeholder="Nama Siswa">


            <input required class="form-control mt-3 px-3 py-2" name="nis" type="number" placeholder="No induk siswa" max="9999999999">



            <select name="graduation_id" class="form-control mt-3 px-3 py-2" type="text" placeholder="Tahun Kelulusan">
                @foreach($datakelulusan as $row)
                <option value="{{$row->id}}">{{$row->year}}</option>
                @endforeach
            </select>


            <select name="gender" class="form-control mt-3 px-3 py-2" type="text" placeholder="Jenis Kelamin">
                <option value="Perempuan">Perempuan</option>
                <option value="Laki-Laki">Laki Laki</option>
            </select>

            <button type="submit" class="btn btn-success p-2 mt-3">Tambah</button>
        </form>
    </div>
    <div class="col-md-5 ms-auto me-5"
        style="align-items:center; display:flex; justify-content:center; flex-direction:column;">
        <h3>Tambah Data Tahun Kelulusan</h3>
        <form method="POST" action="/dashboard/alumni/create/store">
            @csrf
            <div class="col-md-12 mt-3 d-flex">
                <input class="form-control px-4 py-2 text-center" name="year" type="text" placeholder="Tahun Kelulusan"
                    required>
                <!-- <button type="submit" class="btn btn-success px-4">submit</button> -->
                <input class="form-control px-5 py-2 text-center" name="principal_name" type="text"
                    placeholder="Kepala Sekolah" required>
            </div>
            <button type="submit"
                class="bg bg-success w-100 mt-3 p-2 rounded border border-0 text-white">Tambahkan</button>

        </form>
        <table class="table table-bordered mt-3">
            <tr class="bg-light">
                <th class="p-2">Tahun</th>
                <th class="p-2">Kepala Sekolah</th>
                <th class="p-2">Action</th>
            </tr>
            @foreach($datakelulusan as $row)
            <tr style="list-style:none;" class="w-100 mt-2 p-2">
                <td class="bg-light p-2">{{$row->year }}</td>
                <td class="bg-light p-2">{{$row->principal_name }}</td>
                <td class="bg-light p-2">
                    <form method="post" action="/dashboard/alumni/create/destroy/{{$row->id}}">
                        @csrf
                        {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-danger px-2 py-1">
                            <i class="bx bx-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

    </div>
</div>


@endsection
