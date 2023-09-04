@extends('dashboard.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>{{ ucfirst(basename(Request::path())) }}</h1>
</div>

<!-- <div class="py-4">

    @if($data_gambar_home->count()==0)
    @else
    <div class="d-flex justify-content-between align-items-center pe-4">
        <h3>Home Image Sliders</h3>
        <p class="text-success">Saran ukuran 16:9 (1600px : 900px)</p>
    </div>
    <div class="mt-4">
        <form action="/dashboard/header/home/update" method="post" enctype="multipart/form-data" class="d-flex flex-column" style="border: #0c9b4bbf 1px solid; border-radius: .25rem;">
            @csrf
            {{ method_field('PUT') }}
            <div class="row">
                @foreach($data_gambar_home as $row)
                <div class="col-lg-4 p-4" style="aspect-ratio: 16/9; position: relative;" onmouseover="showChildElement(this)" onmouseout="hideChildElement(this)">
                    <div style="background-position: center; background-size: cover; background-image: url('{{ $row->image }}'); position: absolute; inset: 1rem;"></div>
                    <div id="edit" class="d-flex justify-content-center align-items-center" style="position: absolute; inset: 1rem; visibility: hidden;">
                        <i class="bx bx-edit" style="font-size: 4rem; color: #0c9b4bbf;"></i>
                    </div>
                    <input class="image-input" name="image{{ $row->id }}" type="file" style="position: absolute; inset: 1rem; cursor: pointer; visibility: hidden;">
                </div>
                @endforeach
            </div>
            <button type="submit" class="btn btn-success px-3 py-2">Ubah</button>
        </form>
    </div>
    @endif
    @if($data_gambar_pendaftaran->count()==0)
    @else
    <div class="d-flex justify-content-between align-items-center pe-4 mt-5">
        <h3>Pendaftaran Image Sliders</h3>
        <p class="text-success">Saran ukuran 16:9 (1600px : 900px)</p>
    </div>
    <div class="mt-4">
        <form action="/dashboard/header/pendaftaran/update" method="post" enctype="multipart/form-data" class="d-flex flex-column" style="border: #0c9b4bbf 1px solid; border-radius: .25rem;">
            @csrf
            {{ method_field('PUT') }}
            <div class="row">
                @foreach($data_gambar_pendaftaran as $row)
                <div class="col-lg-4 p-4" style="aspect-ratio: 16/9; position: relative;" onmouseover="showChildElement(this)" onmouseout="hideChildElement(this)">
                    <div style="background-position: center; background-size: cover; background-image: url('{{ $row->image }}'); position: absolute; inset: 1rem;"></div>
                    <div id="edit" class="d-flex justify-content-center align-items-center" style="position: absolute; inset: 1rem; visibility: hidden;">
                        <i class="bx bx-edit" style="font-size: 4rem; color: #0c9b4bbf;"></i>
                    </div>
                    <input class="image-input" name="image{{ $row->id }}" type="file" style="position: absolute; inset: 1rem; cursor: pointer; visibility: hidden;">
                </div>
                @endforeach
            </div>
            <button type="submit" class="btn btn-success px-3 py-2">Ubah</button>
        </form>
    </div>
    @endif
</div> -->

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
                        <input required name="photo" id="image-input" type="file" class="form-control px-2 py-1" placeholder="Gambar Berita">
                        <p class="text-muted mt-2">Ukuran Gambar yang Disarankan: <br> 1:2 (<i>100 x 200 px</i>) </p>
                    </div>

                    <div class="col-md-10 ms-4 mt-3 me-2">
                        <label for="nama">Nama Ekskul</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control  px-2 py-2" name="nama" placeholder="Nama Ekskul">
                        </div>
                    </div>
                    <div class="col-md-10 ms-4">
                        <label for="nama">Deskripsi</label>
                        <div class="input-group mt-2">
                            <textarea name="deskripsi" rows="3" class="form-control px-2 py-1" placeholder="deskripsi"></textarea>
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
                <div class="card m-2 col-md-3 p-3 h-50 shadow p-3 m-3 mb-5 bg-body-tertiary rounded-4" style="width: 270px;">
                    <div class="dropdown">
                        <button class="btn bg-light px-3 py-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                            </svg>
                        </button>
                        <ul class="dropdown-menu">
                            <form action="/dashboard/index/destroy/{{$ekskul->id}}" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <div class="row p-3">
                                    <a href="/dashboard/edit/{{$ekskul->id}}" class="btn bg-light w-30 shadow-sm  p-2 rounded-0 rounded-1">
                                        <li>Edit</li>
                                    </a>
                                    <button type="submit" class="btn bg-light shadow-sm w-30 mt-1 p-2 rounded-1">
                                        <li>Hapus</li>
                                    </button>
                                </div>
                            </form>
                        </ul>
                    </div>
                    <img src="/storage/images/{{$ekskul->photo}}" alt="..." class="img-fluid card-img mt-3 img-fluid card-img" style="height: 200px; object-fit: cover; border-radius: 10px;">
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

<div class="row mt-4">
    <div class="col-md-4">
        <div class="justify-content-center">
            <div class="card">
                <div class="card-header py-3">
                    <p class="ms-4 fs-4 fw-bold text-muted">Change Main Video</p>
                </div>
                <form action="/dashboard/index/video/update/1" enctype="multipart/form-data" method="post">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="col-md-10 ms-4 mt-3 me-2">
                        <label for="nama">Ubah Link Video: </label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control  px-2 py-2" name="url" placeholder="ID Video Youtube">
                        </div>
                        <p class="text-sm">
                            *Harap input <b>ID</b> dari Video Youtubenya, Bukan Linknya. ID Berada di Akhir Link Video setelah tanda '='. Contoh ID: <b>shuIfhrLIP0</b>
                        </p>
                    </div>
                    <div class="col-md-12 ms-4 mt-3 mb-4">
                        <button type="submit" class="btn btn-primary float-right px-4 py-2">Ubah</button>
                    </div>
                </form>
                <div class="col-md-12 ms-4 mt-3 mb-4">
                    <h6 style="font-weight: 700;">Current Youtube Link: </h6>
                    <a href="https://www.youtube.com/watch?v={{ $data_video->url }}">https://www.youtube.com/watch?v={{ $data_video->url }}</a>
                    <iframe class="my-3" src="https://youtube.com/embed/{{ $data_video->url }}" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')

<script>
    document.querySelectorAll('.image-input').forEach(input =>
        input.addEventListener('change', (ev) => {
            console.log(ev.target);
            let reader = new FileReader()
            reader.readAsDataURL(ev.target.files[0])
            reader.onload = () => {
                console.log(ev.target.previousElementSibling.previousElementSibling);
                ev.target.previousElementSibling.previousElementSibling.style.backgroundImage = `url('${reader.result}')`
            }
        })
    )

    function showChildElement(parentElement) {
        parentElement.querySelector('#edit').style.visibility = 'visible';
        parentElement.firstElementChild.style.boxShadow = '0 1px 4px 2px black'
        parentElement.lastElementChild.style.visibility = 'visible'
    }

    function hideChildElement(parentElement) {
        parentElement.querySelector('#edit').style.visibility = 'hidden';
        parentElement.firstElementChild.style.boxShadow = 'none'
        parentElement.lastElementChild.style.visibility = 'hidden'
    }

    document.getElementById('image-input').addEventListener('change', (ev) => {
        let reader = new FileReader()
        reader.readAsDataURL(ev.target.files[0])
        reader.onload = () => {
            document.getElementById('imagePreview').setAttribute('src', reader.result)
        }
    })
</script>

@endsection