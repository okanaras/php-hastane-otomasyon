<?php
include 'bagla.php'; ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islem</title>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

<body class="vh-auto gradient-custom">
    <?php

    //uye ekleme
    if (isset($_POST['kullanicikaydet'])) {
        $kullanici_tc = isset($_POST['kullanici_tc']) ? $_POST['kullanici_tc'] : null;
        $kullanici_adsoyad = isset($_POST['kullanici_adsoyad']) ? $_POST['kullanici_adsoyad'] : null;
        $kullanici_password = isset($_POST['kullanici_password']) ? $_POST['kullanici_password'] : null;

        $sorgu = $db->prepare('INSERT INTO kullanici SET 
    kullanici_tc = ?,
    kullanici_adsoyad = ?,
    kullanici_password = ? ');

        $ekle = $sorgu->execute([$kullanici_tc, $kullanici_adsoyad, $kullanici_password]);
        if ($ekle) { ?>
            <script type="text/javascript">

                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Kayıt Başarıyla Tamamlandı, Giriş Sayfasına Yönlendiriliyorsunuz!',
                    showConfirmButton: false,
                    timer: 1200
                })
            </script>
            <?php
            header('Refresh:1; url=index.php');
        } else { ?>
            <script type="text/javascript">
                Swal.fire({
                    position: 'top-center',
                    icon: 'error',
                    title: 'Kayıt İşlemi Başarısız, Lütfen Tekrar Deneyiniz!',
                    showConfirmButton: false,
                    timer: 1500
                })
            </script>
            <?php
            header('Refresh:1; url=index.php');
        }
    }

    //giris yapma
    if (isset($_POST['giris_yap'])) {
        $kullanici_tc = isset($_POST['kullanici_tc']) ? $_POST['kullanici_tc'] : null;
        $kullanici_password = isset($_POST['kullanici_password']) ? $_POST['kullanici_password'] : null;

        $kullanicisor = $db->prepare('SELECT * FROM kullanici WHERE kullanici_tc=:kullanici_tc AND kullanici_password =:kullanici_password ');

        $ekle = $kullanicisor->execute(['kullanici_tc' => $kullanici_tc, 'kullanici_password' => $kullanici_password]);
        $say = $kullanicisor->rowCount();

        if ($say == 1 && $ekle) {
            $_SESSION['userkullanici_tc'] = $kullanici_tc; ?>
            <script type="text/javascript">

                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Giriş Başarılı!',
                    showConfirmButton: false,
                    timer: 1000
                })
            </script>

            <?php
            header('Refresh:1; url=anasayfa.php');
        } else {
            ?>
            <script type="text/javascript">

                Swal.fire({
                    position: 'top-center',
                    icon: 'error',
                    title: 'Giriş Başarısız, Lütfen Tekrar Deneyiniz!',
                    showConfirmButton: false,
                    timer: 1300
                })
            </script>
            <?php
            header('Refresh:1; url=index.php');
        }

    }
    // randevu kaydetme
    if (isset($_POST['randevuyu_kaydet'])) {
        $randevu_sehir = isset($_POST['sehir']) ? $_POST['sehir'] : null;
        $randevu_hastane = isset($_POST['hastane']) ? $_POST['hastane'] : null;
        $randevu_doktor = isset($_POST['doktor']) ? $_POST['doktor'] : null;
        $randevu_tarih = isset($_POST['tarih']) ? $_POST['tarih'] : null;
        $randevu_klinik = isset($_POST['klinik']) ? $_POST['klinik'] : null;
        $hasta_id = isset($_POST['kullanici_id']) ? $_POST['kullanici_id'] : null;

        $kaydet = $db->prepare('INSERT INTO randevu SET 
    randevu_sehir = ?,
    randevu_hastane = ?,
    randevu_doktor = ?,
    randevu_tarih = ?,
    randevu_klinik = ?,
    randevu_hasta_id = ? ');

        $insert = $kaydet->execute([$randevu_sehir, $randevu_hastane, $randevu_doktor, $randevu_tarih, $randevu_klinik, $hasta_id]);
        if ($insert) { ?>
            <script type="text/javascript">
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Randevu Başarıyla Oluşturuldu!',
                    showConfirmButton: false,
                    timer: 1100
                })
            </script>
            <?php
            header('Refresh:1; url=randevu.php');
        } else { ?>
            <script type="text/javascript">
                Swal.fire({
                    position: 'top-center',
                    icon: 'error',
                    title: 'Randevu Oluşturulamadı, Lütfen Tekrar Deneyiniz!!',
                    showConfirmButton: false,
                    timer: 1300
                })
            </script>
            <?php
            header('Refresh:1; url=anasayfa.php');
        }
    }
    ?>
</body>

</html>