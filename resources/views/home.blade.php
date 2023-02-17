@extends('layouts.app')

@section('content')

<main id="home-page">
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
    </div>

    <div class="container">
        <section class="penerimaan row">
            <div class="content col-lg-6">
                <h1>Dibuka Pendaftaran Peserta Didik Baru Tahun Ajaran 2023/2024.</h1>
                <br>
                <p>
                    Sekolah SMA Islam Terpadu Baitul 'Ilmi sedang membuka pendaftaran bagi <b>siswa putri SMA dan sederajat</b> untuk tahun ajaran <b>2023 / 2023.</b>
                    <br> <br>
                    Kami mengajak para wali santri sekalian untuk bergabung menjadi keluarga besar Baitul 'Ilmi demi menuntun para siswi untuk menjadi seorang yang cerdas, berkarakter, dan berakhlak.
                </p>
                <br>
                <a href="/penerimaan" class="button-penerimaan">
                    Daftar Sekarang
                </a>
            </div>
            <div class="image col-lg-6 ms-auto">
                <div class="image-bg" style="background-image: url(' https://source.unsplash.com/600x600?enrollment ') ;"></div>
            </div>
        </section>

        <section class="sambutan row">
            <div class="person col-lg-4">
                <h1>Sambutan<br>Kepala Sekolah.</h1>
                <div class="image-bg" style="background-image: url(' https://source.unsplash.com/600x600?principal man ') ;"></div>
                <h4>Luzman Rifqi S.pd</h4>
            </div>
            <div class="content col-lg-7 ms-auto d-flex flex-column justify-content-center">
                <div class="border">
                    <p>
                        Memiliki anak yang sholih/sholihah cerdas berkarkter adalah merupakan harapan dan keinginan semua keluarga muslim, untuk meraih cita-cita tersebut dibutuhkan sebuah usaha yang serius, sistematis dan fokus.
                    </p>
                    <p>
                        Hal itu bisa dimulai dengan mengubah paradigma bahwa pendidikan terbaik adalah pendidikan nabi dan para sahabatnya, maka kita wajib mengikuti bagaimana langkah dan metode nabi ﷺ mendidik generasi terbaik sebagaimana kalimat Imam.
                    </p>
                    <p>
                        <b>
                            Daarul Hijrah Malik bin Anas :
                        </b>
                        <br>
                        <b>
                            لَنْ يَصْلُحَ آخِرَ هَذِهِ الْأُمَّةِ إِلَّا بِمَا صَلُحَ بِهِ أَوَّلُهَا
                        </b>
                        <br>
                    </p>
                    <p>
                        "Tidaklah akan baik generasi akhir umat ini kecuali dengan apa yang telah membuat baik generasi awalnya..."
                    </p>
                </div>
                <a href="/profile" class="pt-4">Baca Selengkapnya &raquo;</a>
            </div>
        </section>
    </div>

</main>

@endsection