<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title><?php echo $title; ?> | LOGIN WEB</title>
  <link href="<?php echo base_url();?>css/style-login.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet" />
</head>
<body>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="images/kos.png"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
		<h1></h1>
          <!-- Email input -->
          <div class="form-outline mb-4">
			<h1><b>KOS-KOSAN RESTY</b></h1>
      <h2><b>Login</b></h2>
      <form action="<?php echo base_url();?>Login/login_aksi" method="POST" enctype="multipart/form-data">
			<br>
            <input type="text" class="form-control form-control-lg"
              placeholder="Enter Username " name="username"/>
            <label class="form-label" for="form3Example3">Username</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" class="form-control form-control-lg"
              placeholder="Enter password" name="password" />
            <label class="form-label" for="form3Example4">Password</label>
          </div>
          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
    </div>
    </form>
  </div>
</section>
</body>
</html>
