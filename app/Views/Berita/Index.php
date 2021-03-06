<?= $this->extend('Layout') ?>
<?= $this->section('content') ?>
<div class="row d-flex justify-content-center">
    <div class="col-9 bg-white p-3">
        <?php foreach ($data['beritas'] as $index => $berita) { ?>
            <a href="/Berita/View/<?= $berita->id ?>" class="text-dark">
            <h5><b><?= $berita->berita_judul ?></b></h5>
            <p><?= substr($berita->berita_content, 0, 400) ?>...</p>
            </a>
            <hr>
        <?php } ?>
    </div>
</div>
<?= $this->endSection() ?>