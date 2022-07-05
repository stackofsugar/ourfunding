@extends('layouts.main')

@section('title', 'Beranda')

@section('content')
    <div id="front-main-carousel" class="mb-4">
        <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/resources/images/front-carousel/1.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="/resources/images/front-carousel/2.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="/resources/images/front-carousel/3.jpg" class="d-block w-100">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div id="proyek-unggulan-section" class="mb-5">
        <div id="proyek-unggulan-1" class="mb-5">
            <h4 class="text-center of-font-header mb-3">Proyek Unggulan</h4>
            <div class="container of-card-container">
                <div class="card of-card">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img class="img-fluid p-3 pe-1" src="/resources/images/proyek-unggulan.jpg">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body d-flex flex-column h-100">
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="link-dark">
                                        <div class="fs-5 fw-bold">Proyek Keren</div>
                                    </a>
                                    <div class="d-flex flex-row">
                                        <div class="me-3"><em>Kategori riset</em></div>
                                        <div><i class="bi bi-heart"></i></div>
                                    </div>
                                </div>
                                <div class="mb-2">Dipersembahkan oleh <a class="link-dark" href="#">Orang
                                        Hebat</a>
                                </div>
                                <div class="mb-auto">
                                    Proyek ini adalah proyek yang sangat keren, dipersembahkan oleh Orang Hebat untuk
                                    anda lihat dan dukung sekarang juga!
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                    <div>Rp. 1.000.000 Terkumpul</div>
                                    <div>30%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                        style="width: 30%"></div>
                                </div>
                                <div><i class="bi bi-stopwatch-fill"></i> Tersisa 10 Hari</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="proyek-unggulan-2" class="mb-4">
            <div class="container d-flex w-100 justify-content-around">
                <x-card.projectHorizontal kategori="teknologi" namaProyek="KlinikPintar" namaKreator="Asik Dev Team"
                    deskripsi="Proyek website manajemen Klinik dengan teknologi terdepan" terkumpul="9.500.000"
                    hariTersisa="12" terkumpulPersen="60" />
                <x-card.projectHorizontal kategori="seni" namaProyek="Payungan" namaKreator="Alex Susilo"
                    deskripsi="Payung artisan anti badai pertama di Indonesia" terkumpul="1.500.000" hariTersisa="2"
                    terkumpulPersen="80" />
                <x-card.projectHorizontal kategori="kuliner" namaProyek="Millenium Meals" namaKreator="Dapur Mama"
                    deskripsi="Cara menyiapkan makanan baru abad ke-21 yang bisa dilakukan dimana saja" terkumpul="900.000"
                    hariTersisa="20" terkumpulPersen="5" />
            </div>
        </div>
    </div>
    <div id="front-hero-banner" class="mb-4">
        <div class="of-hero-container text-center text-light">
            <h1 class=" of-font-header">OurFunding</h1>
            <h3 class=" mb-4">Buat Proyek dan Sukseskan</h3>
            <h5 class="mb-4"><strong>OurFunding</strong>, teman sejati untuk semua proyek anda!</h5>
            <h5 style="margin-bottom: 4rem">
                <a href="https://id.wikipedia.org/wiki/Urun_dana" class="link-light">
                    Pelajari mengenai <strong>Crowdsourcing</strong> disini!
                </a>
            </h5>
            <img src="/resources/images/hero-vector.png" style="width: 40rem">
        </div>
    </div>
@endsection
