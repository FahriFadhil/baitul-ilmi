@extends('layouts.app')


@section('content')

<main id="#page-alumni">
    <div class="alumni">
        <div class="input-group mt-2 container">
            <label class="input-group-text" for="inputGroupSelect01">Alumni</label>
            <select class="form-select" id="inputGroupSelect01">
                <option selected>Tahun</option>
                <option value="1">2016/2017</option>
                <option value="2">2017/2018</option>
                <option value="3">2018/2019</option>
            </select>
            <div class="input-group-append">
                <button class="btn btn-primary rounded-1" type="button" id="button-addon2">Ubah</button>
            </div>

        </div>
        <table class="table table-bordered container mt-4">
            <tr>
                <td colspan="3" width="300">
                    <strong>Angkatan 2015/2017</strong>
                </td>
            </tr>
            <tr>
                <td colspan="4" width="300">
                    <strong>Kepala Sekolah : Luzman Rifqi S.pd.I</strong>
                </td>
            </tr>
            </tr>
        </table>
        <table class="table-alumni table table-bordered container   ">
            <thead class="induk">
                <th style="width:2%; text-align:center;">
                    <strong>No</strong>
                </th>
                <th style="width: 5%; text-align:center;">
                    <strong>No.induk</strong>
                </th>
                <th style="width:20%; text-align:center;">
                    <strong>Nama Siswa</strong>
                </th>
                <th style="width: 5%; text-align:center;">
                    <strong>Jenis kelamin</strong>
                </th>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>0055924867</td>
                    <td>Muhammad Faiq Al Harits</td>
                    <td>Laki-Laki</td>
                </tr>
            </tbody>
            
        </table>
    </div>

</main>
@endsection
