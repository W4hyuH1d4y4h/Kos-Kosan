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
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/about_user.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/home_user.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/fontawesome/css/all.css" />
    <link rel="icon" href="<?= base_url() ?>images/kos.png">
    <script src="<?= base_url() ?>assets/css_fix/bootstrap.bundle.js"></script>

    <title>KosHub.com | About</title>

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <style>
    body {
        font-family: 'Montserrat';
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

    <div class="container my-5">
        <div class="p-5 text-center bg-body-tertiary rounded-3">
            <svg class="bi mt-4 mb-3" style="color: var(--bs-indigo);" width="100" height="100">
                <h1>
                    <i class="fa-solid fa-shop me-2"></i>
                </h1>
            </svg>
            <h1 class="text-body-emphasis">KosHub.com</h1>
            <p class="col-lg-8 mx-auto fs-5 text-muted">
                This is a custom jumbotron featuring an SVG image at the top, some longer text that wraps early thanks
                to a responsive <code>.col-*</code> class, and a customized call to action.
            </p>
            <div class="d-inline-flex gap-2 mb-5">
                <button class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill" type="button">
                    Call to action
                    <svg class="bi ms-2" width="24" height="24">
                        <use xlink:href="#arrow-right-short"></use>
                    </svg>
                </button>
                <button class="btn btn-outline-secondary btn-lg px-4 rounded-pill" type="button">
                    Secondary link
                </button>
            </div>
        </div>
    </div>
</body>