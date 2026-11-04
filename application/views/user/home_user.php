<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/navbar.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/home_user.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/fontawesome/css/all.css" />
    <link rel="icon" href="<?= base_url() ?>images/kos.png">
    <script src="<?= base_url() ?>assets/css_fix/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>KosHub.com | Home</title>

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <style>
    body {
        font-family: 'Montserrat';
    }
    </style>
    <!-- style -->
</head>

<body>
    <!-- navbar start -->
    <?php if (!isset($email)) {
        echo $this->load->view('user/navbar_user', '', true);
    } else {
        echo $this->load->view('user/navbar_user_login', '', true);
    } ?>

    <!-- body start -->
    <div class="container pb-5" style="padding-top: 5rem;">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 text-end">
                <div class="fs-3 fw-light text-muted">Cari kos dengan harga</div>
                <div class="fs-3 fw-light text-muted">termurah di sini!</div>
                <h1 class="display-3 fw-bolder mb-4"><span class="text-gradient d-inline">Cari kos sekarang!</span></h1>
                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-end mb-3">
                    <a class="btn btn-transition btn-lg px-5 me-sm-3 fs-6 fw-bolder"
                        href="<?= base_url("user/daftar_kos") ?>">Cari
                        kos!</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                    <div class="profile bg-gradient-primary-to-secondary">
                        <img class="gambar_home" src="<?= base_url() ?>images/fix/house_fix.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- about start -->
    <section class="bg-light py-5 mt-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xxl-8">
                    <div class="text-center my-5">
                        <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Tentang Kami</span></h2>
                        <p class="lead fw-light mb-4">Temukan Solusi Kos Terjangkau!</p>
                        <p class="text-muted">Selamat datang di KosHub.com, platform pencari kos terpercaya yang
                            didedikasikan untuk membantu Anda menemukan kos ideal. Kami menyediakan solusi yang
                            efisien dan praktis dalam mencari kos-kosan yang sesuai dengan kebutuhan Anda.</p>
                        <div class="d-flex justify-content-center fs-2 gap-4">
                            <a class="text-gradient" href="#!"><i class="fa-brands fa-twitter"></i></a>
                            <a class="text-gradient" href="#!"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="bg-white py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0">Copyright © KosHub.com 2023</div>
                </div>
                <div class="col-auto">
                    <a class="small" href="#!">Privacy</a>
                    <span class="mx-1">·</span>
                    <a class="small" href="#!">Terms</a>
                    <span class="mx-1">·</span>
                    <a class="small" href="#!">Contact</a>
                </div>
            </div>
        </div>

    </footer>

    <?php if ($this->session->flashdata('message')) { ?>
    <script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-middle',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: 'success',
        title: 'Welcome, <?php echo '<span class="text-capitalize">' . $nama . '</span>' ?>!',
    })
    </script>
    <?php } ?>

</body>