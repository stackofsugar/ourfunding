@props(['kategori', 'namaProyek', 'namaKreator', 'deskripsi', 'terkumpul', 'hariTersisa', 'terkumpulPersen'])

<div class="col of-showcase-col">
    <div class="card of-card" style="width: 100%">
        <div>
            <img class="img-fluid p-3 pb-1" src="/resources/images/proyek-unggulan.jpg">
        </div>
        <div class="card-body d-flex flex-column">
            <div class="d-flex flex-row">
                <div class="me-auto"><em>{{ ucwords($kategori) }}</em></div>
                <div><i class="bi bi-heart"></i></div>
            </div>
            <div class="mb-0">
                <a href="#" class="link-dark">
                    <div class="fs-5 fw-bold">{{ $namaProyek }}</div>
                </a>
            </div>
            <div class="mb-1">
                <small>
                    Oleh <a class="link-dark" href="#">{{ $namaKreator }}</a>
                </small>
            </div>
            <div class="mb-auto">
                {{ $deskripsi }}
            </div>
            <div class="d-flex justify-content-between mt-2">
                <div>Rp. {{ $terkumpul }}</div>
                <div>{{ $terkumpulPersen }}%</div>
            </div>
            <div class="progress" style="height: 10px">
                <div class="progress-bar bg-success" style="width: {{ $terkumpulPersen }}%"></div>
            </div>
            <div><i class="bi bi-stopwatch-fill"></i> Tersisa {{ $hariTersisa }} Hari</div>
        </div>
    </div>
</div>
