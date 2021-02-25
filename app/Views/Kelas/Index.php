<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '\function\sitesetting.php'); ?>
<div class="row">
    <?php foreach ($kelass['data'] as $index=>$kelas) { ?>
        <div class="col-12 col-sm-6 col-lg-3 p-0 my-2">
            <div class="card bg-success border-0 shadow-sm text-white h-100 mx-2 p-3">
                <a class="text-end text-white" href="#">2 Tugas Tersedia</span></a>
                <span class="mt-4"><?= $kelas['guru_name'] ?></span>
                <h4><?= $kelas['kelas_name'] ?></h4>
                <i class="fas fa-<?= getIcon($kelas['kelas_icon']) ?> fa-4x"></i>
            </div>
        </div>
    <?php } ?>
</div>
<?= $this->endsection() ?>