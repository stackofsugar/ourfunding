@extends('layouts.main')

@section('title', 'Ketentuan')
@section('ketentuan-active', 'active');

@section('content')
    <div class="container">
        <h2 class="of-font-header mb-4">Syarat Pengguna</h2>
        <div class="mb-3">
            <h3>Investor</h3>
            <div>
                <strong>OurFunding</strong> terbuka untuk semua warga negara Indonesia yang memiliki setidaknya satu metode
                pembayaran yang didukung untuk menjadi Investor.
            </div>
        </div>
        <div class="mb-4">
            <h3>Kreator</h3>
            <div>
                <div class="accordion" id="kreatorAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#kreatorAccordion-1">
                                Kreator Individu
                            </button>
                        </h2>
                        <div id="kreatorAccordion-1" class="accordion-collapse collapse show"
                            data-bs-parent="#kreatorAccordion">
                            <div class="accordion-body">
                                <div>Harus memiliki:</div>
                                <ul>
                                    <li>KTP Republik Indonesia</li>
                                    <li>NPWP</li>
                                    <li>Rekening Bank di Indonesia <strong>atas nama pribadi</strong></li>
                                </ul>
                                <div>Selain itu, proyek yang dibuat harus:</div>
                                <ul>
                                    <li>Mengikuti aturan yang berlaku di Republik Indonesia</li>
                                    <li>Merupakan proyek original (tidak melanggar Hak Cipta dan Kekayaan Intelektual)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#kreatorAccordion-2">
                                Kreator Organisasi
                            </button>
                        </h2>
                        <div id="kreatorAccordion-2" class="accordion-collapse collapse" data-bs-parent="#kreatorAccordion">
                            <div class="accordion-body">
                                <div>Individu yang mendaftarkan harus memiliki:</div>
                                <ul>
                                    <li>Kewenangan untuk mewakili organisasi dibuktikan dengan <strong>Surat
                                            Keterangan</strong> resmi dari organisasi terkait</li>
                                    <li>KTP Republik Indonesia</li>
                                    <li>NPWP</li>
                                </ul>
                                <div>Organisasi harus memiliki:</div>
                                <ul>
                                    <li>NPWP Organisasi</li>
                                    <li>Rekening Bank di Indonesia <strong>atas nama organisasi</strong></li>
                                </ul>
                                <div>Jika organisasi tidak memiliki satu/lebih poin di atas, maka dapat diganti dengan:
                                </div>
                                <ul>
                                    <li>KTP dan NPWP <strong>setiap individu dalam organisasi</strong></li>
                                    <li>Rekening Bank di Infonesia <strong>atas nama individu yang mendaftarkan</strong>
                                    </li>
                                </ul>
                                <div>Selain itu, proyek yang dibuat harus:</div>
                                <ul>
                                    <li>Mengikuti aturan yang berlaku di Republik Indonesia</li>
                                    <li>Merupakan proyek original (tidak melanggar Hak Cipta dan Kekayaan Intelektual)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
