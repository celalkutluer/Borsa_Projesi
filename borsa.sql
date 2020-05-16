-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 16 May 2020, 22:44:08
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
                        `alim_hisse_toplam_tutar` decimal(10,2) DEFAULT NULL,
                        `alim_zaman` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `alim`
--

INSERT INTO `alim` (`alim_id`, `alim_kul_id`, `alim_hisse_sembol`, `alim_hisse_deger`, `alim_hisse_komisyon`, `alim_hisse_lot`, `alim_hisse_toplam_tutar`, `alim_zaman`) VALUES
(9, 1, 'AEFES', '17.02', '29.87', 585, '9986.57', '2020-03-23 18:29:25'),
(10, 1, 'AFYON', '3.96', '0.01', 1, '3.97', '2020-03-23 18:56:14'),
(11, 1, 'KLGYO', '1.78', '0.01', 1, '1.79', '2020-03-23 18:57:02'),
(12, 1, 'ZOREN', '0.96', '0.00', 1, '0.96', '2020-03-23 18:57:15'),
(13, 1, 'TKNSA', '4.02', '0.01', 1, '4.03', '2020-03-23 18:57:23'),
(14, 1, 'PRKME', '2.17', '0.01', 1, '2.18', '2020-03-23 18:57:46'),
(15, 1, 'IHLAS', '0.39', '0.06', 1, '0.39', '2020-03-23 19:39:15'),
(18, 1, 'AEFES', '17.02', '0.87', 17, '290.21', '2020-03-23 19:46:06'),
(19, 1, 'BERA', '2.11', '0.01', 1, '2.12', '2020-03-23 19:46:28'),
(21, 1, 'AFYON', '3.96', '0.59', 1, '3.97', '2020-03-23 19:49:13'),
(24, 1, 'AKENR', '0.64', '0.00', 1, '0.64', '2020-03-23 20:04:51'),
(25, 1, 'BERA', '2.11', '0.32', 1, '2.12', '2020-03-23 20:05:41'),
(26, 1, 'IHLAS', '0.39', '0.06', 1, '0.39', '2020-03-23 20:05:55'),
(27, 1, 'IEYHO', '0.35', '0.05', 1, '0.35', '2020-03-23 20:09:17'),
(28, 1, 'MGROS', '22.32', '0.74', 11, '246.26', '2020-03-23 20:11:56'),
(29, 1, 'PETKM', '2.99', '0.01', 1, '3.00', '2020-03-23 20:12:07'),
(30, 1, 'DGKLB', '1.00', '0.00', 1, '1.00', '2020-03-23 20:12:29'),
(31, 1, 'AKBNK', '5.36', '0.02', 1, '5.38', '2020-03-23 21:23:20'),
(32, 1, 'AKENR', '0.64', '0.00', 1, '0.64', '2020-03-23 21:23:48'),
(33, 1, 'AKENR', '0.64', '0.00', 1, '0.64', '2020-03-23 21:25:02'),
(34, 1, 'AEFES', '17.02', '0.05', 1, '17.07', '2020-03-23 21:28:57'),
(35, 1, 'AEFES', '17.02', '0.05', 1, '17.07', '2020-03-23 22:31:09'),
(36, 1, 'AEFES', '17.02', '0.05', 1, '17.07', '2020-03-23 23:56:07'),
(37, 1, 'AEFES', '17.65', '0.05', 1, '17.70', '2020-03-24 13:04:56'),
(38, 1, 'AEFES', '17.40', '0.05', 1, '17.45', '2020-03-29 15:35:07'),
(39, 1, 'AEFES', '17.40', '0.05', 1, '17.45', '2020-03-29 15:35:08'),
(40, 1, 'AEFES', '17.40', '0.05', 1, '17.45', '2020-03-29 15:35:16'),
(41, 1, 'AEFES', '17.40', '0.05', 1, '17.45', '2020-03-29 22:26:57'),
(42, 1, 'AEFES', '17.40', '0.05', 1, '17.45', '2020-03-29 22:27:08'),
(43, 1, 'AEFES', '17.42', '0.05', 1, '17.47', '2020-03-31 12:20:56'),
(44, 1, 'AEFES', '17.39', '0.05', 1, '17.44', '2020-03-31 12:26:56'),
(45, 1, 'PGSUS', '34.20', '0.10', 1, '34.30', '2020-03-31 19:48:25'),
(46, 1, 'AFYON', '4.96', '0.01', 1, '4.97', '2020-03-31 19:48:46'),
(47, 1, 'AEFES', '17.23', '0.05', 1, '17.28', '2020-03-31 19:56:42'),
(48, 1, 'HURGZ', '0.90', '0.00', 1, '0.90', '2020-03-31 20:09:18'),
(49, 1, 'AEFES', '17.23', '0.05', 1, '17.28', '2020-03-31 21:32:15'),
(50, 1, 'AEFES', '18.23', '0.05', 1, '18.28', '2020-04-06 22:26:01'),
(51, 1, 'AEFES', '18.16', '0.05', 1, '18.21', '2020-04-23 14:25:57'),
(52, 1, 'AEFES', '18.16', '0.05', 1, '18.21', '2020-04-23 14:31:21'),
(53, 1, 'AEFES', '18.38', '0.06', 1, '18.44', '2020-05-01 11:36:34'),
(54, 4, 'AEFES', '18.38', '0.06', 1, '18.44', '2020-05-01 21:18:34'),
(55, 4, 'AEFES', '18.38', '0.06', 1, '18.44', '2020-05-01 21:18:35'),
(56, 1, 'DEVA', '16.20', '0.05', 1, '16.25', '2020-05-03 12:22:21'),
(57, 1, 'AEFES', '18.38', '0.06', 1, '18.44', '2020-05-03 12:37:10'),
(58, 1, 'AEFES', '17.04', '0.05', 1, '17.09', '2020-05-10 23:14:01'),
(59, 1, 'AEFES', '17.04', '0.05', 1, '17.09', '2020-05-11 00:33:35'),
(60, 1, 'AEFES', '17.04', '0.05', 1, '17.09', '2020-05-11 00:33:43'),
(61, 1, 'AEFES', '17.04', '14.26', 279, '4768.42', '2020-05-11 00:34:15'),
(62, 1, 'AEFES', '17.04', '0.05', 1, '17.09', '2020-05-11 00:35:55'),
(63, 1, 'AEFES', '17.04', '0.05', 1, '17.09', '2020-05-11 00:36:23'),
(64, 1, 'AEFES', '17.04', '0.05', 1, '17.09', '2020-05-11 00:39:02'),
(65, 1, 'ANELE', '3.66', '0.01', 1, '3.67', '2020-05-16 18:33:04'),
(66, 1, 'AEFES', '16.94', '0.05', 1, '16.99', '2020-05-16 18:33:50'),
(67, 1, 'AEFES', '16.94', '0.05', 1, '16.99', '2020-05-16 18:34:25'),
(68, 1, 'AEFES', '16.94', '0.05', 1, '16.99', '2020-05-16 18:34:50'),
(69, 1, 'AEFES', '16.94', '0.05', 1, '16.99', '2020-05-16 21:16:40'),
(70, 1, 'AEFES', '16.94', '0.05', 1, '16.99', '2020-05-16 22:11:22'),
(71, 1, 'AEFES', '16.94', '0.05', 1, '16.99', '2020-05-16 22:12:19'),
(72, 1, 'AEFES', '16.94', '0.05', 1, '16.99', '2020-05-16 22:58:57'),
(73, 1, 'AEFES', '16.94', '0.05', 1, '16.99', '2020-05-16 22:59:29'),
(74, 1, 'AEFES', '16.94', '0.05', 1, '16.99', '2020-05-16 23:01:11'),
(75, 1, 'AEFES', '16.94', '0.05', 1, '16.99', '2020-05-16 23:02:24'),
(76, 1, 'AEFES', '16.94', '0.05', 1, '16.99', '2020-05-16 23:03:37'),
(77, 1, 'AEFES', '16.94', '0.05', 1, '16.99', '2020-05-16 23:04:14'),
(78, 1, 'AEFES', '16.94', '0.05', 1, '16.99', '2020-05-16 23:05:32'),
(79, 1, 'AFYON', '2.72', '0.01', 1, '2.73', '2020-05-16 23:05:46'),
(80, 1, 'AFYON', '2.72', '0.01', 1, '2.73', '2020-05-16 23:05:53'),
(81, 1, 'AEFES', '16.94', '0.05', 1, '16.99', '2020-05-16 23:06:37'),
(82, 1, 'AFYON', '2.72', '0.01', 1, '2.73', '2020-05-16 23:06:49'),
(83, 1, 'AFYON', '2.72', '0.01', 1, '2.73', '2020-05-16 23:07:38'),
(84, 1, 'AFYON', '2.72', '0.01', 1, '2.73', '2020-05-16 23:07:56'),
(85, 1, 'AFYON', '2.72', '0.01', 1, '2.73', '2020-05-16 23:09:04'),
(86, 1, 'AFYON', '2.72', '0.01', 1, '2.73', '2020-05-16 23:10:50'),
(87, 1, 'AFYON', '2.72', '0.01', 1, '2.73', '2020-05-16 23:10:51'),
(88, 1, 'AFYON', '2.72', '0.01', 1, '2.73', '2020-05-16 23:11:37'),
(89, 1, 'ZOREN', '1.33', '0.00', 1, '1.33', '2020-05-16 23:12:27'),
(90, 1, 'ZOREN', '1.33', '0.00', 1, '1.33', '2020-05-16 23:12:55'),
(91, 1, 'ZOREN', '1.33', '0.00', 1, '1.33', '2020-05-16 23:13:33'),
(92, 1, 'ZOREN', '1.33', '0.00', 1, '1.33', '2020-05-16 23:14:20'),
(93, 1, 'IEYHO', '0.62', '0.00', 1, '0.62', '2020-05-16 23:14:36'),
(94, 1, 'IEYHO', '0.62', '0.00', 1, '0.62', '2020-05-16 23:14:48'),
(95, 1, 'IEYHO', '0.62', '0.00', 1, '0.62', '2020-05-16 23:15:55'),
(96, 1, 'IEYHO', '0.62', '0.00', 1, '0.62', '2020-05-16 23:15:56'),
(97, 1, 'AEFES', '16.94', '0.05', 1, '16.99', '2020-05-16 23:16:02'),
(98, 1, 'DEVA', '18.90', '0.06', 1, '18.96', '2020-05-16 23:16:24'),
(99, 1, 'DEVA', '18.90', '0.06', 1, '18.96', '2020-05-16 23:16:34'),
(100, 1, 'AFYON', '2.72', '0.01', 1, '2.73', '2020-05-16 23:18:31'),
(101, 1, 'AEFES', '16.94', '0.05', 1, '16.99', '2020-05-16 23:32:07'),
(102, 1, 'AFYON', '2.72', '0.01', 1, '2.73', '2020-05-16 23:32:15'),
(103, 1, 'ANELE', '3.66', '0.01', 1, '3.67', '2020-05-16 23:32:23'),
(104, 1, 'ANELE', '3.66', '0.01', 1, '3.67', '2020-05-16 23:32:35'),
(105, 1, 'ANELE', '3.66', '0.01', 1, '3.67', '2020-05-16 23:33:13'),
(106, 1, 'ANELE', '3.66', '0.01', 1, '3.67', '2020-05-16 23:33:24'),
(107, 1, 'ANACM', '3.99', '0.01', 1, '4.00', '2020-05-16 23:35:39'),
(108, 1, 'ZOREN', '1.33', '0.00', 1, '1.33', '2020-05-16 23:43:17');

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
(1, 'CELAL', 'KUTLUER', 'celal', '+905075091032', '0000-00-00', '4a7d1ed414474e4033ac29ccb8653d9b', '4377.53', NULL, '1', '2020-03-23 17:28:39', NULL, 1, '1', '1', NULL, NULL),
(3, 'Celal', 'KUTLUER', 'celal1', '555', '2020-03-04', '4a7d1ed414474e4033ac29ccb8653d9b', '10000.00', 'c5903bd6edb28d2e9a78f37d48bc42d89cbe9a17', '0', '2020-03-27 14:50:55', NULL, 1, '0', '1', NULL, NULL),
(4, 'df', 'fsd', 'celaldfs', '5555555555', '2020-05-28', '4a7d1ed414474e4033ac29ccb8653d9b', '9963.12', '8285842ec854f07ff59143f094d6e631c02a2f0a', '0', '2020-05-01 21:16:49', NULL, NULL, '0', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ligler`
--

CREATE TABLE `ligler` (
                          `lig_id` int(11) NOT NULL,
                          `lig_baslik` text COLLATE utf8_turkish_ci DEFAULT NULL,
                          `lig_duyuru` text COLLATE utf8_turkish_ci DEFAULT NULL,
                          `lig_uye_1` int(11) DEFAULT NULL,
                          `lig_uye_2` int(11) DEFAULT NULL,
                          `lig_uye_3` int(11) DEFAULT NULL,
                          `lig_uye_4` int(11) DEFAULT NULL,
                          `lig_yonetici_id` int(11) DEFAULT NULL,
                          `lig_son_siralama` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

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
(49, 1, 'Hisse Alım', '1 -Nolu kullanıcı CELAL KUTLUER ZOREN hissesini 1.33 TL tutardan 1 adet aldı. Bu işlem için 0.00 TL komisyon ile 1.33 TL toplam tutar ödedi.', '2020-05-16 23:43:17');

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
                         `satim_hisse_toplam_tutar` decimal(10,2) DEFAULT NULL,
                         `satim_zaman` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `satim`
--

INSERT INTO `satim` (`satim_id`, `satim_kul_id`, `satim_hisse_sembol`, `satim_hisse_deger`, `satim_hisse_komisyon`, `satim_hisse_lot`, `satim_hisse_toplam_tutar`, `satim_zaman`) VALUES
(1, 1, 'AEFES', '18.38', '0.06', 1, '18.44', '2020-05-01 14:20:10'),
(2, 1, 'AEFES', '16.94', '0.05', 1, '16.99', '2020-05-16 21:14:35'),
(3, 1, 'AEFES', '16.94', '0.05', 1, '16.99', '2020-05-16 21:17:02'),
(4, 1, 'AEFES', '16.94', '0.41', 8, '135.93', '2020-05-16 21:18:37'),
(5, 1, 'AEFES', '16.94', '0.05', 1, '16.99', '2020-05-16 21:24:57'),
(6, 1, '', '0.00', '0.00', 0, '0.00', '2020-05-16 21:25:11'),
(7, 1, '', '0.00', '0.00', 0, '0.00', '2020-05-16 21:25:14'),
(8, 1, 'AEFES', '16.94', '0.05', 1, '16.99', '2020-05-16 21:25:23'),
(9, 1, '', '0.00', '0.00', 0, '0.00', '2020-05-16 21:25:31'),
(10, 1, 'AEFES', '16.94', '0.05', 1, '16.99', '2020-05-16 21:25:40'),
(11, 1, 'AEFES', '16.94', '0.05', 1, '16.99', '2020-05-16 21:26:50'),
(12, 1, '', '0.00', '0.00', 0, '0.00', '2020-05-16 21:26:59'),
(13, 1, '', '0.00', '0.00', 0, '0.00', '2020-05-16 21:27:07'),
(14, 1, 'AEFES', '16.94', '0.05', 1, '16.99', '2020-05-16 21:27:15'),
(15, 1, 'AEFES', '16.94', '0.05', 1, '16.89', '2020-05-16 21:44:48'),
(16, 1, '', '0.00', '0.00', 0, '0.00', '2020-05-16 21:44:58'),
(17, 1, '', '0.00', '0.00', 0, '0.00', '2020-05-16 21:45:05'),
(18, 1, '', '0.00', '0.00', 0, '0.00', '2020-05-16 21:45:06'),
(19, 1, 'AEFES', '16.94', '0.05', 1, '16.89', '2020-05-16 21:45:15'),
(20, 1, 'AEFES', '16.94', '0.05', 1, '16.89', '2020-05-16 21:59:47'),
(21, 1, 'AEFES', '16.94', '0.05', 1, '16.89', '2020-05-16 22:01:06'),
(22, 1, 'AEFES', '16.94', '0.05', 1, '16.89', '2020-05-16 22:03:22'),
(23, 1, 'AEFES', '16.94', '0.05', 1, '16.89', '2020-05-16 22:03:59'),
(24, 1, 'AEFES', '16.94', '0.05', 1, '16.89', '2020-05-16 22:04:52'),
(25, 1, 'AEFES', '16.94', '0.05', 1, '16.89', '2020-05-16 22:05:49'),
(26, 1, 'ANELE', '3.66', '0.01', 1, '3.65', '2020-05-16 23:32:45'),
(27, 1, 'ANELE', '3.66', '0.03', 3, '10.95', '2020-05-16 23:33:40'),
(28, 1, 'AEFES', '16.94', '0.86', 17, '287.12', '2020-05-16 23:35:50');

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
(1, 1, 'AEFES', 57, 40, 17, '2020-04-30 23:10:51'),
(4, 1, 'ZOREN', 3, 0, 3, '2020-05-16 23:12:27'),
(5, 1, 'IEYHO', 2, 0, 2, '2020-05-16 23:15:55'),
(6, 1, 'DEVA', 2, 0, 2, '2020-05-16 23:16:24'),
(7, 1, 'AFYON', 2, 0, 2, '2020-05-16 23:18:31'),
(8, 1, 'ANELE', 4, 4, 0, '2020-05-16 23:32:23'),
(9, 1, 'ANACM', 1, 0, 1, '2020-05-16 23:35:39');

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
    MODIFY `alim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
    MODIFY `kul_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `ligler`
--
ALTER TABLE `ligler`
    MODIFY `lig_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `log`
--
ALTER TABLE `log`
    MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Tablo için AUTO_INCREMENT değeri `satim`
--
ALTER TABLE `satim`
    MODIFY `satim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Tablo için AUTO_INCREMENT değeri `varliklar`
--
ALTER TABLE `varliklar`
    MODIFY `varlik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
