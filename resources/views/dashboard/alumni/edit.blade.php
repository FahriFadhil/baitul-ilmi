@extends('dashboard.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>Edit Alumni</h1>
    <a class="btn btn-secondary py-2 px-3" href="/dashboard/alumni">&larr; Kembali</a>
</div>

<div class="row">
    <div class="col-md-5">

        <form method="post" action="{{route('alumni.update', $dataalumni->id)}}">
            @csrf
            @method('put')
            <div class="col-lg-4 align-items-center d-flex justify-content-center">
                <img src="{{ asset('icon/logo.png') }}" alt="..." class="card-img my-1 ms-auto mt-4"
                    style="max-width: 30rem;">
            </div>


            <input required class="form-control mt-3 px-3 py-2" name="name" value="{{$dataalumni->name}}" type="text" placeholder="Nama Siswa">


            <input required class="form-control mt-3 px-3 py-2" name="nis" value="{{$dataalumni->nis}}" type="number" max="9999999999"  placeholder="No induk">



            <select name="graduation_id" class="form-control mt-3 px-3 py-2" type="text" placeholder="Tahun Kelulusan">
                @foreach($datakelulusan as $row)
                <option value="{{$row->id}}">{{$row->year}}</option>
                @endforeach
            </select>

            <input required class="form-control mt-3 px-3 py-2" name="name" value="{{ $dataalumni->aktivitas }}" type="text" placeholder="aktivitas">

            <select name="gender" class="form-control mt-3 px-3 py-2" value="{{ $dataalumni->gender }}" type="text" placeholder="Jenis Kelamin">
                <option value="Perempuan">Perempuan</option>
                <option value="Laki-Laki">Laki Laki</option>
            </select>

            <button type="submit" class="btn btn-success p-2 mt-3">Edit</button>
        </form>

    </div>  
</div>
</div>



@endsection
