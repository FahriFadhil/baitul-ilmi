@extends('layouts.app')

@section('content')

<main id="enrollment-page">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/1200x800?school" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1200x801?school" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1200x802?school" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <div class="carousel-text text-center">
            <h1 class="h2">Dibuka Pendaftaran Peserta Didik Baru Tahun Ajaran 2023/2024. </h1>
            <div class="divider d-none d-md-block"></div>
            <p class="quote d-none d-md-block">
                Sekolah SMA Islam Terpadu Baitul 'Ilmi sedang membuka pendaftaran bagi <b>siswa putri SMA dan sederajat</b> untuk tahun ajaran <b>2023 / 2023</b>.
            </p>
            <a href="" class="btn btn-success btn-lg mt-3"> Daftar Sekarang</a>
        </div>
    </div>
    <div class="container">
        <section class="alur">
            <h1 class="text-center">Alur Pendaftaran</h1>
            <div class="tree">
                <div class="row mt-4 g-4">
                    <div class="d-sm-none d-md-flex col-4 m-auto graph">
                        <div class="vertical-line"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                    </div>
                    <div class="ms-auto col">
                        <div class="card">
                            <div class="row align-items-center">
                                <div class="col-3 p-0 rounded title-point">
                                    <h1 class="text-center m-0 border-end">1</h1>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h4>Transfer Biaya</h4>
                                        <div class="card-text">Rp 200.000,- BSI Kode Bank (451). <br> No.Rek 711 018 111 8 <br> a.n Yayasan Manarusunnah.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row align-items-center">
                                <div class="col-3 p-0 rounded title-point">
                                    <h1 class="text-center m-0 border-end">2</h1>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h4>Daftar Online</h4>
                                        <div class="card-text"></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row align-items-center">
                                <div class="col-3 p-0 rounded title-point">
                                    <h1 class="text-center m-0 border-end">3</h1>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h4>Cetak Bukti Pendaftaran</h4>
                                        <div class="card-text"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row align-items-center">
                                <div class="col-3 p-0 rounded title-point">
                                    <h1 class="text-center m-0 border-end">4</h1>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h4>Lengkapi Berkas Pendaftaran</h4>
                                        <div class="card-text"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="row align-items-center">
                                <div class="col-3 p-0 rounded title-point">
                                    <h1 class="text-center m-0 border-end">5</h1>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h4>Mengikuti Tes dan Interview</h4>
                                        <div class="card-text">Mengikuti Tes dan Interview
                                            Sesuai Jadwal Yang Telah Ditentukan
                                            Pada Masing-Masing satuan sekolah.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="biaya">
            <h1 class="text-center">Biaya Pendaftaran</h1>
            <div class="row mt-5">
                <div class="col-md mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center mt-2">Biaya Pendaftaran</h4>
                        </div>
                        <div class="card-body text-center">
                            <h5>Rp 200.000,-</h5>
                            <hr>
                            <div class="card-text">
                                <p>
                                    Biaya Pendaftaran dilakukan di awal sebelum mengisi formulir pendaftaran.
                                </p>
                                <p>
                                    Biaya pendaftaran sudah termasuk biaya ujian seleksi, Tes tertulis, dan tes Interview anak dan orangtua.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center mt-2">Biaya Masuk</h4>
                        </div>
                        <div class="card-body text-center">
                            <h5>Rp 6.595.000,-</h5>
                            <span class="text-muted">
                                Atau bisa dibayarkan setengah dari total sebesar
                                Rp 3.350.000,-
                            </span>
                            <hr>
                            <div class="card-text">
                                <p>
                                    Biaya tersebut adalah sudah termasuk :
                                </p>
                                <ul class="ps-4 text-start">
                                    <li>
                                        Biaya Gedung Sekolah
                                    </li>
                                    <li>
                                        Biaya Sarana Prasarana
                                    </li>
                                    <li>
                                        Biaya Pengembangan Kegiatan Pendidikan selama 1 tahun.
                                    </li>
                                    <li>
                                        Biaya Seragam Sekolah 3 Stel
                                    </li>
                                    <li>
                                        Biaya Buku Paket
                                    </li>
                                    <li>
                                        Biaya Spp Bulan Juli
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center mt-2">SPP Bulanan</h4>
                        </div>
                        <div class="card-body text-center">
                            <h5>Rp 370.000,-</h5>
                            <hr>
                            <div class="card-text">
                                <p>
                                    Dibayarkan setiap bulan paling lambat tanggal 10.
                                </p>
                                <p>
                                    Sudah mencakup biaya keperluan siswa selama satu bulan kedepan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center mt-2">Biaya Daftar Ulang</h4>
                        </div>
                        <div class="card-body text-center">
                            <h5>Rp 3.250.000,-</h5>
                            <hr>
                            <div class="card-text">
                                <p>
                                    Dibayarkan saat naik kelas ditahun ke 2 & 3.
                                    Bersifat wajib dilunasi.
                                </p>
                                <p>
                                    Biata tersebut sudah termasuk :
                                </p>
                                <ul class="ps-4 text-start">
                                    <li>
                                        Biaya Buku Modul Pembelajaran.
                                    </li>
                                    <li>
                                        Biaya kegiatan pendidikan selama 1 tahun.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="syarat">
            <h1 class="text-center">Persyaratan Pendaftaran</h1>
            <div class="row mt-5 row-cols-1 row-cols-md-2">
                <div class="col mb-4 mx-auto">
                    <div class="card">
                        <div class="row align-items-center">
                            <div class="col-3 p-0 rounded title-point">
                                <h1 class="text-center m-0 border-end">A</h1>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <div class="card-text">
                                        Membayar uang pendaftaran sebesar Rp. 200.000,- via transfer atau tunai ke loket administrasi di sekolah.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4 mx-auto">
                    <div class="card">
                        <div class="row align-items-center">
                            <div class="col-3 p-0 rounded title-point">
                                <h1 class="text-center m-0 border-end">B</h1>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <div class="card-text">
                                        Mengisi formulir pendaftaran dan menyerahkan kembali dengan disertai syarat administrasi lainnya.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4 mx-auto">
                    <div class="card">
                        <div class="row align-items-center">
                            <div class="col-3 p-0 rounded title-point">
                                <h1 class="text-center m-0 border-end">C</h1>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <div class="card-text">
                                        Menyiapkan berkas-berkas persyaratan
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4 mx-auto">
                    <div class="card">
                        <div class="row align-items-center">
                            <div class="col-3 p-0 rounded title-point">
                                <h1 class="text-center m-0 border-end">D</h1>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <div class="card-text">
                                        Foto copy akta kelahiran (1 lembar)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4 mx-auto">
                    <div class="card">
                        <div class="row align-items-center">
                            <div class="col-3 p-0 rounded title-point">
                                <h1 class="text-center m-0 border-end">E</h1>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <div class="card-text">
                                        Nomor NISN siswa (1 lembar)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4 mx-auto">
                    <div class="card">
                        <div class="row align-items-center">
                            <div class="col-3 p-0 rounded title-point">
                                <h1 class="text-center m-0 border-end">F</h1>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <div class="card-text">
                                        Foto copy Kartu Keluarga (KK) (1 lembar)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4 mx-auto">
                    <div class="card">
                        <div class="row align-items-center">
                            <div class="col-3 p-0 rounded title-point">
                                <h1 class="text-center m-0 border-end">G</h1>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <div class="card-text">
                                        Foto copy KTP kedua orang tua masing-masing (1 lembar)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4 mx-auto">
                    <div class="card">
                        <div class="row align-items-center">
                            <div class="col-3 p-0 rounded title-point">
                                <h1 class="text-center m-0 border-end">H</h1>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <div class="card-text">
                                        Surat keterangan sehat dari dokter (1 lembar)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4 mx-auto">
                    <div class="card">
                        <div class="row align-items-center">
                            <div class="col-3 p-0 rounded title-point">
                                <h1 class="text-center m-0 border-end">I</h1>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <div class="card-text">
                                        Surat kelakuan baik dari sekolah asal (1 lembar)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4 mx-auto">
                    <div class="card">
                        <div class="row align-items-center">
                            <div class="col-3 p-0 rounded title-point">
                                <h1 class="text-center m-0 border-end">J</h1>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <div class="card-text">
                                        Membawa materai 10.000 (2 lembar)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-4 mx-auto">
                    <div class="card">
                        <div class="row align-items-center">
                            <div class="col-3 p-0 rounded title-point">
                                <h1 class="text-center m-0 border-end">K</h1>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <div class="card-text">
                                        Membawa Map coklat untuk data berkas calon peserta didik
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="agenda">
            <h1 class="text-center">Agenda Penerimaan Tahun Ajaran 2023/2024</h1>
            <div class="row mt-5 row-cols-1 row-cols-lg-2">
                <div class="col mb-4">
                    <div class="card">
                        <h4 class="card-header">Waktu Pendaftaran</h4>
                        <div class="card-body">
                            <div class="card-text">
                                <p>Pendaftaran Online : Dimulai dari tanggal .. s/d kuota terpenuhi</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col mb-4">
                    <div class="card">
                        <h4 class="card-header">Pelaksanaan tes masuk</h4>
                        <div class="card-body">
                            <div class="card-text">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, aliquid.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col mb-4">
                    <div class="card">
                        <h4 class="card-header">Pengumuman Hasil Tes</h4>
                        <div class="card-body">
                            <div class="card-text">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, aliquid.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col mb-4">
                    <div class="card">
                        <h4 class="card-header">Daftar Ulang</h4>
                        <div class="card-body">
                            <div class="card-text">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, aliquid.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <div class="row d-flex">
            <h3>Lakukan Pendaftaran Sekarang</h3>
            <a href="" class="btn btn-success btn-lg"> Daftar Sekarang</a>
        </div>
    </div>
    </div>
</main>

@endsection