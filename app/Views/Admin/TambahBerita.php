<?= $this->extend('Layout') ?>
<?= $this->section('content') ?>
<?php
$judulberita = [
    'name' => 'berita_judul',
    'id' => 'judulberita',
    'class' => 'form-control mb-2'
];
$isiberita = [
    'name' => 'berita_content',
    'id' => 'isiberita',
    'class' => 'form-control mb-2 h-25'
];
$submit = [
    'name' => 'submit',
    'value' => 'Tambah Berita',
    'class' => 'btn btn-primary'
];
?>
<?= form_open('admin/tambahberita') ?>
<div class="form-floating">
    <?= form_input($judulberita) ?>
    <?= form_label('Judul Berita') ?>
</div>
<div class="form-floating">
    <?= form_textarea($isiberita) ?>
    <?= form_label('Isi Berita') ?>
</div>
<div class="text-end">
    <?= form_submit($submit) ?>
</div>
<?= form_close() ?>
<?= $this->endsection() ?>