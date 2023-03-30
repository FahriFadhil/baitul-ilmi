@extends('dashboard.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>{{ ucfirst(basename(Request::path())) }}</h1>
    <p class="btn btn-primary py-2 px-3" data-bs-toggle="modal" data-bs-target="#add-gallery" type="button">Add +</p>
</div>

<div class="row py-4">

</div>

@endsection