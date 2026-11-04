<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/navbar.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/daftar_bos.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/fontawesome/css/all.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_fix/kos2_user.css" />
    <link rel="icon" href="<?= base_url() ?>images/kos.png">
    <link href="https://transloadit.edgly.net/releases/uppy/v1.6.0/uppy.min.css" rel="stylesheet">
    <script src="https://transloadit.edgly.net/releases/uppy/v1.6.0/uppy.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/css_fix/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="<?= base_url() ?>assets/js/tags.js"></script>
    <!-- <script src="<?= base_url() ?>assets/js/daftar_kos_bos.js"></script> -->
    <!-- <script src="<?= base_url() ?>assets/js/daftar_kos_bos_foto.js"></script> -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>

    <!-- <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script> -->

    <title>KosHub.com | Daftarkan Kos</title>

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
        echo $this->load->view('bos/navbar_bos', '', true);
    } else {
        echo $this->load->view('bos/navbar_bos_login', '', true);
    } ?>
    <!-- <div class="mt-5">
        <div class="elfsight-app-c3e96b1d-4ff4-4ad0-adf5-93ba29364566"></div>
    </div> -->

    <div class="mt-5  express-connect">
        <div class="container">
            <h1 class="fw-bold">Daftarkan Kos Anda!</h1>
            <div id="multi-step-form-container">
                <!-- Form Steps / Progress Bar -->
                <ul class="form-stepper form-stepper-horizontal text-center mx-auto pl-0">
                    <!-- Step 1 -->
                    <li class="form-stepper-active text-center form-stepper-list" step="1">
                        <a class="mx-2 text-decoration-none">
                            <span class="form-stepper-circle">
                                <span>1</span>
                            </span>
                            <div class="label">Dasar</div>
                        </a>
                    </li>
                    <!-- Step 2 -->
                    <li class="form-stepper-unfinished text-center form-stepper-list" step="2">
                        <a class="mx-2 text-decoration-none">
                            <span class="form-stepper-circle text-muted">
                                <span>2</span>
                            </span>
                            <div class="label text-muted">Lokasi</div>
                        </a>
                    </li>
                    <!-- Step 3 -->
                    <li class="form-stepper-unfinished text-center form-stepper-list" step="3">
                        <a class="mx-2 text-decoration-none">
                            <span class="form-stepper-circle text-muted">
                                <span>3</span>
                            </span>
                            <div class="label text-muted">Fasilitas</div>
                        </a>
                    </li>
                    <!-- Step 4 -->
                    <li class="form-stepper-unfinished text-center form-stepper-list" step="4">
                        <a class="mx-2 text-decoration-none">
                            <span class="form-stepper-circle text-muted">
                                <span>4</span>
                            </span>
                            <div class="label text-muted">Kamar</div>
                        </a>
                    </li>
                    <!-- Step 5 -->
                    <li class="form-stepper-unfinished text-center form-stepper-list" step="5">
                        <a class="mx-2 text-decoration-none">
                            <span class="form-stepper-circle text-muted">
                                <span>5</span>
                            </span>
                            <div class="label text-muted">Foto</div>
                        </a>
                    </li>
                </ul>
                <!-- Step Wise Form Content -->
                <form id="myForm" enctype="multipart/form-data" method="POST" action="">
                    <!-- Step 1 Content -->
                    <section id="step-1" class="form-step">
                        <div class="card-page-header row ">
                            <div class="col-sm-8">
                                <h1 class="mt-0 text-start">Apa hal unik dan menarik dari kos Anda?</h1>
                                <p>Setiap kos memiliki keunikan tersendiri. Beritahu kami kenapa
                                    kos Anda luar biasa.</p>
                            </div>
                            <div class="hidden-xs col-sm-4"><img class="page-header-icon"
                                    src="//img.agoda.net/images/header/ec-description@2x.png" alt="description page">
                            </div>
                        </div>
                        <!-- Step 1 input fields -->
                        <div class="mt-3">
                            <div class="m-t-6 m-b-8">
                                <h3>Masukkan nama kos Anda</h3>
                                <p class="m-b-4 small">Pastikan nama yang Anda buat menarik dan mengundang perhatian
                                    tamu!
                                </p>
                                <div class="m-b-8 panel panel-default">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <div><input placeholder="Contoh: Kos termurah, Kos teraman" name="nama_kos"
                                                    type="text" id="nama_kos" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-t-6 m-b-8">
                                    <h3>Deskripsikan kos Anda</h3>
                                    <p class="m-b-4">Kenapa tamu harus menginap di properti Anda?</p>
                                    <div class="m-b-8 panel panel-default">
                                        <div class="panel-body">
                                            <div class="form-group has-error">
                                                <div><textarea
                                                        data-element-name="agoda-homes-property-description-input"
                                                        rows="5" placeholder="Contoh: 
• 5 menit berjalan kaki dari/menuju transportasi umum 
• Cocok untuk keluarga 
• Ruang terbuka yang luas dengan pemandangan cantik dan cahaya alami" name="deskripsi_kos" type="text"
                                                        id="deskripsi_kos" class="form-control"></textarea><small </div>
                                                        <div class="help-block"><span>Mohon berikan deskripsi properti
                                                                Anda</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3 text-end">
                                    <button class="button button-next btn-navigate-form-step text-uppercase"
                                        type="button" step_number="2">Next</button>
                                </div>
                    </section>
                    <!-- Step 2 Content, default hidden on page load. -->
                    <section id="step-2" class="form-step d-none">
                        <div class="card-page-header row">
                            <div class="col-sm-8">
                                <h1 class="m-t-0 text-start">Letakkan lokasi kos Anda di peta</h1>
                                <h6>Di mana tamu akan menginap?</h6>
                            </div>
                            <div class="hidden-xs col-sm-4"><img class="page-header-icon"
                                    src="//img.agoda.net/images/header/ec-location@2x.png" alt="location page"></div>
                        </div>
                        <!-- Step 2 input fields -->
                        <div class="mt-3">
                            <h3>Lokasi</h3>
                            <h6>Apakah lokasi kos Anda sudah benar? Jika belum, geser pin ke lokasi yang benar.
                            </h6>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="street-address form-group"><label for="autocomplete_search"
                                                class="control-label fw-bold">Alamat</label>
                                            <input name="autocomplete_search" placeholder="Masukkan alamat anda"
                                                id="autocomplete_search" class="form-control pac-target-input"
                                                value=""><span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="street-address form-group"><label for="autocomplete_search"
                                                class="control-label fw-bold">Alamat Lengkap</label>
                                            <input name="alamat_lengkap" placeholder="Contoh: Bangunan ketiga dari kiri"
                                                class="form-control pac-target-input" value=""><span
                                                class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="m-t-0 control-label fw-bold">Lokasi di peta</label>
                                            <p>Apakah lokasi kos Anda sudah benar? Jika belum, geser pin ke lokasi
                                                yang benar.</p>
                                        </div>
                                    </div>
                                    <div class="map" id="map">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 text-end">
                            <button class="button button-prev btn-navigate-form-step text-uppercase" type="button"
                                step_number="1">Previous</button>
                            <button class="button button-next btn-navigate-form-step text-uppercase" type="button"
                                step_number="3">Next</button>
                        </div>
                    </section>
                    <!-- Step 3 Content, default hidden on page load. -->
                    <section id="step-3" class="form-step d-none" ng-app="myApp" ng-controller="mainCtrl">
                        <div class="card-page-header row">
                            <div class="col-sm-8">
                                <h1 class="m-t-0 text-start">Segala hal yang Anda sediakan</h1>
                                <h6>Apa yang ada di kos Anda?</h6>
                            </div>
                            <div class="hidden-xs col-sm-4"><img class="page-header-icon"
                                    src="//img.agoda.net/images/header/ec-amenities@2x.png" alt="Amenities Page"></div>
                        </div>
                        <!-- Step 3 input fields -->
                        <div class="mt-3">
                            <h3>Direkomendasikan</h3>
                            <h6>Fasilitas berikut populer di antara pelanggan yang memesan akomodasi kos.</h6>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php foreach ($fasilitas as $idx => $value) { ?>
                                <label class="amenity checkbox-inline">
                                    <div class="form-check">
                                        <input name="fasilitas[]" class="form-check-input" type="checkbox"
                                            ng-click="selectFriends('<?php echo $fasilitas[$idx]['daftar_fasilitas'] ?>')"
                                            ng-checked="selection.includes('<?php echo $fasilitas[$idx]['daftar_fasilitas'] ?>')"
                                            value="<?php echo $idx + 1 ?>" id="<?php echo 'flexCheckDefault' . $idx ?>">
                                        <label class="form-check-label" for="<?php echo 'flexCheckDefault' . $idx ?>">
                                            <?php echo $fasilitas[$idx]['daftar_fasilitas'] ?>
                                        </label>
                                    </div>
                                </label>
                                <?php } ?>

                                <div class="container mt-3">
                                    <span ng-repeat="item in selection" ng-click="deselectFriend(item)"
                                        class="label-tag label-success mt-2">
                                        {{item}} <i class="fa-solid fa-xmark ms-1"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 text-end">
                            <button class="button button-prev btn-navigate-form-step text-uppercase" type="button"
                                step_number="2">Previous</button>
                            <button class="button button-next btn-navigate-form-step text-uppercase" type="button"
                                step_number="4">Next</button>
                        </div>
                    </section>
                    <!-- Step 4 Content, default hidden on page load. -->
                    <section id="step-4" class="form-step d-none">
                        <div class="card-page-header row">
                            <div class="col-sm-8">
                                <h1 class="m-t-0 text-start">Atur pilihan kamar yang Anda punya</h1>
                                <h6>Sediakan pilihan yang beragam bagi pelanggan Anda.</h6>
                            </div>
                            <div class="hidden-xs col-sm-4">
                                <img class="page-header-icon" src="//img.agoda.net/images/header/ec-basics@2x.png"
                                    alt="basics page">
                            </div>
                        </div>
                        <!-- Step 4 input fields -->
                        <div class="row mt-3">
                            <div class="col-sm-8">
                                <h3>Kamar</h3>
                                <h6>Pastikan Anda memiliki beberapa kamar untuk disewakan.</h6>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="street-address form-group">
                                                <label for="autocomplete_search" class="control-label fw-bold">Nama
                                                    kamar</label>
                                                <input name="nama_kamar" placeholder="Contoh: 108, L2, Kamar 201"
                                                    class="form-control pac-target-input" value=""><span
                                                    class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="row has-error">
                                            <div class="col-sm-6">
                                                <div class="pricing-base-price">
                                                    <label for="autocomplete_search" class="control-label fw-bold">Harga
                                                        per bulan</label>
                                                    <span class="input-group-language input-group">
                                                        <input name="Harga_Bulan" id="Harga_Bulan"
                                                            class="numeric-text-input form-control" value="">
                                                        <span class="right addon">IDR</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="pricing-base-price">
                                                    <label class="control-label fw-bold">Harga
                                                        per tahun</label>
                                                    <span class="input-group-language input-group">
                                                        <input name="Harga_Tahun" id="Harga_Tahun"
                                                            class="numeric-text-input form-control" value="">
                                                        <span class="right addon">IDR</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <label class="control-label fw-bold">Foto</label>
                                            <p>Pastikan anda upload satu foto untuk satu kamar.</p>
                                            <div id="drag-drop-area"></div>
                                        </div>
                                        <div class="text-center">
                                            <button id="tambahkamar" type="submit" name="tambahkamar"
                                                class="btn btn-primary w-50 mb-4 mt-3"
                                                style="background: #003a70;background-color: rgb(0, 58, 112);">Tambah
                                                Kamar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <h3 class="text-end">Preview</h3>
                                <h6 class="text-end">Lihat kamar Anda disini.</h6>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="container">
                                            <div class="row">
                                                <section class="container2">

                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 text-end">
                            <button class="button button-prev btn-navigate-form-step text-uppercase" type="button"
                                step_number="3">Previous</button>
                            <button class="button button-next btn-navigate-form-step text-uppercase" type="button"
                                step_number="5">Next</button>
                        </div>
                    </section>
                    <!-- Step 5 Content, default hidden on page load. -->
                    <section id="step-5" class="form-step d-none">
                        <div class="card-page-header row">
                            <div class="col-sm-8">
                                <h1 class="m-t-0 text-start">Perlihatkan pelanggan apa yang kurang.</h1>
                                <h6>Gambar penting bagi pelanggan. Unggah sebanyak mungkin gambar berkualitas tinggi
                                    yang Anda miliki. Anda
                                    bisa nambah lagi nanti</h6>
                            </div>
                            <div class="hidden-xs col-sm-4">
                                <img class="page-header-icon" src="//img.agoda.net/images/header/ec-basics@2x.png"
                                    alt="basics page">
                            </div>
                        </div>
                        <!-- Step 5 input fields -->
                        <div class="mt-3">
                            <h3>Foto</h3>
                            <h6>Pastikan anda memasukkan 3 foto.</h6>
                            <div id="drag-drop-foto"></div>
                        </div>


                        <div class="mt-3 text-end">
                            <button class="button button-prev btn-navigate-form-step text-uppercase" type="button"
                                step_number="4">Previous</button>
                            <button id="cekValid" class="button button-next submit-next text-uppercase"
                                type="submit">Save</button>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </div>
    <!-- </div> -->

    <script>
    // Store form data in an object
    let formData = {};
    /**
     * Define a function to navigate betweens form steps.
     * It accepts one parameter. That is - step number.
     */
    const navigateToFormStep = (stepNumber) => {
        /**
         * Hide all form steps.
         */
        document.querySelectorAll(".form-step").forEach((formStepElement) => {
            formStepElement.classList.add("d-none");
        });
        /**
         * Mark all form steps as unfinished.
         */
        document
            .querySelectorAll(".form-stepper-list")
            .forEach((formStepHeader) => {
                formStepHeader.classList.add("form-stepper-unfinished");
                formStepHeader.classList.remove(
                    "form-stepper-active",
                    "form-stepper-completed"
                );
            });
        /**
         * Show the current form step (as passed to the function).
         */
        document.querySelector("#step-" + stepNumber).classList.remove("d-none");
        /**
         * Select the form step circle (progress bar).
         */
        const formStepCircle = document.querySelector(
            'li[step="' + stepNumber + '"]'
        );
        /**
         * Mark the current form step as active.
         */
        formStepCircle.classList.remove(
            "form-stepper-unfinished",
            "form-stepper-completed"
        );
        formStepCircle.classList.add("form-stepper-active");
        /**
         * Loop through each form step circles.
         * This loop will continue up to the current step number.
         * Example: If the current step is 3,
         * then the loop will perform operations for step 1 and 2.
         */
        for (let index = 0; index < stepNumber; index++) {
            /**
             * Select the form step circle (progress bar).
             */
            const formStepCircle = document.querySelector('li[step="' + index + '"]');
            /**
             * Check if the element exist. If yes, then proceed.
             */
            if (formStepCircle) {
                /**
                 * Mark the form step as completed.
                 */
                formStepCircle.classList.remove(
                    "form-stepper-unfinished",
                    "form-stepper-active"
                );
                formStepCircle.classList.add("form-stepper-completed");
            }
        }
    };
    /**
     * Select all form navigation buttons, and loop through them.
     */
    document
        .querySelectorAll(".btn-navigate-form-step")
        .forEach((formNavigationBtn) => {
            /**
             * Add a click event listener to the button.
             */
            formNavigationBtn.addEventListener("click", () => {
                /**
                 * Get the value of the step.
                 */
                const stepNumber = parseInt(
                    formNavigationBtn.getAttribute("step_number")
                );
                if (formNavigationBtn.classList.contains("button-next")) {
                    // Get all input values in the current section
                    let stepData = $(`#step-${stepNumber - 1} :input`).serializeArray();
                    // Store data
                    formData[`step${stepNumber - 1}`] = stepData;
                }
                /**
                 * Call the function to navigate to the target form step.
                 */
                navigateToFormStep(stepNumber);
                console.log(formData);
            });
        });
    // This is our array to hold the room details
    let roomDetails = [];

    // This is a function that will add a room to the roomDetails array
    const addRoomDetails = (name, pricePerMonth, pricePerYear, imageUrl) => {
        roomDetails.push({
            name,
            pricePerMonth,
            pricePerYear,
            imageUrl,
        });
    };

    // This is a function that will update the preview when a new room is added
    const updateRoomPreview = (room) => {
        // Select the preview section
        const previewSection = document.querySelector(".container2");

        // Create a new div for the room preview
        const newRoomDiv = document.createElement("div");
        newRoomDiv.classList.add("room-preview");

        // Fill the new div with the room details
        newRoomDiv.innerHTML = `
        <div class="">
        <div class="max-w-sm w-full lg:w-1/3 py-6 px-3">
            <div class="bg-white shadow-xl rounded overflow-hidden">
                <div class="bg-cover bg-center h-56 p-4" style="background-image: url(${room.imageUrl});">
                </div>
                <div class="p-4">
                    <p class="uppercase tracking-wide text-sm font-bold text-gray-700">
                    ${room.name}</p>
                    <p class="text-3xl text-gray-900">Rp${room.pricePerMonth}<span style="font-size: 15px;">/bulan</span> </p>
                    <p class="text-3xl text-gray-900">Rp${room.pricePerYear}<span style="font-size: 15px;">/tahun</span> </p>
                    <div class="border-t border-gray-300 text-gray-700">
                        <!-- untuk tombol action -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    `;

        // Append the new room div to the preview section
        previewSection.appendChild(newRoomDiv);
    };

    // Get the form elements
    const roomNameInput = document.querySelector('input[name="nama_kamar"]');
    const pricePerMonthInput = document.querySelector(
        'input[name="Harga_Bulan"]'
    );
    const pricePerYearInput = document.querySelector(
        'input[name="Harga_Tahun"]'); // name corrected, make sure to update this in your form
    const addRoomButton = document.getElementById("tambahkamar");
    // Disable the "Tambah Kamar" button initially
    addRoomButton.disabled = true;

    var uppy = Uppy.Core({
            autoProceed: false,
        })
        .use(Uppy.Dashboard, {
            target: "#drag-drop-area",
            inline: true,
        })
        .use(Uppy.XHRUpload, {
            endpoint: "http://localhost/kos-kosan/user/daftar_kos/temporary_kos",
            formData: true,
            fieldName: "photos",
            headers: {
                "User-Id": "user_id_here",
            },
        });

    let lastUploadedImg = "";

    uppy.on("file-added", (file) => {
        console.log("File added, starting upload...");
        uppy.upload().catch((error) => console.error("Upload failed:", error));
    });

    uppy.on("upload", () => {
        console.log("Upload started...");
    });

    uppy.on("complete", (result) => {
        console.log(result);
        console.log(
            "Upload complete! We’ve uploaded these files:",
            result.successful
        );
        if (result.successful.length > 0) {
            lastUploadedImg =
                result.successful[result.successful.length - 1].uploadURL;
            console.log("Last uploaded image URL:", lastUploadedImg);

            // Enable the "Tambah Kamar" button once the upload is successful
            addRoomButton.disabled = false;
        } else {
            // Handle the case where some files did not upload successfully
            alert("Some files did not upload successfully.");
        }
    });

    // Prevent the form submission
    $("#myForm").on("submit", function(e) {
        e.preventDefault();
    });

    // When the "Tambah Kamar" button is clicked, we add the room details to our array and update the preview
    addRoomButton.addEventListener("click", function(e) {
        // Just prevent the form from submitting. The form submit handler will take care of the rest.
        e.preventDefault();
        // Check if the image upload is complete
        if (!lastUploadedImg) {
            console.log("lastUploadedImg is still empty");
            alert("Please wait for the image upload to complete.");
            return;
        }
        // Add the current room details to the array
        addRoomDetails(
            roomNameInput.value,
            pricePerMonthInput.value,
            pricePerYearInput.value,
            lastUploadedImg
        );

        // Update the preview with the latest room
        updateRoomPreview(roomDetails[roomDetails.length - 1]);

        // Reset lastUploadedImg to ensure new image is uploaded before the next room is added
        lastUploadedImg = "";

        // Disable the "Tambah Kamar" button until a new image is uploaded
        addRoomButton.disabled = true;

        console.log(roomDetails);
    });

    // This is our array to hold the kos photo URLs
    let kosPhotos = [];

    // ...

    // Function to handle the image upload and storing the URL
    var uppyKos = Uppy.Core({
            autoProceed: false,
        })
        .use(Uppy.Dashboard, {
            target: "#drag-drop-foto",
            inline: true,
        })
        .use(Uppy.XHRUpload, {
            endpoint: "http://localhost/kos-kosan/user/daftar_kos/image_kos",
            formData: true,
            fieldName: "photos",
            headers: {
                "User-Id": "user_id_here",
            },
        });

    uppyKos.on("complete", (result) => {
        console.log(result);
        console.log(
            "Upload complete! We’ve uploaded these files:",
            result.successful
        );
        if (result.successful.length > 0) {
            // Add the uploaded photo URLs to kosPhotos array
            kosPhotos.push(result.successful[result.successful.length - 1].uploadURL);
            console.log("Kos photos array:", kosPhotos);
        } else {
            // Handle the case where some files did not upload successfully
            alert("Some files did not upload successfully.");
        }
    });

    $("#myForm").on("submit", function(e) {
        e.preventDefault();

        // Get data from the main form
        const mainFormData = $(this).serializeArray();

        // Combine mainFormData with roomDetails and kosPhotos
        const combinedData = {
            ...mainFormData,
            step4: roomDetails
                .map((room) => {
                    return [{
                            name: "nama_kamar",
                            value: room.name,
                        },
                        {
                            name: "Harga_Bulan",
                            value: room.pricePerMonth,
                        },
                        {
                            name: "Harga_Tahun",
                            value: room.pricePerYear,
                        },
                        {
                            name: "image_url",
                            value: room.imageUrl,
                        },
                    ];
                })
                .flat(),
            step5: kosPhotos.map((photoUrl) => {
                return {
                    name: "kos_photo",
                    value: photoUrl,
                };
            }),
        };

        // Send combinedData to server...
        completeFormSubmission();
    });

    const completeFormSubmission = () => {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'button button-next submit-next text-uppercase',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false,
            allowOutsideClick: false,
        })

        // Combine all steps data into a single object
        let combinedData = {
            id_user: <?php echo $id_penyewa ?>,
            status: 0,
            step1: formData.step1,
            step2: formData.step2,
            step3: formData.step3,
            step4: roomDetails,
            step5: kosPhotos,
        };

        // Send data to the server
        $.ajax({
            type: 'POST',
            url: 'http://localhost/kos-kosan/user/daftar_kos/daftarkan', // replace with your server script URL
            data: combinedData,
            success: function(response) {
                // handle success
                console.log("Data sent successfully. Server response: ", response);
                swalWithBootstrapButtons.fire({
                    icon: "success",
                    title: "Kosmu Terdaftar!",
                    text: "Kosmu berhasil terdaftar! Mohon tunggu kosmu dikonfirmasi oleh admin ya!",
                    confirmButtonText: "<a class='text-white' style='text-decoration: none;' href='http://localhost/kos-kosan/user/Home'>Periksa Kos!</a>",
                })
            },
            error: function(error) {
                // handle error
                console.log("Error sending data: ", error);
            }
        });
    };

    var marker;

    function initMapAndAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 13,
            center: {
                lat: -5.142814884801196,
                lng: 119.43548293742762
            }
        });

        var input = document.getElementById('autocomplete_search');
        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);
        autocomplete.setFields(['address_components', 'geometry', 'icon', 'name']);

        var geocoder = new google.maps.Geocoder; // Create a geocoder object

        marker = new google.maps.Marker({
            map: map,
            anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {
            marker.setVisible(false);
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                window.alert("No details available for input: '" + place.name + "'");
                return;
            }

            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17);
            }
            marker.setPosition(place.geometry.location);
            marker.setVisible(true);
        });

        map.addListener('click', function(event) {
            addMarker(event.latLng, map);
            geocodeLatLng(geocoder, map, input, event.latLng); // Call the function to update the input field
        });
    }

    function addMarker(location, map) {
        if (marker) {
            marker.setMap(null);
        }

        marker = new google.maps.Marker({
            position: location,
            map: map
        });
    }

    function geocodeLatLng(geocoder, map, input, latlng) {
        geocoder.geocode({
            'location': latlng
        }, function(results, status) {
            if (status === 'OK') {
                if (results[0]) {
                    input.value = results[0].formatted_address; // Set the address to the input field
                } else {
                    window.alert('No results found');
                }
            } else {
                window.alert('Geocoder failed due to: ' + status);
            }
        });
    }

    google.maps.event.addDomListener(window, 'load', initMapAndAutocomplete);

    items.forEach(item => {
        item.addEventListener("click", () => {
            item.classList.toggle("checked");
            let checked = document.querySelectorAll(".checked"),
                btnText = document.querySelector(".btn-text");
            if (checked && checked.length > 0) {
                btnText.innerText = `${checked.length} Selected`;
            } else {
                btnText.innerText = "Select Language";
            }
        });
    })
    </script>


</body>

</html>