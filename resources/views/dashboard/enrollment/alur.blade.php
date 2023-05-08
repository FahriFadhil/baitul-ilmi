@extends('dashboard.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>Edit Syarat</h1>
    <a class="btn btn-secondary py-2 px-3" href="/dashboard/pendaftaran">&larr; Kembali</a>
</div>

<div class="row">
    <div class="col-md-5">
    <form method="post" action="{{ route('syarat.store') }}">
            <div class="col-lg-4 align-items-center d-flex justify-content-center mt-4">
                <img src="{{ asset('icon/logo.png') }}" alt="..." class="card-img my-1 ms-auto mt-4"
                    style="width:28rem; height:20rem; padding-left: 9rem;">
            </div>

            <input required class="form-control mt-3 px-3 py-2" name="name" value="" type="text" placeholder="Syarat Pendaftaran">

            <button class="btn btn-success px-4 py-2 mt-3" type="submit">Edit</button>
        </form>
    </div>
</div>

@endsection@extends('dashboard.layouts.app')