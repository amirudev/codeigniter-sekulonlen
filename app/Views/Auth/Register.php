<?= $this->extend('Layout') ?>
<?= $this->section('content') ?>
<div class="d-flex justify-content-center">
    <div class="card bg-white col-6 text-center p-3">
        <h4 class="mb-4">Register</h4>
        <?php
        $name = [
            'name' => 'user_fullname',
            'id' => 'user_fullname',
            'class' => 'form-control mb-2'
        ];
        $username = [
            'name' => 'username',
            'id' => 'username',
            'class' => 'form-control mb-2'
        ];
        $password = [
            'name' => 'password',
            'id' => 'password',
            'class' => 'form-control mb-2',
        ];
        $submit = [
            'class' => 'btn btn-primary my-3 w-100',
            'value' => 'Daftar'
        ];
        ?>
        <?php
        $this->session = session();
        $errors = $this->session->getFlashdata('errors');
        if($errors){
            foreach ($errors as $index => $error) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $error ?>
                </div>
            <?php }
        }
        ?>
        <?= form_open('Auth/Register') ?>
        <div class="form-floating">
            <?= form_input($name) ?>
            <?= form_label('Nama Lengkap', 'user_fullname') ?>
        </div>
        <div class="form-floating">
            <?= form_input($username) ?>
            <?= form_label('Username', 'username') ?>
        </div>
        <div class="form-floating">
            <?= form_password($password) ?>
            <?= form_label('Kata Sandi', 'password') ?>
        </div>
        <div class="form-group col-12">
            <div class="row mx-1 d-flex justify-content-around">
                <label for="siswa" class="col-5 border p-3">
                    <i class="fas fa-user-graduate fa-4x"></i>
                    <p>Student</p>
                    <input type="checkbox" class="form-check-input" value="0" id="siswa">
                </label>
                <label for="guru" class="col-5 border p-3">
                    <i class="fas fa-chalkboard-teacher fa-4x"></i>
                    <p>Guru</p>
                    <input class="form-check-input" type="checkbox" id="guru" value="1">
                </label>
            </div>
        </div>
        <?= form_submit($submit) ?>
        <?= form_close() ?>
    </div>
</div>
<?= $this->endSection() ?>