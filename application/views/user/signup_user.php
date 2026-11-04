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
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/success.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/signup_user.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/fontawesome/css/all.css" />
    <link rel="icon" href="<?= base_url() ?>images/kos.png">
    <script src="<?= base_url() ?>assets/css_fix/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>KosHub.com | Daftar</title>

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <style>
    body {
        font-family: 'Montserrat';
    }
    </style>

    <!-- style -->
</head>

<body>

    <div class="home">
        <div class="container">
            <div class="form_huni">
                <div class="row vh-100 align-items-center justify-content-center">
                    <div class="col-sm-8 col-md-6 col-lg-4 bg-white rounded p-4 shadow">
                        <div class="row justify-content-center mb-4">
                            <img src="<?= base_url() ?>images/fix/Logo_Fix2.png" class="w-100">
                            <h2 class="text-center">Registrasi Yuk!</h2>
                        </div>
                        <form action="<?= base_url('user/signup_user/regCari') ?>" method="POST"
                            enctype="mulitpart/form-data">
                            <div class="mb-4">
                                <label for="email" class="form-label">Nama</label>
                                <input placeholder="Masukkan nama anda" type="text" name="nama" id="nama"
                                    class="form-control" value="<?= set_value('nama') ?>">
                                <small class="text-danger"><?= form_error('nama') ?></small>
                            </div>
                            <div class="mb-4">
                                <label for="" class="form-label">Email</label>
                                <input placeholder="Masukkan email anda" type="email" name="email" id=""
                                    class="form-control" value="<?= set_value('email') ?>">
                                <small class="text-danger"><?= form_error('email') ?></small>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 mb-4">
                                    <label for="" class="form-label">Password</label>
                                    <input type="password" name="password" id="" class="form-control">
                                    <small class="text-danger"><?= form_error('password') ?></small>
                                </div>
                                <div class="col-sm-6 mb-4">
                                    <label for="" class="form-label">Konfirmasi Password</label>
                                    <input type="password" name="conpassword" id="" class="form-control">
                                    <small class="text-danger"><?= form_error('conpassword') ?></small>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mb-4" id="buatHuni">Buat Akun</button>
                        </form>
                        <p class="mb-0 text-center">Anda punya kos? <a href="#" class="text-decoration-none"
                                id="punya_kos">Daftar kos
                                disini!</a></p>
                        <p class="mb-0 text-center">Sudah punya akun? <a href="<?= base_url('user/login_user') ?>"
                                class="text-decoration-none" id="punya_kos">Yuk login!</a></p>
                    </div>
                </div>
            </div>
            <div class="form_punya pt-4 pb-5">
                <div class="row vh-100 align-items-center justify-content-center">
                    <div class="col-sm-8 col-md-6 col-lg-4 bg-white rounded p-4 shadow">
                        <div class="row justify-content-center mb-4">
                            <img src="<?= base_url() ?>images/fix/Logo_Fix2.png" class="w-100">
                            <h2 class="text-center">Daftarkan Kos Anda!</h2>
                        </div>
                        <form action="<?= base_url('user/signup_user/regBos') ?>" method="POST"
                            enctype="mulitpart/form-data">
                            <div class="mb-4">
                                <label for="email" class="form-label">Nama</label>
                                <input placeholder="Masukkan nama anda" type="text" name="nama2" id="nama2"
                                    class="form-control" value="<?= set_value('nama2') ?>">
                                <small class="text-danger"><?= form_error('nama2') ?></small>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="form-label">Alamat Email</label>
                                <input placeholder="Masukkan alamat email anda" type="email" name="email2" id="email2"
                                    class="form-control" value="<?= set_value('email2') ?>">
                                <small class="text-danger"><?= form_error('email2') ?></small>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="form-label">Nomor Handphone</label>
                                <input placeholder="Masukkan nomor handphone anda" type="number" name="nohp" id="nohp"
                                    class="form-control" value="<?= set_value('nohp') ?>">
                                <small class="text-danger"><?= form_error('nohp') ?></small>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 mb-4">
                                    <label for="" class="form-label">Password</label>
                                    <input type="password" name="password2" id="password" class="form-control">
                                    <small class="text-danger"><?= form_error('password2') ?></small>
                                </div>
                                <div class="col-sm-6 mb-4">
                                    <label for="" class="form-label">Konfirmasi Password</label>
                                    <input type="password" name="conpassword2" id="password" class="form-control">
                                    <small class="text-danger"><?= form_error('conpassword2') ?></small>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mb-4">Buat Akun</button>
                        </form>
                        <p class="mb-0 text-center">Anda cari kos? <a href="#" class="text-decoration-none"
                                id="cari_kos">Daftar
                                disini!</a></p>
                        <p class="mb-0 text-center">Sudah punya akun? <a href="<?= base_url('user/login_user') ?>"
                                class="text-decoration-none" id="punya_kos">Yuk login!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
    const punyaBtn = document.querySelector("#punya_kos"),
        huniBtn = document.querySelector("#cari_kos"),
        formContainer = document.querySelector(".container");

    punyaBtn.addEventListener("click", (e) => {
        e.preventDefault();
        formContainer.classList.add("active");
    })

    huniBtn.addEventListener("click", (e) => {
        e.preventDefault();
        formContainer.classList.remove("active");
    })
    </script>
    <?php
    if ($this->session->flashdata('message')) { ?>
    <script>
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-primary',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
        icon: "success",
        title: "Akun Dibuat!",
        text: "Akunmu sudah berhasil dibuat!",
        confirmButtonText: "<a class='text-white' style='text-decoration: none;' href='http://localhost/kos-kosan/user/login_user'>Login Sekarang!</a>",
    })
    </script>
    <?php    } ?>

</body>