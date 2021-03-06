<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/function/xss_purify.php') ?>
<div class="row">
    <div class="col-12 col-md-8">
        <div class="card bg-white p-3">
            <h3><?= xsspurify($tugas['quest']->tugas_name) ?></h3>
            <hr>
            <p><?= xsspurify($tugas['quest']->content) ?></p>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="card bg-white p-3">
            <h4>Tugas Anda</h4>
            <hr>
            <?php
            if(isset($tugas['answer'][0]['content'])){
                $tugascontent = $tugas['answer'][0]['content'];
            } else {
                $tugascontent = '';
            }
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
            ];
            $tugasid = $tugas['quest']->id;
            ?>
            <?= form_open_multipart("Tugas/SubmitTugas/$tugasid") ?>
            <div class="mb-3">
                <?= form_label('Lampiran', 'attachment') ?>
                <?= form_upload($attachment) ?>
            </div>
            <?php 
            if(isset($tugas['answer'][0]['attachment'])){
                $filename = $tugas['answer'][0]['attachment'];
                $filetype = substr($filename, -4, 4); ?>
                <div class="mb-3">
                    <?= form_label('Lampiran Anda') ?>
                    <div class="card p-2 rounded-3">
                    <?php 
                    if($filetype == '.png' || $filetype == '.jpg'){ ?>
                        <a href="<?= base_url("uploads/$filename") ?>"><img src="<?= base_url("uploads/$filename") ?>"></a>
                    <?php } else { ?>
                        <a href="<?= base_url("uploads/$filename") ?>"><span class="d-flex"><i class="fas fa-file-alt mx-3 my-auto col-3"></i> <span class="col-9"><?= $tugas['answer'][0]['filename'] ?></span></span></a>
                    <?php } ?>
                </div>
            <?php } ?>
            <div class="mb-3">
                <?= form_label('Keterangan', 'content') ?>
                <?= form_textarea($description, $tugascontent) ?>
            </div>
            <?php 
            $this->session = session();
            if($this->session->get('privilege') == 0): 
            ?>
                <?= form_submit($submit) ?>
            <?php endif; ?>
            <?= form_close(); ?>
        </div>
    </div>
</div>
<?= $this->endsection() ?>