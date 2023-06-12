<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hastane Otomasyon</title>
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #6a11cb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(75, 117, 83, 1), rgba(110, 120, 212, 1));
        }
    </style>
</head>

<body class="gradient-custom">
    <section class="vh-auto " style="margin-top: 50px;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <h3 class="mb-5">Hesap Bilgileri</h3>

                            <br>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="typeTextX-2">AD SOYAD</label>
                                <input disabled type="email" id="typeTextX-2" class="form-control form-control-lg"
                                    autocomplete="off" !important
                                    placeholder="<?= $kullanicicek['kullanici_adsoyad'] ?>" />
                            </div>
                            <hr>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="typePasswordX-2">TC NO</label>
                                <input disabled type="password" id="typePasswordX-2"
                                    class="form-control form-control-lg"
                                    placeholder="<?= $kullanicicek['kullanici_tc'] ?>" />
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--
    <div class="hesabim_content">
        <div class="label">
            <label>ADI SOYADI</label>
            <input type="text" placeholder="<?= $kullanicicek['kullanici_adsoyad'] ?>">
        </div><br>

        <div class="label">
            <label>TC NO</label>
            <input type="text" placeholder="<?= $kullanicicek['kullanici_tc'] ?>">
        </div><br>

         <div class="label">
            <label>TELEFON NO</label>
            <input type="text">
        </div><br>

        <div class="label">
            <label>MAIL</label>
            <input type="text">
        </div><br> 
        <button type="submit">Guncelle</button>

    </div>-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

</body>

</html>