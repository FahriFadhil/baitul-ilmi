@extends('dashboard.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>Edit Biaya</h1>
    <a class="btn btn-secondary py-2 px-3" href="/dashboard/pendaftaran">&larr; Kembali</a>
</div>

<div class="row">
    <div class="col-md-5">
        <form method="post" action="{{ route('biaya.update', $data_biaya->id) }}">
            @csrf
            {{ method_field('PUT') }}
            <div class="col-lg-4 align-items-center d-flex justify-content-center mt-4">
                <img src="{{ asset('icon/logo.png') }}" alt="..." class="card-img my-1 ms-auto mt-4" style="width:28rem; height:20rem; padding-left: 9rem;">
            </div>

            <input required class="form-control mt-3 px-3 py-2 w-50" name="nama_biaya" value="{{ $data_biaya->nama_biaya }}" readonly type="text" placeholder="Syarat Pendaftaran">
            <input required class="form-control mt-1 px-3 py-2" name="jumlah_biaya" value="{{ $data_biaya->jumlah_biaya }}" type="text" placeholder="Jumlah Biaya">

            <textarea name="description" id="description" rows="10" cols="80" class="form-control mt-1 px-3 py-2" style="height: 8rem;">{{ $data_biaya->description }}</textarea>

            <button class="btn btn-success px-4 py-2 mt-3" type="submit">Edit</button>
        </form>
    </div>
</div>

@endsection

@section('js')
<script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>
@endsection