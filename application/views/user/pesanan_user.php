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
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/pesanan_user.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/fontawesome/css/all.css" />
    <link rel="icon" href="<?= base_url() ?>images/kos.png">
    <script src="<?= base_url() ?>assets/css_fix/bootstrap.bundle.js"></script>

    <title>KosHub.com | Pesanan</title>

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <style>
    body {
        font-family: 'Montserrat';
    }
    </style>
    <!-- style -->
</head>

<body class="d-flex flex-column min-vh-100" style="background-color: rgba(205, 208, 209, 0.44);">

    <!-- navbar start -->
    <?php if (!isset($email)) {
        echo $this->load->view('user/navbar_user', '', true);
    } else {
        echo $this->load->view('user/navbar_user_login', '', true);
    } ?>

    <div class="mt-5">
        <div class="container">
            <div class="row">
                <div class="w-25 col-sm-4">
                    <div class="text-start">
                        <h4>
                            Status & Riwayat Pesanan
                        </h4>
                        <div class="pt-2">
                            <a class="link-riwayat" href=""><span class="ps-2 pe-3"><i
                                        class="fa-solid fa-building"></i></span>Kamar
                                Kos</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 pb-5">
                    <div class="bg-pesanan">
                        <div class="text-pesanan">
                            <div class="table-responsive"></div>
                            <table id="myTable" class="display table" width="100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Kos</th>
                                        <th>Kamar</th>
                                        <th>Start</th>
                                        <th>Expire</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pesanan as $key => $pesan) { ?>
                                    <tr>
                                        <td><?= $pesan['id_pesanan']; ?></td>
                                        <td><?= $pesan['nama_kos']; ?></td>
                                        <td><?= $pesan['nama_kamar']; ?></td>
                                        <td><?= $pesan['start_date']; ?></td>
                                        <td><?= $pesan['expire_date']; ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
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

    <script>
    $(document).ready(function() {
        $('#myTable').dataTable();
    });
    </script>
</body>