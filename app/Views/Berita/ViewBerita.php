<?= $this->extend('Layout') ?>
<?= $this->section('content') ?>
<div class="row d-flex justify-content-center">
    <div class="col-7 mx-1 bg-white p-3">
        <h3><?= $data['berita']->berita_judul ?></h3>
        <hr>
        <p><?= $data['berita']->berita_content ?></p>
    </div>
    <div class="col-3 mx-1 bg-white p-3">
        <h4>Komentar</h4>
        <hr>
    </div>
</div>
<?= $this->endSection() ?>