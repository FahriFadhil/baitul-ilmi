@extends('dashboard.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>{{ ucfirst(basename(Request::path())) }}</h1>
</div>

<div class="row mt-4">
    <div class="col-md-4">
        <div class="justify-content-center">
            <div class="card">
                <div class="card-header py-3">
                    <p class="ms-4 fs-4 fw-bold text-muted">Input Ekskul</p>
                </div>
                <form action="/dashboard/index/store/" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="col-md-10 ms-4">
                        <img alt="..." class="card-img ms-auto mt-4" style="max-width: 24rem;" id="imagePreview">
                        <p class="custom-file-label"></p>
                        <h5 class="mt-4 mb-2">Klik Untuk Menambahkan Gambar &darr;</h5>
                        <input required name="photo" id="image-input" type="file" class="form-control px-2 py-1"
                            placeholder="Gambar Berita">
                        <p class="text-muted mt-2">Ukuran Gambar yang Disarankan: <br> 1:2 (<i>100 x 200 px</i>) </p>
                    </div>

                    <div class="col-md-10 ms-4 mt-3 me-2">
                        <label for="nama">Nama Ekskul</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control  px-2 py-2" name="nama" placeholder="Nama Ekskul">
                        </div>
                    </div>
                    <div class="col-md-10 ms-4 >
                    <label for=" nama">Deskripsi</label>
                        <div class="input-group mt-2">
                            <textarea name="deskripsi" rows="3" class="form-control px-2 py-1"
                                placeholder="deskripsi"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 ms-4 mt-3 mb-4">
                        <button type="submit" class="btn btn-primary float-right px-4 py-2">Buat</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-7 ms-4">
        <div class="card ">
            <div class="card-header py-3">
                <p class="ms-4 fs-4 fw-bold text-muted">Foto Ekskul</p>
            </div>
            @if($data->count() == 0)
            <div class="my-5 pb-2 justify-content-center d-flex">
                <h4>Data Ekskul Belum Ditambah</h4>
            </div>  
            @else
            <div class="row my-2 gap-3 p-2 ms-4">
                @foreach($data as $ekskul)
                <div class="card m-2 col-md-3 p-3 h-50 shadow p-3 m-3 mb-5 bg-body-tertiary rounded-4"
                    style="width: 270px;">
                    <div class="dropdown">
                        <button class="btn bg-light px-3 py-2" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                <path
                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                            </svg>
                        </button>
                        <ul class="dropdown-menu">
                            <form action="/dashboard/index/destroy/{{$ekskul->id}}" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <div class="row p-3">
                                    <a href="/dashboard/edit/{{$ekskul->id}}"
                                        class="btn bg-light w-30 shadow-sm  p-2 rounded-0 rounded-1">
                                        <li>Edit</li>
                                    </a>
                                    <button type="submit" class="btn bg-light shadow-sm w-30 mt-1 p-2 rounded-1">
                                        <li>Hapus</li>
                                    </button>
                                </div>
                            </form>
                        </ul>
                    </div>
                    <img src="/storage/image/{{$ekskul->photo}}" alt="..."
                        class="img-fluid card-img mt-3 img-fluid card-img"
                        style="height: 200px; object-fit: cover; border-radius: 10px;">
                    <div class="card-body mt-4 ms-1 bg-white mb-1">
                        <h5 class="card-title">{{ $ekskul -> nama }}</h5>
                        <div class="card-text pt-3 bg-light">
                            <p style="font-size: 15px;" class="text-muted">
                                {{ $ekskul-> deskripsi }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</div>

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
