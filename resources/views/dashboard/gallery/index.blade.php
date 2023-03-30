@extends('dashboard.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>{{ ucfirst(basename(Request::path())) }}</h1>
    <p class="btn btn-primary py-2 px-3" data-bs-toggle="modal" data-bs-target="#add-gallery" type="button">Add +</p>
</div>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-6 py-4">

    <div class="col p-2">
        <div class="card border-0">
            <img src="{{ asset('icon/logo.png') }}" alt="..." class="card-img">
            <div class="card-img-overlay p-3 text-white">
                <div class="card-action">
                    <a href="" class="btn btn-lg btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top"><i class='bx bx-trash p-2'></i></a>
                    <a href="" class="btn btn-lg btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i class='bx bx-edit p-2'></i></a>
                </div>
                <p class="card-title">Lorem sit amet, consectetur adipisicing elit. Temporibus, placeat?</p>
            </div>
        </div>
    </div>

</div>

<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div> -->

@endsection

@section('css')
<style>
    .card {
        display: block;
    }

    .card:hover .card-img-overlay {
        display: block;
    }

    .card .card-img-overlay {
        display: none;
        transition: .3s;
        backdrop-filter: blur(4px);
    }

    .card .card-img-overlay .card-title {
        position: absolute;
        bottom: .5rem;
        text-shadow: .5px .5px 0 black;
    }
</style>
@endsection