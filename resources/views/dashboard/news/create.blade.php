@extends('dashboard.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>Tambah Berita</h1>
    <a class="btn btn-secondary py-2 px-3" href="/dashboard/news">&larr; Kembali</a>
</div>

<div class="container-fluid py-4">

    <form method="post" action="{{ route('news.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row align-items-center">
            <div class="col-lg-3">
                <img alt="..." class="card-img my-2 ms-auto" style="max-width: 24rem;" id="imagePreview">
                <p class="custom-file-label"></p>
                <h5 class="mt-4 mb-2">Klik Untuk Menambahkan Gambar &darr;</h5>
                <input required name="image" id="image-input" type="file" class="form-control px-2 py-1" placeholder="Gambar Berita">
                <p class="text-muted mt-2 mb-5">Ukuran Gambar yang Disarankan: <br> 4:3 (<i>400 x 300 px</i>) </p>
            </div>
            <div class="col-lg-8 ms-auto">
                <div class="mb-3">
                    <input required name="headline" type="text" class="form-control px-3 py-2" placeholder="Judul Berita">
                </div>
                <div class="row gap-4 mb-3">
                    <input required name="author" class="form-control px-3 py-2" type="text" placeholder="Penulis">
                </div>
                <div class="mb-3">
                    <textarea name="description" class="form-control px-3 py-2" style="min-height: 16rem;" id="exampleFormControlTextarea1" rows="3" placeholder="Isi Berita"></textarea>
                </div>
                <button type="submit" class="btn btn-success px-3 py-2">Buat Berita</button>
            </div>
        </div>
    </form>

</div>

</div>

@endsection
@section('css')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

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
</style>

@endsection
@section('js')

<script>
    document.getElementById('image-input').addEventListener('change', (ev) => {
        let reader = new FileReader()
        reader.readAsDataURL(ev.target.files[0])
        reader.onload = () => {
            document.getElementById('imagePreview').setAttribute('src', reader.result)
        }
    })
</script>

@endsection