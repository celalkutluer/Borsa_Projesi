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
    <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css"/>
    <link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css"/>

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="assets/vendor/jquery-ui/jquery-ui.css"/>
    <link rel="stylesheet" href="assets/vendor/jquery-ui/jquery-ui.theme.css"/>
    <link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css"/>
    <link rel="stylesheet" href="assets/vendor/morris.js/morris.css"/>

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
        <div class="logo-container">
            <a href="index.php" class="logo">
                <img src="img/logo.png" width="120" height="40" alt="Borsa"/>
            </a>
            <button class="btn header-btn-collapse-nav hidden-md hidden-lg" data-toggle="collapse"
                    data-target=".header-nav">
                <i class="fa fa-bars"></i>
            </button>

            <!-- start: header nav menu -->
            <div class="header-nav collapse ">
                <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                    <nav>
                        <ul class="nav nav-pills" id="mainNav">
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
                    </nav>
                </div>
            </div>
            <!-- end: header nav menu -->
        </div>
        <!-- input-group-btn -->
        <div class="header-right">
            <button class="btn header-btn-collapse-nav hidden-md hidden-lg" data-toggle="collapse"
                    data-target=".header-nav">
                <i class="fa fa-bars"></i>
            </button>

            <!-- start: header nav menu -->
            <div class="header-nav collapse ">
                <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                    <nav>
                        <ul class="nav nav-pills" id="mainNav">
                            <?php
                            if (isset($_SESSION['yetki'])) {
                            } else {
                                echo "
                                            <li>
                                                <a class='nav-link ' href='giris.php'>
                                                    Giriş
                                                </a>
                                            </li>
                                            <li>
                                                <a class='nav-link ' href='kayit.php'>
                                                    Kayıt
                                                </a>
                                            </li>";
                            }
                            ?>
                            <?php
                            if (isset($_SESSION['yetki'])) {
                                echo "<li>
                                                <a class='nav-link ' href='profil.php'>
                                                    Profil(" . s("isim") . " " . s('soyisim') . ") </a>
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
            <span class="input-group-btn">
			</span>
        </div>
        <!-- input-group-btn -->
    </header>
    <!-- end: header -->

</section>

<!-- Vendor -->
<script src="assets/vendor/jquery/jquery.js"></script>
<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>
<script src="assets/vendor/jquery-placeholder/jquery-placeholder.js"></script>

<!-- Specific Page Vendor -->
<script src="assets/vendor/jquery-ui/jquery-ui.js"></script>
<script src="assets/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js"></script>
<script src="assets/vendor/jquery-appear/jquery-appear.js"></script>
<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="assets/vendor/flot/jquery.flot.js"></script>
<script src="assets/vendor/flot.tooltip/flot.tooltip.js"></script>
<script src="assets/vendor/flot/jquery.flot.pie.js"></script>
<script src="assets/vendor/flot/jquery.flot.categories.js"></script>
<script src="assets/vendor/flot/jquery.flot.resize.js"></script>
<script src="assets/vendor/jquery-sparkline/jquery-sparkline.js"></script>
<script src="assets/vendor/raphael/raphael.js"></script>
<script src="assets/vendor/morris.js/morris.js"></script>
<script src="assets/vendor/gauge/gauge.js"></script>
<script src="assets/vendor/snap.svg/snap.svg.js"></script>
<script src="assets/vendor/liquid-meter/liquid.meter.js"></script>
<script src="assets/vendor/jqvmap/jquery.vmap.js"></script>
<script src="assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
<script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="assets/javascripts/theme.js"></script>

<!-- Theme Custom -->
<script src="assets/javascripts/theme.custom.js"></script>

<!-- Theme Initialization Files -->
<script src="assets/javascripts/theme.init.js"></script>

<!-- Examples -->
<script src="assets/javascripts/layouts/examples.header.menu.js"></script>
<script src="assets/javascripts/dashboard/examples.dashboard.js"></script>

</body>
</html>