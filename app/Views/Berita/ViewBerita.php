<?= $this->extend('Layout') ?>
<?= $this->section('content') ?>
<div class="row d-flex justify-content-center">
    <div class="col-7 mx-1 bg-white p-3">
        <h3><?= $data['berita']->berita_judul ?></h3>
        <hr>
        <p><?= $data['berita']->berita_content ?></p>
    </div>
    <div class="col-3 mx-1 bg-white p-3">
        <h4>Berita Terbaru</h4>
        <hr>
        <?php foreach ($data['beritadata'] as $index => $berita) { ?>
            <a href="#" class="text-dark">
                <h6><b><?= $berita['berita_judul'] ?></b></h6>
                <p><?= substr($berita['berita_content'], 0, 75) ?> ...</p>
            </a>
            <hr>
        <?php } ?>
        <a href="/Berita/Index">Lebih Banyak</a>
    </div>
</div>
<?= $this->endSection() ?>