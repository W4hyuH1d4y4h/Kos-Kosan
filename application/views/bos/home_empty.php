<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css" />
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/navbar.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/pesanan_user_empty.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/fontawesome/css/all.css" />
    <link rel="icon" href="<?= base_url() ?>images/kos.png">
    <script src="<?= base_url() ?>assets/css_fix/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <title>KosHub.com | Pesanan</title>

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <style>
    body {
        font-family: 'Montserrat';
    }

    .text-gradient {
        background: -webkit-linear-gradient(315deg, #1e30f3 0%, #e21e80 100%);
        background-clip: border-box;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .btn-transition {
        background: linear-gradient(45deg, #1e30f3, #e21e80);
        transition: all 0.3s ease-out;
        transform: scale(1);
        color: white;
    }

    .btn-transition:hover {
        background: linear-gradient(180deg, #ff7147, #e0417f);
        transform: scale(1.1);
        color: white;
    }

    .bg-gradient-primary-to-secondary {
        background: #1e30f3;
        background: linear-gradient(135deg, #1e30f3 0%, #e21e80 100%);
    }
    </style>
    <!-- style -->
</head>

<body class="d-flex flex-column min-vh-100" style="background-color: rgba(205, 208, 209, 0.44);">

    <!-- navbar start -->
    <?php if (!isset($email)) {
        echo $this->load->view('bos/navbar_bos', '', true);
    } else {
        echo $this->load->view('bos/navbar_bos_login', '', true);
    } ?>

    <div class="page-404">
        <div class="outer">
            <div class="middle">
                <div class="inner">
                    <!--BEGIN CONTENT-->
                    <div class="inner-circle"><i class="fa fa-home"></i><span>:(</span>
                    </div>
                    <span class="inner-status">Waduh! Kamu belum punya kos.</span>
                    <span class="inner-detail">
                        Sepertinya kamu belum daftarkan kos kamu. Daftar sekarang!
                    </span>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center mb-3">
                        <a class="btn btn-transition btn-lg px-5 me-sm-3 fs-6 fw-bolder"
                            href="<?= base_url("user/daftar_kos") ?>">Daftarkan
                            kos!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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