<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <!-- <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

    <link rel="icon" href="{{ asset('icon/logo.png') }}" type="image/x-icon">

    <title>{{ Request::path() == '/' ? 'Dashboard' : ucfirst(basename(Request::path())) }} | {{ config('app.name', 'Laravel') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('css')
</head>

<body id="dashboard">
    <div class="sidebar">
        <div class="logo-details">
            <img src="{{ asset('icon/logo.png') }}" alt="" class="icon" width="32px">
            <div class="logo_name ms-3">Baitul 'Ilmi</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="/dashboard" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="/dashboard/pendaftaran">
                    <i class='bx bx-chair'></i>
                    <span class="links_name">Pendaftaran</span>
                </a>
                <span class="tooltip">Pendaftaran</span>
            </li>
            <li>
                <a href="/dashboard/news">
                    <i class='bx bx-news'></i>
                    <span class="links_name">Berita</span>
                </a>
                <span class="tooltip">Berita</span>
            </li>
            <li>
                <a href="/dashboard/gallery">
                    <i class='bx bx-image'></i>
                    <span class="links_name">Gallery</span>
                </a>
                <span class="tooltip">Gallery</span>
            </li>
            <li>
                <a href="/dashboard/alumni">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Alumni</span>
                </a>
                <span class="tooltip">Alumni</span>
            </li>
            <li>
                <a href="/dashboard/guru">
                    <i class='bx bxs-school'></i>
                    <span class="links_name">Guru</span>
                </a>
                <span class="tooltip">Guru</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <div class="person">
                        <div class="name_job">
                            <div class="name">{{ Auth::user()->name }}</div>
                            <div class="job">{{ Auth::user()->email }}</div>
                        </div>
                    </div>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class='bx bx-log-out' id="log_out"></i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
    <section class="home-section px-5 py-4">
        @yield('content')
    </section>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
            }
        }
    </script>

    @yield('js')

</body>

</html>