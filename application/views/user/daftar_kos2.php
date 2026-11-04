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
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/kos_user2.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/home_user.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/fontawesome/css/all.css" />
    <link rel="icon" href="<?= base_url() ?>images/kos.png">
    <script src="<?= base_url() ?>assets/css_fix/bootstrap.bundle.js"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <title>KosHub.com | Kos</title>

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <style>
        body {
            font-family: 'Montserrat';
        }

        .truncante-me {
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .truncante-me2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
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

    <!-- header start -->
    <h1 class="mt-5 fw-bold text-center">
        Cari kos yang ter<span class="text-gradient" id="header" style="font-weight:bolder;">MURAH</span> untukmu
        di sini!
    </h1>

    <!-- content start -->
    <div class="container mt-5">
        <div class="my-4">
            <div class="row">
                <div class="col-md-9">
                    <?php foreach ($dataKos as $key => $value) { ?>
                        <div class="hotel-card tag-hotel-info-card mb-3">
                            <div class="hotel-card-wrapper">
                                <div class="hotel-gallery">
                                    <div>
                                        <div class="gallery-container">
                                            <?php
                                            $matchingPhotos = array(); // Store the matching photos
                                            foreach ($fotoKos as $foto) {
                                                if ($foto['id_kos'] == $value['id_kos']) {
                                                    $matchingPhotos[] = $foto['foto_kos']; // Add the photo URL to the array
                                                }
                                            }
                                            if (!empty($matchingPhotos)) {
                                                echo '<img style="width:100%;" src="' . $matchingPhotos[0] . '" alt="" class="cursor">'; // Display the first photo
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="hotel-info-wrapper">
                                    <div class="hotel-info">
                                        <div class="hotel-info-content">
                                            <div class="hotelTitle">
                                                <div class="hotelName">
                                                    <h2 class="tag-hotel-info-name color-primary">
                                                        <?php echo $value['nama_kos']; ?></h2>
                                                    <h5 class="tag-hotel-info-name text-muted truncante-me" style="font-size:11px;">
                                                        <?php echo $value['tentang_kos']; ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="basic-info">
                                            <ul>
                                                <li class="tag-hotel-info-map-link"><span class="nh-icons-ic_location icon me-3 color-primary-light"><i class="fa-solid fa-location-dot"></i></span>
                                                    <a class="btn-text truncante-me2" href="https://www.google.com/maps/search/<?php echo $value['alamat_kos']; ?>">
                                                        <?php echo $value['alamat_kos']; ?></a>
                                                </li>
                                                <li class="tag-hotel-info-phone-link"><span class="nh-icons-ic_phone icon me-3 color-primary-light"><i class="fa-solid fa-phone"></i></span><a href="" title="" class="btn-text"><?php
                                                                                                                                                                                                                                    $matchingNumber = array(); // Store the matching photos
                                                                                                                                                                                                                                    foreach ($nomorKos as $nomor) {
                                                                                                                                                                                                                                        if ($nomor['id_penyewa'] == $value['id_penyewa']) {
                                                                                                                                                                                                                                            $matchingNumber[] = $nomor['no_hp']; // Add the photo URL to the array
                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                    if (!empty($matchingNumber)) {
                                                                                                                                                                                                                                        echo $matchingNumber[0];
                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                    ?></a>
                                                </li>
                                                <li class="tag-hotel-info-hotel-link"><span class="nh-icons-ic_hotel_2 icon me-3 color-primary-light"><i class="fa-solid fa-house"></i></span>
                                                    <div><a href="<?php base_url() ?>Kos_user?id=<?php echo $value['id_kos'] ?>" target="_blank" title="" class="btn-text">Lihat
                                                            kos</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hotel-rating">
                                        <div class="tripadvisor mb-3">
                                            <div>
                                            </div>
                                        </div>
                                        <div class="reserve w-100">
                                            <div>
                                                <div class="hotelReserve tag-hotel-info-price-element">
                                                    <div class="text">
                                                        <div><span class="lower text-dark">Mulai dari
                                                            </span> <span class="number tag-hotel-info-price"><?php
                                                                                                                $matchingNumber = array(); // Store the matching photos
                                                                                                                foreach ($hargaKos as $harga) {
                                                                                                                    if ($harga['id_kos'] == $value['id_kos']) {
                                                                                                                        $matchingNumber[] = $harga['tarif_bulanan']; // Add the photo URL to the array
                                                                                                                    }
                                                                                                                }
                                                                                                                if (!empty($matchingNumber)) {
                                                                                                                    echo 'Rp' . $matchingNumber[0];
                                                                                                                }
                                                                                                                ?>
                                                            </span>
                                                            <span class="currency tag-hotel-info-currency"> </span>
                                                        </div>
                                                        <div class="tag-hotel-info-per-night"><span class="lower text-dark">per
                                                                bulan</span>
                                                        </div>
                                                    </div>
                                                    <div class="btn-container tag-hotel-info-button"><a href="<?php base_url() ?>Kos_user?id=<?php echo $value['id_kos'] ?>" class="btn btn-primary">
                                                            Lihat Kos
                                                        </a></div>
                                                    <div class="lower iva tag-hotel-info-taxes">Tidak termasuk pajak</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-md-3">
                    <div class="bg-setting">
                        <h5 class="fw-bold" style="font-size: 17px;">
                            Cari kos sesuai keinginanmu!
                        </h5>
                        <br>
                        <label for="customRange3" class="form-label">Sesuaikan hargamu!</label>
                        <div class="range">
                            <input type="range" class="slider" min="1" max="6" step="1" id="myRange" />
                        </div>
                        <p id="demo" class="text-center"></p>
                        <div class="d-grid gap-3">
                            <a class="btn btn-cari btn-lg px-5 me-sm-3 fs-6" href="<?= base_url("user/daftar_kos") ?>">Cari
                                kos!</a>
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
        var typed = new Typed('#header', {
            strings: ['MURAH', 'NYAMAN', 'DEKAT', 'BAIK', 'JANGKAU', 'POPULER', 'LENGKAP', 'BARU', 'AMAN',
                'PERCAYA'
            ],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true
        });

        var slider = document.getElementById("myRange");
        var output = document.getElementById("demo");
        output.innerHTML = "Dibawah Rp4.000.000"; // Display the default slider value

        // Update the current slider value (each time user drag the slider handle)
        slider.oninput = function() {
            if (slider.value == 1) {
                output.innerHTML = "Dibawah Rp1.000.000";
            }
            if (slider.value == 2) {
                output.innerHTML = "Dibawah Rp2.000.000";
            }
            if (slider.value == 3) {
                output.innerHTML = "Dibawah Rp3.000.000";
            }
            if (slider.value == 4) {
                output.innerHTML = "Dibawah Rp4.000.000";
            }
            if (slider.value == 5) {
                output.innerHTML = "Dibawah Rp5.000.000";
            }
            if (slider.value == 6) {
                output.innerHTML = "Harga Berapapun";
            }
        }
    </script>
</body>