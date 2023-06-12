<?php
ob_start();
session_start();
try {
    $db = new PDO("mysql:host=localhost;dbname=hastane_otomasyon; charset=utf8", 'root', '');
    //echo 'Veritabani baglanstii basarili';
} catch (Exception $e) {
    echo $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hastane Otomasyon</title>
</head>

<body>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>