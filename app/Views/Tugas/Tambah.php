<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<?php
$judultugas = [
    'name' => 'tugas_name',
    'id' => 'judul_tugas',
    'value' => NULL,
    'class' => 'form-control mb-2'
];
$deskripsitugas = [
    'name' => 'content',
    'id' => 'deskripsi_tugas',
    'value' => NULL,
    'class' => 'form-control mb-2',
    'style' => 'height: 200px'
];
$submit = [
    'class' => 'btn btn-primary my-2 w-100',
    'value' => 'Tugaskan'
];
?>
<?= form_open('Tugas/Tambah'); ?>
<div class="row">
    <div class="col-12 col-md-8 my-1">
        <?php 
        $this->session = session();
        $errors = $this->session->getFlashdata('errors');
        if($errors){
            foreach($errors as $index => $error){ ?>
                <div class="alert alert-danger" role="alert">
                    <?= $error ?>
                </div>
        <?php }
        } ?>
        <div class="form-floating">
            <?= form_input($judultugas) ?>
            <?= form_label('Judul Tugas', 'judul_tugas') ?>
        </div>
        <div class="form-floating">
            <?= form_textarea($deskripsitugas) ?>
            <?= form_label('Deskripsi Tugas', 'deskripsi_tugas') ?>
        </div>
    </div>
    <div class="col-12 col-md-4 my-1">
        <div class="form-group">
            <?= form_label('Pilih Kelas', 'id_kelas') ?>
            <select class="form-select" name="kelas_id" id="id_kelas">
                <?php foreach ($data['kelass'] as $index => $kelas) { ?>
                    <option value="<?= $kelas['id'] ?>"><?= $kelas['kelas_name'] ?></option>
                <?php }  ?>
            </select>
        </div>
        <div class="form-group">
            <p class="form-label">Pilih Tenggat Waktu</p>
            <input type="date" name="timelimit_date">
            <input type="time" name="timelimit_time">
        </div>
        <?= form_submit($submit) ?>
    </div>
</div>
<?= form_close(); ?>
<?= $this->endsection() ?>