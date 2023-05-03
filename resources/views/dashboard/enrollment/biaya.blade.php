@extends('dashboard.layouts.app')

@section('content')
<form action="">

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
  
</form>
@endsection