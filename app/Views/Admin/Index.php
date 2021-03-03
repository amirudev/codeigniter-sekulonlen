<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="row g-3 graph-top">
    <div class="col-12 col-md-6 col-lg-3">
        <div class="card card-canvas mx-1 p-2 shadow-sm row h-100">
            <div class="fs-5 my-1">
                <i class="fas fa-users mx-1"></i>
                <span>Pengguna</span>
                <div class="my-3">
                    <div class="progress my-2">
                        <div class="progress-bar progress-lg" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">Siswa</div>
                    </div>
                    <div class="progress my-2">
                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">Guru</div>
                    </div>
                    <h6>65 Pengguna Terdaftar</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="card card-canvas mx-1 p-2 shadow-sm row h-100">
            <div class="fs-5 my-1">
                <i class="fas fa-edit mx-1"></i>
                <span>Tugas Dikerjakan</span>
                <div class="my-3">
                    <div class="progress my-2">
                        <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h6>66% Siswa Selesai</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="card card-canvas mx-1 p-2 shadow-sm row h-100">
            <div class="fs-5 my-1">
                <i class="fas fa-book-open mx-1"></i>
                <span>Total Tugas</span>
                <div class="my-3">
                    <div class="progress my-2">
                        <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h6>3 Bulan ini</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3">
        <div class="card card-canvas mx-1 p-2 shadow-sm row h-100">
            <div class="fs-5 my-1">
                <i class="fas fa-graduation-cap mx-1"></i>
                <span>Aktivitas</span>
                <div class="my-3">
                    <h4>Melisa Adrianti</h4>
                    <h6>Mengerjakan tugas Mengidentifikasi Denah Daerah Mampir</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-3">
        <h5 class="my-3">Latest Information</h5>
        <button class="btn btn-primary w-100 my-2"><i class="fas fa-rss"></i> Tambah Berita</button>
        <div class="card p-3 mb-2 border-0">
            <h6 class="fw-bold">Lockdown in Indonesia extended, School closed due to government instruction</h6>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, saepe neque facilis officiis veniam, asperiores nisi pariatur earum dolor fugit laboriosam ipsa debitis esse consectetur odio. Quia ut a nam.</p>
        </div>
        <div class="card p-3 mb-2 border-0">
            <h6 class="fw-bold">Experiencing online learning, sekulonlen start development</h6>
            <hr>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, saepe neque facilis officiis veniam, asperiores nisi pariatur earum dolor fugit laboriosam ipsa debitis esse consectetur odio. Quia ut a nam.</p>
        </div>
    </div>
    <div class="col-12 col-lg-9">
            <h5 class="my-3">Untuk Diperiksa</h5>
                <div class="card p-3 border-0">
                    <div class="row my-2">
                        <div class="avatar-class col-3 ms-4 mb-2 card border-0 bg-primary">
                            <a class="text-white m-auto fs-3 fw-bold" href="#">M</a>
                        </div>
                        <div class="mx-3 col-12 col-lg-9">
                            <a href="Tugas/View/1" class="text-dark">
                                <h5>Melisa Adrianti</h5>
                                <span>Nama Tugas : Mengidentifikasi Denah Daerah Mampir</span><br>
                                <span>Lampiran : tugas_ips.pdf</span><br>
                                <span>Dikirim : 2 Jam yang lalu</span>
                            </a>
                        <hr>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="avatar-class col-3 ms-4 mb-2 card border-0 bg-success">
                            <a class="text-white m-auto fs-3 fw-bold" href="#">A</a>
                        </div>
                        <div class="mx-3 col-12 col-lg-9">
                            <a href="Tugas/View/1" class="text-dark">
                                <h5>Adryan Naufal Ariq</h5>
                                <span>Nama Tugas : Mengidentifikasi Denah Daerah Mampir</span><br>
                                <span>Lampiran : dokumen.docx</span><br>
                                <span>Dikirim : 5 Jam yang lalu</span>
                            </a>
                        <hr>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="avatar-class col-3 ms-4 mb-2 card border-0 bg-danger">
                            <a class="text-white m-auto fs-3 fw-bold" href="#">R</a>
                        </div>
                        <div class="mx-3 col-12 col-lg-9">
                            <a href="Tugas/View/1" class="text-dark">
                                <h5>Raquella Wijaya</h5>
                                <span>Nama Tugas : Mengidentifikasi Denah Daerah Mampir</span><br>
                                <span>Lampiran : tugas_ips_punya_raquella.pptx</span><br>
                                <span>Dikirim : 02/02/2021 20:20:01</span>
                            </a>
                        <hr>
                        </div>
                    </div>
                </div>
        </div>
</div>
<?= $this->endsection() ?>