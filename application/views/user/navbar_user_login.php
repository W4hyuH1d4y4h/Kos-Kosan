<nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
    <div class="container">
        <a id="nav" class="navbar-brand" href="#"><i class="fa-solid fa-shop me-2"></i> <strong>KosHub.com</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="mx-auto my-3 d-lg-none d-sm-block d-xs-block">
            <div class="input-group">
                <span class="border-warning input-group-text bg-warning text-white"><i
                        class="fa-solid fa-magnifying-glass"></i></span>
                <input type="text" class="form-control border-warning" style="color:#7a7a7a">
                <button class="btn btn-warning text-white">Search</button>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <div class="ms-auto d-none d-lg-block">
                <div class="input-group">
                    <input type="text" class="form-control border-warning" style="color:#7a7a7a">
                    <button class="btn btn-warning text-white"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a class="nav-link mx-2 text-uppercase" aria-current="page"
                        href="<?= base_url('user/Home') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 text-uppercase" href="<?= base_url('user/daftar_kos') ?>">Kos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 text-uppercase" href="<?= base_url('user/pesanan_user') ?>">Pesanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 text-uppercase" href="<?= base_url('user/about') ?>">Tentang</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto ">
                <div class="dropdown">
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                class="fa-solid fa-circle-user me-1"></i>
                            <?= $nama ?></a>
                        <!-- menu dropdown -->
                        <ul class="dropdown-menu dropdown-menu-dark text" aria-labelledby="navbarDarkDropdownMenuLink">
                            <div class="">
                                <li>
                                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i>
                                        Profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?= base_url('user/pesanan_user') ?>"><i
                                            class="fa fa-receipt"></i> Pesanan</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?= base_url('user/login_user/logout') ?>"><i
                                            class="fa fa-power-off"></i> Logout</a>
                                </li>
                            </div>
                        </ul>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</nav>