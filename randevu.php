<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hastane Otomasyon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <section>
        <div class="container py-3">
            <h1 style="color: antiquewhite;">Randevular</h1>
            <table class="table table-striped mt-3 table table-hover table table-bordered">
                <tr style="color: #222;" class="text-center" >
                    <th>Hastane</th>
                    <th>Klinik</th>
                    <th>Doktor</th>
                    <th>Il</th>
                    <th>Tarih</th>
                </tr>

                <?php
                $randevu_sor = $db->prepare("SELECT * FROM randevu 
            INNER JOIN kullanici ON randevu.randevu_hasta_id=kullanici.kullanici_id WHERE kullanici_tc=:kullanici_tc");
                $randevu_sor->execute(['kullanici_tc' => $_SESSION['userkullanici_tc']]);
                while ($randevu_cek = $randevu_sor->fetch(PDO::FETCH_ASSOC)) { ?>

                    <tr style="color: antiquewhite;" class="text-center">
                        <td><?= $randevu_cek['randevu_hastane']; ?></td>
                        <td>
                            <?= $randevu_cek['randevu_klinik']; ?>
                        </td>
                        <td><?= $randevu_cek['randevu_doktor']; ?></td>
                        <td>
                            <?= $randevu_cek['randevu_sehir']; ?>
                        </td>
                        <td><?= $randevu_cek['randevu_tarih']; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </section>
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