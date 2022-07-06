<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Buat Proyek dan Sukseskan') ∙ OurFunding</title>

    {{-- CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" href="/resources/app.css">

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav id="nav-top" class="navbar navbar-expand-lg navbar-light of-bg-white fixed-top">
            <div class="container-fluid mx-3">
                <a class="of-font-header of-text-red navbar-brand me-0 fs-4" href="/">
                    OurFunding
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-4 me-auto mb-2 mb-lg-0">
                        <li class="nav-item px-lg-2">
                            <a class="nav-link @yield('jelajahi-active')" href="{{ route('jelajahi') }}">Jelajahi</a>
                        </li>
                        <li class="nav-item px-lg-2">
                            <a class="nav-link @yield('mulaiproyekmu-active')" href="#">Mulai Proyekmu</a>
                        </li>
                        <li class="nav-item px-lg-2">
                            <a class="nav-link @yield('ketentuan-active')" href="{{ route('ketentuan') }}">Ketentuan</a>
                        </li>
                    </ul>
                    <span class="d-flex">
                        @auth
                            <div class="dropdown me-2">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="profileDropdown"
                                    data-bs-toggle="dropdown">
                                    <i class="bi bi-person"></i> ∙ {{ Auth::user()->username }}
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/profil">Profil</a></li>
                                </ul>
                            </div>
                            <a href="/logout" class="btn btn-sm btn-outline-danger">Keluar</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-sm btn-outline-dark">Masuk</a>
                        @endauth
                    </span>
                </div>
                <hr>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <nav id="nav-bottom">
            <hr class="mb-0">
            <div class="of-nav-wrapper">
                <ul class="of-nav">
                    <li><a href="#">Game</a></li>
                    <li><a href="#">Musik</a></li>
                    <li><a href="#">Seni</a></li>
                    <li><a href="#">Komik & Ilustrasi</a></li>
                    <li><a href="#">Kuliner</a></li>
                    <li><a href="#">Film</a></li>
                </ul>
            </div>
            <hr class="m-0">
            <div class="row of-bottom-drawer-wrapper">
                <div class="col">
                    <div class="of-font-header of-text-red mb-2">
                        Informasi
                    </div>
                    <div><a href="#" class="of-link-silent-dark">Tentang Kami</a></div>
                    <div><a href="#" class="of-link-silent-dark">Kebijakan Privasi</a></div>
                    <div><a href="#" class="of-link-silent-dark">Syarat dan Ketentuan</a></div>
                </div>
                <div class="col">
                    <div class="of-font-header of-text-red mb-2">
                        Hubungi Kami
                    </div>
                    <div><a href="#" class="of-link-silent-dark">Karir</a></div>
                    <div><a href="#" class="of-link-silent-dark">Kritik dan Saran</a></div>
                </div>
                <div class="col">
                    <div class="of-font-header of-text-red mb-2">
                        Media Sosial
                    </div>
                    <div>
                        <a href="#" class="btn btn-sm btn-dark"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="btn btn-sm btn-dark"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="btn btn-sm btn-dark"><i class="bi bi-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center of-copy">
                Copyright © 2022 OurFunding All rights reserved
            </div>
        </nav>
    </footer>

    {{-- Main + Plugin JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="/resources/app.js"></script>
</body>

</html>
