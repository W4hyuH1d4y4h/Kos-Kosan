<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/navbar.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/login_user.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/fontawesome/css/all.css" />
    <link rel="icon" href="<?= base_url() ?>images/kos.png">
    <script src="<?= base_url() ?>assets/css_fix/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>KosHub.com | Login</title>

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <style>
        body {
            font-family: 'Montserrat';
        }
    </style>

    <!-- style -->
</head>

<body>
    <?php echo $this->load->view('user/navbar_user', '', true); ?>
    <div class="container">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-4 bg-white rounded p-4 shadow">
                <div class="row justify-content-center mb-4">
                    <img src="<?= base_url() ?>images/fix/Logo_Fix2.png" class="w-100">
                </div>
                <form action="<?= base_url('user/login_user') ?>" method="POST" enctype="mulitpart/form-data">
                    <div class="mb-4">
                        <label for="email" class="form-label">Alamat Email</label>
                        <input placeholder="Masukkan alamat email anda" type="email" name="email" id="email" class="form-control" value="<?= set_value('email'); ?>">
                        <small class="text-danger"><?= form_error('email') ?></small>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" aria-describedby="passwordHelp">
                        <small class="text-danger"><?= form_error('password') ?></small>
                    </div>
                    <div class="mb-4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1" required>
                            <label class="form-check-label" for="inlineRadio1">Saya cari kos</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2" required>
                            <label class="form-check-label" for="inlineRadio2">Saya pemilik kos</label>
                        </div>
                    </div>
                    <!-- <div class="mb-4 form-check">
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">Ingat Saya</label>
                    </div> -->
                    <button type="submit" class="btn btn-primary w-100 mb-4">Login</button>
                </form>
                <p class="mb-0 text-center">Belum punya akun? <a href="<?= base_url('user/signup_user') ?>" class="text-decoration-none">Daftar
                        disini!</a></p>
            </div>
        </div>
    </div>

    <?php
    if ($this->session->flashdata('message')) { ?>
        <script>
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })
            swalWithBootstrapButtons.fire({
                icon: "error",
                title: "Data Kamu Tidak Ditemukan :(",
                text: "Sepertinya kamu belum punya akun, daftar sekarang yuk!",
                confirmButtonText: "Ok",
            })
        </script>
    <?php } ?>

    <?php
    if ($this->session->flashdata('message2')) { ?>
        <script>
            const swalWithBootstrapButtons2 = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })
            swalWithBootstrapButtons2.fire({
                icon: "error",
                title: "Yahh Passwordmu Salah :(",
                text: "Password kamu salah, coba lagi yuk!",
                confirmButtonText: "Ok",
            })
        </script>
    <?php    } ?>

    <?php
    if ($this->session->flashdata('message3')) { ?>
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
                title: 'Logout Berhasil!',
            })
        </script>
    <?php    } ?>
</body>