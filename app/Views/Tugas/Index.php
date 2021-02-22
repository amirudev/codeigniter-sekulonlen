<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-12 col-md-6 my-2">
        <div class="card bg-primary mx-2 p-3 text-white">
            <h4>Bahasa Indonesia</h4>
            <p>Kerjakan Halaman A - B</p>
            <span class="text-end">Hari Ini</span>
        </div>
    </div>
    <div class="col-12 col-md-6 my-2">
        <div class="card bg-success mx-2 p-3 text-white">
            <h4>Matematika</h4>
            <p>Kerjakan Halaman A - B</p>
            <span class="text-end">Besok</span>
        </div>
    </div>
    <div class="my-2">
        <h5 class="my-4">Tugas Diberikan</h5>
        <div class="row my-2">
            <div class="avatar-class col-3 ms-4 mb-2 card border-0 bg-primary">
                <a class="text-white m-auto fs-3 fw-bold" href="#">E</a>
            </div>
            <div class="mx-3 col-9">
                <h5>English Conversation</h5>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut enim iusto cum minima totam, esse culpa animi et nihil quaerat expedita odit voluptates earum a magnam obcaecati fugiat? Error, nemo?</span>
                <hr>
            </div>
        </div>
        <div class="row my-2">
            <div class="avatar-class col-3 ms-4 mb-2 card border-0 bg-success">
                <a class="text-white m-auto fs-3 fw-bold" href="#">M</a>
            </div>
            <div class="mx-3 col-9">
                <h5>Matematika</h5>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut enim iusto cum minima totam, esse culpa animi et nihil quaerat expedita odit voluptates earum a magnam obcaecati fugiat? Error, nemo?</span>
                <hr>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection() ?>