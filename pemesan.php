<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>PEMESAN</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap1.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <script src="bootstrap.bundle.js"></script>

    <!-- style -->
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header star -->
        <header class="header">
            <img src="images\kos.jpg" alt="" />
            <h4>
                <b>Kos Resty</b>
            </h4>
            <div class="navbar">
                <a href="index.html">HOME</a>
                <a href="about.html">ABOUT</a>
                <a href="kamar.html">KAMAR</a>
                <a href="pemesanan.html">PESAN</a>
                <a href="kontak.html">KONTAK</a>
                <a class="nav-link dropdown-toggle nav-item dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    KELOLA
                </a>
                <ul class="dropdown-menu">
                    <a class="dropdown-item" href="kamar-kos.html">KAMAR</a>
                    <a class="dropdown-item" href="penghuni.html">PENGHUNI/a>
                    <a class="dropdown-item" href="pemesan.html">PEMESAN</a>
                    <a class="dropdown-item" href="pembayaran.html">PEMBAYARAN</a>
                </ul>  
            </div>
            <div class="User_option">
                <li class="">
                    <a href="login.php">
                        Login
                    </a>
                </li>
            </div>
        </header>
    </div>
    <!-- header end-->
    <div class="container pe-5 ps-5 m-5 form-check">
        <div class="gray-bg text-black">
            <!-- bagian konten -->
            <div class="konten"> 
            <div style="margin-top:15px;">
                    PESAN SEKARANG
                    <form action="aksi-tambah.php" method="POST" enctype="multipart/form-data">
                        Nama:<br>
                        <input type="text" name="nama_mhs" placeholder="Contoh: Habibie">
                        <br><br>
                        No. Hp:<br>
                        <input type="numbaer" name="no_telepon" placeholder="0811111111">
                        <br><br>
                        Waktu Sewa:<br>
                        <input type="text" name="waktu_sewa" placeholder="1 bulan">
                        <br><br>
                        <button type="submit" class="btn btn-primary mb-3">Pesan</button>
                    </form>
                </div>
        
                </div>
          </div>
    </div>

    <!-- info section -->
    <section class="info_section ">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="info_contact">
                        <h5>
                            Tentang Kos
                        </h5>
                        <div>
                            <div class="img-box">
                                <img src="images/location.png" width="18px" alt="">
                            </div>
                            <p>
                                Address
                            </p>
                        </div>
                        <div>
                            <div class="img-box">
                                <img src="images/phone.png" width="12px" alt="">
                            </div>
                            <p>
                                +62 853-9751-4717
                            </p>
                        </div>
                        <div>
                            <div class="img-box">
                                <img src="images/mail.png" width="18px" alt="">
                            </div>
                            <p>
                                demo@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15895.351934507145!2d119.4817943!3d-5.1297842!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf5c059de86dd07!2sPNUP%20Politeknik%20Negeri%20Ujung%20Pandang!5e0!3m2!1sid!2sid!4v1665108571257!5m2!1sid!2sid" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
            </div>
        </div>
    </section>

    <!-- end info_section -->


    <!-- footer section -->
    <section class="container-fluid footer_section ">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> Jln. Poros Moncongloe.
                <a href="https://html.design/">Kos-Kosan Resty</a>
            </p>
        </div>
    </section>
    <!-- end  footer section -->


    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>


</body>

</html>
