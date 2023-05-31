@extends('dashboard.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>{{ ucfirst(basename(Request::path())) }}</h1>
    <div class="action gap-4 row align-items-center">
        <div class="col search-bar">
            <input type="text" class="col py-2 px-3 rounded" placeholder="Cari Alumni...">
        </div>
        <a class="col btn btn-primary py-2 px-3" href="{{route('alumni.create')}}">Tambah Alumni +</a>
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
                    @if($dataalumni->count()==0)
                    <p class="mb-2">
                        Data Belum Dimasukkan
                    </p>
                    @else
                    <tbody class="p-2 mt-4">

                        @foreach($dataalumni as $row)
                        <tr>
                            <td class="p-2 text-center">
                            {{ $loop->iteration + ($dataalumni->perpage() * ($dataalumni->currentPage() -1)) }}
                            </td>
                            <td class="p-2">{{$row->nis}}</td>
                            <td class="p-2">{{$row->name}}</td>
                            <td class="p-2">{{$row->gender}}</td>
                            <form action="/dashboard/alumni/destroy/{{$row->id}}" method="post">
                                @csrf
                                {{method_field('DELETE')}}
                                <td class="p-2">
                                    <a href="{{route('alumni.edit', $row->id)}}" class="bx bx-edit btn btn-primary px-3 p-1 ms-2 px-4 py-2"></a>
                                    <button type="sumbit" class="bx bx-trash btn btn-danger px-4 py-2"></button>
                                </td>
                            </form>
                        </tr>
                        @endforeach
                    </tbody>
                    @endif
                </table>
                {{ $dataalumni->appends(Request::all())->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
@section('css')

<style>
    .page-item .page-link{
        padding: 20px;
    }
</style>

@endsection
