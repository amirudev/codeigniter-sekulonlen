<?= $this->include('Layout/Header') ?>
<body class="bg-light">
    <nav class="nav-sidebar bg-white navbar-active" id="navbar">
        <div class="logo mt-1">
            <a href="<?= base_url(); ?>">
                <img src="<?= base_url('image/logo/sekulonlen.png') ?>">
            </a>
        </div>
        <button class="bg-white border-0 w-100 text-center" id="navbar-control">
            <span class="text-secondary"><i class="fas fa-long-arrow-alt-left"></i> Close</span>
        </button>
        <div class="list-menu">
            <ul class="text-center p-0">
                <a href="<?= base_url('') ?>">
                    <li class="my-5 <?php if($pagedata['name'] == ''){echo 'active';} ?>">
                        <i class="fas fa-th-large fa-2x"></i>
                        <p>Dashboard</p>
                    </li>
                </a>
                <a href="<?= base_url('/Kelas') ?>">
                    <li class="my-5 <?php if($pagedata['name'] == 'kelas'){echo 'active';} ?>">
                        <i class="fas fa-chalkboard-teacher fa-2x"></i>
                        <p>Kelas</p>
                    </li>
                </a>
                <a href="<?= base_url('/Tugas') ?>">
                    <li class="my-5 <?php if($pagedata['name'] == 'tugas'){echo 'active';} ?>">
                        <i class="fas fa-book fa-2x"></i>
                        <p>Tugas</p>
                    </li>
                </a>
            </ul>
        </div>
    </nav>
    <div class="content-box container-fluid pe-0 navbar-active" id="content-box">
        <nav class="navbar navbar-light px-2">
            <div class="container-fluid my-4">
                <button class="bg-light border-0 my-1" id="navbar-control">
                    <i class="fas fa-bars my-2"></i>
                </button>
                <div>
                    <button class="bg-light border-0 position-relative" id="popover-expand-button">
                        <i class="fas fa-bell fs-5 mx-3 align-middle"></i>
                        <div class="popover position-absolute p-3">
                            <span>Tugas belum dikumpulkan!</span>
                            <hr>
                            <span>Tugas belum dikumpulkan!</span>
                        </div>
                    </button>
                    <button class="bg-light border-0 position-relative" id="popover-expand-button">
                        <i class="fas fa-newspaper fs-5 mx-3 align-middle"></i>
                        <div class="popover position-absolute p-3">
                            <span>Sekolah ditutup kembali</span>
                            <h6 class="text-secondary text-end">12-01-2021</h6>
                            <hr>
                            <span>Belajar Online diperpanjang</span>
                            <h6 class="text-secondary text-end">12-01-2021</h6>
                        </div>
                    </button>
                    <button class="bg-light border-0 position-relative" id="popover-expand-button">
                        <img src="<?= base_url('image/icon/person.png') ?>">
                        <i class="fas fa-chevron-down align-middle mx-3"></i>
                        <div class="popover position-absolute">
                            <ul>
                                <li class="p-3"><a href="#">Login</a></li>
                                <li class="p-3"><a  href="#">Register</a></li>
                            </ul>
                        </div>
                    </button>
                </div>
            </div>
            <span class="navbar-brand fs-4 text-secondary ms-3"><?= $pagedata['title'] ?></span>
        </nav>
        <div class="mx-4">
            <?= $this->renderSection('content') ?>
        </div>
    </div>
</body>
<?= $this->include('Layout/Footer') ?>