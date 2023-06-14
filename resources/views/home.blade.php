@extends('layouts.app')

@section('content')

<main id="home-page">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/Masjid2.jpeg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('/images/WhatsApp Image 2022-01-21 at 08.13.06.jpeg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('/images/Masjid1.jpeg')}}" class="d-block w-100" alt="...">
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
            <h1>
                SMA Islam Terpadu Baitul 'Ilmi
            </h1>
            <div class="divider d-none d-md-block"></div>
            <p class="quote d-none d-md-block">"Ilmu itu dia akan menghilangkan sesuatu yang menutupi matamu, dan memberikan kamu petunjuk jalan apabila kamu tersesat. Dia akan memberikanmu manfaat sepanjang kehidupanmu dan akan tetap semerbak selama kepergianmu."</p>
            <p class="d-none d-md-block">- Abu Ishaq Al Ilbiri -</p>
        </div>
    </div>

    <div class="container">

        @if( $data_status->status == 1 )
        <section class="penerimaan row">
            <div class="content col-lg-6">
                <h1>Dibuka Pendaftaran Peserta Didik Baru Tahun Ajaran {{ $data_status->tahun_ajaran }}.</h1>
                <br>
                <p>
                    Sekolah SMA Islam Terpadu Baitul 'Ilmi sedang membuka pendaftaran bagi <b>siswa putri SMA dan sederajat</b> untuk tahun ajaran <b>{{ $data_status->tahun_ajaran }}.</b>
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
        @else
        @endif

        <section class="sambutan row">
            <div class="person col-lg-4">
                <h1>Sambutan<br>Kepala Sekolah.</h1>
                <div class="image-bg" style="background-image: url(' storage/images/{{ $data_principal->images }} ') ;"></div>
                <h4>{{ $data_principal->principal_name }}</h4>
            </div>
            <div class="content col-lg-7 ms-auto d-flex flex-column justify-content-center">
                <div class="card">
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

        <section class="keunggulan">
            <h1 class="text-center">Program Unggulan<br>SMAIT Baitul 'Ilmi</h1>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M352 0c53 0 96 43 96 96V416c0 53-43 96-96 96H64 32c-17.7 0-32-14.3-32-32s14.3-32 32-32V384c-17.7 0-32-14.3-32-32V32C0 14.3 14.3 0 32 0H64 352zm0 384H96v64H352c17.7 0 32-14.3 32-32s-14.3-32-32-32zM274.1 150.2l-8.9 21.4-23.1 1.9c-5.7 .5-8 7.5-3.7 11.2L256 199.8l-5.4 22.6c-1.3 5.5 4.7 9.9 9.6 6.9L280 217.2l19.8 12.1c4.9 3 10.9-1.4 9.6-6.9L304 199.8l17.6-15.1c4.3-3.7 2-10.8-3.7-11.2l-23.1-1.9-8.9-21.4c-2.2-5.3-9.6-5.3-11.8 0zM96 192c0 70.7 57.3 128 128 128c25.6 0 49.5-7.5 69.5-20.5c3.2-2.1 4.5-6.2 3.1-9.7s-5.2-5.6-9-4.8c-6.1 1.2-12.5 1.9-19 1.9c-52.4 0-94.9-42.5-94.9-94.9s42.5-94.9 94.9-94.9c6.5 0 12.8 .7 19 1.9c3.8 .8 7.5-1.3 9-4.8s.2-7.6-3.1-9.7C273.5 71.5 249.6 64 224 64C153.3 64 96 121.3 96 192z" />
                            </svg>
                        </div>
                        <div class="content">
                            <h4>Tahfidz Al-Quran</h4>
                            <p>Siswa dibimbing untuk memiliki Hafalan Quran sebanyak 5 Juz.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M219.3 .5c3.1-.6 6.3-.6 9.4 0l200 40C439.9 42.7 448 52.6 448 64s-8.1 21.3-19.3 23.5L352 102.9V160c0 70.7-57.3 128-128 128s-128-57.3-128-128V102.9L48 93.3v65.1l15.7 78.4c.9 4.7-.3 9.6-3.3 13.3s-7.6 5.9-12.4 5.9H16c-4.8 0-9.3-2.1-12.4-5.9s-4.3-8.6-3.3-13.3L16 158.4V86.6C6.5 83.3 0 74.3 0 64C0 52.6 8.1 42.7 19.3 40.5l200-40zM111.9 327.7c10.5-3.4 21.8 .4 29.4 8.5l71 75.5c6.3 6.7 17 6.7 23.3 0l71-75.5c7.6-8.1 18.9-11.9 29.4-8.5C401 348.6 448 409.4 448 481.3c0 17-13.8 30.7-30.7 30.7H30.7C13.8 512 0 498.2 0 481.3c0-71.9 47-132.7 111.9-153.6z" />
                            </svg>
                        </div>
                        <div class="content">
                            <h4>Kurikulum Diknas</h4>
                            <p>Pemberian Materi Pembelajaran sesuai dengan susunan Pendidikan dari Pemerintah.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path d="M240 144A96 96 0 1 0 48 144a96 96 0 1 0 192 0zm44.4 32C269.9 240.1 212.5 288 144 288C64.5 288 0 223.5 0 144S64.5 0 144 0c68.5 0 125.9 47.9 140.4 112h71.8c8.8-9.8 21.6-16 35.8-16H496c26.5 0 48 21.5 48 48s-21.5 48-48 48H392c-14.2 0-27-6.2-35.8-16H284.4zM144 80a64 64 0 1 1 0 128 64 64 0 1 1 0-128zM400 240c13.3 0 24 10.7 24 24v8h96c13.3 0 24 10.7 24 24s-10.7 24-24 24H280c-13.3 0-24-10.7-24-24s10.7-24 24-24h96v-8c0-13.3 10.7-24 24-24zM288 464V352H512V464c0 26.5-21.5 48-48 48H336c-26.5 0-48-21.5-48-48zM48 320h80 16 32c26.5 0 48 21.5 48 48s-21.5 48-48 48H160c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V336c0-8.8 7.2-16 16-16zm128 64c8.8 0 16-7.2 16-16s-7.2-16-16-16H160v32h16zM24 464H200c13.3 0 24 10.7 24 24s-10.7 24-24 24H24c-13.3 0-24-10.7-24-24s10.7-24 24-24z" />
                            </svg>
                        </div>
                        <div class="content">
                            <h4>Life Skill & Home Management</h4>
                            <p>Keterampilan dan Kecakapan Hidup dalam Kewajiban Mengurus Rumah Tangga.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path d="M96 32C60.7 32 32 60.7 32 96V384H96V96l384 0V384h64V96c0-35.3-28.7-64-64-64H96zM224 384v32H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H544c17.7 0 32-14.3 32-32s-14.3-32-32-32H416V384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32z" />
                            </svg>
                        </div>
                        <div class="content">
                            <h4>Micro Teaching</h4>
                            <p>Siswa diajarkan untuk dapat Mengajari Orang lain dalam Materi ataupun Praktek.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M0 256C0 114.6 114.6 0 256 0c33 0 64.6 6.3 93.6 17.7c7.4 2.9 11.5 10.7 9.8 18.4s-8.8 13-16.7 12.4c-4.8-.3-9.7-.5-14.6-.5c-114.9 0-208 93.1-208 208s93.1 208 208 208c4.9 0 9.8-.2 14.6-.5c7.9-.5 15 4.7 16.7 12.4s-2.4 15.5-9.8 18.4C320.6 505.7 289 512 256 512C114.6 512 0 397.4 0 256zM375.4 137.4c3.5-7.1 13.7-7.1 17.2 0l31.5 63.8c1.4 2.8 4.1 4.8 7.2 5.3l70.4 10.2c7.9 1.1 11 10.8 5.3 16.4l-50.9 49.6c-2.3 2.2-3.3 5.4-2.8 8.5l12 70.1c1.3 7.8-6.9 13.8-13.9 10.1l-63-33.1c-2.8-1.5-6.1-1.5-8.9 0l-63 33.1c-7 3.7-15.3-2.3-13.9-10.1l12-70.1c.5-3.1-.5-6.3-2.8-8.5L261 233.1c-5.7-5.6-2.6-15.2 5.3-16.4l70.4-10.2c3.1-.5 5.8-2.4 7.2-5.3l31.5-63.8z" />
                            </svg>
                        </div>
                        <div class="content">
                            <h4>Dirosah Islamiyyah</h4>
                            <p>Pendidikan & Pengetahuan Tentang Agama Islam sesuai tuntunan & sunnah Nabi.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M176 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64c-35.3 0-64 28.7-64 64H24c-13.3 0-24 10.7-24 24s10.7 24 24 24H64v56H24c-13.3 0-24 10.7-24 24s10.7 24 24 24H64v56H24c-13.3 0-24 10.7-24 24s10.7 24 24 24H64c0 35.3 28.7 64 64 64v40c0 13.3 10.7 24 24 24s24-10.7 24-24V448h56v40c0 13.3 10.7 24 24 24s24-10.7 24-24V448h56v40c0 13.3 10.7 24 24 24s24-10.7 24-24V448c35.3 0 64-28.7 64-64h40c13.3 0 24-10.7 24-24s-10.7-24-24-24H448V280h40c13.3 0 24-10.7 24-24s-10.7-24-24-24H448V176h40c13.3 0 24-10.7 24-24s-10.7-24-24-24H448c0-35.3-28.7-64-64-64V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H280V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H176V24zM160 128H352c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32H160c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32zm192 32H160V352H352V160z" />
                            </svg>
                        </div>
                        <div class="content">
                            <h4>Teknologi Informasi</h4>
                            <p>Pendidikan Mengenai Dasar Ilmu, Mengolah Data, & Presentasi berbasis Komputer. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="visi-misi">
            <h1 class="text-center mb-5">Visi & Misi</h1>
            <div class="card d-flex align-items-center text-center">
                <h4>Visi</h4>
                <p>Menuju generasi berilmu dengan berpegang teguh kepada Al-Qur'an dan Sunnah sesuai dengan pamahaman salafussholeh.</p>
            </div>
            <div class="card d-flex align-items-center text-center">
                <h4>Misi</h4>
                <p>Membentuk dan menanamkan pendidikan agama islam dengan aqidah, akhlak dan ibadah berdasarkan pemahaman para salafussholeh Menyelenggarakan pendidikan yang berkualitas namun terjangkau oleh masyarakat.</p>
                <p class="dot"></p>
                <p>Mengembangkan potensi anak dan menyiapkan untuk mandiri dan bersahaja dalam hidup serta berilmu dan siap meniti jenjang pendidikan yang lebih tinggi.</p>
                <p class="dot"></p>
                <p>Memberikan pelayanan yang optimal dan profesional dibidang pendidikan dengan cara pengajaran nilai-nilai keislaman, hafalan Al-Qur'an dan penanaman akhlak Islam, bimbingan dan pengetahuan sehingga siswa memiliki kemampuan hard skill dan keahlian soft skill.</p>
            </div>
        </section>

        <section class="berita container">
            <div class="header">
                <h1>Berita Terbaru Baitul 'Ilmi</h1>
                <a href="/news">Semua Berita &raquo;</a>
            </div>
            @if( $data_berita->count() == 0 )
            <div class="my-5">
                <h4>Maaf Belum Ada Berita Terbaru</h4>
            </div>
            @else
            <div class="row my-5 row-cols-1 row-cols-md-3 row-cols-lg-3 row-cols-xl-4 gap-2">
                @foreach($data_berita as $news)
                <a class="card border pt-2" href="{{route('news.show', $news->id)}}">
                    <img src="{{ asset('storage/images') }}/{{ $news->image }}" alt="..." class="card-img p-1">
                    <div class="card-body p-3">
                        <h5 class="card-title"> {{ $news->headline }}</h5>
                        <div class="card-text pt-2">
                            <p style="font-size: 15px;" class="text-muted">{{ implode(' ', array_slice(explode(' ', $news->description), 0, 12)) . (strlen($news->description) > 12 ? '...' : '') }}
                            </p>
                            <div class="d-flex justify-content-between pt-2">
                                <p>
                                    {{ $news->author }}
                                </p>
                                <p>
                                    {{ \Carbon\Carbon::parse($news->created_at)->format('M d, Y') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            @endif
    </div>
    </section>
    </div>

</main>

@endsection