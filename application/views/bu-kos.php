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

    <title>PEMBAYARAN</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap1.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.css" />
    <script src="<?php echo base_url(); ?>bootstrap.bundle.js"></script>
    <!-- style -->
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" />
</head>
<body>
    <div class="hero_area">
        <!-- header star -->
    <header class="header">
      <img src="images\kos.png" alt="" />
      <h4>
        <b>Kos Resty</b>
      </h4>
      <div class="navbar">
        <a href="<?php echo base_url(); ?>index">HOME</a>
        <a href="<?php echo base_url(); ?>about">ABOUT</a>
        <a href="<?php echo base_url(); ?>kamar">KAMAR</a>
        <a href="<?php echo base_url(); ?>pesan">PESAN</a>
        <a href="<?php echo base_url(); ?>kontak">KONTAK</a>
      </div>
      <div class="User_option">
        <!-- <li class="">
          <a class="mr-4" href="login.html">
            logout
          </a>
        </li> -->
      </div>
    </header>
    </div>
    <!-- header end-->
    <!-- <div class="container pe-5 ps-5 m-5 form-check">
        <div class="konten"> 
            <div style="margin-top:15px;">
            Tambah Data
            <form action="aksi-tambah.php" method="POST" enctype="multipart/form-data">
                No. Kamar:<br>
                <input type="number" name="nomor_kamar" placeholder="Contoh: 202">
                <br><br>
                Total Pembayaran:<br>
                <input type="number" name="total_pembayaran" placeholder="Contoh: Habibie">
                <br><br>
                Bukti Pembayaran: <input type="file" name="foto">
                <br><br>
                <button type="submit" class="btn btn-primary mb-3">Bayar</button>
            </form>
        </div>
        </div>    
    </div> -->
    <div class="container">
        <h2>Form Login dengan Bootstrap</h2>
            <form action="#" method="post">
            
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="id_pemesan" class="form-control" placeholder="Nama" />
        </div>
        <div class="form-group">
            <label>Total Pembayaran:</label>
            <input type="numbaer" name="total_pembayaran" class="form-control" placeholder="1000000" />
        </div>
        <div class="form-group">
            <label>bukti Pembayaran:</label>
            <input type="file" name="foto_bukti" class="form-control"/>
        </div>
            <div class="form-group">
        <label>Pilih Jurusan:</label>
        <select class="form-control">
            <option>Teknik Informatika</option>
            <option>Sistem Informasi</option>
            <option>Teknik Komputer</option>
            <option>Manajemen Informatika</option>
            <option>Komputerisasi Akuntansi</option>
        </select>
        </div> 
        <div class="form-group">
            <label>Jenis Kelamin:</label>
            
        <div class="form-check">

        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="optradio">Laki-laki
        </label>
        </div>
        <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="optradio">Perempuan
        </label>
        </div>
        </div>
        <div class="form-group">
            <label>Hobi:</label>
            
        <div class="form-check">

        <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="">Sepak Bola
        </label>
        </div>
        <div class="form-check">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="">Membaca Buku
        </label>
        </div>
        <div class="form-check">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="">Berenang
        </label>
        </div> 
        <div class="form-check">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="">Bermain Gitar
        </label>
        </div> 
        <div class="form-check">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="">Traveling
        </label>
        </div> 
        </div>

        <div class="form-group">
        <label>Alamat:</label>
        <textarea class="form-control" rows="5"></textarea>
        </div> 
                <button type="submit" class="btn btn-primary">Submit</button>
            
    </form>
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
                <div class="col-md-3">
                    <div class="info_form ">
                        <h5>
                            Newsletter
                        </h5>
                        <form action="">
                            <input type="email" placeholder="Enter your email">
                            <button>
                                Subscribe
                            </button>
                        </form>
                        <div class="social_box">
                            <a href="">
                                <img src="images/fb.png" alt="">
                            </a>
                            <a href="">
                                <img src="images/twitter.png" alt="">
                            </a>
                            <a href="">
                                <img src="images/linkedin.png" alt="">
                            </a>
                            <a href="">
                                <img src="images/youtube.png" alt="">
                            </a>
                        </div>
                    </div>
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