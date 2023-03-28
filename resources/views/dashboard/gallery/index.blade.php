@extends('dashboard.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>{{ ucfirst(basename(Request::path())) }}</h1>
    <p class="btn btn-primary py-2 px-3" data-bs-toggle="modal" data-bs-target="#add-gallery" type="button">Add +</p>
</div>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-6 py-3">

    <div class="col p-2">
        <div class="card border-0">
            <img src="https://source.unsplash.com/600x600?event" alt="..." class="card-img">
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

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    * {
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background: #3498db;
    }

    .main-box {
        position: absolute;
        left: 50%;
        bottom: 8%;
        transform: translateX(-50%);
        width: 400px;
        height: 550px;
        text-align: center;
    }

    .main-box .content {
        position: relative;
        height: 100%;
        width: 100%;
    }

    .content .box {
        position: absolute;
        height: 50px;
        width: 100%;
        left: 0;
        bottom: 0;
        border-radius: 25px;
        cursor: pointer;
    }

    .share,
    .cancel {
        position: absolute;
        height: 100%;
        width: 100%;
        left: 0;
        top: 0;
        font-size: 20px;
        font-weight: 600;
        color: #2980b9;
        line-height: 50px;
        background: #fff;
        letter-spacing: 1px;
        border-radius: 25px;
        opacity: 0;
        transition: all 0.3s ease;
    }

    .content .box .share {
        opacity: 1;
    }

    #check:checked~.box .share {
        opacity: 0;
    }

    #check:checked~.box .cancel {
        opacity: 1;
    }

    .content .image-box {
        position: absolute;
        height: 450px;
        width: 100%;
        bottom: 130px;
        left: 50%;
        transform: translateX(-50%);
        background: #fff;
        padding: 10px;
        border-radius: 25px;
        transition: all 0.4s ease;
    }

    #check:checked~.image-box {
        bottom: 70px;
    }

    #check {
        display: none;
    }

    .image-box::before {
        position: absolute;
        content: '';
        bottom: -12px;
        left: 50%;
        transform: translateX(-50%) rotate(45deg);
        height: 30px;
        width: 30px;
        background: #fff;
        z-index: -1;
    }

    .image-box img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        border-radius: 26px;
    }

    .image-box .about {
        position: absolute;
        background: rgba(0, 0, 0, 0.5);
        height: 100%;
        width: 100%;
        left: 0;
        top: 0;
        border-radius: 25px;
        padding: 20px;
        text-align: center;
        opacity: 0;
        transition: all 0.3s ease;
    }

    #check:checked~.image-box .about {
        opacity: 1;
    }

    .about .details {
        position: absolute;
        width: 100%;
        left: 0;
        bottom: 35px;
    }

    .details .name,
    .job {
        font-size: 18px;
        font-weight: 500;
        color: #fff;
    }

    .details .icon i {
        font-size: 20px;
        color: #fff;
        height: 45px;
        width: 45px;
        line-height: 43px;
        border-radius: 50%;
        border: 2px solid #fff;
        margin: 14px 5px;
        transition: all 0.3s ease;
    }

    .details .icon i:hover {
        transform: scale(0.95);
    }
</style>
@endsection