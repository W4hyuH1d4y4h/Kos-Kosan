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

    <title><?php echo $title; ?> | KONTAK</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap1.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.css" />
    <script src="<?php echo base_url(); ?>bootstrap.bundle.js"></script>
    <link rel="icon" href="<?php echo base_url(); ?>images/kos.png">
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
        <!-- header end -->
    </div>

        <br><br>
        <!-- contact section -->
        <section class="contact_section ">
            <div class="container">
              <div class="heading_container">
                <h2>
                  Daftarkan Kontak Anda
                </h2>
              </div>
            </div>
            <div class="container-fluid">
              <div class="row">
                <!-- <div class="col-md-6 px-0">
                  <div class="map_container">
                    <div class="map-responsive">
                      <iframe height="500px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.743645319824!2d119.52438081433104!3d-5.14491365345357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee4b0ea51c111%3A0xb0e0721cd8bd6635!2sWarung%20Resty!5e0!3m2!1sid!2sid!4v1671067941114!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                  </div>
                </div> -->
                <div class="col-md-2"></div>
                <div class="col-md-8">
                  <div class="form_container">
                    <form action="Kontak/tambah_aksi" method="POST">
                      <div class="d-flex justify-content-center align-items-center">
                        <input type="text" placeholder="Name" name="nama"/>
                      </div>
                      <div>
                        <input type="email" placeholder="Email" name="email"/>
                      </div>
                      <div>
                        <input type="number" placeholder="Phone Number" name="no_hp"/>
                      </div>
                      <div>
                        <input type="text" class="message-box" placeholder="Message" name="pesan"/>
                      </div>
                      <div class="d-flex justify-content-center align-items-center">
                        <button>
                          Send
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-2"></div>
              </div>
            </div>
          </section>
          <!-- end contact section -->
        
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
                      <p><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.743645319824!2d119.52438081433104!3d-5.14491365345357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee4b0ea51c111%3A0xb0e0721cd8bd6635!2sWarung%20Resty!5e0!3m2!1sid!2sid!4v1671067941114!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">Address</a>
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