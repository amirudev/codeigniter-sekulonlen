<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '\function\sitesetting.php'); ?>
<div class="row">
    <?php foreach ($kelass['data'] as $index=>$kelas) { ?>
        <div class="col-12 col-sm-6 col-lg-3 p-0 my-2">
            <div class="card bg-<?= getColor($kelas['kelas_bgcolor']) ?> border-0 shadow-sm text-white h-100 mx-2 p-3">
                <a class="text-end text-white" href="#">2 Tugas Tersedia</span></a>
                <span class="mt-4"><?= $kelas['user_fullname'] ?></span>
                <h4><?= $kelas['kelas_name'] ?></h4>
                <i class="fas fa-<?= getIcon($kelas['kelas_icon']) ?> fa-4x"></i>
                <?php 
                $this->session = session();
                if($kelas['kelas_userid'] == $this->session->get('id')): 
                ?>
                    <button class="bg-transparent border-0 text-end position-relative" id="popover-expand-button">
                        <i class="fas fa-share fs-5 mx-2 align-middle text-white"></i>
                        <div class="popover position-absolute p-3 text-start w-100">
                            <span>Link Kelas</span>
                            <div class="input-group">
                                <input type="text" value="http://localhost:8080/Kelas/Gabung/<?= $kelas['id'] ?>" class="form-control" readonly>
                                <span class="input-group-text" id="copytext-button"><i class="fas fa-copy"></i></span>
                            </div>
                        </div>
                    </button>
                <?php endif; ?>
            </div>
        </div>
    <?php } ?>
</div>
<?= $this->endsection() ?>