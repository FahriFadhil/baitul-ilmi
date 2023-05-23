@extends('layouts.app')


@section('content')

<main id="#page-alumni">
    <div class="alumni container">
        <div class="input-group mt-2">
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
        <table class="table table-bordered mt-4">
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
        <div class=table-responsive>
            <table class="table-alumni table table-bordered">
                <thead class="induk m-4">
                    <th style="width:1%;" class="text-center p-3">
                        No
                    </th>
                    <th style="width: 4%;" class="text-center p-3">
                        Nama
                    </th>
                    <th style="width: 4%;" class="text-center p-3">
                        No.induk
                    </th>
                    <th style="width: 4%;" class="text-center p-3">
                        Jenis kelamin
                    </th>
                </thead>
                <tbody class="p-2 mt-4">

                    @foreach($data_alumni as $row)
                    <tr>
                        <td class="p-2 text-center">
                            {{ $loop->iteration + ($data_alumni->perpage() * ($data_alumni->currentPage() -1)) }}
                        </td>
                        <td class="p-2">{{$row->name}}</td>
                        <td class="p-2">{{$row->nis}}</td>
                        <td class="p-2">{{$row->gender}}</td>


                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $data_alumni->links() }}
        </div>

    </div>

</main>
@endsection
