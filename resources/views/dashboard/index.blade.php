@extends('dashboard.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>{{ ucfirst(basename(Request::path())) }}</h1>
</div>

<div class="py-4">

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
</script>

@endsection