<?php
include "settings/baglantilar.php";
include "settings/fonksiyonlar.php";
if (isset($_SESSION['yetki'])) {
} else {
    $_SESSION['yetki'] = "kullanici";
}
?>
<!DOCTYPE html>
<html>
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
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet" type="text/css">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/theme-elements.css">
    <link rel="stylesheet" href="css/theme-blog.css">
    <link rel="stylesheet" href="css/theme-shop.css">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="css/demos/demo-insurance.css">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="css/skins/skin-insurance.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.min.js"></script>

</head>
<body>

<div class="body">
    <header id="header" class="header-effect-shrink"
            data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
        <div class="header-body header-body-bottom-border border-top-0">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a class="navbar-toggler" href="index.php">
                                    <img alt="Borsa" width="200" height="96" data-sticky-width="150"
                                         data-sticky-height="72" src="img/logo.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <div class="header-nav header-nav-line header-nav-bottom-line">
                                <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <?php
                                            if ($_SESSION['yetki'] == "kullanici") {
                                            }
                                            else {
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
                                            }
                                            ?>
                                            <?php
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
                                            }
                                            else {} ?>
                                            <li>
                                                <a class="nav-link" href="siralama.php">
                                                    Liderlik
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link " href="giris.php">
                                                    Giriş
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link " href="kayit.php">
                                                    Kayıt
                                                </a>
                                            </li>
                                            <?php
                                            if ($_SESSION['yetki'] == "kullanici") {
                                            } else {
                                                echo "<li>
                                                <a class='nav-link ' href='profil.php'>
                                                    Profil(" . s("isim") . " " . s('soyisim') . ")";
                                            }
                                            ?>
                                            </a>
                                            </li>
                                            <?php
                                            if ($_SESSION['yetki'] == "kullanici") {
                                            } else {
                                                echo "<li>
                                                <a role='menuitem' tabindex='-1' href='settings/islem.php?islem=cikis'><i class='fa fa-power-off'></i> Çıkış</a>
                                            </li>";
                                            }
                                            ?>
                                        </ul>
                                    </nav>
                                </div>
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse"
                                        data-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div role="main" class="main">