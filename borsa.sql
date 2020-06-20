-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 20 Haz 2020, 08:38:19
-- Sunucu sürümü: 10.3.16-MariaDB
-- PHP Sürümü: 7.3.12

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
(118, 1, 'AEFES', 17.17, 29.88, 580, 0, 9988.48, '2020-05-18 21:06:00'),
(119, 1, 'DEVA', 18.05, 29.73, 549, 0, 9939.18, '2020-05-18 23:34:00'),
(120, 1, 'DEVA', 17.40, 29.55, 566, 0, 9877.95, '2020-05-20 09:00:17'),
(121, 1, 'PGSUS', 53.25, 30.67, 192, 0, 10254.67, '2020-05-20 09:40:58'),
(122, 6, 'AEFES', 17.47, 29.87, 570, 570, 9987.77, '2020-05-21 23:02:37'),
(123, 1, 'TLMAN', 14.02, 30.45, 724, 0, 10180.93, '2020-05-25 12:45:24'),
(124, 1, 'AKBNK', 5.52, 0.02, 1, 0, 5.54, '2020-05-25 17:54:03'),
(125, 1, 'AFYON', 2.76, 0.02, 3, 0, 8.30, '2020-05-27 15:36:07'),
(126, 1, 'IEYHO', 0.65, 0.01, 4, 0, 2.61, '2020-05-27 15:36:30'),
(127, 1, 'IEYHO', 0.63, 0.00, 1, 0, 0.63, '2020-05-31 14:54:58'),
(128, 11, 'AFYON', 2.82, 29.91, 3535, 3534, 9998.61, '2020-06-01 19:07:27'),
(129, 10, 'BIMAS', 64.00, 14.78, 77, -1, 4942.78, '2020-06-02 07:15:36'),
(130, 10, 'BIMAS', 64.00, 14.78, 77, 19, 4942.78, '2020-06-02 07:15:37'),
(131, 9, 'AEFES', 18.75, 8.89, 158, 0, 2971.39, '2020-06-02 07:15:50'),
(132, 9, 'AFYON', 2.85, 5.40, 631, -121, 1803.75, '2020-06-02 07:16:06'),
(133, 9, 'AFYON', 2.85, 5.40, 631, 631, 1803.75, '2020-06-02 07:16:11'),
(134, 9, 'ALARK', 5.15, 4.39, 284, 284, 1466.99, '2020-06-02 07:16:18'),
(135, 10, 'ANELE', 3.91, 13.13, 1119, 1119, 4388.42, '2020-06-02 07:18:27'),
(136, 1, 'IEYHO', 0.64, 0.00, 1, 0, 0.64, '2020-06-02 07:40:54'),
(137, 10, 'HURGZ', 1.66, 6.56, 1318, 1318, 2194.44, '2020-06-02 07:42:50'),
(138, 1, 'AFYON', 2.86, 0.03, 3, 0, 8.61, '2020-06-02 10:21:19'),
(139, 1, 'SKBNK', 1.24, 30.75, 8267, 0, 10281.83, '2020-06-06 21:45:49'),
(140, 1, 'EKGYO', 1.71, 30.82, 6007, 0, 10302.79, '2020-06-08 08:00:15'),
(141, 1, 'IEYHO', 0.65, 0.00, 1, 0, 0.65, '2020-06-08 08:00:47'),
(142, 1, 'IEYHO', 0.65, 0.00, 1, 0, 0.65, '2020-06-08 08:00:58'),
(143, 1, 'BIZIM', 15.53, 6.66, 143, 0, 2227.45, '2020-06-08 10:14:08'),
(144, 1, 'GUBRF', 25.78, 7.12, 92, 0, 2378.88, '2020-06-08 10:14:22'),
(145, 1, 'GSRAY', 3.65, 5.00, 457, 0, 1673.05, '2020-06-08 10:14:36'),
(146, 1, 'TTRAK', 66.70, 12.21, 61, 0, 4080.91, '2020-06-08 10:14:48'),
(147, 1, 'ZOREN', 1.57, 0.00, 1, 0, 1.57, '2020-06-08 10:24:09'),
(148, 1, 'KLGYO', 4.03, 6.73, 557, 0, 2251.44, '2020-06-08 10:47:57'),
(149, 1, 'SNGYO', 1.22, 12.29, 3359, 0, 4110.27, '2020-06-08 11:08:49'),
(150, 1, 'IEYHO', 0.65, 0.00, 1, 0, 0.65, '2020-06-08 11:13:37'),
(151, 1, 'IEYHO', 0.65, 0.00, 1, 0, 0.65, '2020-06-08 11:13:48'),
(152, 1, 'SNGYO', 1.24, 3.84, 1033, 0, 1284.76, '2020-06-08 12:36:10'),
(153, 1, 'PETKM', 3.84, 20.25, 1758, 0, 6770.97, '2020-06-08 12:38:01'),
(154, 1, 'SNGYO', 1.27, 3.88, 1019, 0, 1298.01, '2020-06-08 13:13:17'),
(155, 1, 'HURGZ', 1.52, 0.00, 1, 1, 1.52, '2020-06-10 07:34:53'),
(156, 1, 'HURGZ', 1.52, 0.00, 1, 1, 1.52, '2020-06-10 07:35:09'),
(157, 1, 'HURGZ', 1.52, 8.97, 1967, 1967, 2998.81, '2020-06-10 14:40:09'),
(158, 1, 'AEFES', 19.53, 0.06, 1, 0, 19.59, '2020-06-11 08:25:24'),
(159, 1, 'GARAN', 8.11, 24.26, 997, 0, 8109.93, '2020-06-11 10:42:21'),
(160, 1, 'EKGYO', 1.97, 0.01, 1, 1, 1.98, '2020-06-11 10:56:09'),
(161, 15, 'AEFES', 19.37, 14.93, 257, 0, 4993.02, '2020-06-11 20:08:33'),
(162, 15, 'AEFES', 19.37, 14.93, 257, 0, 4993.02, '2020-06-11 20:08:34'),
(163, 15, 'AKBNK', 5.80, 0.02, 1, 0, 5.82, '2020-06-11 20:08:47'),
(164, 15, 'AKSA', 6.78, 14.85, 730, 730, 4964.25, '2020-06-11 20:09:23'),
(165, 15, 'BIZIM', 18.45, 7.42, 134, 134, 2479.72, '2020-06-11 20:09:36'),
(166, 15, 'ANELE', 4.02, 3.73, 309, 309, 1245.91, '2020-06-11 20:09:49'),
(167, 7, 'AEFES', 19.38, 8.37, 144, 144, 2799.09, '2020-06-13 12:03:02'),
(168, 7, 'GOODY', 5.23, 1.87, 119, 119, 624.24, '2020-06-13 12:03:23'),
(169, 7, 'ANELE', 4.02, 0.63, 52, 52, 209.67, '2020-06-13 12:09:01'),
(170, 9, 'AEFES', 19.38, 4.53, 78, 78, 1516.17, '2020-06-13 12:11:47'),
(171, 16, 'AEFES', 19.38, 29.88, 514, 514, 9991.20, '2020-06-14 20:17:16'),
(172, 1, 'VKGYO', 2.63, 24.25, 3074, 0, 8108.87, '2020-06-15 08:34:56'),
(173, 1, 'IHLAS', 0.80, 24.48, 10200, 0, 8184.48, '2020-06-16 10:05:42'),
(174, 1, 'IEYHO', 0.90, 0.00, 1, 0, 0.90, '2020-06-16 10:49:04'),
(175, 1, 'IHLGM', 1.57, 24.64, 5231, 0, 8237.31, '2020-06-17 11:29:31'),
(176, 1, 'IHLAS', 0.82, 0.00, 1, 0, 0.82, '2020-06-17 11:37:53'),
(177, 1, 'KARSN', 2.44, 37.21, 5084, 5084, 12442.17, '2020-06-18 09:18:36');

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
                                `kul_Sifre_yeni` tinytext COLLATE utf8_turkish_ci DEFAULT NULL,
                                `kul_Bakiye` decimal(10,2) DEFAULT 10000.00,
                                `kul_Eposta_Dogrulama_Kod` tinytext COLLATE utf8_turkish_ci DEFAULT NULL,
                                `kul_Eposta_Dogrulama` enum('0','1') COLLATE utf8_turkish_ci DEFAULT '0',
                                `kul_kod_zaman` datetime DEFAULT NULL,
                                `kul_Uyelik_Tarih` datetime DEFAULT current_timestamp(),
                                `kul_Son_Giris_Tar` datetime DEFAULT NULL,
                                `kul_lig_id` int(11) DEFAULT NULL,
                                `kul_Yetki` varchar(45) COLLATE utf8_turkish_ci DEFAULT '0',
                                `kul_Resim` varchar(75) COLLATE utf8_turkish_ci DEFAULT 'img/logged-user.jpg',
                                `kul_Pasif_Durum` enum('0','1') COLLATE utf8_turkish_ci DEFAULT '1',
                                `kul_Pasif_Tarih` datetime DEFAULT NULL,
                                `kul_Pasif_Sure` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kul_Id`, `kul_Ad`, `kul_Soyad`, `kul_Eposta`, `kul_CepNo`, `kul_DogumTar`, `kul_Sifre`, `kul_Sifre_yeni`, `kul_Bakiye`, `kul_Eposta_Dogrulama_Kod`, `kul_Eposta_Dogrulama`, `kul_kod_zaman`, `kul_Uyelik_Tarih`, `kul_Son_Giris_Tar`, `kul_lig_id`, `kul_Yetki`, `kul_Resim`, `kul_Pasif_Durum`, `kul_Pasif_Tarih`, `kul_Pasif_Sure`) VALUES
(1, 'CELAL', 'KUTLUER', 'celal', '(507) 509 10 32', '1989-01-21', '4a7d1ed414474e4033ac29ccb8653d9b', NULL, 1.05, NULL, '1', NULL, '2020-03-23 17:28:39', '2020-06-19 16:26:38', 5, '1', 'img/8701M5894ZACD4794J3286UVLT8994W2739HIVG3571W9577TIRB1662R.jpg', '1', NULL, NULL),
(5, 'a', 'a', 'a', 'a', '2020-05-04', '0cc175b9c0f1b6a831c399e269772661', NULL, 10000.00, '6f9b0a55df8ac28564cb9f63a10be8af6ab3f7c2', '1', NULL, '2020-05-20 20:06:20', NULL, 2, '0', 'img/logged-user.jpg', '0', '2020-05-27 22:15:09', 1),
(6, 'hasan', 'ulutaş', 'hasan.ulutas@yobu.edu.tr', '34532423423432423', '1987-02-28', '4297f44b13955235245b2497399d7a93', NULL, 12.23, 'ac3dbab61b0d35355fd9e3394cf1564f019965ab', '1', NULL, '2020-05-21 23:01:19', NULL, NULL, '1', 'img/logged-user.jpg', '1', NULL, NULL),
(7, 'Beyzanur', 'Taşköprü', 'beyzataskopru09@gmail.com', '(555) 555 55 55', '1998-05-01', 'dcddb75469b4b4875094e14561e573d8', NULL, 6367.00, 'a3c48f9ee1fc434049485234ce7312c528cea896', '1', NULL, '2020-06-01 17:14:30', '2020-06-13 12:02:48', 9, '1', 'img/logged-user.jpg', '1', NULL, NULL),
(8, 'haydar', 'bulut', 'haydar@hotmail.com', '(123) 456 78 90', '2020-06-04', '4304bcfa7c70020681b91085b31d2019', NULL, 10000.00, '509644903b9ec546addc1bc0bb97c1438ae9dbd9', '1', NULL, '2020-06-01 17:15:10', NULL, NULL, '1', 'img/logged-user.jpg', '0', '2020-06-08 08:03:21', 1),
(9, 'Tarık', 'ERDEN', 'trk60566@hotmail.com', '(553) 919 97 66', '1997-12-09', 'e10adc3949ba59abbe56e057f20f883e', NULL, 7053.65, '8bcf309890051a82c359a730aac8726f312c747f', '1', NULL, '2020-06-01 17:17:12', '2020-06-13 12:10:16', 5, '1', 'img/8008Q3779BPFJ8492P4723SCHI7442C9435AZET5054B1686UZWZ5785H.jpg', '1', NULL, NULL),
(10, 'Merve', 'Tokat', 'merve@gmail.com', '(543) 422 34 42', '1999-11-11', '827ccb0eea8a706c4c34a16891f84e7b', NULL, 2845.90, 'd6eb8e34e87cafc38b6385c4544d57e23922de31', '1', NULL, '2020-06-01 17:19:35', '2020-06-12 10:11:01', 3, '1', 'img/6860W1858OASN9313V8477JRGO1616D5788MGKA6151U9370WZKE5387O.jpg', '1', NULL, NULL),
(11, 'Mahmut', 'Tuncer', 'celalkutluer6@gmail.com', '(555) 000-9988', '2020-06-06', '4a7d1ed414474e4033ac29ccb8653d9b', NULL, 1204.20, '371302', '1', NULL, '2020-06-01 19:04:30', '2020-06-09 17:32:12', 3, '0', 'img/1972P2651NVTP9743M4175MFGR5291T8962URHA2817N9291PDDD6122R.jpg', '0', '2020-06-12 10:21:27', 1),
(12, 'haydar', 'bulut', 'haydar10@hotmail.com', '123456789', '1996-12-31', '9475aa516e4dd1eb386f9d8a9e7ee7be', NULL, 10000.00, '548767', '0', NULL, '2020-06-02 06:12:08', NULL, NULL, '0', 'img/logged-user.jpg', '1', NULL, NULL),
(13, 'haydar', 'bulut', 'haydar6475@gmail.com', '123456789', '1996-06-23', '25f9e794323b453885f5181f1b624d0b', NULL, 10000.00, '176865', '1', NULL, '2020-06-02 06:24:35', '2020-06-02 06:55:43', NULL, '0', 'img/logged-user.jpg', '1', NULL, NULL),
(14, 'ali', 'ali', '16008117026@ogr.bozok.edur.tr', '123456789', '1996-06-16', '25f9e794323b453885f5181f1b624d0b', NULL, 10000.00, '431988', '0', NULL, '2020-06-02 06:56:55', NULL, NULL, '0', 'img/logged-user.jpg', '0', '2020-06-08 08:03:07', 1),
(15, 'merve2', 'merve', '16008116062@ogr.bozok.edu.tr', '(057) 865 44 68', '1996-11-11', '827ccb0eea8a706c4c34a16891f84e7b', NULL, 1950.36, '589275', '1', NULL, '2020-06-11 15:07:11', '2020-06-11 19:34:40', 8, '0', 'img/9691Z2497DFMW8146K7052OZYS4735U2569INKF9728X3387XIRD3640Y.png', '1', NULL, NULL),
(16, 'ilkan', 'kizilkaya', 'ilkankizilkaya1@outlook.com', '(545) 519 76 15', '1998-02-11', '9627b7957597da4df288c4fa7f048124', NULL, 8.80, '931593', '1', NULL, '2020-06-14 20:15:40', '2020-06-14 20:37:12', NULL, '0', 'img/8645R6430LRXK3530A9609VYIQ7537M4224SJMF8960F7090RDKN2413P.png', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ligler`
--

CREATE TABLE `ligler` (
                          `lig_id` int(11) NOT NULL,
                          `lig_baslik` text COLLATE utf8_turkish_ci DEFAULT NULL,
                          `lig_duyuru` text COLLATE utf8_turkish_ci DEFAULT NULL,
                          `lig_bos_uyelik` int(11) DEFAULT 9,
                          `lig_yonetici_id` int(11) DEFAULT NULL,
                          `lig_son_siralama` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ligler`
--

INSERT INTO `ligler` (`lig_id`, `lig_baslik`, `lig_duyuru`, `lig_bos_uyelik`, `lig_yonetici_id`, `lig_son_siralama`) VALUES
(2, 'HİSSENİN YILDIZLARI', '...', 9, 5, NULL),
(3, 'Borsacılar', ':)', 8, 10, NULL),
(5, 'Hisselere Fısıldayanlar', 'Hep birlikte ileriye...', 8, 1, NULL),
(8, 'bir nolu lig', 'aktif', 9, 15, NULL),
(9, 'Beyzaa', 'Borsaa', 9, 7, NULL);

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
(68, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 580 adet aldı. Bu işlem için 29.88 TL komisyon ile 9988.48 TL toplam tutar ödedi.', '2020-05-18 21:06:00'),
(69, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 1 adet sattı. Bu işlem için 0.05 TL komisyon ödedi. 17.12 TL toplam tutar aldı.', '2020-05-18 21:06:15'),
(70, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 290 adet sattı. Bu işlem için 14.94 TL komisyon ödedi. 4964.36 TL toplam tutar aldı.', '2020-05-18 21:06:27'),
(71, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 17.17 TL tutardan 289 adet sattı. Bu işlem için 14.89 TL komisyon ödedi. 4947.24 TL toplam tutar aldı.', '2020-05-18 21:07:21'),
(72, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER DEVA hissesini 18.05 TL tutardan 549 adet aldı. Bu işlem için 29.73 TL komisyon ile 9939.18 TL toplam tutar ödedi.', '2020-05-18 23:34:00'),
(73, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER DEVA hissesini 18.05 TL tutardan 549 adet sattı. Bu işlem için 29.73 TL komisyon ödedi. 9879.72 TL toplam tutar aldı.', '2020-05-19 20:32:05'),
(74, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER DEVA hissesini 17.40 TL tutardan 566 adet aldı. Bu işlem için 29.55 TL komisyon ile 9877.95 TL toplam tutar ödedi.', '2020-05-20 09:00:17'),
(75, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER DEVA hissesini 18.20 TL tutardan 566 adet sattı. Bu işlem için 30.90 TL komisyon ödedi. 10270.30 TL toplam tutar aldı.', '2020-05-20 09:37:27'),
(76, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER PGSUS hissesini 53.25 TL tutardan 192 adet aldı. Bu işlem için 30.67 TL komisyon ile 10254.67 TL toplam tutar ödedi.', '2020-05-20 09:40:58'),
(77, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER PGSUS hissesini 53.15 TL tutardan 192 adet sattı. Bu işlem için 30.61 TL komisyon ödedi. 10174.19 TL toplam tutar aldı.', '2020-05-21 16:25:46'),
(78, 6, 'Hisse Alım', '6 -Nolu kullanıcı hasan ulutaş AEFES hissesini 17.47 TL tutardan 570 adet aldı. Bu işlem için 29.87 TL komisyon ile 9987.77 TL toplam tutar ödedi.', '2020-05-21 23:02:37'),
(79, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER TLMAN hissesini 14.02 TL tutardan 724 adet aldı. Bu işlem için 30.45 TL komisyon ile 10180.93 TL toplam tutar ödedi.', '2020-05-25 12:45:24'),
(80, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AKBNK hissesini 5.52 TL tutardan 1 adet aldı. Bu işlem için 0.02 TL komisyon ile 5.54 TL toplam tutar ödedi.', '2020-05-25 17:54:03'),
(81, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AKBNK hissesini 5.52 TL tutardan 1 adet sattı. Bu işlem için 0.02 TL komisyon ödedi. 5.5 TL toplam tutar aldı.', '2020-05-25 17:54:25'),
(82, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AFYON hissesini 2.76 TL tutardan 3 adet aldı. Bu işlem için 0.02 TL komisyon ile 8.30 TL toplam tutar ödedi.', '2020-05-27 15:36:07'),
(83, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.65 TL tutardan 4 adet aldı. Bu işlem için 0.01 TL komisyon ile 2.61 TL toplam tutar ödedi.', '2020-05-27 15:36:30'),
(84, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 37.155.212.87 ip adresi üzerinden giriş yaptı.', '2020-05-27 20:01:45'),
(85, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 37.155.202.155 ip adresi üzerinden giriş yaptı.', '2020-05-27 22:14:56'),
(86, 5, 'Pasife Alma', '1 -Nolu Yönetici ,5 nolu Kullanıcı olan aa i2020-05-27 22:15:09 de 1 günlüğüne pasife aldı', '2020-05-27 22:15:09'),
(87, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 94.235.215.124 ip adresi üzerinden giriş yaptı.', '2020-05-28 10:03:21'),
(88, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AFYON hissesini 2.75 TL tutardan 1 adet sattı. Bu işlem için 0.01 TL komisyon ödedi. 2.74 TL toplam tutar aldı.', '2020-05-28 10:26:21'),
(89, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 94.235.215.124 ip adresi üzerinden giriş yaptı.', '2020-05-28 12:08:04'),
(90, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 5.177.205.137 ip adresi üzerinden giriş yaptı.', '2020-05-29 06:43:59'),
(91, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.63 TL tutardan 1 adet sattı. Bu işlem için 0.00 TL komisyon ödedi. 0.63 TL toplam tutar aldı.', '2020-05-29 06:46:59'),
(92, 1, 'Profil Bilgi Güncelleme', '1 -Nolu kullanıcı CELAL KUTLUER, 0000-00-00 doğum tarihini 1989-01-21 olarak değiştirdi', '2020-05-29 06:48:27'),
(93, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-05-29 09:16:32'),
(94, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 37.155.233.146 ip adresi üzerinden giriş yaptı.', '2020-05-29 13:26:24'),
(95, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 95.13.34.111 ip adresi üzerinden giriş yaptı.', '2020-05-29 15:15:11'),
(96, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 5.176.144.247 ip adresi üzerinden giriş yaptı.', '2020-05-29 17:30:40'),
(97, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 95.13.34.111 ip adresi üzerinden giriş yaptı.', '2020-05-29 17:41:48'),
(98, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 5.176.144.247 ip adresi üzerinden giriş yaptı.', '2020-05-29 20:20:06'),
(99, 1, 'Lig Silme', '1 -Nolu kullanıcı CELAL KUTLUER 1 nolu BORSACILAR liginden ayrıldı. Ligin son üyesi olduğundan lig silindi', '2020-05-29 20:20:51'),
(100, 1, 'Lig Çıkış', '1 -Nolu kullanıcı CELAL KUTLUER 1 nolu BORSACILAR liginden ayrıldı', '2020-05-29 20:20:51'),
(101, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 5.176.144.247 ip adresi üzerinden giriş yaptı.', '2020-05-29 20:25:04'),
(102, 1, 'Lig Çıkış', '1 -Nolu kullanıcı CELAL KUTLUER 2 nolu HİSSENİN YILDIZLARI liginden ayrıldı', '2020-05-29 20:33:36'),
(103, 1, 'Lig Oluşturma', '1 -Nolu kullanıcı CELAL KUTLUER 3 nolu Borsacılar ligini oluşturdu.', '2020-05-29 20:39:08'),
(104, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 5.176.144.247 ip adresi üzerinden giriş yaptı.', '2020-05-29 21:40:53'),
(105, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 46.221.77.99 ip adresi üzerinden giriş yaptı.', '2020-05-31 11:07:43'),
(106, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 78.159.101.115 ip adresi üzerinden giriş yaptı.', '2020-05-31 14:10:20'),
(107, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 107.181.177.139 ip adresi üzerinden giriş yaptı.', '2020-05-31 14:22:13'),
(108, 1, 'Profil Resim Değiştirme', '1 -Nolu kullanıcı CELAL KUTLUER, resmini değiştirdi.', '2020-05-31 14:22:33'),
(109, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.63 TL tutardan 1 adet sattı. Bu işlem için 0.00 TL komisyon ödedi. 0.63 TL toplam tutar aldı.', '2020-05-31 14:24:11'),
(110, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 107.181.177.131 ip adresi üzerinden giriş yaptı.', '2020-05-31 14:53:32'),
(111, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.63 TL tutardan 1 adet sattı. Bu işlem için 0.00 TL komisyon ödedi. 0.63 TL toplam tutar aldı.', '2020-05-31 14:54:10'),
(112, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AFYON hissesini 2.75 TL tutardan 1 adet sattı. Bu işlem için 0.01 TL komisyon ödedi. 2.74 TL toplam tutar aldı.', '2020-05-31 14:54:26'),
(113, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.63 TL tutardan 1 adet aldı. Bu işlem için 0.00 TL komisyon ile 0.63 TL toplam tutar ödedi.', '2020-05-31 14:54:58'),
(114, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 81.215.164.130 ip adresi üzerinden giriş yaptı.', '2020-06-01 15:43:04'),
(115, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 88.241.70.146 ip adresi üzerinden giriş yaptı.', '2020-06-01 17:11:11'),
(116, 7, 'Üyelik Kaydı', '7 -Nolu kullanıcı Beyzanur Taşköprü, 88.241.70.146 ip adresi üzerinden beyzataskopru09@gmail.com e-posta adresi ile üyelik başvurusunda bulundu.', '2020-06-01 17:14:30'),
(117, 8, 'Üyelik Kaydı', '8 -Nolu kullanıcı haydar bulut, 178.241.221.202 ip adresi üzerinden haydar@hotmail.com e-posta adresi ile üyelik başvurusunda bulundu.', '2020-06-01 17:15:10'),
(118, 9, 'Üyelik Kaydı', '9 -Nolu kullanıcı Tarık ERDEN, 78.176.233.168 ip adresi üzerinden trk60566@hotmail.com e-posta adresi ile üyelik başvurusunda bulundu.', '2020-06-01 17:17:12'),
(119, 7, 'Giriş', '7 -Nolu kullanıcı Beyzanur Taşköprü, 88.241.70.146 ip adresi üzerinden giriş yaptı.', '2020-06-01 17:17:21'),
(120, 9, 'Giriş', '9 -Nolu kullanıcı Tarık ERDEN, 78.176.233.168 ip adresi üzerinden giriş yaptı.', '2020-06-01 17:17:22'),
(121, 10, 'Üyelik Kaydı', '10 -Nolu kullanıcı Merve Tokat, 81.215.164.130 ip adresi üzerinden merve@gmail.com e-posta adresi ile üyelik başvurusunda bulundu.', '2020-06-01 17:19:35'),
(122, 10, 'Giriş', '10 -Nolu kullanıcı Merve Tokat, 81.215.164.130 ip adresi üzerinden giriş yaptı.', '2020-06-01 17:21:37'),
(123, 9, 'Giriş', '9 -Nolu kullanıcı Tarık ERDEN, 78.176.233.168 ip adresi üzerinden giriş yaptı.', '2020-06-01 17:23:51'),
(124, 11, 'Üyelik Kaydı', '11 -Nolu kullanıcı Celal Kutluer, 185.89.248.11 ip adresi üzerinden celalkutluer@gmail.com e-posta adresi ile üyelik başvurusunda bulundu.', '2020-06-01 19:04:31'),
(125, 11, 'Giriş', '11 -Nolu kullanıcı Celal Kutluer, 185.89.248.11 ip adresi üzerinden giriş yaptı.', '2020-06-01 19:05:11'),
(126, 11, 'Profil Resim Değiştirme', '11 -Nolu kullanıcı Celal Kutluer, resmini değiştirdi.', '2020-06-01 19:05:52'),
(127, 11, 'Lig Giriş', '11 -Nolu kullanıcı Celal Kutluer 3 nolu Borsacılar ligine katıldı', '2020-06-01 19:06:41'),
(128, 11, 'Hisse Alım', '11 -Nolu kullanıcı Celal Kutluer AFYON hissesini 2.82 TL tutardan 3535 adet aldı. Bu işlem için 29.91 TL komisyon ile 9998.61 TL toplam tutar ödedi.', '2020-06-01 19:07:27'),
(129, 11, 'Hisse Satım', '11 -Nolu kullanıcı Celal Kutluer AFYON hissesini 2.82 TL tutardan 1 adet sattı. Bu işlem için 0.01 TL komisyon ödedi. 2.81 TL toplam tutar aldı.', '2020-06-01 19:07:46'),
(130, 11, 'Profil Bilgi Güncelleme', '11 -Nolu kullanıcı Celal Kutluer, celalkutluer@gmail.com eposta adresini celalkutluer6@gmail.com olarak değiştirdi', '2020-06-01 19:08:29'),
(131, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 185.89.248.11 ip adresi üzerinden giriş yaptı.', '2020-06-01 19:08:57'),
(132, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AFYON hissesini 2.82 TL tutardan 1 adet sattı. Bu işlem için 0.01 TL komisyon ödedi. 2.81 TL toplam tutar aldı.', '2020-06-01 19:09:31'),
(133, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.64 TL tutardan 1 adet sattı. Bu işlem için 0 TL komisyon ödedi. 0.64 TL toplam tutar aldı.', '2020-06-01 19:09:55'),
(134, 9, 'Giriş', '9 -Nolu kullanıcı Tarık ERDEN, 85.106.50.185 ip adresi üzerinden giriş yaptı.', '2020-06-01 20:08:26'),
(135, 9, 'Giriş', '9 -Nolu kullanıcı Tarık ERDEN, 78.176.233.168 ip adresi üzerinden giriş yaptı.', '2020-06-01 21:23:13'),
(136, 9, 'Profil Resim Değiştirme', '9 -Nolu kullanıcı Tarık ERDEN, resmini değiştirdi.', '2020-06-01 21:25:06'),
(137, 9, 'Lig Giriş', '9 -Nolu kullanıcı Tarık ERDEN 3 nolu Borsacılar ligine katıldı', '2020-06-01 21:25:44'),
(138, 9, 'Giriş', '9 -Nolu kullanıcı Tarık ERDEN, 78.176.233.168 ip adresi üzerinden giriş yaptı.', '2020-06-01 21:26:26'),
(139, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 109.169.23.83 ip adresi üzerinden giriş yaptı.', '2020-06-01 21:46:47'),
(140, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.64 TL tutardan 1 adet sattı. Bu işlem için 0 TL komisyon ödedi. 0.64 TL toplam tutar aldı.', '2020-06-01 21:48:51'),
(141, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-02 05:39:53'),
(142, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 45.9.148.220 ip adresi üzerinden giriş yaptı.', '2020-06-02 05:46:16'),
(143, 12, 'Üyelik Kaydı', '12 -Nolu kullanıcı haydar bulut, 178.245.32.73 ip adresi üzerinden haydar10@hotmail.com e-posta adresi ile üyelik başvurusunda bulundu.', '2020-06-02 06:12:10'),
(144, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 46.165.250.81 ip adresi üzerinden giriş yaptı.', '2020-06-02 06:18:40'),
(145, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 88.241.75.133 ip adresi üzerinden giriş yaptı.', '2020-06-02 06:24:12'),
(146, 13, 'Üyelik Kaydı', '13 -Nolu kullanıcı haydar bulut, 178.245.32.73 ip adresi üzerinden haydar6475@gmail.com e-posta adresi ile üyelik başvurusunda bulundu.', '2020-06-02 06:24:36'),
(147, 13, 'Giriş', '13 -Nolu kullanıcı haydar bulut, 178.245.32.73 ip adresi üzerinden giriş yaptı.', '2020-06-02 06:28:30'),
(148, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 46.154.33.9 ip adresi üzerinden giriş yaptı.', '2020-06-02 06:29:39'),
(149, 9, 'Giriş', '9 -Nolu kullanıcı Tarık ERDEN, 78.176.233.168 ip adresi üzerinden giriş yaptı.', '2020-06-02 06:53:08'),
(150, 13, 'Giriş', '13 -Nolu kullanıcı haydar bulut, 178.245.32.73 ip adresi üzerinden giriş yaptı.', '2020-06-02 06:55:43'),
(151, 14, 'Üyelik Kaydı', '14 -Nolu kullanıcı ali ali, 178.245.32.73 ip adresi üzerinden 16008117026@ogr.bozok.edur.tr e-posta adresi ile üyelik başvurusunda bulundu.', '2020-06-02 06:56:57'),
(152, 9, 'Profil Resim Değiştirme', '9 -Nolu kullanıcı Tarık ERDEN, resmini değiştirdi.', '2020-06-02 06:59:47'),
(153, 9, 'Profil Şifre Güncelleme', '9 -Nolu kullanıcı Tarık ERDEN, şifresini değiştirdi', '2020-06-02 07:00:00'),
(154, 9, 'Giriş', '9 -Nolu kullanıcı Tarık ERDEN, 78.176.233.168 ip adresi üzerinden giriş yaptı.', '2020-06-02 07:00:16'),
(155, 9, 'Lig Çıkış', '9 -Nolu kullanıcı Tarık ERDEN 3 nolu Borsacılar liginden ayrıldı', '2020-06-02 07:04:01'),
(156, 9, 'Lig Oluşturma', '9 -Nolu kullanıcı Tarık ERDEN 4 nolu sunum 2 ligini oluşturdu.', '2020-06-02 07:04:25'),
(157, 9, 'Lig Silme', '9 -Nolu kullanıcı Tarık ERDEN 4 nolu sunum 2 liginden ayrıldı. Ligin son üyesi olduğundan lig silindi', '2020-06-02 07:05:00'),
(158, 9, 'Lig Çıkış', '9 -Nolu kullanıcı Tarık ERDEN 4 nolu sunum 2 liginden ayrıldı', '2020-06-02 07:05:00'),
(159, 9, 'Giriş', '9 -Nolu kullanıcı Tarık ERDEN, 78.176.233.168 ip adresi üzerinden giriş yaptı.', '2020-06-02 07:10:41'),
(160, 10, 'Giriş', '10 -Nolu kullanıcı Merve Tokat, 81.215.164.130 ip adresi üzerinden giriş yaptı.', '2020-06-02 07:15:09'),
(161, 9, 'Lig Giriş', '9 -Nolu kullanıcı Tarık ERDEN 3 nolu Borsacılar ligine katıldı', '2020-06-02 07:15:14'),
(162, 9, 'Lig Çıkış', '9 -Nolu kullanıcı Tarık ERDEN 3 nolu Borsacılar liginden ayrıldı', '2020-06-02 07:15:25'),
(163, 10, 'Hisse Alım', '10 -Nolu kullanıcı Merve Tokat BIMAS hissesini 64.00 TL tutardan 77 adet aldı. Bu işlem için 14.78 TL komisyon ile 4942.78 TL toplam tutar ödedi.', '2020-06-02 07:15:36'),
(164, 10, 'Hisse Alım', '10 -Nolu kullanıcı Merve Tokat BIMAS hissesini 64.00 TL tutardan 77 adet aldı. Bu işlem için 14.78 TL komisyon ile 4942.78 TL toplam tutar ödedi.', '2020-06-02 07:15:37'),
(165, 9, 'Hisse Alım', '9 -Nolu kullanıcı Tarık ERDEN AEFES hissesini 18.75 TL tutardan 158 adet aldı. Bu işlem için 8.89 TL komisyon ile 2971.39 TL toplam tutar ödedi.', '2020-06-02 07:15:50'),
(166, 9, 'Hisse Alım', '9 -Nolu kullanıcı Tarık ERDEN AFYON hissesini 2.85 TL tutardan 631 adet aldı. Bu işlem için 5.40 TL komisyon ile 1803.75 TL toplam tutar ödedi.', '2020-06-02 07:16:06'),
(167, 9, 'Hisse Alım', '9 -Nolu kullanıcı Tarık ERDEN AFYON hissesini 2.85 TL tutardan 631 adet aldı. Bu işlem için 5.40 TL komisyon ile 1803.75 TL toplam tutar ödedi.', '2020-06-02 07:16:11'),
(168, 10, 'Hisse Satım', '10 -Nolu kullanıcı Merve Tokat BIMAS hissesini 63.90 TL tutardan 39 adet sattı. Bu işlem için 7.48 TL komisyon ödedi. 2484.62 TL toplam tutar aldı.', '2020-06-02 07:16:17'),
(169, 9, 'Hisse Alım', '9 -Nolu kullanıcı Tarık ERDEN ALARK hissesini 5.15 TL tutardan 284 adet aldı. Bu işlem için 4.39 TL komisyon ile 1466.99 TL toplam tutar ödedi.', '2020-06-02 07:16:18'),
(170, 10, 'Hisse Satım', '10 -Nolu kullanıcı Merve Tokat BIMAS hissesini 63.90 TL tutardan 39 adet sattı. Bu işlem için 7.48 TL komisyon ödedi. 2484.62 TL toplam tutar aldı.', '2020-06-02 07:16:28'),
(171, 10, 'Hisse Satım', '10 -Nolu kullanıcı Merve Tokat BIMAS hissesini 63.90 TL tutardan 39 adet sattı. Bu işlem için 7.48 TL komisyon ödedi. 2484.62 TL toplam tutar aldı.', '2020-06-02 07:16:36'),
(172, 10, 'Hisse Satım', '10 -Nolu kullanıcı Merve Tokat BIMAS hissesini 63.90 TL tutardan 19 adet sattı. Bu işlem için 3.64 TL komisyon ödedi. 1210.46 TL toplam tutar aldı.', '2020-06-02 07:16:46'),
(173, 9, 'Hisse Satım', '9 -Nolu kullanıcı Tarık ERDEN AFYON hissesini 2.85 TL tutardan 316 adet sattı. Bu işlem için 2.7 TL komisyon ödedi. 897.9 TL toplam tutar aldı.', '2020-06-02 07:16:52'),
(174, 10, 'Lig Giriş', '10 -Nolu kullanıcı Merve Tokat 3 nolu Borsacılar ligine katıldı', '2020-06-02 07:17:35'),
(175, 10, 'Hisse Alım', '10 -Nolu kullanıcı Merve Tokat ANELE hissesini 3.91 TL tutardan 1119 adet aldı. Bu işlem için 13.13 TL komisyon ile 4388.42 TL toplam tutar ödedi.', '2020-06-02 07:18:27'),
(176, 10, 'Profil Resim Değiştirme', '10 -Nolu kullanıcı Merve Tokat, resmini değiştirdi.', '2020-06-02 07:19:48'),
(177, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-02 07:38:17'),
(178, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.64 TL tutardan 1 adet aldı. Bu işlem için 0.00 TL komisyon ile 0.64 TL toplam tutar ödedi.', '2020-06-02 07:40:54'),
(179, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.64 TL tutardan 1 adet sattı. Bu işlem için 0 TL komisyon ödedi. 0.64 TL toplam tutar aldı.', '2020-06-02 07:41:04'),
(180, 10, 'Hisse Alım', '10 -Nolu kullanıcı Merve Tokat HURGZ hissesini 1.66 TL tutardan 1318 adet aldı. Bu işlem için 6.56 TL komisyon ile 2194.44 TL toplam tutar ödedi.', '2020-06-02 07:42:50'),
(181, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-02 07:55:01'),
(182, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-02 08:37:19'),
(183, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-02 10:20:02'),
(184, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AFYON hissesini 2.86 TL tutardan 3 adet aldı. Bu işlem için 0.03 TL komisyon ile 8.61 TL toplam tutar ödedi.', '2020-06-02 10:21:19'),
(185, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-03 09:01:42'),
(186, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-03 09:34:40'),
(187, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-03 09:45:30'),
(188, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-03 09:55:54'),
(189, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-03 09:56:12'),
(190, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-03 09:57:53'),
(191, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-03 09:58:44'),
(192, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-03 10:02:15'),
(193, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AFYON hissesini 3.01 TL tutardan 3 adet sattı. Bu işlem için 0.03 TL komisyon ödedi. 9.00 TL toplam tutar aldı.', '2020-06-03 10:02:37'),
(194, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-04 13:00:39'),
(195, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-04 13:00:58'),
(196, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 46.221.225.131 ip adresi üzerinden giriş yaptı.', '2020-06-06 21:43:25'),
(197, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER TLMAN hissesini 14.23 TL tutardan 724 adet sattı. Bu işlem için 30.91 TL komisyon ödedi. 10271.61 TL toplam tutar aldı.', '2020-06-06 21:43:40'),
(198, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER SKBNK hissesini 1.24 TL tutardan 8267 adet aldı. Bu işlem için 30.75 TL komisyon ile 10281.83 TL toplam tutar ödedi.', '2020-06-06 21:45:49'),
(199, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 193.109.85.12 ip adresi üzerinden giriş yaptı.', '2020-06-07 17:42:46'),
(200, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-08 07:59:05'),
(201, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER SKBNK hissesini 1.25 TL tutardan 8267 adet sattı. Bu işlem için 31.00 TL komisyon ödedi. 10302.75 TL toplam tutar aldı.', '2020-06-08 07:59:35'),
(202, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER EKGYO hissesini 1.71 TL tutardan 6007 adet aldı. Bu işlem için 30.82 TL komisyon ile 10302.79 TL toplam tutar ödedi.', '2020-06-08 08:00:15'),
(203, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.65 TL tutardan 1 adet aldı. Bu işlem için 0 TL komisyon ile 0.65 TL toplam tutar ödedi.', '2020-06-08 08:00:47'),
(204, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.65 TL tutardan 1 adet aldı. Bu işlem için 0 TL komisyon ile 0.65 TL toplam tutar ödedi.', '2020-06-08 08:00:58'),
(205, 14, 'Pasife Alma', '1 -Nolu Yönetici ,14 nolu Kullanıcı olan aliali i2020-06-08 08:03:07 de 1 günlüğüne pasife aldı', '2020-06-08 08:03:07'),
(206, 8, 'Pasife Alma', '1 -Nolu Yönetici ,8 nolu Kullanıcı olan haydarbulut i2020-06-08 08:03:21 de 1 günlüğüne pasife aldı', '2020-06-08 08:03:21'),
(207, 5, 'Yönetici Yetkisi Alma', '1 -Nolu Yönetici ,5 id li kullanıcının yönetici yetkisini aldı.', '2020-06-08 08:03:56'),
(208, 5, 'Yönetici Yetkisi Verme', '1 -Nolu Yönetici ,5 id li kullanıcıya yönetici yetkisi verdi.', '2020-06-08 08:04:00'),
(209, 5, 'Yönetici Yetkisi Alma', '1 -Nolu Yönetici ,5 id li kullanıcının yönetici yetkisini aldı.', '2020-06-08 08:04:06'),
(210, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-08 10:11:45'),
(211, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER EKGYO hissesini 1.73 TL tutardan 6007 adet sattı. Bu işlem için 31.18 TL komisyon ödedi. 10360.93 TL toplam tutar aldı.', '2020-06-08 10:13:32'),
(212, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER BIZIM hissesini 15.53 TL tutardan 143 adet aldı. Bu işlem için 6.66 TL komisyon ile 2227.45 TL toplam tutar ödedi.', '2020-06-08 10:14:08'),
(213, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER GUBRF hissesini 25.78 TL tutardan 92 adet aldı. Bu işlem için 7.12 TL komisyon ile 2378.88 TL toplam tutar ödedi.', '2020-06-08 10:14:22'),
(214, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER GSRAY hissesini 3.65 TL tutardan 457 adet aldı. Bu işlem için 5.00 TL komisyon ile 1673.05 TL toplam tutar ödedi.', '2020-06-08 10:14:36'),
(215, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER TTRAK hissesini 66.70 TL tutardan 61 adet aldı. Bu işlem için 12.21 TL komisyon ile 4080.91 TL toplam tutar ödedi.', '2020-06-08 10:14:48'),
(216, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.66 TL tutardan 1 adet sattı. Bu işlem için 0 TL komisyon ödedi. 0.66 TL toplam tutar aldı.', '2020-06-08 10:15:19'),
(217, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.66 TL tutardan 1 adet sattı. Bu işlem için 0 TL komisyon ödedi. 0.66 TL toplam tutar aldı.', '2020-06-08 10:15:31'),
(218, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER ZOREN hissesini 1.57 TL tutardan 1 adet aldı. Bu işlem için 0 TL komisyon ile 1.57 TL toplam tutar ödedi.', '2020-06-08 10:24:09'),
(219, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-08 10:45:37'),
(220, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER BIZIM hissesini 15.79 TL tutardan 143 adet sattı. Bu işlem için 6.77 TL komisyon ödedi. 2251.20 TL toplam tutar aldı.', '2020-06-08 10:46:01'),
(221, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER KLGYO hissesini 4.03 TL tutardan 557 adet aldı. Bu işlem için 6.73 TL komisyon ile 2251.44 TL toplam tutar ödedi.', '2020-06-08 10:47:57'),
(222, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER TTRAK hissesini 67.60 TL tutardan 61 adet sattı. Bu işlem için 12.37 TL komisyon ödedi. 4111.23 TL toplam tutar aldı.', '2020-06-08 11:07:59'),
(223, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER SNGYO hissesini 1.22 TL tutardan 3359 adet aldı. Bu işlem için 12.29 TL komisyon ile 4110.27 TL toplam tutar ödedi.', '2020-06-08 11:08:49'),
(224, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.65 TL tutardan 1 adet aldı. Bu işlem için 0 TL komisyon ile 0.65 TL toplam tutar ödedi.', '2020-06-08 11:13:37'),
(225, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.65 TL tutardan 1 adet aldı. Bu işlem için 0 TL komisyon ile 0.65 TL toplam tutar ödedi.', '2020-06-08 11:13:48'),
(226, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-08 11:16:22'),
(227, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER GSRAY hissesini 3.68 TL tutardan 457 adet sattı. Bu işlem için 5.05 TL komisyon ödedi. 1676.71 TL toplam tutar aldı.', '2020-06-08 11:17:45'),
(228, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER SNGYO hissesini 1.23 TL tutardan 3359 adet sattı. Bu işlem için 12.39 TL komisyon ödedi. 4119.18 TL toplam tutar aldı.', '2020-06-08 11:18:56'),
(229, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-08 12:30:11'),
(230, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER KLGYO hissesini 4.07 TL tutardan 557 adet sattı. Bu işlem için 6.80 TL komisyon ödedi. 2260.19 TL toplam tutar aldı.', '2020-06-08 12:35:23'),
(231, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER SNGYO hissesini 1.24 TL tutardan 1033 adet aldı. Bu işlem için 3.84 TL komisyon ile 1284.76 TL toplam tutar ödedi.', '2020-06-08 12:36:10'),
(232, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER PETKM hissesini 3.84 TL tutardan 1758 adet aldı. Bu işlem için 20.25 TL komisyon ile 6770.97 TL toplam tutar ödedi.', '2020-06-08 12:38:01'),
(233, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER ZOREN hissesini 1.58 TL tutardan 1 adet sattı. Bu işlem için 0 TL komisyon ödedi. 1.58 TL toplam tutar aldı.', '2020-06-08 12:38:28'),
(234, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-08 13:07:05'),
(235, 1, 'Lig Çıkış', '1 -Nolu kullanıcı CELAL KUTLUER 3 nolu Borsacılar liginden ayrıldı', '2020-06-08 13:08:07'),
(236, 1, 'Lig Oluşturma', '1 -Nolu kullanıcı CELAL KUTLUER 5 nolu Hisselere Fısıldayanlar ligini oluşturdu.', '2020-06-08 13:09:51'),
(237, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER SNGYO hissesini 1.26 TL tutardan 1033 adet sattı. Bu işlem için 3.90 TL komisyon ödedi. 1297.68 TL toplam tutar aldı.', '2020-06-08 13:12:15'),
(238, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER SNGYO hissesini 1.27 TL tutardan 1019 adet aldı. Bu işlem için 3.88 TL komisyon ile 1298.01 TL toplam tutar ödedi.', '2020-06-08 13:13:17'),
(239, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 46.155.58.243 ip adresi üzerinden giriş yaptı.', '2020-06-08 16:11:43'),
(240, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-09 06:13:49'),
(241, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-09 07:43:54'),
(242, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-09 07:43:54'),
(243, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-09 08:31:41'),
(244, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-09 10:03:48'),
(245, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.65 TL tutardan 1 adet sattı. Bu işlem için 0 TL komisyon ödedi. 0.65 TL toplam tutar aldı.', '2020-06-09 10:41:20'),
(246, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.65 TL tutardan 1 adet sattı. Bu işlem için 0 TL komisyon ödedi. 0.65 TL toplam tutar aldı.', '2020-06-09 10:41:31'),
(247, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-09 12:18:36'),
(248, 11, 'Giriş', '11 -Nolu kullanıcı Mahmut Tuncer, 193.109.85.10 ip adresi üzerinden giriş yaptı.', '2020-06-09 17:32:12'),
(249, 11, 'Profil Resim Değiştirme', '11 -Nolu kullanıcı Mahmut Tuncer, resmini değiştirdi.', '2020-06-09 17:32:32'),
(250, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 193.109.85.10 ip adresi üzerinden giriş yaptı.', '2020-06-09 17:35:11'),
(251, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-10 05:34:12'),
(252, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-10 06:15:39'),
(253, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-10 07:34:01'),
(254, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER HURGZ hissesini 1.52 TL tutardan 1 adet aldı. Bu işlem için 0 TL komisyon ile 1.52 TL toplam tutar ödedi.', '2020-06-10 07:34:53'),
(255, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER HURGZ hissesini 1.52 TL tutardan 1 adet aldı. Bu işlem için 0 TL komisyon ile 1.52 TL toplam tutar ödedi.', '2020-06-10 07:35:09'),
(256, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-10 08:32:32'),
(257, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-10 09:29:51'),
(258, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-10 10:41:10'),
(259, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-10 12:33:14'),
(260, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 107.181.177.139 ip adresi üzerinden giriş yaptı.', '2020-06-10 14:34:11'),
(261, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 107.181.177.139 ip adresi üzerinden giriş yaptı.', '2020-06-10 14:34:11'),
(262, 11, 'Ödül_haftalik_kullanici', '11 -Nolu kullanıcı üstün bir başarı göstererek haftalik_kullanici sıralamasında 1.\n olarak 800 ödül kazandı', '2020-06-10 14:36:20'),
(263, 1, 'Ödül_haftalik_kullanici', '1 -Nolu kullanıcı üstün bir başarı göstererek haftalik_kullanici sıralamasında 2.\n olarak 400 ödül kazandı', '2020-06-10 14:36:20'),
(264, 9, 'Ödül_haftalik_kullanici', '9 -Nolu kullanıcı üstün bir başarı göstererek haftalik_kullanici sıralamasında 3.\n olarak 200 ödül kazandı', '2020-06-10 14:36:20'),
(265, 10, 'Ödül_haftalik_kullanici', '10 -Nolu kullanıcı üstün bir başarı göstererek haftalik_kullanici sıralamasında 4.\n olarak 150 ödül kazandı', '2020-06-10 14:36:20'),
(266, 1, 'Ödül_aylik_kullanici', '1 -Nolu kullanıcı üstün bir başarı göstererek aylik_kullanici sıralamasında 1.\n olarak 800 ödül kazandı', '2020-06-10 14:36:20'),
(267, 1, 'Ödül_haftalik_lig', '1 -Nolu kullanıcı üstün bir başarı göstererek haftalik_lig sıralamasında 1.\n olarak 900 ödül kazandı', '2020-06-10 14:36:20'),
(268, 10, 'Ödül_haftalik_lig', '10 -Nolu kullanıcı üstün bir başarı göstererek haftalik_lig sıralamasında 2.\n olarak 500 ödül kazandı', '2020-06-10 14:36:20'),
(269, 11, 'Ödül_haftalik_lig', '11 -Nolu kullanıcı üstün bir başarı göstererek haftalik_lig sıralamasında 2.\n olarak 400 ödül kazandı', '2020-06-10 14:36:20'),
(270, 1, 'Ödül_aylik_lig', '1 -Nolu kullanıcı üstün bir başarı göstererek aylik_lig sıralamasında 1.\n olarak 900 ödül kazandı', '2020-06-10 14:36:20'),
(271, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER HURGZ hissesini 1.52 TL tutardan 1967 adet aldı. Bu işlem için 8.97 TL komisyon ile 2998.81 TL toplam tutar ödedi.', '2020-06-10 14:40:09'),
(272, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-11 05:43:22'),
(273, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-11 08:16:32'),
(274, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER SNGYO hissesini 1.29 TL tutardan 1019 adet sattı. Bu işlem için 3.94 TL komisyon ödedi. 1310.57 TL toplam tutar aldı.', '2020-06-11 08:17:17'),
(275, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-11 08:25:14'),
(276, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 19.53 TL tutardan 1 adet aldı. Bu işlem için 0.06 TL komisyon ile 19.59 TL toplam tutar ödedi.', '2020-06-11 08:25:24'),
(277, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER AEFES hissesini 19.53 TL tutardan 1 adet sattı. Bu işlem için 0.06 TL komisyon ödedi. 19.47 TL toplam tutar aldı.', '2020-06-11 08:25:37'),
(278, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-11 10:36:25'),
(279, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER PETKM hissesini 3.88 TL tutardan 1758 adet sattı. Bu işlem için 20.46 TL komisyon ödedi. 6800.58 TL toplam tutar aldı.', '2020-06-11 10:37:37'),
(280, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER GARAN hissesini 8.11 TL tutardan 997 adet aldı. Bu işlem için 24.26 TL komisyon ile 8109.93 TL toplam tutar ödedi.', '2020-06-11 10:42:21'),
(281, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER EKGYO hissesini 1.97 TL tutardan 1 adet aldı. Bu işlem için 0.01 TL komisyon ile 1.98 TL toplam tutar ödedi.', '2020-06-11 10:56:09'),
(282, 15, 'Üyelik Kaydı', '15 -Nolu kullanıcı merve2 merve2, 81.215.169.208 ip adresi üzerinden 16008116062@ogr.bozok.edu.tr e-posta adresi ile üyelik başvurusunda bulundu.', '2020-06-11 15:07:13'),
(283, 15, 'Giriş', '15 -Nolu kullanıcı merve2 merve2, 81.215.169.208 ip adresi üzerinden giriş yaptı.', '2020-06-11 15:13:32'),
(284, 10, 'Giriş', '10 -Nolu kullanıcı Merve Tokat, 81.215.169.208 ip adresi üzerinden giriş yaptı.', '2020-06-11 15:14:23'),
(285, 15, 'Giriş', '15 -Nolu kullanıcı merve2 merve2, 81.215.169.208 ip adresi üzerinden giriş yaptı.', '2020-06-11 15:15:06'),
(286, 15, 'Profil Bilgi Güncelleme', '15 -Nolu kullanıcı merve2 merve2, soyadını merve olarak değiştirdi', '2020-06-11 15:29:25'),
(287, 15, 'Profil Şifre Güncelleme', '15 -Nolu kullanıcı merve2 merve2, şifresini değiştirdi', '2020-06-11 15:32:13'),
(288, 15, 'Profil Resim Değiştirme', '15 -Nolu kullanıcı merve2 merve2, resmini değiştirdi.', '2020-06-11 15:37:17'),
(289, 10, 'Giriş', '10 -Nolu kullanıcı Merve Tokat, 81.215.169.208 ip adresi üzerinden giriş yaptı.', '2020-06-11 19:30:00'),
(290, 15, 'Giriş', '15 -Nolu kullanıcı merve2 merve, 81.215.169.208 ip adresi üzerinden giriş yaptı.', '2020-06-11 19:34:40'),
(291, 15, 'Lig Giriş', '15 -Nolu kullanıcı merve2 merve 5 nolu Hisselere Fısıldayanlar ligine katıldı', '2020-06-11 19:35:04'),
(292, 15, 'Lig Çıkış', '15 -Nolu kullanıcı merve2 merve 5 nolu Hisselere Fısıldayanlar liginden ayrıldı', '2020-06-11 19:38:33'),
(293, 15, 'Lig Giriş', '15 -Nolu kullanıcı merve2 merve 5 nolu Hisselere Fısıldayanlar ligine katıldı', '2020-06-11 19:38:37'),
(294, 15, 'Lig Çıkış', '15 -Nolu kullanıcı merve2 merve 5 nolu Hisselere Fısıldayanlar liginden ayrıldı', '2020-06-11 19:38:52'),
(295, 15, 'Lig Oluşturma', '15 -Nolu kullanıcı merve2 merve 6 nolu bir ligini oluşturdu.', '2020-06-11 19:39:19'),
(296, 15, 'Lig Silme', '15 -Nolu kullanıcı merve2 merve 6 nolu bir liginden ayrıldı. Ligin son üyesi olduğundan lig silindi', '2020-06-11 19:54:12'),
(297, 15, 'Lig Çıkış', '15 -Nolu kullanıcı merve2 merve 6 nolu bir liginden ayrıldı', '2020-06-11 19:54:12'),
(298, 15, 'Lig Oluşturma', '15 -Nolu kullanıcı merve2 merve 7 nolu bir nolu lig ligini oluşturdu.', '2020-06-11 19:56:10'),
(299, 15, 'Lig Silme', '15 -Nolu kullanıcı merve2 merve 7 nolu bir nolu lig liginden ayrıldı. Ligin son üyesi olduğundan lig silindi', '2020-06-11 19:56:15'),
(300, 15, 'Lig Çıkış', '15 -Nolu kullanıcı merve2 merve 7 nolu bir nolu lig liginden ayrıldı', '2020-06-11 19:56:15'),
(301, 15, 'Lig Oluşturma', '15 -Nolu kullanıcı merve2 merve 8 nolu bir nolu lig ligini oluşturdu.', '2020-06-11 19:56:25'),
(302, 15, 'Hisse Alım', '15 -Nolu kullanıcı merve2 merve AEFES hissesini 19.37 TL tutardan 257 adet aldı. Bu işlem için 14.93 TL komisyon ile 4993.02 TL toplam tutar ödedi.', '2020-06-11 20:08:33'),
(303, 15, 'Hisse Alım', '15 -Nolu kullanıcı merve2 merve AEFES hissesini 19.37 TL tutardan 257 adet aldı. Bu işlem için 14.93 TL komisyon ile 4993.02 TL toplam tutar ödedi.', '2020-06-11 20:08:34'),
(304, 15, 'Hisse Alım', '15 -Nolu kullanıcı merve2 merve AKBNK hissesini 5.80 TL tutardan 1 adet aldı. Bu işlem için 0.02 TL komisyon ile 5.82 TL toplam tutar ödedi.', '2020-06-11 20:08:47'),
(305, 15, 'Hisse Satım', '15 -Nolu kullanıcı merve2 merve AEFES hissesini 19.37 TL tutardan 257 adet sattı. Bu işlem için 14.93 TL komisyon ödedi. 4963.16 TL toplam tutar aldı.', '2020-06-11 20:08:58'),
(306, 15, 'Hisse Satım', '15 -Nolu kullanıcı merve2 merve AEFES hissesini 19.37 TL tutardan 257 adet sattı. Bu işlem için 14.93 TL komisyon ödedi. 4963.16 TL toplam tutar aldı.', '2020-06-11 20:09:00'),
(307, 15, 'Hisse Satım', '15 -Nolu kullanıcı merve2 merve AKBNK hissesini 5.80 TL tutardan 1 adet sattı. Bu işlem için 0.02 TL komisyon ödedi. 5.78 TL toplam tutar aldı.', '2020-06-11 20:09:11'),
(308, 15, 'Hisse Alım', '15 -Nolu kullanıcı merve2 merve AKSA hissesini 6.78 TL tutardan 730 adet aldı. Bu işlem için 14.85 TL komisyon ile 4964.25 TL toplam tutar ödedi.', '2020-06-11 20:09:23'),
(309, 15, 'Hisse Alım', '15 -Nolu kullanıcı merve2 merve BIZIM hissesini 18.45 TL tutardan 134 adet aldı. Bu işlem için 7.42 TL komisyon ile 2479.72 TL toplam tutar ödedi.', '2020-06-11 20:09:36'),
(310, 15, 'Hisse Alım', '15 -Nolu kullanıcı merve2 merve ANELE hissesini 4.02 TL tutardan 309 adet aldı. Bu işlem için 3.73 TL komisyon ile 1245.91 TL toplam tutar ödedi.', '2020-06-11 20:09:49'),
(311, 10, 'Giriş', '10 -Nolu kullanıcı Merve Tokat, 81.215.169.208 ip adresi üzerinden giriş yaptı.', '2020-06-11 21:01:25'),
(312, 10, 'Giriş', '10 -Nolu kullanıcı Merve Tokat, 81.215.169.208 ip adresi üzerinden giriş yaptı.', '2020-06-11 21:01:26'),
(313, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-12 06:34:57'),
(314, 1, 'Profil Resim Değiştirme', '1 -Nolu kullanıcı CELAL KUTLUER, resmini değiştirdi.', '2020-06-12 06:54:08'),
(315, 1, 'Profil Resim Değiştirme', '1 -Nolu kullanıcı CELAL KUTLUER, resmini değiştirdi.', '2020-06-12 07:23:49'),
(316, 10, 'Giriş', '10 -Nolu kullanıcı Merve Tokat, 81.215.169.208 ip adresi üzerinden giriş yaptı.', '2020-06-12 10:11:01'),
(317, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-12 10:14:42'),
(318, 11, 'Pasife Alma', '10 -Nolu Yönetici ,11 nolu Kullanıcı olan MahmutTuncer i2020-06-12 10:21:27 de 1 günlüğüne pasife aldı', '2020-06-12 10:21:27'),
(319, 11, 'Yönetici Yetkisi Verme', '10 -Nolu Yönetici ,11 id li kullanıcıya yönetici yetkisi verdi.', '2020-06-12 10:22:58'),
(320, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER GARAN hissesini 8.16 TL tutardan 997 adet sattı. Bu işlem için 24.41 TL komisyon ödedi. 8111.11 TL toplam tutar aldı.', '2020-06-12 10:23:35'),
(321, 11, 'Yönetici Yetkisi Alma', '10 -Nolu Yönetici ,11 id li kullanıcının yönetici yetkisini aldı.', '2020-06-12 10:27:25'),
(322, 11, 'Yönetici Yetkisi Verme', '10 -Nolu Yönetici ,11 id li kullanıcıya yönetici yetkisi verdi.', '2020-06-12 10:27:25'),
(323, 11, 'Yönetici Yetkisi Alma', '10 -Nolu Yönetici ,11 id li kullanıcının yönetici yetkisini aldı.', '2020-06-12 10:28:28'),
(324, 11, 'Yönetici Yetkisi Verme', '10 -Nolu Yönetici ,11 id li kullanıcıya yönetici yetkisi verdi.', '2020-06-12 10:28:49'),
(325, 11, 'Yönetici Yetkisi Alma', '10 -Nolu Yönetici ,11 id li kullanıcının yönetici yetkisini aldı.', '2020-06-12 10:28:49'),
(326, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 95.211.230.211 ip adresi üzerinden giriş yaptı.', '2020-06-12 10:35:23'),
(327, 7, 'Giriş', '7 -Nolu kullanıcı Beyzanur Taşköprü, 88.241.69.16 ip adresi üzerinden giriş yaptı.', '2020-06-13 12:02:48'),
(328, 7, 'Hisse Alım', '7 -Nolu kullanıcı Beyzanur Taşköprü AEFES hissesini 19.38 TL tutardan 144 adet aldı. Bu işlem için 8.37 TL komisyon ile 2799.09 TL toplam tutar ödedi.', '2020-06-13 12:03:02'),
(329, 7, 'Hisse Alım', '7 -Nolu kullanıcı Beyzanur Taşköprü GOODY hissesini 5.23 TL tutardan 119 adet aldı. Bu işlem için 1.87 TL komisyon ile 624.24 TL toplam tutar ödedi.', '2020-06-13 12:03:23'),
(330, 7, 'Lig Oluşturma', '7 -Nolu kullanıcı Beyzanur Taşköprü 9 nolu Beyzaa ligini oluşturdu.', '2020-06-13 12:08:10'),
(331, 7, 'Hisse Alım', '7 -Nolu kullanıcı Beyzanur Taşköprü ANELE hissesini 4.02 TL tutardan 52 adet aldı. Bu işlem için 0.63 TL komisyon ile 209.67 TL toplam tutar ödedi.', '2020-06-13 12:09:01'),
(332, 9, 'Giriş', '9 -Nolu kullanıcı Tarık ERDEN, 81.215.169.131 ip adresi üzerinden giriş yaptı.', '2020-06-13 12:10:16'),
(333, 9, 'Lig Giriş', '9 -Nolu kullanıcı Tarık ERDEN 5 nolu Hisselere Fısıldayanlar ligine katıldı', '2020-06-13 12:10:48'),
(334, 9, 'Hisse Satım', '9 -Nolu kullanıcı Tarık ERDEN AFYON hissesini 2.91 TL tutardan 436 adet sattı. Bu işlem için 3.81 TL komisyon ödedi. 1264.95 TL toplam tutar aldı.', '2020-06-13 12:11:24'),
(335, 9, 'Hisse Alım', '9 -Nolu kullanıcı Tarık ERDEN AEFES hissesini 19.38 TL tutardan 78 adet aldı. Bu işlem için 4.53 TL komisyon ile 1516.17 TL toplam tutar ödedi.', '2020-06-13 12:11:47'),
(336, 9, 'Hisse Satım', '9 -Nolu kullanıcı Tarık ERDEN AEFES hissesini 19.38 TL tutardan 158 adet sattı. Bu işlem için 9.19 TL komisyon ödedi. 3052.85 TL toplam tutar aldı.', '2020-06-13 12:12:05'),
(337, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 109.169.23.85 ip adresi üzerinden giriş yaptı.', '2020-06-14 12:40:51'),
(338, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 109.169.23.85 ip adresi üzerinden giriş yaptı.', '2020-06-14 12:40:51'),
(339, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 109.169.23.85 ip adresi üzerinden giriş yaptı.', '2020-06-14 12:40:51'),
(340, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 23.227.142.146 ip adresi üzerinden giriş yaptı.', '2020-06-14 12:45:25'),
(341, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 23.227.142.146 ip adresi üzerinden giriş yaptı.', '2020-06-14 12:45:25'),
(342, 16, 'Üyelik Kaydı', '16 -Nolu kullanıcı ilkan kizilkaya, 81.213.244.25 ip adresi üzerinden ilkankizilkaya1@outlook.com e-posta adresi ile üyelik başvurusunda bulundu.', '2020-06-14 20:15:41'),
(343, 16, 'Giriş', '16 -Nolu kullanıcı ilkan kizilkaya, 81.213.244.25 ip adresi üzerinden giriş yaptı.', '2020-06-14 20:16:44'),
(344, 16, 'Hisse Alım', '16 -Nolu kullanıcı ilkan kizilkaya AEFES hissesini 19.38 TL tutardan 514 adet aldı. Bu işlem için 29.88 TL komisyon ile 9991.20 TL toplam tutar ödedi.', '2020-06-14 20:17:16'),
(345, 16, 'Profil Resim Değiştirme', '16 -Nolu kullanıcı ilkan kizilkaya, resmini değiştirdi.', '2020-06-14 20:22:21'),
(346, 16, 'Giriş', '16 -Nolu kullanıcı ilkan kizilkaya, 81.213.244.25 ip adresi üzerinden giriş yaptı.', '2020-06-14 20:36:24'),
(347, 16, 'Giriş', '16 -Nolu kullanıcı ilkan kizilkaya, 81.213.244.25 ip adresi üzerinden giriş yaptı.', '2020-06-14 20:37:12'),
(348, 16, 'Profil Resim Değiştirme', '16 -Nolu kullanıcı ilkan kizilkaya, resmini değiştirdi.', '2020-06-14 20:45:35'),
(349, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-15 08:33:49'),
(350, 1, 'Profil Resim Değiştirme', '1 -Nolu kullanıcı CELAL KUTLUER, resmini değiştirdi.', '2020-06-15 08:34:30'),
(351, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER VKGYO hissesini 2.63 TL tutardan 3074 adet aldı. Bu işlem için 24.25 TL komisyon ile 8108.87 TL toplam tutar ödedi.', '2020-06-15 08:34:56'),
(352, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-15 11:29:09'),
(353, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-16 06:12:54'),
(354, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-16 10:02:18'),
(355, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER VKGYO hissesini 2.67 TL tutardan 3074 adet sattı. Bu işlem için 24.62 TL komisyon ödedi. 8182.96 TL toplam tutar aldı.', '2020-06-16 10:03:27'),
(356, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER IHLAS hissesini 0.80 TL tutardan 10200 adet aldı. Bu işlem için 24.48 TL komisyon ile 8184.48 TL toplam tutar ödedi.', '2020-06-16 10:05:42'),
(357, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-16 10:47:13'),
(358, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.90 TL tutardan 1 adet aldı. Bu işlem için 0 TL komisyon ile 0.9 TL toplam tutar ödedi.', '2020-06-16 10:49:04'),
(359, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 46.221.249.184 ip adresi üzerinden giriş yaptı.', '2020-06-16 15:46:28'),
(360, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-17 11:27:02'),
(361, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER IHLAS hissesini 0.81 TL tutardan 10200 adet sattı. Bu işlem için 24.79 TL komisyon ödedi. 8237.21 TL toplam tutar aldı.', '2020-06-17 11:27:34'),
(362, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER IEYHO hissesini 0.94 TL tutardan 1 adet sattı. Bu işlem için 0 TL komisyon ödedi. 0.94 TL toplam tutar aldı.', '2020-06-17 11:28:01'),
(363, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER IHLGM hissesini 1.57 TL tutardan 5231 adet aldı. Bu işlem için 24.64 TL komisyon ile 8237.31 TL toplam tutar ödedi.', '2020-06-17 11:29:31'),
(364, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER IHLAS hissesini 0.82 TL tutardan 1 adet aldı. Bu işlem için 0 TL komisyon ile 0.82 TL toplam tutar ödedi.', '2020-06-17 11:37:53'),
(365, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER IHLAS hissesini 0.81 TL tutardan 1 adet sattı. Bu işlem için 0 TL komisyon ödedi. 0.81 TL toplam tutar aldı.', '2020-06-17 11:38:26'),
(366, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-18 09:14:52'),
(367, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER GUBRF hissesini 26.14 TL tutardan 92 adet sattı. Bu işlem için 7.21 TL komisyon ödedi. 2397.67 TL toplam tutar aldı.', '2020-06-18 09:15:14'),
(368, 1, 'Hisse Satım', '1 -Nolu kullanıcı CELAL KUTLUER IHLGM hissesini 1.60 TL tutardan 5231 adet sattı. Bu işlem için 25.11 TL komisyon ödedi. 8344.49 TL toplam tutar aldı.', '2020-06-18 09:15:34'),
(369, 1, 'Ödül_haftalik_kullanici', '1 -Nolu kullanıcı üstün bir başarı göstererek haftalik_kullanici sıralamasında 1.\n olarak 800 ödül kazandı', '2020-06-18 09:17:56'),
(370, 9, 'Ödül_haftalik_kullanici', '9 -Nolu kullanıcı üstün bir başarı göstererek haftalik_kullanici sıralamasında 2.\n olarak 400 ödül kazandı', '2020-06-18 09:17:56'),
(371, 15, 'Ödül_haftalik_kullanici', '15 -Nolu kullanıcı üstün bir başarı göstererek haftalik_kullanici sıralamasında 3.\n olarak 200 ödül kazandı', '2020-06-18 09:17:56'),
(372, 1, 'Ödül_haftalik_lig', '1 -Nolu kullanıcı üstün bir başarı göstererek haftalik_lig sıralamasında 1.\n olarak 900 ödül kazandı', '2020-06-18 09:17:56'),
(373, 9, 'Ödül_haftalik_lig', '9 -Nolu kullanıcı üstün bir başarı göstererek haftalik_lig sıralamasında 1.\n olarak 800 ödül kazandı', '2020-06-18 09:17:56'),
(374, 15, 'Ödül_haftalik_lig', '15 -Nolu kullanıcı üstün bir başarı göstererek haftalik_lig sıralamasında 2.\n olarak 500 ödül kazandı', '2020-06-18 09:17:56'),
(375, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER KARSN hissesini 2.44 TL tutardan 5084 adet aldı. Bu işlem için 37.21 TL komisyon ile 12442.17 TL toplam tutar ödedi.', '2020-06-18 09:18:36'),
(376, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 212.156.81.250 ip adresi üzerinden giriş yaptı.', '2020-06-19 11:23:44'),
(377, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 176.55.49.136 ip adresi üzerinden giriş yaptı.', '2020-06-19 16:26:38');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
                            `msj_id` int(11) NOT NULL,
                            `msj_ad` text COLLATE utf8_turkish_ci DEFAULT NULL,
                            `msj_soyad` text COLLATE utf8_turkish_ci DEFAULT NULL,
                            `msj_eposta` text COLLATE utf8_turkish_ci DEFAULT NULL,
                            `msj_text` text COLLATE utf8_turkish_ci DEFAULT NULL,
                            `msj_kul_id` int(11) DEFAULT NULL,
                            `msj_okundumu` tinyint(4) DEFAULT NULL,
                            `msj_okuyan_id` int(11) DEFAULT NULL,
                            `msj_zaman` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`msj_id`, `msj_ad`, `msj_soyad`, `msj_eposta`, `msj_text`, `msj_kul_id`, `msj_okundumu`, `msj_okuyan_id`, `msj_zaman`) VALUES
(1, 'Celal', 'KUTLUER', 'celalkutluer@gmail.com', 'Deneme', NULL, NULL, NULL, '2020-06-07 18:03:01'),
(2, 'Celal', 'KUTLUER', 'celalkutluer@gmail.com', 'Deneme', NULL, NULL, NULL, '2020-06-08 12:33:35'),
(3, 'Celal', 'KUTLUER', 'celal@c.c', 'Deneme Mesajıdır Dikkate Almayınız.', NULL, NULL, NULL, '2020-06-11 08:26:29'),
(4, 'merve', 'tokat', '16008116062@ogr.bozok.edu.tr', 'İletişim sayfasını test ediyorum eger çalışıyorsa geri dönüş yapınız', NULL, 1, 10, '2020-06-11 15:00:24'),
(5, 'Celal', 'KUTLUER', 'celal@c.c', 'hi', NULL, NULL, NULL, '2020-06-16 15:47:52');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `oduller`
--

CREATE TABLE `oduller` (
                           `odul_id` int(11) NOT NULL,
                           `odul_uye_id` int(11) DEFAULT NULL,
                           `odul_uye_miktar` smallint(6) DEFAULT NULL,
                           `odul_uye_sira` tinyint(4) DEFAULT NULL,
                           `odul_sira_para` text COLLATE utf8_turkish_ci DEFAULT NULL,
                           `odul_tur` varchar(25) COLLATE utf8_turkish_ci DEFAULT NULL,
                           `odul_zaman` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `oduller`
--

INSERT INTO `oduller` (`odul_id`, `odul_uye_id`, `odul_uye_miktar`, `odul_uye_sira`, `odul_sira_para`, `odul_tur`, `odul_zaman`) VALUES
(23, 11, 800, 1, '-0.02', 'haftalik_kullanici', '2020-06-10 14:36:20'),
(24, 1, 400, 2, '-0.02', 'haftalik_kullanici', '2020-06-10 14:36:20'),
(25, 9, 200, 3, '-5.40', 'haftalik_kullanici', '2020-06-10 14:36:20'),
(26, 10, 150, 4, '-18.87', 'haftalik_kullanici', '2020-06-10 14:36:20'),
(27, 1, 800, 1, '-0.10', 'aylik_kullanici', '2020-06-10 14:36:20'),
(28, 1, 900, 1, '91.04', 'haftalik_lig', '2020-06-10 14:36:20'),
(29, 10, 500, 2, '-65.82', 'haftalik_lig', '2020-06-10 14:36:20'),
(30, 11, 400, 2, '-65.82', 'haftalik_lig', '2020-06-10 14:36:20'),
(31, 1, 900, 1, '192.49', 'aylik_lig', '2020-06-10 14:36:20'),
(32, 1, 800, 1, '20.92', 'haftalik_kullanici', '2020-06-18 09:17:56'),
(33, 9, 400, 2, '18.62', 'haftalik_kullanici', '2020-06-18 09:17:56'),
(34, 15, 200, 3, '-29.86', 'haftalik_kullanici', '2020-06-18 09:17:56'),
(35, 1, 900, 1, '310.71', 'haftalik_lig', '2020-06-18 09:17:56'),
(36, 9, 800, 1, '310.71', 'haftalik_lig', '2020-06-18 09:17:56'),
(37, 15, 500, 2, '-59.76', 'haftalik_lig', '2020-06-18 09:17:56');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sabitler`
--

CREATE TABLE `sabitler` (
                            `id` int(5) NOT NULL,
                            `sabit_ad` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
                            `sabit_deger` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sabitler`
--

INSERT INTO `sabitler` (`id`, `sabit_ad`, `sabit_deger`) VALUES
(1, 'komisyon', '1.003');

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
(38, 1, 'AEFES', 17.17, 0.05, 1, -0.10, 17.12, '2020-05-18 21:06:15'),
(39, 1, 'AEFES', 17.17, 14.94, 290, -29.88, 4964.36, '2020-05-18 21:06:27'),
(40, 1, 'AEFES', 17.17, 14.89, 289, -29.78, 4947.24, '2020-05-18 21:07:21'),
(41, 1, 'DEVA', 18.05, 29.73, 549, -59.46, 9879.72, '2020-05-19 20:32:05'),
(42, 1, 'DEVA', 18.20, 30.90, 566, 392.35, 10270.30, '2020-05-20 09:37:27'),
(43, 1, 'PGSUS', 53.15, 30.61, 192, -80.48, 10174.19, '2020-05-21 16:25:46'),
(44, 1, 'AKBNK', 5.52, 0.02, 1, -0.04, 5.50, '2020-05-25 17:54:25'),
(45, 1, 'AFYON', 2.75, 0.01, 1, -0.03, 2.74, '2020-05-28 10:26:21'),
(46, 1, 'IEYHO', 0.63, 0.00, 1, -0.02, 0.63, '2020-05-29 06:46:59'),
(47, 1, 'IEYHO', 0.63, 0.00, 1, -0.02, 0.63, '2020-05-31 14:24:11'),
(48, 1, 'IEYHO', 0.63, 0.00, 1, -0.02, 0.63, '2020-05-31 14:54:10'),
(49, 1, 'AFYON', 2.75, 0.01, 1, -0.03, 2.74, '2020-05-31 14:54:26'),
(50, 11, 'AFYON', 2.82, 0.01, 1, -0.02, 2.81, '2020-06-01 19:07:46'),
(51, 1, 'AFYON', 2.82, 0.01, 1, 0.04, 2.81, '2020-06-01 19:09:31'),
(52, 1, 'IEYHO', 0.64, 0.00, 1, -0.01, 0.64, '2020-06-01 19:09:55'),
(53, 1, 'IEYHO', 0.64, 0.00, 1, 0.01, 0.64, '2020-06-01 21:48:51'),
(54, 10, 'BIMAS', 63.90, 7.48, 39, -18.87, 2484.62, '2020-06-02 07:16:17'),
(55, 10, 'BIMAS', 63.90, 7.48, 39, -18.87, 2484.62, '2020-06-02 07:16:28'),
(56, 10, 'BIMAS', 63.90, 7.48, 39, -18.87, 2484.62, '2020-06-02 07:16:36'),
(57, 10, 'BIMAS', 63.90, 3.64, 19, -9.19, 1210.46, '2020-06-02 07:16:46'),
(58, 9, 'AFYON', 2.85, 2.70, 316, -5.40, 897.90, '2020-06-02 07:16:52'),
(59, 1, 'IEYHO', 0.64, 0.00, 1, 0.00, 0.64, '2020-06-02 07:41:04'),
(60, 1, 'AFYON', 3.01, 0.03, 3, 0.39, 9.00, '2020-06-03 10:02:37'),
(61, 1, 'TLMAN', 14.23, 30.91, 724, 90.68, 10271.61, '2020-06-06 21:43:40'),
(62, 1, 'SKBNK', 1.25, 31.00, 8267, 20.92, 10302.75, '2020-06-08 07:59:35'),
(63, 1, 'EKGYO', 1.73, 31.18, 6007, 58.14, 10360.93, '2020-06-08 10:13:32'),
(64, 1, 'IEYHO', 0.66, 0.00, 1, 0.01, 0.66, '2020-06-08 10:15:19'),
(65, 1, 'IEYHO', 0.66, 0.00, 1, 0.01, 0.66, '2020-06-08 10:15:31'),
(66, 1, 'BIZIM', 15.79, 6.77, 143, 23.75, 2251.20, '2020-06-08 10:46:01'),
(67, 1, 'TTRAK', 67.60, 12.37, 61, 30.32, 4111.23, '2020-06-08 11:07:59'),
(68, 1, 'GSRAY', 3.68, 5.05, 457, 3.66, 1676.71, '2020-06-08 11:17:45'),
(69, 1, 'SNGYO', 1.23, 12.39, 3359, 8.91, 4119.18, '2020-06-08 11:18:56'),
(70, 1, 'KLGYO', 4.07, 6.80, 557, 8.75, 2260.19, '2020-06-08 12:35:23'),
(71, 1, 'ZOREN', 1.58, 0.00, 1, 0.01, 1.58, '2020-06-08 12:38:28'),
(72, 1, 'SNGYO', 1.26, 3.90, 1033, 12.92, 1297.68, '2020-06-08 13:12:15'),
(73, 1, 'IEYHO', 0.65, 0.00, 1, 0.00, 0.65, '2020-06-09 10:41:20'),
(74, 1, 'IEYHO', 0.65, 0.00, 1, 0.00, 0.65, '2020-06-09 10:41:31'),
(75, 1, 'SNGYO', 1.29, 3.94, 1019, 12.56, 1310.57, '2020-06-11 08:17:17'),
(76, 1, 'AEFES', 19.53, 0.06, 1, -0.12, 19.47, '2020-06-11 08:25:37'),
(77, 1, 'PETKM', 3.88, 20.46, 1758, 29.61, 6800.58, '2020-06-11 10:37:37'),
(78, 15, 'AEFES', 19.37, 14.93, 257, -29.86, 4963.16, '2020-06-11 20:08:58'),
(79, 15, 'AEFES', 19.37, 14.93, 257, -29.86, 4963.16, '2020-06-11 20:09:00'),
(80, 15, 'AKBNK', 5.80, 0.02, 1, -0.04, 5.78, '2020-06-11 20:09:11'),
(81, 1, 'GARAN', 8.16, 24.41, 997, 1.18, 8111.11, '2020-06-12 10:23:35'),
(82, 9, 'AFYON', 2.91, 3.81, 436, 18.62, 1264.95, '2020-06-13 12:11:24'),
(83, 9, 'AEFES', 19.38, 9.19, 158, 81.46, 3052.85, '2020-06-13 12:12:05'),
(84, 1, 'VKGYO', 2.67, 24.62, 3074, 74.09, 8182.96, '2020-06-16 10:03:27'),
(85, 1, 'IHLAS', 0.81, 24.79, 10200, 52.73, 8237.21, '2020-06-17 11:27:34'),
(86, 1, 'IEYHO', 0.94, 0.00, 1, 0.04, 0.94, '2020-06-17 11:28:01'),
(87, 1, 'IHLAS', 0.81, 0.00, 1, -0.01, 0.81, '2020-06-17 11:38:26'),
(88, 1, 'GUBRF', 26.14, 7.21, 92, 18.79, 2397.67, '2020-06-18 09:15:14'),
(89, 1, 'IHLGM', 1.60, 25.11, 5231, 107.18, 8344.49, '2020-06-18 09:15:34');

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
(12, 1, 'AEFES', 581, 581, 0, '2020-05-18 21:06:00'),
(13, 1, 'DEVA', 1115, 1115, 0, '2020-05-18 23:34:00'),
(14, 1, 'PGSUS', 192, 192, 0, '2020-05-20 09:40:58'),
(15, 6, 'AEFES', 570, 0, 570, '2020-05-21 23:02:37'),
(16, 1, 'TLMAN', 724, 724, 0, '2020-05-25 12:45:24'),
(17, 1, 'AKBNK', 1, 1, 0, '2020-05-25 17:54:03'),
(18, 1, 'AFYON', 6, 6, 0, '2020-05-27 15:36:07'),
(19, 1, 'IEYHO', 11, 11, 0, '2020-05-27 15:36:30'),
(20, 11, 'AFYON', 3535, 1, 3534, '2020-06-01 19:07:27'),
(21, 10, 'BIMAS', 154, 136, 18, '2020-06-02 07:15:36'),
(22, 9, 'AEFES', 236, 158, 78, '2020-06-02 07:15:50'),
(23, 9, 'AFYON', 1262, 752, 510, '2020-06-02 07:16:06'),
(24, 9, 'ALARK', 284, 0, 284, '2020-06-02 07:16:18'),
(25, 10, 'ANELE', 1119, 0, 1119, '2020-06-02 07:18:27'),
(26, 10, 'HURGZ', 1318, 0, 1318, '2020-06-02 07:42:50'),
(27, 1, 'SKBNK', 8267, 8267, 0, '2020-06-06 21:45:49'),
(28, 1, 'EKGYO', 6008, 6007, 1, '2020-06-08 08:00:15'),
(29, 1, 'BIZIM', 143, 143, 0, '2020-06-08 10:14:08'),
(30, 1, 'GUBRF', 92, 92, 0, '2020-06-08 10:14:22'),
(31, 1, 'GSRAY', 457, 457, 0, '2020-06-08 10:14:36'),
(32, 1, 'TTRAK', 61, 61, 0, '2020-06-08 10:14:48'),
(33, 1, 'ZOREN', 1, 1, 0, '2020-06-08 10:24:09'),
(34, 1, 'KLGYO', 557, 557, 0, '2020-06-08 10:47:57'),
(35, 1, 'SNGYO', 5411, 5411, 0, '2020-06-08 11:08:49'),
(36, 1, 'PETKM', 1758, 1758, 0, '2020-06-08 12:38:01'),
(37, 1, 'HURGZ', 1969, 0, 1969, '2020-06-10 07:34:53'),
(38, 1, 'GARAN', 997, 997, 0, '2020-06-11 10:42:21'),
(39, 15, 'AEFES', 514, 514, 0, '2020-06-11 20:08:33'),
(40, 15, 'AKBNK', 1, 1, 0, '2020-06-11 20:08:47'),
(41, 15, 'AKSA', 730, 0, 730, '2020-06-11 20:09:23'),
(42, 15, 'BIZIM', 134, 0, 134, '2020-06-11 20:09:36'),
(43, 15, 'ANELE', 309, 0, 309, '2020-06-11 20:09:49'),
(44, 7, 'AEFES', 144, 0, 144, '2020-06-13 12:03:02'),
(45, 7, 'GOODY', 119, 0, 119, '2020-06-13 12:03:23'),
(46, 7, 'ANELE', 52, 0, 52, '2020-06-13 12:09:01'),
(47, 16, 'AEFES', 514, 0, 514, '2020-06-14 20:17:16'),
(48, 1, 'VKGYO', 3074, 3074, 0, '2020-06-15 08:34:56'),
(49, 1, 'IHLAS', 10201, 10201, 0, '2020-06-16 10:05:42'),
(50, 1, 'IHLGM', 5231, 5231, 0, '2020-06-17 11:29:31'),
(51, 1, 'KARSN', 5084, 0, 5084, '2020-06-18 09:18:36');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yasakli_kelimeler`
--

CREATE TABLE `yasakli_kelimeler` (
                                     `id` int(11) NOT NULL,
                                     `kelime` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yasakli_kelimeler`
--

INSERT INTO `yasakli_kelimeler` (`id`, `kelime`) VALUES
(1, '31'),
(2, 'a.p'),
(3, 'a.q'),
(4, 'abaza'),
(5, 'abdullah'),
(6, 'abdülhamit'),
(7, 'adi'),
(8, 'admın'),
(9, 'admin'),
(10, 'adnan'),
(11, 'adrianne'),
(12, 'adult'),
(13, 'agnostik'),
(14, 'agnostikler'),
(15, 'agnostiklerin'),
(16, 'ak'),
(17, 'akepe'),
(18, 'akp'),
(19, 'akparti'),
(20, 'akpci'),
(21, 'akpli'),
(22, 'akpnin'),
(23, 'akpnin'),
(24, 'alamet'),
(25, 'alameti'),
(26, 'alametler'),
(27, 'alametleri'),
(28, 'alevi'),
(29, 'alevilerin'),
(30, 'alevilik'),
(31, 'alevinin'),
(32, 'allah'),
(33, 'allahı'),
(34, 'allahın'),
(35, 'allahın'),
(36, 'allahtan'),
(37, 'allahtan'),
(38, 'allahu'),
(39, 'allahuekber'),
(40, 'alo'),
(41, 'aloo'),
(42, 'alooo'),
(43, 'aman'),
(44, 'amcık'),
(45, 'amcıklar'),
(46, 'amcik'),
(47, 'amına'),
(48, 'amından'),
(49, 'amını'),
(50, 'amin'),
(51, 'amk'),
(52, 'ammına'),
(53, 'ammını'),
(54, 'amq'),
(55, 'amuş'),
(56, 'anal'),
(57, 'analcum'),
(58, 'anan'),
(59, 'ananana'),
(60, 'animal'),
(61, 'apo'),
(62, 'apocu'),
(63, 'apocular'),
(64, 'apocuları'),
(65, 'apocuların'),
(66, 'aq'),
(67, 'asshole'),
(68, 'aşağılık'),
(69, 'atalere'),
(70, 'ate'),
(71, 'ateist'),
(72, 'ateiste'),
(73, 'ateistler'),
(74, 'ateistlere'),
(75, 'ateistleri'),
(76, 'ateistlerin'),
(77, 'ateizm'),
(78, 'ateizmden'),
(79, 'ateizme'),
(80, 'ateizmin'),
(81, 'ateler'),
(82, 'atelerin'),
(83, 'atesli'),
(84, 'ateşli'),
(85, 'ateyist'),
(86, 'ateyiz'),
(87, 'azdırıcı'),
(88, 'azdirici'),
(89, 'azgın'),
(90, 'azgin'),
(91, 'bağnaz'),
(92, 'bağnazlar'),
(93, 'bağnazlara'),
(94, 'bağnazları'),
(95, 'bahçeli'),
(96, 'bakire'),
(97, 'baldız'),
(98, 'baldiz'),
(99, 'bayram'),
(100, 'bayrama'),
(101, 'bayramı'),
(102, 'bayramın'),
(103, 'bayramınız'),
(104, 'bayramlar'),
(105, 'bdp'),
(106, 'bdplileri'),
(107, 'beat'),
(108, 'bedava'),
(109, 'bekleriz'),
(110, 'beleş'),
(111, 'beyler'),
(112, 'biseksuel'),
(113, 'bitch'),
(114, 'boğazla'),
(115, 'boğazlamak'),
(116, 'boğazlayarak'),
(117, 'boğazlıyarak'),
(118, 'bok'),
(119, 'bokunu'),
(120, 'boob'),
(121, 'bosal'),
(122, 'bosalmak'),
(123, 'boşal'),
(124, 'boşalmak'),
(125, 'buyutucu'),
(126, 'büyütücü'),
(127, 'cahillik'),
(128, 'cami'),
(129, 'camide'),
(130, 'cehalet'),
(131, 'cemaat'),
(132, 'cemaatçi'),
(133, 'cemaatçiler'),
(134, 'cemaatçileri'),
(135, 'cemaatçilerin'),
(136, 'cemaate'),
(137, 'cemaati'),
(138, 'cemaatin'),
(139, 'cemaatlere'),
(140, 'cemaatlerin'),
(141, 'cenabet'),
(142, 'chp'),
(143, 'ciftles'),
(144, 'ciftleş'),
(145, 'cin'),
(146, 'cindir'),
(147, 'cinler'),
(148, 'cinlerdir'),
(149, 'cinleri'),
(150, 'cinlerin'),
(151, 'ciplak'),
(152, 'citir'),
(153, 'cock'),
(154, 'cock suck'),
(155, 'crap'),
(156, 'cukpenis'),
(157, 'cunub'),
(158, 'cünup'),
(159, 'cünüb'),
(160, 'cünüp'),
(161, 'çıplak'),
(162, 'çıtır'),
(163, 'çiftleş'),
(164, 'çocuğu'),
(165, 'çükpenis'),
(166, 'daşşağ'),
(167, 'daşşak'),
(168, 'dayı'),
(169, 'deist'),
(170, 'deistler'),
(171, 'deistleri'),
(172, 'deistlerin'),
(173, 'deizm'),
(174, 'deizme'),
(175, 'deizmi'),
(176, 'dick'),
(177, 'din'),
(178, 'dindar'),
(179, 'dindarlar'),
(180, 'dindarlara'),
(181, 'dindarların'),
(182, 'dinde'),
(183, 'dine'),
(184, 'dini'),
(185, 'dinin'),
(186, 'dinler'),
(187, 'dinleri'),
(188, 'dinsiz'),
(189, 'dinsizler'),
(190, 'dinsizlere'),
(191, 'dinsizleri'),
(192, 'dinsizlerin'),
(193, 'domal'),
(194, 'dtk'),
(195, 'dtp'),
(196, 'dump'),
(197, 'ekber'),
(198, 'emme'),
(199, 'ensest'),
(200, 'erotic'),
(201, 'erotig'),
(202, 'erotik'),
(203, 'esbian'),
(204, 'escinsel'),
(205, 'escort'),
(206, 'eskort'),
(207, 'esrar'),
(208, 'eşcinsel'),
(209, 'eşek'),
(210, 'eşşek'),
(211, 'et'),
(212, 'etek'),
(213, 'etleri'),
(214, 'etlerin'),
(215, 'evrim'),
(216, 'evrimci'),
(217, 'evrimciler'),
(218, 'evrimde'),
(219, 'evrimi'),
(220, 'evrimin'),
(221, 'ewet'),
(222, 'fahise'),
(223, 'fahişe'),
(224, 'fantazi'),
(225, 'fantezi'),
(226, 'faşist'),
(227, 'fatiha'),
(228, 'fethullah'),
(229, 'fetish'),
(230, 'feto'),
(231, 'fetocu'),
(232, 'fetocular'),
(233, 'fetoculara'),
(234, 'fetocuları'),
(235, 'fetocuların'),
(236, 'fetoş'),
(237, 'fettullahçı'),
(238, 'fetullah'),
(239, 'fetullahçı'),
(240, 'fetyullahçı'),
(241, 'fire'),
(242, 'firikik'),
(243, 'folloş'),
(244, 'free'),
(245, 'fuck'),
(246, 'gay'),
(247, 'geciktirici'),
(248, 'genital'),
(249, 'gerdek'),
(250, 'gey'),
(251, 'girl'),
(252, 'gizli'),
(253, 'godoş'),
(254, 'gogus'),
(255, 'got'),
(256, 'göğüs'),
(257, 'göt'),
(258, 'götünden'),
(259, 'götüne'),
(260, 'götünü'),
(261, 'gülen'),
(262, 'gülenci'),
(263, 'gülenciler'),
(264, 'gülencileri'),
(265, 'gülencilerin'),
(266, 'günah'),
(267, 'günahdır'),
(268, 'günahtır'),
(269, 'hadis'),
(270, 'hadisi'),
(271, 'hadisin'),
(272, 'hadisler'),
(273, 'hadiste'),
(274, 'haklı'),
(275, 'han'),
(276, 'haram'),
(277, 'harama'),
(278, 'haramdır'),
(279, 'harun'),
(280, 'hasiktir'),
(281, 'hassiktir'),
(282, 'hatun'),
(283, 'haydar'),
(284, 'hayvan'),
(285, 'hayvanı'),
(286, 'hayvanlara'),
(287, 'hayvanları'),
(288, 'hayvanlık'),
(289, 'hayvanlıklar'),
(290, 'helal'),
(291, 'helaldir'),
(292, 'helale'),
(293, 'helali'),
(294, 'hentai'),
(295, 'hepiniz'),
(296, 'hepinizi'),
(297, 'hepinizin'),
(298, 'hikaye'),
(299, 'hikmet'),
(300, 'hikmeti'),
(301, 'hikmetinden'),
(302, 'hikmetleri'),
(303, 'homemade'),
(304, 'homoseksuel'),
(305, 'homoseksüel'),
(306, 'hot'),
(307, 'hristiyan'),
(308, 'hristiyanlara'),
(309, 'hristiyanların'),
(310, 'hz.muhammed'),
(311, 'ibne'),
(312, 'ibret'),
(313, 'ibretlik'),
(314, 'ilahi'),
(315, 'imansız'),
(316, 'imansızlar'),
(317, 'impud'),
(318, 'ipne'),
(319, 'islam'),
(320, 'islama'),
(321, 'islamda'),
(322, 'islamın'),
(323, 'it'),
(324, 'itiraf'),
(325, 'jigolo'),
(326, 'kafir'),
(327, 'kafire'),
(328, 'kafiri'),
(329, 'kafirler'),
(330, 'kafirleri'),
(331, 'kafirlerin'),
(332, 'kahpe'),
(333, 'kalca'),
(334, 'kalça'),
(335, 'kaltak'),
(336, 'kancık'),
(337, 'kancik'),
(338, 'kapak'),
(339, 'kavat'),
(340, 'kerhane'),
(341, 'kerim'),
(342, 'kerimde'),
(343, 'kesmek'),
(344, 'kesmeyi'),
(345, 'kıl'),
(346, 'kıyamet'),
(347, 'kıyameti'),
(348, 'kıyametin'),
(349, 'kızlık'),
(350, 'kilot'),
(351, 'kinky'),
(352, 'kizlik'),
(353, 'koç'),
(354, 'koçun'),
(355, 'komunist'),
(356, 'komunistin'),
(357, 'komunistlerin'),
(358, 'komunizm'),
(359, 'komünist'),
(360, 'komünistin'),
(361, 'komünistlerin'),
(362, 'komünizm'),
(363, 'komünizmin'),
(364, 'koyun'),
(365, 'koyunlar'),
(366, 'koyunları'),
(367, 'köpek'),
(368, 'kudur'),
(369, 'kulot'),
(370, 'kuran'),
(371, 'kuran'),
(372, 'kuranda'),
(373, 'kuranda'),
(374, 'kurban'),
(375, 'kurbanı'),
(376, 'kurbanın'),
(377, 'kurbanlar'),
(378, 'kurbanlık'),
(379, 'kurtiz'),
(380, 'kuuları'),
(381, 'kuzu'),
(382, 'kuzular'),
(383, 'külot'),
(384, 'kürdi'),
(385, 'kürdistan'),
(386, 'kürt'),
(387, 'kürtleri'),
(388, 'kürtlerin'),
(389, 'laz'),
(390, 'lesbian'),
(391, 'lezbien'),
(392, 'lezbiyen'),
(393, 'liseli'),
(394, 'lolita'),
(395, 'lust'),
(396, 'mastırbas'),
(397, 'mastirbas'),
(398, 'masturbasyon'),
(399, 'mastürbas'),
(400, 'mastürbasyon'),
(401, 'maşallah'),
(402, 'mature'),
(403, 'melek'),
(404, 'melekler'),
(405, 'melekleri'),
(406, 'meleklerin'),
(407, 'meme'),
(408, 'mhp'),
(409, 'mom'),
(410, 'muhammed'),
(411, 'muhammede'),
(412, 'muhammedin'),
(413, 'müslüman'),
(414, 'müslümanı'),
(415, 'müslümanlara'),
(416, 'müslümanları'),
(417, 'müslümanların'),
(418, 'naughty'),
(419, 'nefes'),
(420, 'nubile'),
(421, 'nude'),
(422, 'nudist'),
(423, 'nur'),
(424, 'nurcu'),
(425, 'nurcular'),
(426, 'nurcuları'),
(427, 'nurcuların'),
(428, 'nurlar'),
(429, 'nurları'),
(430, 'nursi'),
(431, 'oktar'),
(432, 'olgun'),
(433, 'opusme'),
(434, 'oral'),
(435, 'orgazm'),
(436, 'orosbu'),
(437, 'orospu'),
(438, 'orospuçocuğu'),
(439, 'orospuçocuğusunuz'),
(440, 'orospuçocukları'),
(441, 'orospuçocuklarısınız'),
(442, 'orospular'),
(443, 'orospuu'),
(444, 'osmanlı'),
(445, 'osmanlıya'),
(446, 'osmanlıyı'),
(447, 'öcalan'),
(448, 'öpüşme'),
(449, 'panty'),
(450, 'parti'),
(451, 'partner'),
(452, 'paylaşım'),
(453, 'paylaşımları'),
(454, 'paylaşımlarını'),
(455, 'paylaşımlarınızı'),
(456, 'penis'),
(457, 'pervert'),
(458, 'peygamber'),
(459, 'peygamberin'),
(460, 'peygamberler'),
(461, 'peygamberlere'),
(462, 'peygamberleri'),
(463, 'peygamberlerin'),
(464, 'pezevenk'),
(465, 'pic'),
(466, 'piç'),
(467, 'pkk'),
(468, 'pkklıları'),
(469, 'pkklıların'),
(470, 'pkknın'),
(471, 'pkknın'),
(472, 'pkkyı'),
(473, 'popo'),
(474, 'porn'),
(475, 'pussy'),
(476, 'püskevit'),
(477, 'qavat'),
(478, 'rab'),
(479, 'rabbim'),
(480, 'rabbimin'),
(481, 'rabbin'),
(482, 'ramiz'),
(483, 'risale'),
(484, 'said'),
(485, 'sapık'),
(486, 'sapik'),
(487, 'sarışın'),
(488, 'sarisin'),
(489, 'sayfamıza'),
(490, 'sayfamızı'),
(491, 'sayfayı'),
(492, 'sehvet'),
(493, 'seks'),
(494, 'sevap'),
(495, 'sevaptır'),
(496, 'sevisme'),
(497, 'sevişme'),
(498, 'sex'),
(499, 'showgirl'),
(500, 'sıcak'),
(501, 'sıçayım'),
(502, 'sicak'),
(503, 'sik'),
(504, 'sikem'),
(505, 'sikerim'),
(506, 'sikeyim'),
(507, 'sikimsonik'),
(508, 'sikis'),
(509, 'sikiş'),
(510, 'sikme'),
(511, 'sikti'),
(512, 'siktiğim'),
(513, 'siktiğimin'),
(514, 'siktir'),
(515, 'sisman'),
(516, 'sizin'),
(517, 'sizinde'),
(518, 'sok'),
(519, 'sokarım'),
(520, 'sokayım'),
(521, 'sokma'),
(522, 'sokus'),
(523, 'sokuş'),
(524, 'sosyalizm'),
(525, 'sperm'),
(526, 'subhanallah'),
(527, 'suck'),
(528, 'suphanallah'),
(529, 'surtuk'),
(530, 'sürüsü'),
(531, 'swinger'),
(532, 'şehit'),
(533, 'şehitler'),
(534, 'şehitlere'),
(535, 'şehitleri'),
(536, 'şehitlerimiz'),
(537, 'şehitlerimize'),
(538, 'şehitlerimizi'),
(539, 'şehvet'),
(540, 'şişman'),
(541, 'taciz'),
(542, 'takdir'),
(543, 'takdiri'),
(544, 'taktir'),
(545, 'taktiri'),
(546, 'tarikat'),
(547, 'tarikata'),
(548, 'tarikatın'),
(549, 'tarikatlar'),
(550, 'tarikatlara'),
(551, 'tarikatların'),
(552, 'tayyib'),
(553, 'tayyibe'),
(554, 'tayyibin'),
(555, 'tayyip'),
(556, 'tayyipe'),
(557, 'tayyipin'),
(558, 'tecavuz'),
(559, 'tecavüz'),
(560, 'teen'),
(561, 'terbiyesiz'),
(562, 'terörist'),
(563, 'teröristler'),
(564, 'teröristleri'),
(565, 'teröristlerin'),
(566, 'travesti'),
(567, 'tube'),
(568, 'tuncel'),
(569, 'turbanli'),
(570, 'tünel'),
(571, 'tüneli'),
(572, 'tünelinde'),
(573, 'tünelinden'),
(574, 'türbanlı'),
(575, 'türk'),
(576, 'vaaz'),
(577, 'vagina'),
(578, 'vajina'),
(579, 'virgin'),
(580, 'vurvur'),
(581, 'www'),
(582, 'xn'),
(583, 'xx'),
(584, 'xxx'),
(585, 'yahudi'),
(586, 'yahya'),
(587, 'yala'),
(588, 'yalaka'),
(589, 'yaradılış'),
(590, 'yaradilis'),
(591, 'yarak'),
(592, 'yaratılış'),
(593, 'yaratılışçı'),
(594, 'yaratılışçılar'),
(595, 'yaratılışçılara'),
(596, 'yaratılışçıları'),
(597, 'yaratılışı'),
(598, 'yaratılıştan'),
(599, 'yaratilis'),
(600, 'yarrağım'),
(601, 'yarrağımın'),
(602, 'yarrağm'),
(603, 'yarrak'),
(604, 'yasak'),
(605, 'yav'),
(606, 'yavşak'),
(607, 'yaw'),
(608, 'yerli'),
(609, 'yetiskin'),
(610, 'yha'),
(611, 'yhaa'),
(612, 'yobaz'),
(613, 'yobazı'),
(614, 'yobazlar'),
(615, 'yobazlara'),
(616, 'yobazları'),
(617, 'yobazlık'),
(618, 'zaaı'),
(619, 'zaman'),
(620, 'zaza'),
(621, 'zındık'),
(622, 'zındıklar'),
(623, 'zındıkları'),
(624, 'zoo');

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
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
    ADD PRIMARY KEY (`msj_id`);

--
-- Tablo için indeksler `oduller`
--
ALTER TABLE `oduller`
    ADD PRIMARY KEY (`odul_id`);

--
-- Tablo için indeksler `sabitler`
--
ALTER TABLE `sabitler`
    ADD PRIMARY KEY (`id`);

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
-- Tablo için indeksler `yasakli_kelimeler`
--
ALTER TABLE `yasakli_kelimeler`
    ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `alim`
--
ALTER TABLE `alim`
    MODIFY `alim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
    MODIFY `kul_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `ligler`
--
ALTER TABLE `ligler`
    MODIFY `lig_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `log`
--
ALTER TABLE `log`
    MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=378;

--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
    MODIFY `msj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `oduller`
--
ALTER TABLE `oduller`
    MODIFY `odul_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Tablo için AUTO_INCREMENT değeri `sabitler`
--
ALTER TABLE `sabitler`
    MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `satim`
--
ALTER TABLE `satim`
    MODIFY `satim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- Tablo için AUTO_INCREMENT değeri `varliklar`
--
ALTER TABLE `varliklar`
    MODIFY `varlik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Tablo için AUTO_INCREMENT değeri `yasakli_kelimeler`
--
ALTER TABLE `yasakli_kelimeler`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=625;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
