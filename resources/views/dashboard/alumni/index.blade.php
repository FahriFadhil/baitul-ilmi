@extends('dashboard.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>{{ ucfirst(basename(Request::path())) }}</h1>
    <div class="action gap-4 row align-items-center">
        <div class="col search-bar">
            <input type="text" class="col py-2 px-3 rounded" placeholder="Cari Alumni...">
        </div>
        <a class="col btn btn-primary py-2 px-3" href="/dashboard/gallery/create">Tambah Alumni +</a>
    </div>
</div>

<div class="row">
    <div class="col-md-12 mt-4">
        <div class="card">
            <div class="row m-4">
                <table class="table-alumni table table-bordered">
                    <thead class="induk m-4">
                        <th style="width:2%;" class="text-center p-3">
                            No
                        </th>
                        <th style="width: 5%;" class="text-center p-3">
                            No.induk
                        </th>
                        <th style="width:20%;" class="text-center p-3">
                            Nama Siswa
                        </th>
                        <th style="width: 5%;" class="text-center p-3">
                            Jenis kelamin
                        </th>
                        <th style="width: 5%;" class="text-center p-3">
                            Pilihan
                        </th>
                    </thead>
                    <tbody class="p-2 mt-4">
                        <tr>
                            <td class="p-2 text-center">1</td>
                            <td class="p-2">0055924867</td>
                            <td class="p-2">Muhammad Faiq Al Harits</td>
                            <td class="p-2">Laki-Laki</td>
                            <td class="p-2">
                                <a href="#" class="btn btn-primary px-3 p-1 ms-2">Edit</a>
                                <button type="submit" class="btn btn-danger p-1 px-2">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-2 text-center">1</td>
                            <td class="p-2">0055924867</td>
                            <td class="p-2">Muhammad Faiq Al Harits</td>
                            <td class="p-2">Laki-Laki</td>
                            <td class="p-2">
                                <a href="#" class="btn btn-primary px-3 p-1 ms-2">Edit</a>
                                <button type="submit" class="btn btn-danger p-1 px-2">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-2 text-center">1</td>
                            <td class="p-2">0055924867</td>
                            <td class="p-2">Muhammad Faiq Al Harits</td>
                            <td class="p-2">Laki-Laki</td>
                            <td class="p-2">
                                <a href="#" class="btn btn-primary px-3 p-1 ms-2">Edit</a>
                                <button type="submit" class="btn btn-danger p-1 px-2">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
