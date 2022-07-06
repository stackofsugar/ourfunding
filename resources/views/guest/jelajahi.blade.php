@extends('layouts.main')

@section('title', 'Jelajahi')
@section('jelajahi-active', 'active');

@section('content')
    <div class="container">
        <div class="row ">
            <div id="jelajahi-filter" class="col-lg-3 col-md-4 col-sm-12">
                <div class="text-center of-font-header fs-5 mb-2">Filter</div>
                <div class="accordion mb-3" id="kreatorAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#kreatorAccordion-1">
                                Kategori
                            </button>
                        </h2>
                        <div id="kreatorAccordion-1" class="accordion-collapse collapse" data-bs-parent="#kreatorAccordion">
                            <div class="accordion-body"></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#kreatorAccordion-2">
                                Filter 2
                            </button>
                        </h2>
                        <div id="kreatorAccordion-2" class="accordion-collapse collapse" data-bs-parent="#kreatorAccordion">
                            <div class="accordion-body"></div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#kreatorAccordion-3">
                                Filter 3
                            </button>
                        </h2>
                        <div id="kreatorAccordion-3" class="accordion-collapse collapse" data-bs-parent="#kreatorAccordion">
                            <div class="accordion-body"></div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-danger of-btn-red w-100">
                    Terapkan filter
                </button>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-12">
                <div class="row row-cols-3">
                    <x-jelajahi.projectcard kategori="teknologi" namaProyek="Proyek Saya" namaKreator="Tim Developer Kami"
                        deskripsi="Proyek yang sangat keren dengan teknologi serba terdepan" terkumpul="9.500.000"
                        hariTersisa="12" terkumpulPersen="60" />
                    <x-jelajahi.projectcard kategori="teknologi" namaProyek="Proyek Saya" namaKreator="Tim Developer Kami"
                        deskripsi="Proyek yang sangat keren dengan teknologi serba terdepan" terkumpul="9.500.000"
                        hariTersisa="12" terkumpulPersen="60" />
                    <x-jelajahi.projectcard kategori="teknologi" namaProyek="Proyek Saya" namaKreator="Tim Developer Kami"
                        deskripsi="Proyek yang sangat keren dengan teknologi serba terdepan" terkumpul="9.500.000"
                        hariTersisa="12" terkumpulPersen="60" />
                    <x-jelajahi.projectcard kategori="teknologi" namaProyek="Proyek Saya" namaKreator="Tim Developer Kami"
                        deskripsi="Proyek yang sangat keren dengan teknologi serba terdepan" terkumpul="9.500.000"
                        hariTersisa="12" terkumpulPersen="60" />
                    <x-jelajahi.projectcard kategori="teknologi" namaProyek="Proyek Saya" namaKreator="Tim Developer Kami"
                        deskripsi="Proyek yang sangat keren dengan teknologi serba terdepan" terkumpul="9.500.000"
                        hariTersisa="12" terkumpulPersen="60" />
                    <x-jelajahi.projectcard kategori="teknologi" namaProyek="Proyek Saya" namaKreator="Tim Developer Kami"
                        deskripsi="Proyek yang sangat keren dengan teknologi serba terdepan" terkumpul="9.500.000"
                        hariTersisa="12" terkumpulPersen="60" />
                    <x-jelajahi.projectcard kategori="teknologi" namaProyek="Proyek Saya" namaKreator="Tim Developer Kami"
                        deskripsi="Proyek yang sangat keren dengan teknologi serba terdepan" terkumpul="9.500.000"
                        hariTersisa="12" terkumpulPersen="60" />
                    <x-jelajahi.projectcard kategori="teknologi" namaProyek="Proyek Saya" namaKreator="Tim Developer Kami"
                        deskripsi="Proyek yang sangat keren dengan teknologi serba terdepan" terkumpul="9.500.000"
                        hariTersisa="12" terkumpulPersen="60" />
                </div>
            </div>
        </div>
    </div>
@endsection
