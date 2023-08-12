@extends('layouts.app')

@section('content')

<main id="news-page" class="mt-2 mb-5">
    <div class="text-judul container">
        <h1>Berita Baitul 'Ilmi</h1>
    </div>

    <div class="content container">

        @if( $data_berita->count() == 0 )
        <div class="my-5 pb-5">
            <h4>Maaf Belum Ada Data Berita</h4>
        </div>
        @else
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 gy-4 mt-4">
            @foreach($data_berita as $row)
            <div class="col p-2">
                <a class="card border-0 shadow" href="/news/detail/{{ $row->id }}">
                    <img src="{{ asset('storage/images') }}/{{ $row->image }}" alt="..." class="card-img p-1">
                    <div class="card-body py-2 px-3">
                        <h5 class="card-title"> {{ implode(' ', array_slice(explode(' ', $row->headline), 0, 8)) . (strlen($row->headline) > 8 ? '...' : '') }}</h5>
                        <div class="card-text pt-1">
                            <p style="font-size: 15px;" class="text-muted">{{ implode(' ', array_slice(explode(' ', $row->description), 0, 12)) . (strlen($row->description) > 12 ? '...' : '') }}
                            </p>
                            <div class="d-flex justify-content-between pt-2">
                                <p>
                                    {{ $row->author }}
                                </p>
                                <p>
                                    {{ \Carbon\Carbon::parse($row->created_at)->format('M d, Y') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        @endif

    </div>
</main>
@endsection
@section('css')
<style>
    .card {
        transition: .3s;
        cursor: pointer;
        text-decoration: none;
        color: black;
    }

    .card:hover {
        background-color: hsl(0, 0%, 95%);
    }

    .search-bar input {
        outline: none;
        border: none;
        padding: .25rem .5rem;
        width: 20rem;
    }
</style>
@endsection