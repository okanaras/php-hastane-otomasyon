-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 05 Oca 2023, 09:09:54
-- Sunucu sürümü: 5.7.36
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `hastane_otomasyon`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

DROP TABLE IF EXISTS `kullanici`;
CREATE TABLE IF NOT EXISTS `kullanici` (
  `kullanici_id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_adsoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_tc` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_password` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`kullanici_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_adsoyad`, `kullanici_tc`, `kullanici_password`) VALUES
(1, 'okan aras', '12345678911', '123'),
(6, 'serkan recber', '12365157101', 'serkan123'),
(5, 'qua ', '19031903212', '1903'),
(7, 'serhat ', '123456', '123'),
(8, 'dneme', '123', '123'),
(9, 'abc', '12', '12'),
(10, 'asd', '1234', '123'),
(11, 'asd', '1234', '1234');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevu`
--

DROP TABLE IF EXISTS `randevu`;
CREATE TABLE IF NOT EXISTS `randevu` (
  `randevu_id` int(11) NOT NULL AUTO_INCREMENT,
  `randevu_tarih` date NOT NULL,
  `randevu_sehir` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `randevu_hastane` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `randevu_doktor` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `randevu_klinik` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `randevu_hasta_id` int(11) NOT NULL,
  PRIMARY KEY (`randevu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `randevu`
--

INSERT INTO `randevu` (`randevu_id`, `randevu_tarih`, `randevu_sehir`, `randevu_hastane`, `randevu_doktor`, `randevu_klinik`, `randevu_hasta_id`) VALUES
(1, '2023-01-19', 'Afyonkarahisar', 'Akdamar Hastanesi', 'Ali Efe', 'Goz Hastaliklari', 1),
(2, '2023-01-05', 'Adıyaman', 'Bolge Egitim ve Arastirma Hastanesi', 'Ali Efe', 'Goz Hastaliklari', 2),
(3, '2023-01-23', 'Ağrı', 'Hayat Hastanesi', 'Zeynep Altin', 'Goz Hastaliklari', 2),
(4, '2023-01-12', 'Afyonkarahisar', 'Akdamar Hastanesi', 'Hazar Bilek', 'Kulak Burun Bogaz', 6),
(5, '2023-01-06', 'Ağrı', 'Hayat Hastanesi', 'Zeynep Altin', 'Dahiliye', 1),
(6, '2023-01-05', 'Ankara', 'Acibadem Hastanesi', 'Ali Efe', 'Dahiliye', 1),
(7, '2023-01-04', 'Adıyaman', 'Hayat Hastanesi', 'Zeynep Altin', 'Dahiliye', 7),
(8, '2023-01-10', 'İzmir', 'Akdamar Hastanesi', 'Hazar Bilek', 'Dahiliye', 7),
(9, '2023-01-07', 'Adana', 'Bolge Egitim ve Arastirma Hastanesi', 'Hazar Bilek', 'Dahiliye', 7),
(10, '2023-01-22', 'Adana', 'Bolge Egitim ve Arastirma Hastanesi', ' doktor', 'Goz Hastaliklari', 7),
(11, '2023-01-13', 'Adana', 'Akdamar Hastanesi', ' doktor', ' klinik', 7),
(12, '2023-01-14', 'İzmir', 'Acibadem Hastanesi', ' doktor', ' klinik', 7),
(13, '2023-01-14', 'Ağrı', ' hastane', ' doktor', 'Goz Hastaliklari', 7),
(14, '2022-12-29', 'İzmir', ' hastane', ' doktor', ' klinik', 7),
(15, '2023-01-07', 'Adıyaman', 'Akdamar Hastanesi', ' doktor', 'Goz Hastaliklari', 8);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
