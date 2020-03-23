<?php
include "settings/baglantilar.php";
include "settings/fonksiyonlar.php";
?>
<!doctype html>
<html class="fixed has-top-menu">
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Borsa Yatırım Fantazi Ligi</title>

    <meta name="keywords" content="Borsa Yatırım Fantazi Ligi"/>
    <meta name="description" content="Borsa Yatırım Fantazi Ligi">
    <meta name="author" content="Borsa Yatırım Fantazi Ligi">
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="../img/icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light"
          rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css"/>

    <link rel="stylesheet" href="assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css"/>
    <link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css"/>

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="assets/vendor/jquery-ui/jquery-ui.css"/>
    <link rel="stylesheet" href="assets/vendor/jquery-ui/jquery-ui.theme.css"/>
    <link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css"/>
    <link rel="stylesheet" href="assets/vendor/morris.js/morris.css"/>
    <link rel="stylesheet" href="assets/vendor/select2/css/select2.css" />
    <link rel="stylesheet" href="assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendor/pnotify/pnotify.custom.css" />
    <link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />
    <!-- Slider-->
    <link rel="stylesheet" href="assets/vendor/jquery-ui/jquery-ui.structure.min.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/stylesheets/theme.css"/>

    <!-- Skin CSS -->
    <link rel="stylesheet" href="assets/stylesheets/skins/default.css"/>

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

    <!-- Head Libs -->
    <script src="assets/vendor/modernizr/modernizr.js"></script>

</head>
<body>
<section class="body">

    <!-- start: header -->
    <header class="header header-nav-menu">
        <div class="container-fluid">
            <a href="index.php" class="logo">
                <img src="img/logo.png" width="120" height="40" alt="Borsa"/>
            </a>

            <div class="header-nav collapse">
                <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                    <nav >
                        <ul class="nav navbar-nav nav-pills" id="mainNav">
                            <?php
                            if (isset($_SESSION['yetki'])) {

                                echo "
                                            <li class='dropdown'>
                                                <a class='nav-link dropdown-toggle active' href='portfoy.php'>
                                                    Portföy
                                                </a>
                                                <ul class='dropdown-menu'>
                                                    <li><a href='aktif_varliklar.php' class='dropdown-item'>Aktif
                                                            Varlıklarım</a></li>
                                                    <li><a href='gecmis_alim_satimlar.php' class='dropdown-item'>Geçmiş
                                                            Alım-Satımlar</a></li>
                                                </ul>
                                            </li>";
                            } else {
                            }
                            ?>
                            <?php
                            if (isset($_SESSION['yetki'])) {
                                if ($_SESSION['yetki'] == "1") {
                                    echo "<li class='dropdown'>
                                                <a class='nav-link dropdown-toggle' href='yonetim.php'>
                                                    Yönetim
                                                </a>
                                                <ul class='dropdown-menu'>
                                                    <li><a href='kullanicilar.php'
                                                           class='dropdown-item'>Kullanıcılar</a></li>
                                                    <li><a href='log_kayitlari.php' class='dropdown-item'>Log
                                                            Kayıtları</a></li>
                                                    <li><a href='mali_durum.php' class='dropdown-item'>Mali Durum</a>
                                                    </li>
                                                </ul>
                                            </li>";
                                } else {
                                }
                            }
                            ?>
                            <li>
                                <a class="nav-link" href="siralama.php">
                                    Liderlik
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav nav-pills ml-auto" id="mainNav">
                            <?php
                            if (isset($_SESSION['yetki'])) {
                            } else {
                                echo "
                                            <li>
                                                <a class='nav-link ' href='giris.php'>
                                                    <span class='fas fa-sign-in-alt'></span>Giriş
                                                </a>
                                            </li>
                                            <li>
                                                <a class='nav-link ' href='kayit.php'>
                                                    <span class='fas fa-user'></span>Kayıt
                                                </a>
                                            </li>";
                            }
                            ?>
                            <?php
                            if (isset($_SESSION['yetki'])) {
                                echo "<li>
                                                <a class='nav-link ' href='profil.php'>
                                                    Profil(" . s("isim") . " " . s('soyisim') . ") 
                                                </a>
                                                <input id='anasayfa_kul_id' class='form-control form-control-lg' type='hidden'
                                       value='".s('kul_id')."' name='toplam'>
                                            </li>
                                            <li>
                                                <a role='menuitem' tabindex='-1' href='settings/islem.php?islem=cikis'>
                                                <i class='fa fa-power-off'></i> Çıkış</a>
                                            </li>";
                            } else {
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>

            <button class="btn header-btn-collapse-nav hidden-md hidden-lg" data-toggle="collapse"
                    data-target=".header-nav">
                <i class="fa fa-bars"></i>
            </button>

        </div>

    </header>
    <!-- end: header -->
    <section role="main" class="content-body">