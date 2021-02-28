<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/function/xss_purify.php') ?>
<div class="row">
    <div class="col-12 col-md-8">
        <div class="card bg-white p-3">
            <h3><?= xsspurify($tugas->tugas_name) ?></h3>
            <hr>
            <p><?= xsspurify($tugas->content) ?></p>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="card bg-white p-3">
            <h4>Tugas Anda</h4>
            <hr>
            <?php
            $attachment = [
                'name' => 'attachment',
                'id' > 'attachment',
                'class' => 'form-control'
            ];
            $description = [
                'name' => 'content',
                'id' => 'content',
                'class' => 'form-control'
            ];
            $submit = [
                'name' => 'submit',
                'id' => 'submit',
                'value' => 'Kerjakan',
                'class' => 'btn btn-primary w-100'
            ]
            ?>
            <?= form_open_multipart('Tugas/SubmitTugas') ?>
            <div class="mb-3">
                <?= form_label('Lampiran', 'attachment') ?>
                <?= form_upload($attachment) ?>
            </div>
            <div class="mb-3">
                <?= form_label('Keterangan', 'keterangan') ?>
                <?= form_textarea($attachment) ?>

            </div>
            <?= form_submit($submit) ?>
            <?= form_close(); ?>
        </div>
    </div>
</div>
<?= $this->endsection() ?>