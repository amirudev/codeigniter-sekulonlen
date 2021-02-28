<?= $this->extend('Layout') ?>
<?= $this->section('content') ?>
<div class="d-flex justify-content-center">
    <div class="card bg-white col-6 text-center p-3">
        <h4 class="mb-4">Login</h4>
        <?php
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
        <?= form_open('Auth/Login') ?>
        <div class="form-floating">
            <?= form_input($username) ?>
            <?= form_label('Username', 'username') ?>
        </div>
        <div class="form-floating">
            <?= form_password($password) ?>
            <?= form_label('Kata Sandi', 'password') ?>
        </div>
        <?= form_submit($submit) ?>
        <?= form_close() ?>
    </div>
</div>
<?= $this->endSection() ?>