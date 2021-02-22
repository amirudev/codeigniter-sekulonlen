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
                <a href="#">
                    <li class="my-5 active">
                        <i class="fas fa-th-large fa-2x"></i>
                        <p>Dashboard</p>
                    </li>
                </a>
                <a href="#">
                    <li class="my-5">
                        <i class="fas fa-chalkboard-teacher fa-2x"></i>
                        <p>Kelas</p>
                    </li>
                </a>
                <a href="#">
                    <li class="my-5">
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
                <form class="d-flex my-auto">
                    <input class="form-control me-2 rounded-pill border-0" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn bg-white rounded-pill" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <span class="navbar-brand fs-4 text-secondary ms-3">Dashboard</span>
        </nav>
        <div class="mx-4">
            <?= $this->renderSection('content') ?>
        </div>
    </div>
</body>
<?= $this->include('Layout/Footer') ?>