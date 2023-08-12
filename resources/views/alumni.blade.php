@extends('layouts.app')

@section('content')

<main id="#page-alumni">
    <div class="alumni container mb-5 py-5">
        @if($data_tahun_kelulusan->count()==0)

        <div class="card mt-5 mb-5">
            <div class="card-body text-center">
                <h4 class="mt-2 mb-2">
                    Belum ada Data Kelulusan Siswa
                </h4>
            </div>
        </div>

        @else
        <form action="/alumni" method="get">
            <div class="input-group mt-2">
                <label class="input-group-text" for="inputGroupSelect01">Alumni</label>
                <select class="form-select" id="inputGroupSelect01" name="query_tahun">
                    @foreach($data_tahun_kelulusan as $row)
                    <option value="{{ $row->id }}">{{ $row->year }}</option>
                    @endforeach
                </select>
                <div class="input-group-append">
                    <button class="btn btn-primary rounded-1" type="submit" id="button-addon2">Ubah</button>
                </div>
            </div>
        </form>
        <table class="table table-bordered mt-4">
            <tr>
                <td colspan="3" width="300">
                    <strong>Tahun Ajaran {{ $data_tahun_kelulusan_sekarang->year }}</strong>
                </td>
            </tr>
            <tr>
                <td colspan="4" width="300">
                    <strong>{{ $data_tahun_kelulusan_sekarang->principal_name }}</strong>
                </td>
            </tr>

        </table>
        @if($data_alumni->count()==0)
        Belum ada Data Siswa
        @else
        <div class=table-responsive>
            <table class="table-alumni table table-bordered">
                <thead class="induk m-4">
                    <th style="width:1%;" class="text-center p-3">
                        No
                    </th>
                    <th style="width: 4%;" class="text-center p-3">
                        Nama
                    </th>
                    <th style="width: 3%;" class="text-center p-3">
                        No.induk
                    </th>
                    <th style="width: 3%;" class="text-center p-3">
                        Aktivitas Sekarang
                    </th>
                    <th style="width: 4%;" class="text-center p-3">
                        Jenis kelamin
                    </th>
                </thead>
                <tbody class="p-2 mt-4">

                    @foreach($data_alumni as $row)
                    <tr>
                        <td class="p-2 text-center">
                            {{ $loop->iteration }}
                        </td>
                        <td class="p-2">{{$row->name}}</td>
                        <td class="p-2">{{$row->nis}}</td>
                        <td class="p-2">{{$row->aktivitas}}</td>
                        <td class="p-2">{{$row->gender}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
        @endif
    </div>
</main>
@endsection