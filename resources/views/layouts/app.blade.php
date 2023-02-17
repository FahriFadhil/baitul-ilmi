<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Icon -->
    <link rel="icon" href="{{ asset('icon/logo.png') }}" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ Request::path() == '/' ? 'Home' : ucfirst(strtolower(Request::path())) }} | {{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-t2eiHbO1JeMYgI5M8DpNwdfwLgrGZ6NPFa6X5U6VJ99F/R+AT6wt/7ic8WJcVq3JSbZm7VYI9RzG7xv44uy/Dg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app">

        <nav class="navbar navbar-expand-lg px-4 py-2 fixed-top">
            <div class="container-fluid gap-3">
                <a class="navbar-logo nav-link d-flex align-items-center gap-4" href="/">
                    <img class="logo-img" src="{{ asset('icon/logo.png') }}">
                    <div class="logo-text">SMA ISLAM TERPADU<span class="d-block"></span>BAITUL 'ILMI</div>
                </a>

                <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#coll">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="coll">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                            <a href="/" class="nav-link">HOME</a>
                        </li>
                        <li class="nav-item {{ Request::is('profile') ? 'active' : '' }}">
                            <a href="/profile" class="nav-link">PROFILE</a>
                        </li>
                        <li class="nav-item {{ Request::is('academic') ? 'active' : '' }}">
                            <a href="/academic" class="nav-link">ACADEMIC</a>
                        </li>
                        <li class="nav-item {{ Request::is('penerimaan') ? 'active' : '' }}">
                            <a href="/penerimaan" class="nav-link">PENERIMAAN</a>
                        </li>
                        <li class="nav-item {{ Request::is('news') ? 'active' : '' }}">
                            <a href="/news" class="nav-link">NEWS</a>
                        </li>
                        <li class="nav-item {{ Request::is('gallery') ? 'active' : '' }}">
                            <a href="/gallery" class="nav-link">GALLERY</a>
                        </li>
                        <li class="nav-item {{ Request::is('alumni') ? 'active' : '' }}">
                            <a href="/alumni" class="nav-link">ALUMNI</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <footer class="footer">
            <div class="container py-4">
                <div class="contact">
                    <div class="header gap-4">
                        <img class="logo-img" src="{{ asset('icon/logo.png') }}">
                        <div class="logo-text">SMA ISLAM TERPADU<span class="d-block"></span>BAITUL 'ILMI</div>
                    </div>
                    <div class="location ms-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                        </svg>
                        <p>
                        <p>
                            Jl. Raya Jejalen-Jabir, Jejalenjaya, Kec. Tambun Utara.
                            <br>
                            Kabupaten Bekasi, Jawa Barat.
                        </p>
                        </p>
                    </div>
                    <div class="contact-header">
                        <h3>Informasi Kontak</h3>
                    </div>
                    <a class="contact-item" href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                        </svg>
                        <p>
                            +62 856 9581 0281
                        </p>
                    </a>
                    <a class="contact-item" href="mailto:smabi.tamara@gmail.com">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z" />
                        </svg>
                        <p>
                            smabi.tamara@gmail.com
                        </p>
                    </a>
                    <a class="contact-item" href="https://www.instagram.com/smabi_tambun/">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                        </svg>
                        <p>
                            @smabi_tambun
                        </p>
                    </a>
                </div>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126918.07854481862!2d107.0104574438744!3d-6.238676647331844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698958fdb1a681%3A0xb737581e2c64f1ee!2sSMA%20IT%20BAITUL%20ILMI!5e0!3m2!1sid!2sid!4v1676383237102!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="copyright d-flex justify-content-center align-items-center pt-3">
                <p>Copyright © 2023 <b>Baitul 'Ilmi</b>. All rights reserved.</p>
            </div>
        </footer>

    </div>
</body>

</html>