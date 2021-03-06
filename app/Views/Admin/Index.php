<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="row g-3 graph-top">
    <div class="col-12 col-lg-3">
        <h5 class="my-3">Latest Information</h5>
        <a class="btn btn-primary w-100 my-2" href="admin/tambahberita"><i class="fas fa-rss"></i> Tambah Berita</a>
        <?php foreach ($data['beritas'] as $index => $berita) { ?>
            <div class="card p-3 mb-2 border-0">
                <a href="/Berita/View/<?= $berita->id ?>" class="text-dark">
                    <h6 class="fw-bold"><?= $berita->berita_judul ?></h6>
                    <hr>
                    <p><?= substr($berita->berita_content, 0, 250) ?>...</p>
                </a>
            </div>
        <?php } ?>
        <a href="/Berita/Index">Lebih Banyak</a>
    </div>
    <div class="col-12 col-lg-9">
            <h5 class="my-3 w-25">Kelas Saya</h5>
                <a class="btn btn-primary w-25 my-2" href="Tugas/Tambah"><i class="fas fa-tasks"></i> Tambah Tugas</a>
                <a class="btn btn-success w-25 my-2" href="Kelas/Tambah"><i class="fas fa-chalkboard-teacher"></i> Tambah Kelas</a>
                <div class="card p-3 border-0 float-none">
                    <?php foreach ($data['tugass'] as $index => $tugas) { ?>
                        <div class="row my-2">
                            <div class="avatar-class col-3 ms-4 mb-2 card border-0 bg-primary">
                                <a class="text-white m-auto fs-3 fw-bold" href="#">M</a>
                            </div>
                            <div class="mx-3 col-12 col-lg-9">
                                <a href="Tugas/View/<?= $tugas['tugas_id'] ?>/Check/<?= $tugas['id'] ?>" class="text-dark">
                                    <h5><?= $tugas['user_fullname'] ?></h5>
                                    <span>Nama Tugas : Mengidentifikasi Denah Daerah Mampir</span><br>
                                    <span>Lampiran : tugas_ips.pdf</span><br>
                                    <span>Dikirim : 2 Jam yang lalu</span>
                                </a>
                            <hr>
                            </div>
                        </div>
                    <?php } ?>
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