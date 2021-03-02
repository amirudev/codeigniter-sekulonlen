<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '\function\timestampToIndonesian.php'); ?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '\function\sitesetting.php'); ?>
<div class="banner-info card p-3 rounded-3 border-0 bg-info position-relative">
    <p class="text-white fs-4 fw-bold">3 Tips to get perfect score at school</p>
    <img class="position-absolute" src="<?= base_url('image/illustration/hiring.svg') ?>">
    <a href="#" class="text-white">Baca Selengkapnya</a>
</div>
<div class="my-3">
    <div class="row">
        <div class="col-lg-9 col-12">
            <h5 class="my-3">My Assignment</h5>
            <?php 
            $this->session = session();
            if($this->session->get('username')){ 
            ?>
                <div class="card p-3 border-0">
                    <?php foreach ($tugass['data'] as $index=>$tugas) {
                        $timeleft = timestampToIndonesian(strtotime($tugas['time_limit']) - time());
                        if($timeleft > 0) {
                            $timeleft = $timeleft . ' Tersisa'; ?>
                        <div class="row my-2">
                            <div class="avatar-class col-3 ms-4 mb-2 card border-0 bg-<?= getColor($tugas['kelas_bgcolor']) ?>">
                                <a class="text-white m-auto fs-3 fw-bold" href="#"><?= substr($tugas['kelas_name'], 0, 1) ?></a>
                            </div>
                            <div class="mx-3 col-9">
                                <a href="Tugas/View/<?= $tugas['id'] ?>" class="text-dark">
                                    <h5><?= $tugas['kelas_name'] ?></h5>
                                    <span><?= $tugas['tugas_name'] ?></span>
                                    <div class="progress my-3">
                                        <div class="progress-bar bg-<?= getColor($tugas['kelas_bgcolor']) ?>" role="progressbar" style="width: <?= (strtotime($tugas['time_limit']) - time()) / 86400 * 100 ?>%"><?= $timeleft ?></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php } 
                    } ?>
                </div>
            <?php } else { ?>
                <p class="text-secondary text-center">Silahkan Login atau Register untuk melihat data</p>
            <?php } ?>
        </div>
        <div class="col-lg-3 col-12">
            <h5 class="my-3">Latest Information</h5>
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
    </div>
</div>
<?= $this->endSection(); ?>