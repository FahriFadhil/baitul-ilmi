@extends('layouts.app')

@section('content')

<main id="detail-news">
    <div class="row mx-5 px-5 my-4">
        <div class="col-md-8">
            <h1>
                {{ $news->headline }}
            </h1>
            <div class="d-flex align-items-center gap-3">
                <p class="text-muted">{{ \Carbon\Carbon::parse($news->created_at)->format('M d, Y') }}</p>
                <p>
|
                </p>
                <p class="text-muted">{{ $news->author }}</p>
            </div>
            <p class="mt-3">
                {{ $news->description }}
            </p>
        </div>
        <div class="col-md-4">
            <img src="{{ asset('storage/images') }}/{{ $news->image }}" alt="Gambar Berita">
        </div>
    </div>
</main>

@endsection