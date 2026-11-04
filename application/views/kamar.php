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

    <title><?php echo $title; ?> | KAMAR</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap1.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/card.css" />
    <link rel="icon" href="<?php echo base_url(); ?>images/kos.png">
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
      <!-- header end -->
  </div>
        <br><br>
        <section class="sale_section layout_padding-bottom">
            <div class="container-fluid">
              <div class="heading_container">
                <h2>
                  Kamar Yang Tersedia
                </h2>
              </div>
            </div>
            <div class="container mx-auto mt-4">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                      <img src="images/kos4.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><b>201</b></h5>
                      <h6 class="card-subtitle mb-2 text-muted">Lorong 1</h6>
                      <p class="card-text">Disini yang menempati kebanyakan laki-laki</p>
                    </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                      <img src="images/kos4.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><b>202</b></h5>
                      <h6 class="card-subtitle mb-2 text-muted">Lorong 1</h6>
                      <p class="card-text">Disini yang menempati kebanyakan laki-laki</p>
                    </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                      <img src="images/kos4.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><b>203</b></h5>
                      <h6 class="card-subtitle mb-2 text-muted">Lorong 1</h6>
                      <p class="card-text">Disini yang menempati kebanyakan laki-laki</p>
                    </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                      <img src="images/kos4.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><b>301</b></h5>
                      <h6 class="card-subtitle mb-2 text-muted">Lorong 2</h6>
                      <p class="card-text">Disini yang menempati kebanyakan orang yang sudah berkeluarga</p>
                    </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                      <img src="images/kos4.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><b>302</b></h5>
                      <h6 class="card-subtitle mb-2 text-muted">Lorong 2</h6>
                      <p class="card-text">Disini yang menempati kebanyakan orang yang sudah berkeluarga</p>
                    </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                      <img src="images/kos4.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><b>303</b></h5>
                      <h6 class="card-subtitle mb-2 text-muted">Lorong 2</h6>
                      <p class="card-text">Disini yang menempati kebanyakan orang yang sudah berkeluarga</p>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
          <!-- </section> -->
          <!-- section kamar -->
        <!-- <section class="sale_section layout_padding-bottom"> -->
          <div class="container mt-3 gray-bg">
              <div class="row">
                <div class="container-fluid">
              <div class="heading_container">
                <h2>
                  
                </h2>
              </div>
            </div>
                <div class="col-sm-11 text-black"> 
                <table class="table">
                  <thead class="table-primary">
                    <tr>
                      <th>NO</th>
                      <th>NO KAMAR</th>
                      <th>LANTAI</th>
                      <th>FASILITAS</th>
                      <th>TARIF BULANAN</th>
                      <th>TARIF TAHUNAN</th>
                      <th>STATUS</th>
                    </tr>
                  </thead>
                      <?php
                      $no = 1;
                        foreach($s_kmr as $row) : ?>
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row->no_kamar ?></td>
                            <td><?php echo $row->no_lantai ?></td>
                            <td><?php echo $row->fasilitas ?></td>
                            <td><?php echo $row->tarif_bulanan ?></td>
                            <td><?php echo $row->tarif_tahunan ?></td>
                            <td><?php echo $row->status_kamar ?></td>
                            <!-- <td>'.$no++['id_kamar'].'</td>
                            <td>'.$row['no_kamar'].'</td>
                            <td>'.$row['no_lantai'].'</td>
                            <td>'.$row['fasilitas'].'</td>
                            <td>'.$row['tarif_bulanan'].'</td>
                            <td>'.$row['tarif_tahunan'].'</td>     -->                        
                          </tr>
                        <?php endforeach; ?>
		             </table>
	    	   </div>
        </section>
          <!-- info section -->
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