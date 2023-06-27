@extends('dashboard.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>{{ ucfirst(basename(Request::path())) }}</h1>
</div>

<div class="py-4 mt-4">
    <div class="row">
        <div class="col-md-5 ms-3">
        <div class="">
            <h3>Profil Kepala Sekolah</h3>
        </div>
            <div class="my-3">
                <div class="card border p-3">
                    <img class="card-img-top" src="{{asset('storage/images/' .$data_principal->images)}}" alt="...">
                    <h3 class="mt-3 bg-success rounded-3 py-3 px-3 fs-5 text-light">{{$data_principal->principal_name}}
                    </h3>
                    <hr class="mt-3" style="border-top: 3px solid black;">
                    <h3 class="fs-5 fw-bold mx-1 mt-3">Edit kepala Sekolah</h3>
                    <p class="mx-1 my-2">Isi form di bawah untuk mengganti foto dan nama kepala sekolah</p>
                    <div class="card-body text-center">
                        <form action="/dashboard/index/update/1" method="post" enctype="multipart/form-data">
                            @csrf
                            {{ method_field('PUT') }}
                            <input required class="form-control mt-3 px-3 py-3" name="principal_name" type="text"
                                placeholder="Kepala Sekolah yg Baru">
                            <div class="mt-3">
                                <img alt="..." class="card-img my-2 ms-auto" style="max-width: 24rem;"
                                    id="imagePreview">
                                <p class="custom-file-label"></p>
                                <input required name="images" id="image-input" type="file"
                                    class="form-control px-2 py-1" placeholder="Gambar Berita">
                                <p class="text-muted mt-2 mb-3 text-start">Ukuran Gambar yang Disarankan: <br> 2:3
                                    (<i>200 x 300 px</i>)
                                </p>
                            </div>

                            <button type="submit"
                                class="btn btn-success px-5 py-3 fw-bold mt-3 justify-content-start d-flex">Ubah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" style="margin-left: 60px;">
            <div class="">
                <h3>Menambah Guru</h3>
            </div>
            <div class="card border p-3 mt-3">
                <form method="post" action="/dashboard/index/store" enctype="multipart/form-data">
                    @csrf
                    <input required class="form-control mt-3 px-3 py-3" name="nama" type="text" placeholder="Nama Guru">

                    <input required class="form-control mt-3 px-3 py-3" name="description" type="text"
                        placeholder="Mapel yg Diampu">

                    <div class="mt-3">
                        <img alt="..." class="card-img my-2 ms-auto" style="max-width: 24rem;" id="imagePreview-2">
                        <p class="custom-file-label"></p>
                        <input required name="image" id="image-input-2" type="file" class="form-control px-2 py-1"
                            placeholder="Gambar Berita">
                        <p class="text-muted mt-2 mb-3">Ukuran Gambar yang Disarankan: <br> 2:3 (<i>200 x 300 px</i>)
                        </p>
                    </div>

                    <button type="submit" class="btn btn-success px-5 py-3 fw-bold justify-content-start d-flex">Tambah
                        Guru</button>
                </form>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-4">
                <h3>Overview Guru</h3>
            </div>
            <div class="card border-0 p-4 my-3">
                <div class="col p-2">
                    <table class="table-alumni table table-bordered container">
                        <thead class="induk">
                            <th class="py-3" style="width:2%; text-align:center;">
                                <strong>Foto</strong>
                            </th>
                            <th class="py-3" style="width: 5%; text-align:center;">
                                <strong>Nama Guru</strong>
                            </th>
                            <th class="py-3" style="width:4%; text-align:center;">
                                <strong>Mapel</strong>
                            </th>
                            <th class="py-3" style="width:3%; text-align:center;">
                                <strong>Action</strong>
                            </th>
                        </thead>
                        <tbody>
                            @foreach($data_guru as $row)
                            <tr>
                                <td class="py-4 text-center px-5">
                                    <!-- <p style="background-image: url(storage/images/{{ $row->image }});"></p> -->
                                    <img src="{{asset('storage/images/' .$row->image)}}" alt="" class="w-50">
                                </td>
                                <td class="py-4 text-center">{{$row->nama}}</td>
                                <td class="py-4 text-center">{{$row->description}}</td>
                                <form action="/dashboard/index/destroy/{{$row->id}}" method="post">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <td class="p-2 align-items-center justify-content-center d-flex mt-2">
                                        <button type="sumbit" class="bx bx-trash btn btn-danger px-4 py-2"></button>
                                    </td>
                                </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

@section('css')

<style>
    .card-news {
        transition: .3s;
        cursor: pointer;
        text-decoration: none;
        color: black;
    }

    .card-news:hover {
        background-color: hsl(0, 0%, 95%);
    }

    .card-gallery {
        display: block;
    }

    .card-gallery:hover .card-img-overlay {
        display: block;
    }

    .card-gallery .card-img-overlay {
        display: none;
        transition: .3s;
        backdrop-filter: blur(4px);
    }

    .card-gallery .card-img-overlay .card-title {
        position: absolute;
        bottom: .5rem;
        text-shadow: .5px .5px 0 black;
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
    document.getElementById('image-input-2').addEventListener('change', (ev) => {
        let reader = new FileReader()
        reader.readAsDataURL(ev.target.files[0])
        reader.onload = () => {
            document.getElementById('imagePreview-2').setAttribute('src', reader.result)
        }
    })

</script>

@endsection
