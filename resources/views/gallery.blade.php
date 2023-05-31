@extends('layouts.app')

@section('content')

<main id="gallery-page">

    <div class="judul">
        <h1>Galeri</h1>
    </div>

    <div class="container-lg">
        @if( $data_gallery->count() == 0 )
        <div class="my-5 pb-5">
            <h4>Maaf Belum Ada Data Gallery</h4>
        </div>
        @else
        <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 mb-5 pb-5">
            @foreach($data_gallery as $gallery)

            <!-- <div class="col p-2 gallery-item" data-id="{{ $gallery->id }}" style="cursor: pointer;">
                <div class="card border-0 shadow">
                    <img src="{{ asset('storage/images') }}/{{ $gallery->image }}" alt="..." class="card-img p-1">
                    <div class="card-img-overlay p-3 text-white">
                        <p class="card-title">{{ $gallery->description }}</p>
                    </div>
                </div>
            </div> -->

            <div class="card m-0 p-0 border col-md-3 shadow cursor-pointer" role="button">
                <img src="{{ asset('storage/images') }}/{{ $gallery->image }}" data-id="{{ $gallery->id }}" class="border gallery-item img-fluid" alt="Gallery">
            </div>
            <!-- Modal -->
            <div class="modal fade" id="gallery-popup{{ $gallery->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ $gallery->description }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ asset('storage/images') }}/{{ $gallery->image }}" class="modal-img img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript">
        document.addEventListener("click", function(e) {
            if (e.target.classList.contains("gallery-item")) {
                const src = e.target.getAttribute('data-id');
                const query = 'gallery-popup' + src.toString();
                const myModal = new bootstrap.Modal(document.getElementById(query));
                myModal.show();
            }
        })
    </script>
</main>

@endsection

@section('css')
<style>
    .card:hover {
        scale: 1.025;
        transition: .5s;
    }
</style>
@endsection