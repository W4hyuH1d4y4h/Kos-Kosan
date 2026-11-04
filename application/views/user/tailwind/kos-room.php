<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="canonical" href="https://codepen.io/steveschoger/pen/YbQXGq">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.0.1/tailwind.min.css"> -->
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($kamarKos as $key => $kamar) { ?>
                <div class="max-w-sm w-full sm:w-1/2 lg:w-1/3 py-6 px-3">
                    <div class="bg-white shadow-xl rounded overflow-hidden">
                        <div class="bg-cover bg-center h-56 p-4" style="background-image: url(<?= $kamar['foto'] ?>)">
                        </div>
                        <div class="p-4">
                            <p class="uppercase tracking-wide text-sm font-bold text-gray-700"><?= $kamar['nama_kamar'] ?>
                            </p>
                            <p class="text-3xl text-gray-900">Rp<?= $kamar['tarif_bulanan'] ?><span style="font-size: 15px;">/bulan</span> </p>
                            <!-- <p class="text-3xl text-gray-900">Rp<?= $kamar['tarif_tahunan'] ?><span
                                style="font-size: 15px;">/tahun</span> </p> -->
                            <!-- <div class="border-t border-gray-300 text-gray-700">
                                <div class="flex-1 inline-flex items-center me-1">
                                    <p><span class="text-gray-900 font-bold"><i class="fa fa-regular fa-bed"></i> 3</span>
                                        Kasur
                                    </p>
                                </div>
                                <div class="flex-1 inline-flex items-center me-1">
                                    <p><span class="text-gray-900 font-bold"><i class="fa-solid fa-shower"></i> 2</span>
                                        Kamar
                                        Mandi
                                    </p>
                                </div>
                                <div class="flex-1 inline-flex items-center me-1">
                                    <p><span class="text-gray-900 font-bold"><i class="fa-solid fa-fan"></i> 2</span> AC
                                    </p>
                                </div>
                            </div> -->
                        </div>
                        <div class="px-4 pt-3 pb-4">
                            <div class="d-grid gap-3">
                                <a class="btn btn-cari btn-lg px-5 me-sm-3 fs-6" onclick="showPopup('<?= $kamar['id_kos'] ?>' ,'<?= $kamar['id_kamar'] ?>','<?= $kamar['nama_kamar'] ?>', '<?= $kamar['tarif_bulanan'] ?>', '<?= $kamar['status_kamar'] ?>')">Pesan
                                    Sekarang!</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>

    <?php if (!$this->session->userdata('email')) { ?>
        <script>
            function showPopup(roomName, roomPrice) {
                const swalWithBootstrapButtons2 = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })
                swalWithBootstrapButtons2.fire({
                    icon: "error",
                    title: "Yah kamu belum login :(",
                    text: "Login dulu yuk!",
                    confirmButtonText: "Ok",
                })
            }
        </script>
    <?php } ?>
    <?php if ($this->session->userdata('email')) { ?>
        <script>
            function showPopup(idKos, idRoom, roomName, roomPrice, roomStatus) {
                const durations = [{
                        label: '1 bulan',
                        value: 1
                    },
                    {
                        label: '3 bulan',
                        value: 3
                    },
                    {
                        label: '6 bulan',
                        value: 6
                    },
                    {
                        label: '1 tahun',
                        value: 12
                    }
                ];
                Swal.fire({
                    title: 'Pesan Kamar',
                    html: ` 
                        <p>Anda ingin memesan kamar ${roomName}?</p>
                        <div class="mt-4">
                        <label for="duration" class="block font-semibold">Durasi Sewa:</label>
                        <select id="duration" class="mt-1">
                            ${durations.map(duration => `<option value="${duration.value}">${duration.label}</option>`).join('')}
                        </select>
                        </div>
                        `,
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Pesan',
                    cancelButtonText: 'Batal',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        const durationSelect = document.getElementById('duration');
                        const selectedDuration = parseInt(durationSelect.value);
                        const totalPrice = roomPrice * selectedDuration;
                        if (roomStatus == 1) {
                            Swal.fire({
                                icon: "error",
                                title: "Kamar sudah ada yang punya :(",
                                text: "Kamar ini milik orang lain!",
                                confirmButtonText: "Ok",
                            })
                        } else {
                            // Send AJAX request
                            $.ajax({
                                url: 'http://localhost/kos-kosan/user/Pesanan_user/add_order', // URL of your CodeIgniter 3 controller method
                                type: 'POST', // or GET, depending on your needs
                                data: {
                                    id_occupants: <?= $id_penghuni ?>,
                                    id_kos: idKos,
                                    id_room: idRoom,
                                    duration: selectedDuration,

                                },
                                success: function(response) {
                                    Swal.fire('Pemesanan Berhasil',
                                        `Anda telah memesan kamar ${roomName} untuk ${selectedDuration} bulan dengan harga total Rp${totalPrice}`,
                                        'success');
                                },
                                error: function(jqXHR, textStatus, errorThrown) {
                                    let errorMessage = 'Unknown error';
                                    if (jqXHR.responseText) {
                                        errorMessage = jqXHR.responseText;
                                    } else if (jqXHR.responseJSON && jqXHR.responseJSON.message) {
                                        errorMessage = jqXHR.responseJSON.message;
                                    }
                                    Swal.fire(
                                        'Error!',
                                        `Request failed: ${textStatus}, ${errorThrown}. Message: ${errorMessage}`,
                                        'error'
                                    );
                                }
                            });
                        }
                    }
                });
            }
        </script>
    <?php } ?>
</body>

</html>