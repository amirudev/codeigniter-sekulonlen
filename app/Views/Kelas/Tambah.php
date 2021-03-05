<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<?php 
    $namakelas = [
        'name' => 'kelas_name',
        'id' => 'namakelas',
        'value' => NULL,
        'class' => 'form-control mb-2'
    ];
    $userid = [
        'name' => 'kelas_userid',
        'value' => $data['idguru'],
        'type' => 'HIDDEN'
    ];
    $submit = [
        'class' => 'btn btn-primary my-2 w-100',
        'value' => 'Tambah Kelas'
    ];
?>
<div class="d-flex justify-content-center">
    <div class="card bg-white col-11 col-md-8 col-lg-6 text-center p-3">
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
        <?= form_open('Kelas/Tambah'); ?>
        <?= form_input($userid) ?>
        <div class="form-floating">
            <?= form_input($namakelas) ?>
            <?= form_label('Nama Kelas', 'namakelas') ?>
        </div>
        <h6 class="text-secondary text-start">Warna Kelas</h6>
        <div class="form-group col-12 my-2">
            <div class="row mx-1 d-flex justify-content-around">
                <label for="0" class="col-auto border p-3">
                    <svg width="60" height="60" class="bg-primary"></svg>
                    <br>
                    <input class="form-check-input" type="radio" id="0" name="kelas_bgcolor" value="0">
                </label>
                <label for="1" class="col-auto border p-3">
                    <svg width="60" height="60" class="bg-secondary"></svg>
                    <br>
                    <input class="form-check-input" type="radio" id="1" name="kelas_bgcolor" value="1">
                </label>
                <label for="2" class="col-auto border p-3">
                    <svg width="60" height="60" class="bg-success"></svg>
                    <br>
                    <input class="form-check-input" type="radio" id="2" name="kelas_bgcolor" value="2">
                </label>
                <label for="3" class="col-auto border p-3">
                    <svg width="60" height="60" class="bg-danger"></svg>
                    <br>
                    <input class="form-check-input" type="radio" id="3" name="kelas_bgcolor" value="3">
                </label>
                <label for="4" class="col-auto border p-3">
                    <svg width="60" height="60" class="bg-info"></svg>
                    <br>
                    <input class="form-check-input" type="radio" id="4" name="kelas_bgcolor" value="4">
                </label>
                <label for="5" class="col-auto border p-3">
                    <svg width="60" height="60" class="bg-dark"></svg>
                    <br>
                    <input class="form-check-input" type="radio" id="5" name="kelas_bgcolor" value="5">
                </label>
            </div>
        </div>
        <h6 class="text-secondary text-start">Ikon Kelas</h6>
        <div class="form-group col-12">
        <div class="row mx-1 d-flex justify-content-around">
                <label for="icon-0" class="col-auto border p-3 my-2">
                    <i class="fas fa-2x fa-square-root-alt"></i>
                    <br>
                    <input class="form-check-input" type="radio" id="icon-0" name="kelas_icon" value="0">
                </label>
                <label for="icon-1" class="col-auto border p-3 my-2">
                    <i class="fas fa-2x fa-language"></i>
                    <br>
                    <input class="form-check-input" type="radio" id="icon-1" name="kelas_icon" value="1">
                </label>
                <label for="icon-2" class="col-auto border p-3 my-2">
                    <i class="fas fa-2x fa-atom"></i>
                    <br>
                    <input class="form-check-input" type="radio" id="icon-2" name="kelas_icon" value="2">
                </label>
                <label for="icon-3" class="col-auto border p-3 my-2">
                    <i class="fas fa-2x fa-running"></i>
                    <br>
                    <input class="form-check-input" type="radio" id="icon-3" name="kelas_icon" value="3">
                </label>
                <label for="icon-4" class="col-auto border p-3 my-2">
                    <i class="fas fa-2x fa-heart"></i>
                    <br>
                    <input class="form-check-input" type="radio" id="icon-4" name="kelas_icon" value="4">
                </label>
                <label for="icon-5" class="col-auto border p-3 my-2">
                    <i class="fas fa-2x fa-globe"></i>
                    <br>
                    <input class="form-check-input" type="radio" id="icon-5" name="kelas_icon" value="5">
                </label>
                <label for="icon-6" class="col-auto border p-3 my-2">
                    <i class="fas fa-2x fa-project-diagram"></i>
                    <br>
                    <input class="form-check-input" type="radio" id="icon-6" name="kelas_icon" value="6">
                </label>
                <label for="icon-7" class="col-auto border p-3 my-2">
                    <i class="fas fa-2x fa-globe-americas"></i>
                    <br>
                    <input class="form-check-input" type="radio" id="icon-7" name="kelas_icon" value="7">
                </label>
                <label for="icon-8" class="col-auto border p-3 my-2">
                    <i class="fas fa-2x fa-book"></i>
                    <br>
                    <input class="form-check-input" type="radio" id="icon-8" name="kelas_icon" value="8">
                </label>
            </div>
        </div>
        <?= form_submit($submit); ?>
        <?= form_close(); ?>
    </div>
</div>
<?= $this->endsection(); ?>