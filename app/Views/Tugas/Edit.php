<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php
$judultugas = [
    'name' => 'tugas_name',
    'id' => 'judul_tugas',
    'value' => NULL,
    'class' => 'form-control mb-2',
    'value' => $tugas->tugas_name
];
$deskripsitugas = [
    'name' => 'content',
    'id' => 'deskripsi_tugas',
    'value' => NULL,
    'class' => 'form-control mb-2',
    'style' => 'height: 200px',
    'value' => $tugas->content
];
$kelastugas = [
    'name' => 'kelas_id',
    'id' => 'id_kelas',
    'options' => [
        1 => 'Sains 9B',
        2 => 'Matematika 9B',
        3 => 'Bahasa Indonesia 9B'
    ],
    'class' => 'form-select',
    'selected' => $tugas->kelas_id
];
$submit = [
    'name' => 'submit',
    'value' => 'Edit Tugas',
    'class' => 'btn btn-primary my-2 w-100'
];
$id = [
    'name' => 'id',
    'value' => $tugas->id,
    'type' => 'hidden'
];
?>
<?= form_open("Tugas/Update") ?>
<div class="row">
    <div class="col-12 col-md-8">
        <?php 
        $this->session = session();
        $errors = $this->session->getFlashdata('errors');
        if($errors){
            foreach($errors as $index => $error){
        } ?>
        <div class="alert alert-danger" role="alert">
            <?= $error ?>
        </div>
        <?php } ?>
        <?= form_input($id) ?>
        <div class="form-floating">
            <?= form_input($judultugas) ?>
            <?= form_label('Judul Tugas', 'judul_tugas') ?>
        </div>
        <div class="form-floating">
            <?= form_textarea($deskripsitugas) ?>
            <?= form_label('Deskripsi Tugas', 'deskripsi_tugas') ?>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="card bg-white p-3">
            <h4>Tugas Siswa</h4>
            <hr>
            <div class="form-group">
            <?= form_label('Pilih Kelas', 'id_kelas') ?>
            <?= form_dropdown($kelastugas) ?>
        </div>
        <div class="form-group">
            <p class="form-label">Pilih Tenggat Waktu</p>
            <input type="date" name="timelimit_date">
            <input type="time" name="timelimit_time">
        </div>
        <?= form_submit($submit) ?>
        <?= form_close() ?>
        <a class="btn btn-danger my-2 w-100" value="Hapus Tugas" href="/Tugas/Delete/<?= $tugas->id ?>">Hapus Tugas</a>
    </div>
</div>
<?= $this->endsection() ?>