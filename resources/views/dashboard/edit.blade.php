@extends('dashboard.layouts.app')
@section('content')


<h1 class="mt-3 fs-1 mb-3">Edit</h1>

<div class="d-flex justify-content-between align-items-center">
    <a class="btn btn-secondary py-2 px-3" href="/dashboard">Kembali</a>
</div>
<div class="justify-content-center">
    <div class="col-lg-12">
        <div class="card mt-4 rounded-4 shadow-none">
            <div class="row">
                <form action="/dashboard/index/update/{{$ekskul->id}}" enctype="multipart/form-data" method="post">
                    @csrf
                    {{ method_field ('PUT') }}
                    <div class="p-3">
                        <p class="fs-3 fw-bold">Edit</p>
                        <div class="col">
                            <div class="col-md-6">
                                <img src="/storage/image/{{$ekskul->photo}}" alt="" class="card-img img-crop" id="imagePreview">
                                <h5 class="mt-2 mb-2">Klik Untuk Menambahkan Gambar &darr;</h5>
                                <input class="form-control py-1 px-2" type="file" name="photo" id="image-input">
                                <p class="text-muted mt-2">Ukuran Gambar yang Disarankan: <br> 1:2 (<i>100 x 200 px</i>)
                                </p>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="bidang">Ekskul</label>
                                <div class="input-group mb-3 mt-2">
                                    <input type="text" class="form-control p-2" name="nama" value="{{$ekskul->nama}}"
                                        placeholder="Ekskul">
                                </div>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="bidang ">Deskripsi</label>
                                <div class="input-group mb-3 mt-2">
                                    <textarea type="text" class="form-control p-2" name="deskripsi"
                                        placeholder="Deskripsi" rows="5">{{$ekskul->deskripsi}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <button type="submit" class="btn btn-primary float-right px-4 py-2">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
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
