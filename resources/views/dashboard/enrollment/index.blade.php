@extends('dashboard.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>{{ ucfirst(basename(Request::path())) }}</h1>
    <p class="btn btn-primary py-2 px-3" data-bs-toggle="modal" data-bs-target="#add-gallery" type="button">Add +</p>
</div>

<div class="row py-4">
    <div class="card text-center mb-3 d-flex justify-content-center align-items-center"
        style="width: 18rem; height:4rem;">
        <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-primary" type="button">Button</button>
            <p>Kuota sudah penuh</p>
        </div>
    </div>
</div>

@endsection
@section('css')
<style>

</style>
@endsection
