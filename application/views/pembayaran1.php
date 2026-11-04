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
      <img src="<?php echo base_url(); ?>images\kos.png" alt="" />
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
        <!-- star section -->
        <div class="container">
            <!-- <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                <h2>Checkout form</h2>
                <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
            </div> -->
            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">NOMOR REKENING <br> YANG TERSEDIA</span>
                        <span class="badge badge-secondary badge-pill">3</span>
                    </h4>
                    <ul class="list-group mb-3 sticky-top">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Product name</h6>
                                <small class="text-muted"></small>
                            </div>
                            <span class="text-muted">$12</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Second product</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">$8</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Third item</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success">
                                <h6 class="my-0">Promo code</h6>
                                <small>EXAMPLECODE</small>
                            </div>
                            <span class="text-success">-$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong>$20</strong>
                        </li>
                    </ul>
                    <!-- <form class="card p-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Promo code">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary">Redeem</button>
                            </div>
                        </div>
                    </form> -->
                </div>
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Silahkan cek kembali</h4>
                    <form class="needs-validation" novalidate="" action="<?php echo base_url() ?>Pesan/tambah_aksi" enctype="multipart/form-data">
                      <input type="text" name="id_pemesan" value="<?php echo $pemesan['id_pemesan']; ?>">
                      <input type="text" name="bukti_pembayaran" value="<?php echo $pemesan['bukti_pembayaran']; ?>">
                        <div class="row">
                            <div class="mb-3">
                                <label for="firstName">Nama</label><br>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="<?= $pemesan['nama'] ?>" required="">
                                <div class="invalid-feedback"> Valid first name is required. </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="address">Nomor HP</label><br>
                            <input type="text" class="form-control" id="address" value="<?= $pemesan['no_telepon'] ?>" placeholder="+" required="">
                            <div class="invalid-feedback"> Please enter your shipping address. </div>
                        </div>
                        <div class="mb-3">
                            <label for="address">Waktu Sewa</label><br>
                            <input type="text" class="form-control" id="address" value="<?= $pemesan['waktu_sewa'] ?>" placeholder="" required="">
                            <div class="invalid-feedback"> Please enter your shipping address. </div>
                        </div>
                        <div class="row">
                        <div class="form-group">
                          <label for="message-text" class="col-form-label" >Bukti pembayaran:</label><br>
                          <img src="<?php echo base_url();?>images/<?php echo $pemesan['bukti_pembayaran']; ?>" height="100px" width="100px" class="mb-4" >
                           <input type="file" class="form-control" id="recipient-name" name="bukti_pembayaran">
                        </div>
                            <div class="col-md-5 mb-3">
                                <!-- <label for="country">Bukti Pembayaran</label> -->
                                <!-- <select class="custom-select d-block w-100" id="country" required=""> -->
                                    <!-- <option value="">Upload foto</option> -->
                                    <!-- <img src="php echo base_url();?>images/php echo $mhs[0]['foto']; ?>" height="100px" width="100px"> -->

                                        <!-- Foto: <input type="file" name="foto"> -->
                                <div class="invalid-feedback"> Please select a valid country. </div>
                            </div>
                        </div>
                        
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                    </form>
                    <br><br><br>
                </div>
            </div>
        </div>
        <!-- end pembayaran -->
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