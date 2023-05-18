@extends('layouts.app')

@section('content')

<main id="gallery-page">

    <div class="judul">
        <h1>Galeri</h1>
    </div>

    @foreach($data_gallery as $gallery)
    <div class="container-lg min-vh-100">
        <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
            <div class="col-md-3">
                <img src="{{ asset('storage/images') }}/{{ $gallery->image }}" data-id="{{ $gallery->image }}" class="gallery-item img-fluid"
                    alt="Gallery">
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="gallery-popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" width="10px" ;>
                    <img src="{{ asset('storage/images') }}/{{ $gallery->image }}" class="modal-img img-fluid"
                        style="width: 100%; height: 35rem;" alt="Modal Image">
                    <p class="text-center justify-content-center d-flex mt-2 fw-bolder">{{ $gallery->description }}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript">
        document.addEventListener("click", function (e) {
            if (e.target.classList.contains("gallery-item")) {
                const src = e.target.getAttribute("src");
                document.querySelector(".modal-img").src = src;
                const myModal = new bootstrap.Modal(document.getElementById('gallery-popup'));
                myModal.show();
            }
        })

    </script>
</main>
@endsection
