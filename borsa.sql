-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 23 Mar 2020, 18:16:41
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `borsa`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `alim`
--

CREATE TABLE `alim` (
  `alim_id` int(11) NOT NULL,
  `alim_kul_id` int(11) DEFAULT NULL,
  `alim_hisse_sembol` varchar(10) COLLATE utf8_turkish_ci DEFAULT NULL,
  `alim_hisse_deger` decimal(10,2) DEFAULT NULL,
  `alim_hisse_komisyon` decimal(7,2) DEFAULT NULL,
  `alim_hisse_lot` int(11) DEFAULT NULL,
  `alim_hisse_toplam_tutar` decimal(10,2) NOT NULL,
  `alim_zaman` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `kul_Id` int(11) NOT NULL,
  `kul_Ad` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kul_Soyad` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kul_Eposta` tinytext COLLATE utf8_turkish_ci DEFAULT NULL,
  `kul_CepNo` tinytext COLLATE utf8_turkish_ci DEFAULT NULL,
  `kul_DogumTar` date DEFAULT NULL,
  `kul_Sifre` tinytext COLLATE utf8_turkish_ci DEFAULT NULL,
  `kul_Bakiye` decimal(10,2) DEFAULT 10000.00,
  `kul_Eposta_Dogrulama_Kod` tinytext COLLATE utf8_turkish_ci DEFAULT NULL,
  `kul_Eposta_Dogrulama` enum('0','1') COLLATE utf8_turkish_ci DEFAULT '0',
  `kul_Uyelik_Tarih` datetime DEFAULT current_timestamp(),
  `kul_Yetki` varchar(45) COLLATE utf8_turkish_ci DEFAULT '0',
  `kul_Pasif_Durum` enum('0','1') COLLATE utf8_turkish_ci DEFAULT '1',
  `kul_Pasif_Tarih` datetime DEFAULT NULL,
  `kul_Pasif_Sure` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kul_Id`, `kul_Ad`, `kul_Soyad`, `kul_Eposta`, `kul_CepNo`, `kul_DogumTar`, `kul_Sifre`, `kul_Bakiye`, `kul_Eposta_Dogrulama_Kod`, `kul_Eposta_Dogrulama`, `kul_Uyelik_Tarih`, `kul_Yetki`, `kul_Pasif_Durum`, `kul_Pasif_Tarih`, `kul_Pasif_Sure`) VALUES
(1, 'CELAL', 'KUTLUER', 'celal', '+905075091032', '0000-00-00', '4a7d1ed414474e4033ac29ccb8653d9b', '0.05', NULL, '1', '2020-03-23 17:28:39', '0', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `log`
--

CREATE TABLE `log` (
  `log_id` int(11) NOT NULL,
  `log_kul_id` int(11) DEFAULT NULL,
  `log_eylem` tinytext COLLATE utf8_turkish_ci DEFAULT NULL,
  `log_aciklama` text COLLATE utf8_turkish_ci DEFAULT 'CURRENT_TIMESTAMP',
  `log_zaman` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `satim`
--

CREATE TABLE `satim` (
  `satim_id` int(11) NOT NULL,
  `satim_kul_id` int(11) DEFAULT NULL,
  `satim_hisse_sembol` varchar(10) COLLATE utf8_turkish_ci DEFAULT NULL,
  `satim_hisse_deger` decimal(10,2) DEFAULT NULL,
  `satim_hisse_komisyon` decimal(7,2) DEFAULT NULL,
  `satim_hisse_lot` int(11) DEFAULT NULL,
  `satim_zaman` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `alim`
--
ALTER TABLE `alim`
  ADD PRIMARY KEY (`alim_id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`kul_Id`);

--
-- Tablo için indeksler `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`log_id`);

--
-- Tablo için indeksler `satim`
--
ALTER TABLE `satim`
  ADD PRIMARY KEY (`satim_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `alim`
--
ALTER TABLE `alim`
  MODIFY `alim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `kul_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `log`
--
ALTER TABLE `log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `satim`
--
ALTER TABLE `satim`
  MODIFY `satim_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
