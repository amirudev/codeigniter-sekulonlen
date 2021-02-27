<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<a href="/Tugas/Tambah" class="btn-link">+ Tambah Tugas</a>
<?php require($_SERVER['DOCUMENT_ROOT'] . '\function\timestampToIndonesian.php'); ?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '\function\sitesetting.php'); ?>
<div class="row">
    <?php foreach ($tugass['data'] as $index => $tugas) {
        if($index <= 1){ ?>
            <div class="col-12 col-md-6 my-2">
                <div class="card bg-<?= getColor($tugas['kelas_bgcolor']) ?> mx-2 p-3 text-white">
                    <h4><?= $tugas['tugas_name']; ?></h4>
                    <p><?= substr($tugas['content'], 0, 100); ?></p>
                    <span class="text-end"><?= timestampToIndonesian(strtotime($tugas['time_limit']) - time()); ?> Tersisa</span>
                </div>
            </div>
        <?php } else { ?>
            <div class="row my-2">
                <div class="avatar-class col-3 ms-4 mb-2 card border-0 bg-<?= getColor($tugas['kelas_bgcolor']) ?>">
                    <a class="text-white m-auto fs-3 fw-bold" href="#"><?= substr($tugas['kelas_name'], 0, 1) ?></a>
                </div>
                <div class="mx-3 col-9">
                    <h5><?= $tugas['kelas_name'] ?></h5>
                    <span><strong><?= $tugas['tugas_name'] ?></strong> - <?= substr($tugas['content'], 0, 100); ?></span>
                    <div class="progress my-3">
                        <div class="progress-bar" role="progressbar" style="width: <?= (strtotime($tugas['time_limit']) - time()) / 86400 * 100 ?>%"><?= timestampToIndonesian(strtotime($tugas['time_limit']) - time()); ?></div>
                    </div>
                    <hr>
                </div>
            </div>
        <?php }
    } ?>
</div>
<?= $this->endsection() ?>