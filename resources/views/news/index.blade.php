@extends('layouts.app')

@section('content')

<main id="news-page">
    <div class="text-judul container">
        <h1>News</h1>
        <h3>SMAIT Baitul Ilmi</h3>
    </div>

    <div class="content container">


        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-4" >
            @foreach($data_berita as $row)
            <div class="col my-5" ">
                <a class="card text-decoration-none text-black justify-content-start d-flex align-items-start p-0 rounded-0"
                    href="{{route('news.show', $row->id)}}">
                    <img class="card-img-top rounded-0" src="{{ asset('storage/images') }}/{{ $row->image }}" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">{{ $row->headline }}</h4>
                        <div class="card-text " >
                            <p>{{ implode(' ', array_slice(explode(' ', $row->description), 0, 12)) . (strlen($row->description) > 12 ? '...' : '') }}
                            </p>
                            <div class="d-flex justify-content-between">
                                <p>
                                    {{ $row->author }}
                                </p>
                                <p class="may">
                                    {{ \Carbon\Carbon::parse($row->created_at)->format('M d, Y') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
</main>

@endsection
