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
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/kos2_user.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/kos_user2.css" />
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/fontawesome/css/all.css" />
    <link rel="icon" href="<?= base_url() ?>images/kos.png">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"
        type='text/css'>
    <script src="<?= base_url() ?>assets/css_fix/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <title>KosHub.com | Kos</title>

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <style>
    body {
        font-family: 'Montserrat';
    }
    </style>
</head>

<body>
    <!-- navbar start -->
    <?php if (!isset($email)) {
        echo $this->load->view('user/navbar_user', '', true);
    } else {
        echo $this->load->view('user/navbar_user_login', '', true);
    } ?>

    <div class="container">
        <div class="mt-5">
            <div class="row">
                <div class="col-sm-9">
                    <h1 class="fw-bold"><?php echo $dataKos[0]['nama_kos'] ?></h1>
                    <span><i class="fa-solid fa-location-dot me-3"></i><a style="text-decoration: none; color: black;"
                            href="https://www.google.com/maps/search/<?php echo $dataKos[0]['alamat_kos'] ?>"><?php echo $dataKos[0]['alamat_kos'] ?></a></span>
                    <br>
                    <span><i
                            class="fa-solid fa-location-dot me-3"></i><?php echo $dataKos[0]['alamat_lengkap'] ?></span>
                    <br>
                    <span><i class="fa-solid fa-phone me-3"></i><?php echo $nomorKos[0]['no_hp'] ?></span>
                </div>
                <div class="col-sm-3 fw-bold">
                    <div class="css-1dbjc4n r-obd0qt r-eqz5dr" style="font-size: 30px; margin-top: 4rem;">
                        <div dir="auto" class="css-901oao r-t1w4ow r-1b43r93 r-majxgm r-rjixqe r-1ff274t"
                            style="color: rgb(3, 18, 26);">Harga kamar</div>
                        <div dir="auto" class="css-901oao r-t1w4ow r-1b43r93 r-majxgm r-rjixqe r-1ff274t"
                            style="color: rgb(3, 18, 26);">per bulan mulai dari</div>
                        <h1 aria-level="1" dir="auto" role="heading"
                            class="css-4rbku5 css-901oao r-t1w4ow r-1x35g6 r-b88u0q r-vrz42v r-fdjqy7"
                            style="color: #003a70;">Rp<?php echo $termurah[0]['smallest_tarif'] ?></h1>
                        <div class="css-1dbjc4n" style="padding-bottom: 8px;"></div>
                    </div>
                </div>
                <div class="wrapper mt-1">
                    <i id="left" class="fa-solid fa-angle-left"></i>
                    <div class="carousel">
                        <?php foreach ($fotoKos as $key => $foto) {  ?>
                        <img src="<?= $foto['foto_kos'] ?>" alt="img" draggable="false">
                        <?php } ?>
                        <!-- <img src="<?= base_url() ?>images/fix/2.jpg" alt="img" draggable="false">
                        <img src="<?= base_url() ?>images/fix/3.jpg" alt="img" draggable="false">
                        <img src="<?= base_url() ?>images/fix/4.jpg" alt="img" draggable="false">
                        <img src="<?= base_url() ?>images/fix/5.jpg" alt="img" draggable="false">
                        <img src="<?= base_url() ?>images/fix/6.jpg" alt="img" draggable="false">
                        <img src="<?= base_url() ?>images/fix/7.jpg" alt="img" draggable="false">
                        <img src="<?= base_url() ?>images/fix/8.jpg" alt="img" draggable="false"> -->
                    </div>
                    <i id="right" class="fa-solid fa-angle-right"></i>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-4">
                    <section class="container2 text-center">
                        <div class="card2">
                            <div class="image">
                                <img src="<?= base_url() ?>images/fix/1.jpg" alt="" />
                            </div>
                            <h2>Air Conditioner</h2>
                        </div>
                        <div class="card2">
                            <div class="image">
                                <img src="<?= base_url() ?>images/fix/2.jpg" alt="" />
                            </div>
                            <h2>Parkiran</h2>
                        </div>
                        <div class="card2">
                            <div class="image">
                                <img src="<?= base_url() ?>images/fix/3.jpg" alt="" />
                            </div>
                            <h2>Kamar mandi dalam</h2>
                        </div>
                        <div class="card2">
                            <div class="image">
                                <img src="<?= base_url() ?>images/fix/5.jpg" alt="" />
                            </div>
                            <h2>Tempat jemuran</h2>
                        </div>
                    </section>
                </div>
                <div class="col-sm-8">
                    <div class="card w-100">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Tentang Kos</h5>
                            <p class="card-text truncate"><?= $dataKos[0]['tentang_kos'] ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4 mb-5">
                <?php echo $this->load->view('user/tailwind/kos-room', '', true); ?>
            </div>
        </div>

        <script>
        const carousel = document.querySelector(".carousel"),
            firstImg = carousel.querySelectorAll("img")[0],
            arrowIcons = document.querySelectorAll(".wrapper i");

        let isDragStart = false,
            isDragging = false,
            prevPageX, prevScrollLeft, positionDiff;

        const showHideIcons = () => {
            // showing and hiding prev/next icon according to carousel scroll left value
            let scrollWidth = carousel.scrollWidth - carousel.clientWidth; // getting max scrollable width
            arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
            arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
        }

        arrowIcons.forEach(icon => {
            icon.addEventListener("click", () => {
                let firstImgWidth = firstImg.clientWidth +
                    14; // getting first img width & adding 14 margin value
                // if clicked icon is left, reduce width value from the carousel scroll left else add to it
                carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
                setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
            });
        });

        const autoSlide = () => {
            // if there is no image left to scroll then return from here
            if (carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) > -1 || carousel.scrollLeft <=
                0)
                return;

            positionDiff = Math.abs(positionDiff); // making positionDiff value to positive
            let firstImgWidth = firstImg.clientWidth + 14;
            // getting difference value that needs to add or reduce from carousel left to take middle img center
            let valDifference = firstImgWidth - positionDiff;

            if (carousel.scrollLeft > prevScrollLeft) { // if user is scrolling to the right
                return carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
            }
            // if user is scrolling to the left
            carousel.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
        }

        const dragStart = (e) => {
            // updatating global variables value on mouse down event
            isDragStart = true;
            prevPageX = e.pageX || e.touches[0].pageX;
            prevScrollLeft = carousel.scrollLeft;
        }

        const dragging = (e) => {
            // scrolling images/carousel to left according to mouse pointer
            if (!isDragStart) return;
            e.preventDefault();
            isDragging = true;
            carousel.classList.add("dragging");
            positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
            carousel.scrollLeft = prevScrollLeft - positionDiff;
            showHideIcons();
        }

        const dragStop = () => {
            isDragStart = false;
            carousel.classList.remove("dragging");

            if (!isDragging) return;
            isDragging = false;
            autoSlide();
        }

        carousel.addEventListener("mousedown", dragStart);
        carousel.addEventListener("touchstart", dragStart);

        document.addEventListener("mousemove", dragging);
        carousel.addEventListener("touchmove", dragging);

        document.addEventListener("mouseup", dragStop);
        carousel.addEventListener("touchend", dragStop);

        function formatCurrency(element) {
            var value = element.innerHTML.trim(); // Get the innerHTML value and remove leading/trailing whitespace

            // Remove any non-digit characters (e.g., currency symbol)
            value = value.replace(/[^0-9]/g, '');

            // Add thousands separators
            value = parseInt(value).toLocaleString('id-ID');

            // Add the currency symbol or any other desired formatting
            value = 'Rp' + value;

            // Update the element's innerHTML with the formatted value
            element.innerHTML = value;
        }

        var element = document.querySelector('h1[aria-level="1"]');

        formatCurrency(element);
        // var kamar = document.querySelector('p.text-3xl.text-gray-900');

        // function formatCurrencyWithSuffix(element) {
        //     var value = element.innerHTML.trim(); // Get the innerHTML value and remove leading/trailing whitespace

        //     // Remove any non-digit characters (e.g., currency symbol)
        //     value = value.replace(/[^0-9]/g, '');

        //     // Add thousands separators
        //     value = parseInt(value).toLocaleString('id-ID');

        //     // Add the currency symbol and suffix
        //     value = 'Rp' + value + '/bulan';

        //     // Update the element's innerHTML with the formatted value
        //     element.innerHTML = value;
        // }

        // formatCurrencyWithSuffix(kamar);
        </script>
</body>