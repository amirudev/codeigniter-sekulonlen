<?= $this->include('Layout/Header') ?>
<body class="bg-light">
    <nav class="nav-sidebar bg-white float-start">
        <div class="logo mt-1">
            <a href="<?= base_url(); ?>">
                <img src="<?= base_url('image/logo/sekulonlen.png') ?>">
            </a>
        </div>
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
    <div class="content-box float-start container-fluid">
        <nav class="navbar navbar-light bg-light mx-2">
            <div class="container-fluid my-4">
                <span class="navbar-brand mb-0 h1">Dashboard</span>
                <form class="d-flex my-auto">
                    <input class="form-control me-2 rounded-pill border-0" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn bg-white rounded-pill" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </nav>
        <div class="mx-4">
            <?= $this->renderSection('content') ?>
        </div>
    </div>
</body>
<?= $this->include('Layout/Footer') ?>