<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div class="adsoyad">
        <h4>Sn. <?php echo $kullanicicek['kullanici_adsoyad']; ?></h4>
    </div>
    <div class="orta_div" id="randevu_div">
        <div class="form_div">
            <form class="formlar" action="islem.php" method="post">
                <input type="date" class="formDate" name="tarih" required>
                <select name="sehir" class="form-select" aria-label="Default select example" required>
                    <option value="">İl Seçiniz</option>
                    <option value="İstanbul">İstanbul</option>
                    <option value="Ankara">Ankara</option>
                    <option value="İzmir">İzmir</option>
                    <option value="Adana">Adana</option>
                    <option value="Adıyaman">Adıyaman</option>
                    <option value="Afyonkarahisar">Afyonkarahisar</option>
                    <option value="Ağrı">Ağrı</option>
                    <option value="Aksaray">Aksaray</option>
                    <option value="Amasya">Amasya</option>
                    <option value="Antalya">Antalya</option>
                    <option value="Ardahan">Ardahan</option>
                    <option value="Artvin">Artvin</option>
                    <option value="Aydın">Aydın</option>
                    <option value="Balıkesir">Balıkesir</option>
                    <option value="Bartın">Bartın</option>
                    <option value="Batman">Batman</option>
                    <option value="Bayburt">Bayburt</option>
                    <option value="Bilecik">Bilecik</option>
                    <option value="Bingöl">Bingöl</option>
                    <option value="Bitlis">Bitlis</option>
                    <option value="Bolu">Bolu</option>
                    <option value="Burdur">Burdur</option>
                    <option value="Bursa">Bursa</option>
                    <option value="Çanakkale">Çanakkale</option>
                    <option value="Çankırı">Çankırı</option>
                    <option value="Çorum">Çorum</option>
                    <option value="Denizli">Denizli</option>
                    <option value="Diyarbakır">Diyarbakır</option>
                    <option value="Düzce">Düzce</option>
                    <option value="Edirne">Edirne</option>
                    <option value="Elazığ">Elazığ</option>
                    <option value="Erzincan">Erzincan</option>
                    <option value="Erzurum">Erzurum</option>
                    <option value="Eskişehir">Eskişehir</option>
                    <option value="Gaziantep">Gaziantep</option>
                    <option value="Giresun">Giresun</option>
                    <option value="Gümüşhane">Gümüşhane</option>
                    <option value="Hakkâri">Hakkâri</option>
                    <option value="Hatay">Hatay</option>
                    <option value="Iğdır">Iğdır</option>
                    <option value="Isparta">Isparta</option>
                    <option value="Kahramanmaraş">Kahramanmaraş</option>
                    <option value="Karabük">Karabük</option>
                    <option value="Karaman">Karaman</option>
                    <option value="Kars">Kars</option>
                    <option value="Kastamonu">Kastamonu</option>
                    <option value="Kayseri">Kayseri</option>
                    <option value="Kırıkkale">Kırıkkale</option>
                    <option value="Kırklareli">Kırklareli</option>
                    <option value="Kırşehir">Kırşehir</option>
                    <option value="Kilis">Kilis</option>
                    <option value="Kocaeli">Kocaeli</option>
                    <option value="Konya">Konya</option>
                    <option value="Kütahya">Kütahya</option>
                    <option value="Malatya">Malatya</option>
                    <option value="Manisa">Manisa</option>
                    <option value="Mardin">Mardin</option>
                    <option value="Mersin">Mersin</option>
                    <option value="Muğla">Muğla</option>
                    <option value="Muş">Muş</option>
                    <option value="Nevşehir">Nevşehir</option>
                    <option value="Niğde">Niğde</option>
                    <option value="Ordu">Ordu</option>
                    <option value="Osmaniye">Osmaniye</option>
                    <option value="Rize">Rize</option>
                    <option value="Sakarya">Sakarya</option>
                    <option value="Samsun">Samsun</option>
                    <option value="Siirt">Siirt</option>
                    <option value="Sinop">Sinop</option>
                    <option value="Sivas">Sivas</option>
                    <option value="Şırnak">Şırnak</option>
                    <option value="Tekirdağ">Tekirdağ</option>
                    <option value="Tokat">Tokat</option>
                    <option value="Trabzon">Trabzon</option>
                    <option value="Tunceli">Tunceli</option>
                    <option value="Şanlıurfa">Şanlıurfa</option>
                    <option value="Uşak">Uşak</option>
                    <option value="Van">Van</option>
                    <option value="Yalova">Yalova</option>
                    <option value="Yozgat">Yozgat</option>
                    <option value="Zonguldak">Zonguldak</option>
                </select>

                <select name="hastane" class="form-select" aria-label="Default select example" required>
                    <option value=" hastane">Hastane Secin</option>
                    <option value="Acibadem Hastanesi">Acibadem Hastanesi</option>
                    <option value="Bolge Egitim ve Arastirma Hastanesi">Bolge Egitim ve Arastirma Hastanesi</option>
                    <option value="Akdamar Hastanesi">Akdamar Hastanesi</option>
                    <option value="Hayat Hastanesi">Hayat Hastanesi</option>
                </select>
                <select name="klinik" class="form-select" aria-label="Default select example" required>
                    <option value=" klinik">Klinik Seciniz</option>
                    <option value="Dahiliye">Dahiliye</option>
                    <option value="Goz Hastaliklari">Goz Hastaliklari</option>
                    <option value="Kulak Burun Bogaz">Kulak Burun Bogaz</option>
                    <option value="Ortopedi">Ortopedi</option>
                </select>
                <select name="doktor" class="form-select" aria-label="Default select example" required>
                    <option value=" doktor">Doktor Seciniz</option>
                    <option value="Hazar Bilek">Hazar Bilek</option>
                    <option value="Ali Efe">Ali Efe</option>
                    <option value="Zeynep Altin">Zeynep Altin</option>
                    <option value="Nedim Balat">Nedim Balat</option>
                </select>
                <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id']; ?>">
                <button class="btn btn-secondary" name="randevuyu_kaydet">Randevuyu Kaydet</button>
            </form>
        </div>
    </div>
    <div class="orta_div" id="ailehekimi_div">
        <h3>Aile Hekimi</h3>
        <p>Aile hekimine ait calisma saati bulunamadi</p>
    </div>
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