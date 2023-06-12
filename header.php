<?php
include 'bagla.php';
$kullanicisor = $db->prepare("SELECT * FROM kullanici WHERE kullanici_tc=:kullanici_tc");
$kullanicisor->execute(['kullanici_tc' => $_SESSION['userkullanici_tc']]);
$say = $kullanicisor->rowCount();
$kullanicicek = $kullanicisor->fetch(PDO::FETCH_ASSOC);
if ($say == 0) {
    header('location:index.php?izinsiz');
    exit;
}
?>


<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css2.css">
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
    <title>Hastane Otomasyon</title>
</head>

<body class="gradient-custom">
    <?php include 'menu.php' ?>

    <!-- <div class="ust_bar">
        <a href="anasayfa.php">
            <h1>Hastane Otomasyon</h1>
        </a>
        <div class="menu">
            <a href="hesap.php">
                <h5>Hesap Bilgileri</h5>
            </a>
            <a href="randevu.php">
                <h5>Randevu Bilgileri</h5>
            </a>
        </div>
    </div>
    <a href="logout.php">
        <div class="cikis">Cikis Yap</div>
    </a> -->


</body>

</html>