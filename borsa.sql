-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 May 2020, 12:49:39
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
                        `alim_lot_satilmayan` int(11) DEFAULT NULL,
                        `alim_hisse_toplam_tutar` decimal(10,2) DEFAULT NULL,
                        `alim_zaman` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `alim`
--

INSERT INTO `alim` (`alim_id`, `alim_kul_id`, `alim_hisse_sembol`, `alim_hisse_deger`, `alim_hisse_komisyon`, `alim_hisse_lot`, `alim_lot_satilmayan`, `alim_hisse_toplam_tutar`, `alim_zaman`) VALUES
(166, 1, 'AEFES', '17.17', '0.05', 1, 0, '17.22', '2020-05-18 23:45:47'),
(167, 1, 'AEFES', '17.17', '3.97', 77, 0, '1326.06', '2020-05-18 23:45:55'),
(168, 1, 'AEFES', '17.17', '4.22', 82, 0, '1412.16', '2020-05-18 23:46:03'),
(169, 1, 'AEFES', '17.17', '2.88', 56, 0, '964.40', '2020-05-18 23:46:12'),
(170, 5, 'AEFES', '17.17', '0.05', 1, 0, '17.22', '2020-05-19 22:40:00');

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
                                `kul_Son_Giris_Tar` datetime DEFAULT NULL,
                                `kul_lig_id` int(11) DEFAULT NULL,
                                `kul_Yetki` varchar(45) COLLATE utf8_turkish_ci DEFAULT '0',
                                `kul_Pasif_Durum` enum('0','1') COLLATE utf8_turkish_ci DEFAULT '1',
                                `kul_Pasif_Tarih` datetime DEFAULT NULL,
                                `kul_Pasif_Sure` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kul_Id`, `kul_Ad`, `kul_Soyad`, `kul_Eposta`, `kul_CepNo`, `kul_DogumTar`, `kul_Sifre`, `kul_Bakiye`, `kul_Eposta_Dogrulama_Kod`, `kul_Eposta_Dogrulama`, `kul_Uyelik_Tarih`, `kul_Son_Giris_Tar`, `kul_lig_id`, `kul_Yetki`, `kul_Pasif_Durum`, `kul_Pasif_Tarih`, `kul_Pasif_Sure`) VALUES
(1, 'CELAL', 'KUTLUER', 'celal', '+905075091032', '0000-00-00', '4a7d1ed414474e4033ac29ccb8653d9b', '9867.22', NULL, '1', '2020-03-23 17:28:39', NULL, 1, '1', '1', NULL, NULL),
(5, 'celal', 'kutluer', 'celal1', '5555555', '2020-05-14', '4a7d1ed414474e4033ac29ccb8653d9b', '9999.90', 'c5903bd6edb28d2e9a78f37d48bc42d89cbe9a17', '0', '2020-05-19 22:39:34', NULL, 2, '0', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ligler`
--

CREATE TABLE `ligler` (
                          `lig_id` int(11) NOT NULL,
                          `lig_baslik` text COLLATE utf8_turkish_ci DEFAULT NULL,
                          `lig_duyuru` text COLLATE utf8_turkish_ci DEFAULT NULL,
                          `lig_bos_uyelik` int(11) DEFAULT 10,
                          `lig_yonetici_id` int(11) DEFAULT NULL,
                          `lig_son_siralama` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ligler`
--

INSERT INTO `ligler` (`lig_id`, `lig_baslik`, `lig_duyuru`, `lig_bos_uyelik`, `lig_yonetici_id`, `lig_son_siralama`) VALUES
(1, 'BORSACILAR', 'Borsanın yıldızları....', 9, 1, NULL),
(2, 'HİSSENİN YILDIZLARI', '...', 9, 4, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `log`
--

CREATE TABLE `log` (
                       `log_id` int(11) NOT NULL,
                       `log_kul_id` int(11) DEFAULT NULL,
                       `log_eylem` tinytext COLLATE utf8_turkish_ci DEFAULT NULL,
                       `log_aciklama` text COLLATE utf8_turkish_ci DEFAULT NULL,
                       `log_zaman` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `log`
--

INSERT INTO `log` (`log_id`, `log_kul_id`, `log_eylem`, `log_aciklama`, `log_zaman`) VALUES
(1, 1, '1', 'v', '2020-05-21 14:10:12'),
(2, 1, '1', '1', '2020-05-01 14:11:40'),
(3, 1, 'Hisse Satım', '\r\n1 kullanıcı idli\r\nCELAL - \r\nKUTLUER \r\nAEFES hissesini\r\n16.94 tutardan\r\n1 adet sattı. Bu işlem için \r\n0.05 TL komisyon ödedi.\r\n16.89 TL toplam tutar', '2020-05-16 21:59:47'),
(4, 1, 'Hisse Satım', '\r\n1 kullanıcı idli\r\nCELAL - \r\nKUTLUER \r\nAEFES hissesini\r\n16.94 tutardan\r\n1 adet sattı. Bu işlem için \r\n0.05 TL komisyon ödedi.\r\n16.89 TL toplam tutar aldı.', '2020-05-16 22:01:06'),
(5, 1, 'Hisse Satım', '1 -NoluCELAL - KUTLUER AEFES hissesini16.94 tutardan1 adet sattı. Bu işlem için 0.05 TL komisyon ödedi.16.89 TL toplam tutar aldı.', '2020-05-16 22:03:22'),
(6, 1, 'Hisse Satım', '1 -Nolu CELAL KUTLUER AEFES hissesini16.94 tutardan1 adet sattı. Bu işlem için 0.05 TL komisyon ödedi.16.89 TL toplam tutar aldı.', '2020-05-16 22:03:59'),
(7, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 tutardan 1 adet sattı. Bu işlem için 0.05 TL komisyon ödedi. 16.89 TL toplam tutar aldı.', '2020-05-16 22:04:52'),
(8, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet sattı. Bu işlem için 0.05 TL komisyon ödedi. 16.89 TL toplam tutar aldı.', '2020-05-16 22:05:49'),
(9, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ödedi. 16.99 TL toplam tutar aldı.', '2020-05-16 22:11:22'),
(10, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 16.99 TL toplam tutar ödedi.', '2020-05-16 22:12:19'),
(11, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 16.99 TL toplam tutar ödedi.', '2020-05-16 22:58:57'),
(12, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 16.99 TL toplam tutar ödedi.', '2020-05-16 22:59:29'),
(13, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 16.99 TL toplam tutar ödedi.', '2020-05-16 23:02:24'),
(14, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 16.99 TL toplam tutar ödedi.', '2020-05-16 23:03:37'),
(15, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 16.99 TL toplam tutar ödedi.', '2020-05-16 23:04:14'),
(16, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 16.99 TL toplam tutar ödedi.', '2020-05-16 23:05:32'),
(17, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AFYON hissesini 2.72 TL tutardan 1 adet aldı. Bu işlem için 0.01 TL komisyon ile 2.73 TL toplam tutar ödedi.', '2020-05-16 23:05:46'),
(18, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AFYON hissesini 2.72 TL tutardan 1 adet aldı. Bu işlem için 0.01 TL komisyon ile 2.73 TL toplam tutar ödedi.', '2020-05-16 23:05:53'),
(19, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 16.99 TL toplam tutar ödedi.', '2020-05-16 23:06:38'),
(20, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AFYON hissesini 2.72 TL tutardan 1 adet aldı. Bu işlem için 0.01 TL komisyon ile 2.73 TL toplam tutar ödedi.', '2020-05-16 23:06:49'),
(21, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AFYON hissesini 2.72 TL tutardan 1 adet aldı. Bu işlem için 0.01 TL komisyon ile 2.73 TL toplam tutar ödedi.', '2020-05-16 23:07:38'),
(22, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AFYON hissesini 2.72 TL tutardan 1 adet aldı. Bu işlem için 0.01 TL komisyon ile 2.73 TL toplam tutar ödedi.', '2020-05-16 23:07:56'),
(23, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AFYON hissesini 2.72 TL tutardan 1 adet aldı. Bu işlem için 0.01 TL komisyon ile 2.73 TL toplam tutar ödedi.', '2020-05-16 23:09:04'),
(24, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AFYON hissesini 2.72 TL tutardan 1 adet aldı. Bu işlem için 0.01 TL komisyon ile 2.73 TL toplam tutar ödedi.', '2020-05-16 23:10:50'),
(25, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AFYON hissesini 2.72 TL tutardan 1 adet aldı. Bu işlem için 0.01 TL komisyon ile 2.73 TL toplam tutar ödedi.', '2020-05-16 23:10:51'),
(26, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AFYON hissesini 2.72 TL tutardan 1 adet aldı. Bu işlem için 0.01 TL komisyon ile 2.73 TL toplam tutar ödedi.', '2020-05-16 23:11:37'),
(27, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER ZOREN hissesini 1.33 TL tutardan 1 adet aldı. Bu işlem için 0.00 TL komisyon ile 1.33 TL toplam tutar ödedi.', '2020-05-16 23:12:27'),
(28, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER ZOREN hissesini 1.33 TL tutardan 1 adet aldı. Bu işlem için 0.00 TL komisyon ile 1.33 TL toplam tutar ödedi.', '2020-05-16 23:12:55'),
(29, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER ZOREN hissesini 1.33 TL tutardan 1 adet aldı. Bu işlem için 0.00 TL komisyon ile 1.33 TL toplam tutar ödedi.', '2020-05-16 23:13:33'),
(30, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER ZOREN hissesini 1.33 TL tutardan 1 adet aldı. Bu işlem için 0.00 TL komisyon ile 1.33 TL toplam tutar ödedi.', '2020-05-16 23:14:20'),
(31, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.62 TL tutardan 1 adet aldı. Bu işlem için 0.00 TL komisyon ile 0.62 TL toplam tutar ödedi.', '2020-05-16 23:14:36'),
(32, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.62 TL tutardan 1 adet aldı. Bu işlem için 0.00 TL komisyon ile 0.62 TL toplam tutar ödedi.', '2020-05-16 23:14:48'),
(33, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.62 TL tutardan 1 adet aldı. Bu işlem için 0.00 TL komisyon ile 0.62 TL toplam tutar ödedi.', '2020-05-16 23:15:55'),
(34, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.62 TL tutardan 1 adet aldı. Bu işlem için 0.00 TL komisyon ile 0.62 TL toplam tutar ödedi.', '2020-05-16 23:15:56'),
(35, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 16.99 TL toplam tutar ödedi.', '2020-05-16 23:16:02'),
(36, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER DEVA hissesini 18.90 TL tutardan 1 adet aldı. Bu işlem için 0.06 TL komisyon ile 18.96 TL toplam tutar ödedi.', '2020-05-16 23:16:24'),
(37, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER DEVA hissesini 18.90 TL tutardan 1 adet aldı. Bu işlem için 0.06 TL komisyon ile 18.96 TL toplam tutar ödedi.', '2020-05-16 23:16:34'),
(38, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AFYON hissesini 2.72 TL tutardan 1 adet aldı. Bu işlem için 0.01 TL komisyon ile 2.73 TL toplam tutar ödedi.', '2020-05-16 23:18:31'),
(39, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 16.99 TL toplam tutar ödedi.', '2020-05-16 23:32:07'),
(40, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AFYON hissesini 2.72 TL tutardan 1 adet aldı. Bu işlem için 0.01 TL komisyon ile 2.73 TL toplam tutar ödedi.', '2020-05-16 23:32:15'),
(41, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER ANELE hissesini 3.66 TL tutardan 1 adet aldı. Bu işlem için 0.01 TL komisyon ile 3.67 TL toplam tutar ödedi.', '2020-05-16 23:32:23'),
(42, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER ANELE hissesini 3.66 TL tutardan 1 adet aldı. Bu işlem için 0.01 TL komisyon ile 3.67 TL toplam tutar ödedi.', '2020-05-16 23:32:35'),
(43, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER ANELE hissesini 3.66 TL tutardan 1 adet sattı. Bu işlem için 0.01 TL komisyon ödedi. 3.65 TL toplam tutar aldı.', '2020-05-16 23:32:45'),
(44, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER ANELE hissesini 3.66 TL tutardan 1 adet aldı. Bu işlem için 0.01 TL komisyon ile 3.67 TL toplam tutar ödedi.', '2020-05-16 23:33:13'),
(45, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER ANELE hissesini 3.66 TL tutardan 1 adet aldı. Bu işlem için 0.01 TL komisyon ile 3.67 TL toplam tutar ödedi.', '2020-05-16 23:33:24'),
(46, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER ANELE hissesini 3.66 TL tutardan 3 adet sattı. Bu işlem için 0.03 TL komisyon ödedi. 10.95 TL toplam tutar aldı.', '2020-05-16 23:33:40'),
(47, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER ANACM hissesini 3.99 TL tutardan 1 adet aldı. Bu işlem için 0.01 TL komisyon ile 4.00 TL toplam tutar ödedi.', '2020-05-16 23:35:39'),
(48, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 17 adet sattı. Bu işlem için 0.86 TL komisyon ödedi. 287.12 TL toplam tutar aldı.', '2020-05-16 23:35:50'),
(49, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER ZOREN hissesini 1.33 TL tutardan 1 adet aldı. Bu işlem için 0.00 TL komisyon ile 1.33 TL toplam tutar ödedi.', '2020-05-16 23:43:17'),
(50, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 16.99 TL toplam tutar ödedi.', '2020-05-17 00:01:26'),
(51, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 18 adet sattı. Bu işlem için 0.91 TL komisyon ödedi. 304.01 TL toplam tutar aldı.', '2020-05-17 00:01:35'),
(52, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 16.99 TL toplam tutar ödedi.', '2020-05-17 00:01:48'),
(53, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 16.99 TL toplam tutar ödedi.', '2020-05-17 00:07:30'),
(54, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet sattı. Bu işlem için 0.05 TL komisyon ödedi. 16.89 TL toplam tutar aldı.', '2020-05-17 00:07:38'),
(55, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet sattı. Bu işlem için 0.05 TL komisyon ödedi. 16.89 TL toplam tutar aldı.', '2020-05-17 00:07:46'),
(56, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 254 adet aldı. Bu işlem için 12.91 TL komisyon ile 4315.67 TL toplam tutar ödedi.', '2020-05-17 00:10:28'),
(57, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 254 adet sattı. Bu işlem için 12.91 TL komisyon ödedi. 4289.85 TL toplam tutar aldı.', '2020-05-17 00:10:36'),
(58, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AFYON hissesini 2.72 TL tutardan 1 adet sattı. Bu işlem için 0.01 TL komisyon ödedi. 2.71 TL toplam tutar aldı.', '2020-05-17 00:12:23'),
(59, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AFYON hissesini 2.72 TL tutardan 3 adet aldı. Bu işlem için 0.02 TL komisyon ile 8.18 TL toplam tutar ödedi.', '2020-05-17 00:12:34'),
(60, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AFYON hissesini 2.72 TL tutardan 4 adet sattı. Bu işlem için 0.03 TL komisyon ödedi. 10.85 TL toplam tutar aldı.', '2020-05-17 00:12:42'),
(61, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 16.99 TL toplam tutar ödedi.', '2020-05-17 00:13:32'),
(62, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet sattı. Bu işlem için 0.05 TL komisyon ödedi. 16.89 TL toplam tutar aldı.', '2020-05-17 00:13:41'),
(63, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 16.99 TL toplam tutar ödedi.', '2020-05-17 00:13:49'),
(64, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet sattı. Bu işlem için 0.05 TL komisyon ödedi. 16.89 TL toplam tutar aldı.', '2020-05-17 00:13:57'),
(65, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 29426 adet aldı. Bu işlem için 1495.43 TL komisyon ile 499971.87 TL toplam tutar ödedi.', '2020-05-17 00:14:05'),
(66, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 29426 adet sattı. Bu işlem için 1495.43 TL komisyon ödedi. 496981.01 TL toplam tutar aldı.', '2020-05-17 00:14:13'),
(67, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 29427 adet aldı. Bu işlem için 1495.48 TL komisyon ile 499988.86 TL toplam tutar ödedi.', '2020-05-17 00:14:28'),
(68, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 29427 adet sattı. Bu işlem için 1495.48 TL komisyon ödedi. 496997.90 TL toplam tutar aldı.', '2020-05-17 00:14:36'),
(69, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 4 adet aldı. Bu işlem için 0.20 TL komisyon ile 67.96 TL toplam tutar ödedi.', '2020-05-17 00:16:59'),
(70, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 4 adet sattı. Bu işlem için 0.20 TL komisyon ödedi. 67.56 TL toplam tutar aldı.', '2020-05-17 00:17:08'),
(71, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 16.99 TL toplam tutar ödedi.', '2020-05-17 00:18:50'),
(72, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet sattı. Bu işlem için 0.05 TL komisyon ödedi. 16.89 TL toplam tutar aldı.', '2020-05-17 00:18:58'),
(73, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 352 adet aldı. Bu işlem için 17.89 TL komisyon ile 5980.77 TL toplam tutar ödedi.', '2020-05-17 00:19:04'),
(74, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 176 adet sattı. Bu işlem için 8.94 TL komisyon ödedi. 2972.5 TL toplam tutar aldı.', '2020-05-17 00:19:12'),
(75, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 176 adet sattı. Bu işlem için 8.94 TL komisyon ödedi. 2972.50 TL toplam tutar aldı.', '2020-05-17 00:19:20'),
(76, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 353 adet aldı. Bu işlem için 17.94 TL komisyon ile 5997.76 TL toplam tutar ödedi.', '2020-05-17 00:19:32'),
(77, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 353 adet sattı. Bu işlem için 17.94 TL komisyon ödedi. 5961.88 TL toplam tutar aldı.', '2020-05-17 00:19:45'),
(78, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.62 TL tutardan 6 adet aldı. Bu işlem için 0.01 TL komisyon ile 3.73 TL toplam tutar ödedi.', '2020-05-17 00:21:27'),
(79, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.62 TL tutardan 8 adet sattı. Bu işlem için 0.01 TL komisyon ödedi. 4.95 TL toplam tutar aldı.', '2020-05-17 00:21:37'),
(80, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 16.99 TL toplam tutar ödedi.', '2020-05-17 00:23:04'),
(81, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet sattı. Bu işlem için 0.05 TL komisyon ödedi. 16.89 TL toplam tutar aldı.', '2020-05-17 00:23:12'),
(82, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 587 adet aldı. Bu işlem için 29.83 TL komisyon ile 9973.61 TL toplam tutar ödedi.', '2020-05-17 00:25:41'),
(83, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 587 adet sattı. Bu işlem için 29.83 TL komisyon ödedi. 9913.95 TL toplam tutar aldı.', '2020-05-17 00:25:48'),
(84, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.62 TL tutardan 8 adet aldı. Bu işlem için 0.01 TL komisyon ile 4.97 TL toplam tutar ödedi.', '2020-05-17 00:27:12'),
(85, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.62 TL tutardan 4 adet sattı. Bu işlem için 0.01 TL komisyon ödedi. 2.47 TL toplam tutar aldı.', '2020-05-17 00:27:25'),
(86, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.62 TL tutardan 8 adet aldı. Bu işlem için 0.01 TL komisyon ile 4.97 TL toplam tutar ödedi.', '2020-05-17 00:27:38'),
(87, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.62 TL tutardan 11 adet sattı. Bu işlem için 0.02 TL komisyon ödedi. 6.80 TL toplam tutar aldı.', '2020-05-17 00:27:53'),
(88, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.62 TL tutardan 16080 adet aldı. Bu işlem için 29.91 TL komisyon ile 9999.51 TL toplam tutar ödedi.', '2020-05-17 00:32:09'),
(89, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.62 TL tutardan 16081 adet sattı. Bu işlem için 29.91 TL komisyon ödedi. 9940.31 TL toplam tutar aldı.', '2020-05-17 00:32:19'),
(90, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 588 adet aldı. Bu işlem için 29.88 TL komisyon ile 9990.60 TL toplam tutar ödedi.', '2020-05-17 00:34:35'),
(91, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 588 adet sattı. Bu işlem için 29.88 TL komisyon ödedi. 9930.84 TL toplam tutar aldı.', '2020-05-17 00:34:42'),
(92, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 585 adet aldı. Bu işlem için 29.73 TL komisyon ile 9939.63 TL toplam tutar ödedi.', '2020-05-17 00:34:52'),
(93, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 585 adet sattı. Bu işlem için 29.73 TL komisyon ödedi. 9880.17 TL toplam tutar aldı.', '2020-05-17 00:35:00'),
(94, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 581 adet aldı. Bu işlem için 29.53 TL komisyon ile 9871.67 TL toplam tutar ödedi.', '2020-05-17 00:40:26'),
(95, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 581 adet sattı. Bu işlem için 29.53 TL komisyon ödedi. 9812.61 TL toplam tutar aldı.', '2020-05-17 00:40:36'),
(96, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 578 adet aldı. Bu işlem için 29.37 TL komisyon ile 9820.69 TL toplam tutar ödedi.', '2020-05-17 00:40:44'),
(97, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 578 adet sattı. Bu işlem için 29.37 TL komisyon ödedi. 9761.95 TL toplam tutar aldı.', '2020-05-17 00:40:51'),
(98, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 16.99 TL toplam tutar ödedi.', '2020-05-17 09:44:42'),
(99, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 16.99 TL toplam tutar ödedi.', '2020-05-17 09:44:51'),
(100, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet sattı. Bu işlem için 0.05 TL komisyon ödedi. 16.89 TL toplam tutar aldı.', '2020-05-17 09:44:59'),
(101, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet sattı. Bu işlem için 0.05 TL komisyon ödedi. 16.89 TL toplam tutar aldı.', '2020-05-17 09:45:00'),
(102, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER ZOREN hissesini 1.33 TL tutardan 3 adet sattı. Bu işlem için 0.01 TL komisyon ödedi. 3.98 TL toplam tutar aldı.', '2020-05-17 09:45:18'),
(103, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER ENKAI hissesini 6.19 TL tutardan 1 adet aldı. Bu işlem için 0.02 TL komisyon ile 6.21 TL toplam tutar ödedi.', '2020-05-17 09:45:36'),
(104, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER YKBNK hissesini 2.16 TL tutardan 4505 adet aldı. Bu işlem için 29.19 TL komisyon ile 9759.99 TL toplam tutar ödedi.', '2020-05-17 09:45:51'),
(105, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER YKBNK hissesini 2.16 TL tutardan 4505 adet sattı. Bu işlem için 29.19 TL komisyon ödedi. 9701.61 TL toplam tutar aldı.', '2020-05-17 09:46:05'),
(106, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER DEVA hissesini 18.90 TL tutardan 1 adet sattı. Bu işlem için 0.06 TL komisyon ödedi. 18.84 TL toplam tutar aldı.', '2020-05-17 09:56:58'),
(107, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER DEVA hissesini 18.90 TL tutardan 1 adet sattı. Bu işlem için 0.06 TL komisyon ödedi. 18.84 TL toplam tutar aldı.', '2020-05-17 09:56:59'),
(108, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER ANACM hissesini 3.99 TL tutardan 1 adet sattı. Bu işlem için 0.01 TL komisyon ödedi. 3.98 TL toplam tutar aldı.', '2020-05-17 09:57:15'),
(109, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER ENKAI hissesini 6.19 TL tutardan 1 adet sattı. Bu işlem için 0.02 TL komisyon ödedi. 6.17 TL toplam tutar aldı.', '2020-05-17 09:57:48'),
(110, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 16.99 TL toplam tutar ödedi.', '2020-05-17 09:58:13'),
(111, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 16.99 TL toplam tutar ödedi.', '2020-05-17 09:58:22'),
(112, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 2 adet sattı. Bu işlem için 0.10 TL komisyon ödedi. 33.78 TL toplam tutar aldı.', '2020-05-17 09:58:36'),
(113, 3, 'Hisse Alım', '3 -Nolu kullanıcı Celal KUTLUER AEFES hissesini 16.94 TL tutardan 588 adet aldı. Bu işlem için 29.88 TL komisyon ile 9990.60 TL toplam tutar ödedi.', '2020-05-17 10:17:37'),
(114, 3, 'Hisse Satım', '3 -Nolu kullanıcı Celal KUTLUER AEFES hissesini 16.94 TL tutardan 588 adet sattı. Bu işlem için 29.88 TL komisyon ödedi. 9930.84 TL toplam tutar aldı.', '2020-05-17 10:17:44'),
(115, 3, 'Hisse Alım', '3 -Nolu kullanıcı Celal KUTLUER AEFES hissesini 16.94 TL tutardan 585 adet aldı. Bu işlem için 29.73 TL komisyon ile 9939.63 TL toplam tutar ödedi.', '2020-05-17 10:17:51'),
(116, 3, 'Hisse Satım', '3 -Nolu kullanıcı Celal KUTLUER AEFES hissesini 16.94 TL tutardan 585 adet sattı. Bu işlem için 29.73 TL komisyon ödedi. 9880.17 TL toplam tutar aldı.', '2020-05-17 10:17:58'),
(117, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER EGEEN hissesini 562.20 TL tutardan 17 adet aldı. Bu işlem için 28.67 TL komisyon ile 9586.07 TL toplam tutar ödedi.', '2020-05-17 18:08:43'),
(118, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 9 adet aldı. Bu işlem için 0.46 TL komisyon ile 152.92 TL toplam tutar ödedi.', '2020-05-17 18:08:58'),
(119, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.62 TL tutardan 16 adet aldı. Bu işlem için 0.03 TL komisyon ile 9.95 TL toplam tutar ödedi.', '2020-05-17 18:09:07'),
(120, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 9 adet sattı. Bu işlem için 0.46 TL komisyon ödedi. 152.00 TL toplam tutar aldı.', '2020-05-17 23:04:23'),
(121, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.62 TL tutardan 1 adet aldı. Bu işlem için 0.00 TL komisyon ile 0.62 TL toplam tutar ödedi.', '2020-05-17 23:04:37'),
(122, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER IHLAS hissesini 0.67 TL tutardan 1 adet aldı. Bu işlem için 0.00 TL komisyon ile 0.67 TL toplam tutar ödedi.', '2020-05-17 23:04:47'),
(123, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER TSKB hissesini 1.04 TL tutardan 1 adet aldı. Bu işlem için 0.00 TL komisyon ile 1.04 TL toplam tutar ödedi.', '2020-05-17 23:05:00'),
(124, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER EGEEN hissesini 562.20 TL tutardan 17 adet sattı. Bu işlem için 28.67 TL komisyon ödedi. 9528.73 TL toplam tutar aldı.', '2020-05-17 23:05:26'),
(125, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER TSKB hissesini 1.04 TL tutardan 1 adet sattı. Bu işlem için 0 TL komisyon ödedi. 1.04 TL toplam tutar aldı.', '2020-05-17 23:05:39'),
(126, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER IHLAS hissesini 0.67 TL tutardan 1 adet sattı. Bu işlem için 0 TL komisyon ödedi. 0.67 TL toplam tutar aldı.', '2020-05-17 23:05:54'),
(127, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.62 TL tutardan 17 adet sattı. Bu işlem için 0.03 TL komisyon ödedi. 10.51 TL toplam tutar aldı.', '2020-05-17 23:06:06'),
(128, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER ZOREN hissesini 1.33 TL tutardan 3632 adet aldı. Bu işlem için 14.49 TL komisyon ile 4845.05 TL toplam tutar ödedi.', '2020-05-17 23:07:23'),
(129, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER ZOREN hissesini 1.33 TL tutardan 3632 adet aldı. Bu işlem için 14.49 TL komisyon ile 4845.05 TL toplam tutar ödedi.', '2020-05-17 23:07:24'),
(130, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER ZOREN hissesini 1.33 TL tutardan 7264 adet sattı. Bu işlem için 28.98 TL komisyon ödedi. 9632.14 TL toplam tutar aldı.', '2020-05-17 23:07:35'),
(131, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 16.94 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 16.99 TL toplam tutar ödedi.', '2020-05-17 23:11:14'),
(132, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 1 adet sattı. Bu işlem için 0.05 TL komisyon ödedi. 17.12 TL toplam tutar aldı.', '2020-05-18 21:39:38'),
(133, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 17.22 TL toplam tutar ödedi.', '2020-05-18 21:49:59'),
(134, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 1 adet sattı. Bu işlem için 0.05 TL komisyon ödedi. 17.12 TL toplam tutar aldı.', '2020-05-18 21:54:40'),
(135, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 17.22 TL toplam tutar ödedi.', '2020-05-18 21:56:43'),
(136, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 17.22 TL toplam tutar ödedi.', '2020-05-18 21:57:15'),
(137, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 10 adet aldı. Bu işlem için 0.52 TL komisyon ile 172.22 TL toplam tutar ödedi.', '2020-05-18 21:57:33'),
(138, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 1 adet sattı. Bu işlem için 0.05 TL komisyon ödedi. 17.12 TL toplam tutar aldı.', '2020-05-18 23:13:32'),
(139, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 1 adet sattı. Bu işlem için 0.05 TL komisyon ödedi. 17.12 TL toplam tutar aldı.', '2020-05-18 23:13:49'),
(140, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 1 adet sattı. Bu işlem için 0.05 TL komisyon ödedi. 17.12 TL toplam tutar aldı.', '2020-05-18 23:14:48'),
(141, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 9 adet sattı. Bu işlem için 0.46 TL komisyon ödedi. 154.07 TL toplam tutar aldı.', '2020-05-18 23:15:40'),
(142, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 17.22 TL toplam tutar ödedi.', '2020-05-18 23:17:15'),
(143, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 1 adet sattı. Bu işlem için 0.05 TL komisyon ödedi. 17.12 TL toplam tutar aldı.', '2020-05-18 23:17:25'),
(144, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 21 adet aldı. Bu işlem için 1.08 TL komisyon ile 361.65 TL toplam tutar ödedi.', '2020-05-18 23:17:45'),
(145, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 10 adet sattı. Bu işlem için 0.52 TL komisyon ödedi. 171.18 TL toplam tutar aldı.', '2020-05-18 23:17:58'),
(146, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 11 adet sattı. Bu işlem için 0.57 TL komisyon ödedi. 188.30 TL toplam tutar aldı.', '2020-05-18 23:18:18'),
(147, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 580 adet aldı. Bu işlem için 29.88 TL komisyon ile 9988.48 TL toplam tutar ödedi.', '2020-05-18 23:19:39'),
(148, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 580 adet sattı. Bu işlem için 29.88 TL komisyon ödedi. 9928.72 TL toplam tutar aldı.', '2020-05-18 23:20:03'),
(149, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 77 adet aldı. Bu işlem için 3.97 TL komisyon ile 1326.06 TL toplam tutar ödedi.', '2020-05-18 23:31:58'),
(150, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 11 adet sattı. Bu işlem için 0.57 TL komisyon ödedi. 188.30 TL toplam tutar aldı.', '2020-05-18 23:32:09'),
(151, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 66 adet sattı. Bu işlem için 3.40 TL komisyon ödedi. 1129.82 TL toplam tutar aldı.', '2020-05-18 23:33:32'),
(152, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 17.22 TL toplam tutar ödedi.', '2020-05-18 23:34:03'),
(153, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 1 adet sattı. Bu işlem için 0.05 TL komisyon ödedi. 17.12 TL toplam tutar aldı.', '2020-05-18 23:34:10'),
(154, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 2 adet aldı. Bu işlem için 0.10 TL komisyon ile 34.44 TL toplam tutar ödedi.', '2020-05-18 23:34:55'),
(155, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 1 adet sattı. Bu işlem için 0.05 TL komisyon ödedi. 17.12 TL toplam tutar aldı.', '2020-05-18 23:35:03'),
(156, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 1 adet sattı. Bu işlem için 0.05 TL komisyon ödedi. 17.12 TL toplam tutar aldı.', '2020-05-18 23:35:30'),
(157, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 301 adet aldı. Bu işlem için 15.50 TL komisyon ile 5183.67 TL toplam tutar ödedi.', '2020-05-18 23:36:16'),
(158, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 40 adet sattı. Bu işlem için 2.06 TL komisyon ödedi. 684.74 TL toplam tutar aldı.', '2020-05-18 23:36:33'),
(159, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 17.22 TL toplam tutar ödedi.', '2020-05-18 23:36:53'),
(160, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 56 adet aldı. Bu işlem için 2.88 TL komisyon ile 964.40 TL toplam tutar ödedi.', '2020-05-18 23:37:01'),
(161, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 263 adet sattı. Bu işlem için 13.55 TL komisyon ödedi. 4502.16 TL toplam tutar aldı.', '2020-05-18 23:37:31'),
(162, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 55 adet sattı. Bu işlem için 2.83 TL komisyon ödedi. 941.52 TL toplam tutar aldı.', '2020-05-18 23:38:32'),
(163, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 6 adet aldı. Bu işlem için 0.31 TL komisyon ile 103.33 TL toplam tutar ödedi.', '2020-05-18 23:39:21'),
(164, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 8 adet aldı. Bu işlem için 0.41 TL komisyon ile 137.77 TL toplam tutar ödedi.', '2020-05-18 23:39:31'),
(165, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 6 adet aldı. Bu işlem için 0.31 TL komisyon ile 103.33 TL toplam tutar ödedi.', '2020-05-18 23:39:40'),
(166, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 17.22 TL toplam tutar ödedi.', '2020-05-18 23:39:48'),
(167, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 7 adet sattı. Bu işlem için 0.36 TL komisyon ödedi. 119.83 TL toplam tutar aldı.', '2020-05-18 23:42:59'),
(168, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 14 adet sattı. Bu işlem için 0.72 TL komisyon ödedi. 239.66 TL toplam tutar aldı.', '2020-05-18 23:43:18'),
(169, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 17.22 TL toplam tutar ödedi.', '2020-05-18 23:45:47'),
(170, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 77 adet aldı. Bu işlem için 3.97 TL komisyon ile 1326.06 TL toplam tutar ödedi.', '2020-05-18 23:45:55'),
(171, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 82 adet aldı. Bu işlem için 4.22 TL komisyon ile 1412.16 TL toplam tutar ödedi.', '2020-05-18 23:46:03'),
(172, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 56 adet aldı. Bu işlem için 2.88 TL komisyon ile 964.40 TL toplam tutar ödedi.', '2020-05-18 23:46:12'),
(173, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 78 adet sattı. Bu işlem için 4.02 TL komisyon ödedi. 1335.24 TL toplam tutar aldı.', '2020-05-18 23:46:30'),
(174, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 84 adet sattı. Bu işlem için 4.33 TL komisyon ödedi. 1437.95 TL toplam tutar aldı.', '2020-05-18 23:46:45'),
(175, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 54 adet sattı. Bu işlem için 2.78 TL komisyon ödedi. 924.40 TL toplam tutar aldı.', '2020-05-19 22:23:47'),
(176, 5, 'Hisse Alım', '5 -Nolu kullanıcı celal kutluer AEFES hissesini 17.17 TL tutardan 1 adet aldı. Bu işlem için 0.05 TL komisyon ile 17.22 TL toplam tutar ödedi.', '2020-05-19 22:40:00'),
(177, 5, 'Hisse Satım', '5 -Nolu kullanıcı celal kutluer AEFES hissesini 17.17 TL tutardan 1 adet sattı. Bu işlem için 0.05 TL komisyon ödedi. 17.12 TL toplam tutar aldı.', '2020-05-19 22:40:10');

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
                         `satim_kar_zarar` decimal(10,2) DEFAULT NULL,
                         `satim_hisse_toplam_tutar` decimal(10,2) DEFAULT NULL,
                         `satim_zaman` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `satim`
--

INSERT INTO `satim` (`satim_id`, `satim_kul_id`, `satim_hisse_sembol`, `satim_hisse_deger`, `satim_hisse_komisyon`, `satim_hisse_lot`, `satim_kar_zarar`, `satim_hisse_toplam_tutar`, `satim_zaman`) VALUES
(91, 1, 'AEFES', '17.17', '4.02', 78, '-8.04', '1335.24', '2020-05-18 23:46:30'),
(92, 1, 'AEFES', '17.17', '4.33', 84, '-8.65', '1437.95', '2020-05-18 23:46:45'),
(93, 1, 'AEFES', '17.17', '2.78', 54, '-5.56', '924.40', '2020-05-19 22:23:47'),
(94, 5, 'AEFES', '17.17', '0.05', 1, '-0.10', '17.12', '2020-05-19 22:40:10');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `varliklar`
--

CREATE TABLE `varliklar` (
                             `varlik_id` int(11) NOT NULL,
                             `varlik_kul_id` int(11) DEFAULT NULL,
                             `varlik_hisse_sembol` varchar(10) COLLATE utf8_turkish_ci DEFAULT NULL,
                             `varlik_alim_adet` int(11) DEFAULT 0,
                             `varlik_satim_adet` int(11) DEFAULT 0,
                             `varlik_elde` int(11) DEFAULT 0,
                             `varlik_degisim_zaman` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `varliklar`
--

INSERT INTO `varliklar` (`varlik_id`, `varlik_kul_id`, `varlik_hisse_sembol`, `varlik_alim_adet`, `varlik_satim_adet`, `varlik_elde`, `varlik_degisim_zaman`) VALUES
(16, 1, 'AEFES', 1289, 1289, 0, '2020-05-18 21:56:43'),
(17, 5, 'AEFES', 1, 1, 0, '2020-05-19 22:40:00');

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
-- Tablo için indeksler `ligler`
--
ALTER TABLE `ligler`
    ADD PRIMARY KEY (`lig_id`);

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
-- Tablo için indeksler `varliklar`
--
ALTER TABLE `varliklar`
    ADD PRIMARY KEY (`varlik_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `alim`
--
ALTER TABLE `alim`
    MODIFY `alim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
    MODIFY `kul_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `ligler`
--
ALTER TABLE `ligler`
    MODIFY `lig_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `log`
--
ALTER TABLE `log`
    MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- Tablo için AUTO_INCREMENT değeri `satim`
--
ALTER TABLE `satim`
    MODIFY `satim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- Tablo için AUTO_INCREMENT değeri `varliklar`
--
ALTER TABLE `varliklar`
    MODIFY `varlik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
