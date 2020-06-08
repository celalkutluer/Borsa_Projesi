-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 08 Haz 2020, 16:39:56
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
-- Veritabanı: `id11425759_borsa`
--
CREATE DATABASE IF NOT EXISTS `id11425759_borsa` DEFAULT CHARACTER SET utf8 COLLATE utf8_turkish_ci;
USE `id11425759_borsa`;

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
(131, 9, 'AEFES', 18.75, 8.89, 158, 158, 2971.39, '2020-06-02 07:15:50'),
(132, 9, 'AFYON', 2.85, 5.40, 631, 315, 1803.75, '2020-06-02 07:16:06'),
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
(144, 1, 'GUBRF', 25.78, 7.12, 92, 92, 2378.88, '2020-06-08 10:14:22'),
(145, 1, 'GSRAY', 3.65, 5.00, 457, 0, 1673.05, '2020-06-08 10:14:36'),
(146, 1, 'TTRAK', 66.70, 12.21, 61, 0, 4080.91, '2020-06-08 10:14:48'),
(147, 1, 'ZOREN', 1.57, 0.00, 1, 0, 1.57, '2020-06-08 10:24:09'),
(148, 1, 'KLGYO', 4.03, 6.73, 557, 0, 2251.44, '2020-06-08 10:47:57'),
(149, 1, 'SNGYO', 1.22, 12.29, 3359, 0, 4110.27, '2020-06-08 11:08:49'),
(150, 1, 'IEYHO', 0.65, 0.00, 1, 1, 0.65, '2020-06-08 11:13:37'),
(151, 1, 'IEYHO', 0.65, 0.00, 1, 1, 0.65, '2020-06-08 11:13:48'),
(152, 1, 'SNGYO', 1.24, 3.84, 1033, 0, 1284.76, '2020-06-08 12:36:10'),
(153, 1, 'PETKM', 3.84, 20.25, 1758, 1758, 6770.97, '2020-06-08 12:38:01'),
(154, 1, 'SNGYO', 1.27, 3.88, 1019, 1019, 1298.01, '2020-06-08 13:13:17');

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
(1, 'CELAL', 'KUTLUER', 'celal@c.c', '(500) 500 10 10', '1989-01-21', '4a7d1ed414474e4033ac29ccb8653d9b', NULL, 1.84, NULL, '1', NULL, '2020-03-23 17:28:39', '2020-06-08 16:11:43', 5, '1', 'img/2646C5626JMZK3468R1539YUZU5050O1320VJCW6538X7052ZQWO3975M.jpg', '1', NULL, NULL),
(5, 'a', 'a', 'aaa@c.c', '(500) 500 10 10', '2020-05-04', '0cc175b9c0f1b6a831c399e269772661', NULL, 10000.00, '6f9b0a55df8ac28564cb9f63a10be8af6ab3f7c2', '1', NULL, '2020-05-20 20:06:20', NULL, 2, '0', 'img/logged-user.jpg', '0', '2020-05-27 22:15:09', 1),
(6, 'hasan', 'ulutaş', 'hasan.ulutas@yobu.edu.tr', '(345) 324 2342', '1987-02-28', '4297f44b13955235245b2497399d7a93', NULL, 12.23, 'ac3dbab61b0d35355fd9e3394cf1564f019965ab', '1', NULL, '2020-05-21 23:01:19', NULL, NULL, '1', 'img/logged-user.jpg', '1', NULL, NULL),
(7, 'Beyzanur', 'Taşköprü', 'beyzataskopru09@gmail.com', '(555) 555 5555', '1998-05-01', 'dcddb75469b4b4875094e14561e573d8', NULL, 10000.00, 'a3c48f9ee1fc434049485234ce7312c528cea896', '1', NULL, '2020-06-01 17:14:30', '2020-06-01 17:17:21', NULL, '1', 'img/logged-user.jpg', '1', NULL, NULL),
(8, 'haydar', 'bulut', 'haydar@hotmail.com', '(500) 500 10 10', '2020-06-04', '4304bcfa7c70020681b91085b31d2019', NULL, 10000.00, '509644903b9ec546addc1bc0bb97c1438ae9dbd9', '1', NULL, '2020-06-01 17:15:10', NULL, NULL, '1', 'img/logged-user.jpg', '0', '2020-06-08 08:03:21', 1),
(9, 'Tarık', 'ERDEN', 'trk60566@hotmail.com', '(553) 919 97 66', '1997-12-09', 'e10adc3949ba59abbe56e057f20f883e', NULL, 2852.02, '8bcf309890051a82c359a730aac8726f312c747f', '1', NULL, '2020-06-01 17:17:12', '2020-06-02 07:10:41', NULL, '1', 'img/8008Q3779BPFJ8492P4723SCHI7442C9435AZET5054B1686UZWZ5785H.jpg', '1', NULL, NULL),
(10, 'Merve', 'Tokat', 'merve@gmail.com', '(543) 422 34 42', '1999-11-11', '827ccb0eea8a706c4c34a16891f84e7b', NULL, 2195.90, 'd6eb8e34e87cafc38b6385c4544d57e23922de31', '1', NULL, '2020-06-01 17:19:35', '2020-06-02 07:15:09', 3, '1', 'img/6860W1858OASN9313V8477JRGO1616D5788MGKA6151U9370WZKE5387O.jpg', '1', NULL, NULL),
(11, 'Mahmut', 'Tuncer', 'celalkutluer6@gmail.com', '(555) 000 99 88', '2020-06-06', '4a7d1ed414474e4033ac29ccb8653d9b', NULL, 4.20, '371302', '1', NULL, '2020-06-01 19:04:30', '2020-06-01 19:05:11', 3, '0', 'img/1790N3225CNQK7325F5219XAYH4286V6551IQQU9517R8196TAOA8557X.jpg', '1', NULL, NULL),
(12, 'haydar', 'bulut', 'haydar10@hotmail.com', '(500) 500 10 10', '1996-12-31', '9475aa516e4dd1eb386f9d8a9e7ee7be', NULL, 10000.00, '548767', '0', NULL, '2020-06-02 06:12:08', NULL, NULL, '0', 'img/logged-user.jpg', '1', NULL, NULL),
(13, 'haydar', 'bulut', 'haydar6475@gmail.com', '(500) 500 10 10', '1996-06-23', '25f9e794323b453885f5181f1b624d0b', NULL, 10000.00, '176865', '1', NULL, '2020-06-02 06:24:35', '2020-06-02 06:55:43', NULL, '0', 'img/logged-user.jpg', '1', NULL, NULL),
(14, 'ali', 'ali', '16008117026@ogr.bozok.edu.tr', '(500) 500 10 10', '1996-06-16', '25f9e794323b453885f5181f1b624d0b', NULL, 10000.00, '431988', '0', NULL, '2020-06-02 06:56:55', NULL, NULL, '0', 'img/logged-user.jpg', '0', '2020-06-08 08:03:07', 1);

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
(5, 'Hisselere Fısıldayanlar', 'Hep birlikte ileriye...', 9, 1, NULL);

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
(239, 1, 'Giriş', '1 -Nolu kullanıcı CELAL KUTLUER, 46.155.58.243 ip adresi üzerinden giriş yaptı.', '2020-06-08 16:11:43');

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
(2, 'Celal', 'KUTLUER', 'celalkutluer@gmail.com', 'Deneme', NULL, NULL, NULL, '2020-06-08 12:33:35');

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
(72, 1, 'SNGYO', 1.26, 3.90, 1033, 12.92, 1297.68, '2020-06-08 13:12:15');

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
(12, 1, 'AEFES', 580, 580, 0, '2020-05-18 21:06:00'),
(13, 1, 'DEVA', 1115, 1115, 0, '2020-05-18 23:34:00'),
(14, 1, 'PGSUS', 192, 192, 0, '2020-05-20 09:40:58'),
(15, 6, 'AEFES', 570, 0, 570, '2020-05-21 23:02:37'),
(16, 1, 'TLMAN', 724, 724, 0, '2020-05-25 12:45:24'),
(17, 1, 'AKBNK', 1, 1, 0, '2020-05-25 17:54:03'),
(18, 1, 'AFYON', 6, 6, 0, '2020-05-27 15:36:07'),
(19, 1, 'IEYHO', 10, 8, 2, '2020-05-27 15:36:30'),
(20, 11, 'AFYON', 3535, 1, 3534, '2020-06-01 19:07:27'),
(21, 10, 'BIMAS', 154, 136, 18, '2020-06-02 07:15:36'),
(22, 9, 'AEFES', 158, 0, 158, '2020-06-02 07:15:50'),
(23, 9, 'AFYON', 1262, 316, 946, '2020-06-02 07:16:06'),
(24, 9, 'ALARK', 284, 0, 284, '2020-06-02 07:16:18'),
(25, 10, 'ANELE', 1119, 0, 1119, '2020-06-02 07:18:27'),
(26, 10, 'HURGZ', 1318, 0, 1318, '2020-06-02 07:42:50'),
(27, 1, 'SKBNK', 8267, 8267, 0, '2020-06-06 21:45:49'),
(28, 1, 'EKGYO', 6007, 6007, 0, '2020-06-08 08:00:15'),
(29, 1, 'BIZIM', 143, 143, 0, '2020-06-08 10:14:08'),
(30, 1, 'GUBRF', 92, 0, 92, '2020-06-08 10:14:22'),
(31, 1, 'GSRAY', 457, 457, 0, '2020-06-08 10:14:36'),
(32, 1, 'TTRAK', 61, 61, 0, '2020-06-08 10:14:48'),
(33, 1, 'ZOREN', 1, 1, 0, '2020-06-08 10:24:09'),
(34, 1, 'KLGYO', 557, 557, 0, '2020-06-08 10:47:57'),
(35, 1, 'SNGYO', 5411, 4392, 1019, '2020-06-08 11:08:49'),
(36, 1, 'PETKM', 1758, 0, 1758, '2020-06-08 12:38:01');

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
    MODIFY `alim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
    MODIFY `kul_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `ligler`
--
ALTER TABLE `ligler`
    MODIFY `lig_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `log`
--
ALTER TABLE `log`
    MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
    MODIFY `msj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `satim`
--
ALTER TABLE `satim`
    MODIFY `satim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Tablo için AUTO_INCREMENT değeri `varliklar`
--
ALTER TABLE `varliklar`
    MODIFY `varlik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Tablo için AUTO_INCREMENT değeri `yasakli_kelimeler`
--
ALTER TABLE `yasakli_kelimeler`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=625;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
