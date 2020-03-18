<!doctype html>
<html class="fixed">
<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />

    <link rel="stylesheet" href="assets/vendor/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

    <!-- Head Libs -->
    <script src="assets/vendor/modernizr/modernizr.js"></script>

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
                                    <img alt="Borsa" width="150" height="75" data-sticky-width="100"
                                         data-sticky-height="50" src="img/logo.png">
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
                                                }
                                                else {}
                                            }
                                            ?>
                                            <li>
                                                <a class="nav-link" href="siralama.php">
                                                    Liderlik
                                                </a>
                                            </li>
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
    <!-- start: page -->
    <section class="body-sign">
        <div class="center-sign">
            <div class="panel panel-sign">
                <div class="panel-title-sign mt-xl text-right">
                    <h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i>Giriş</h2>
                </div>
                <div class="panel-body">
                    <!--ALERT-->
                    <div id="ygirisAlert"></div>
                    <!--ALERT-->
                    <form  id="frmSignIn" method="post" >
                        <div class="form-group mb-lg">
                            <label>E-posta Adresi</label>
                            <div class="input-group input-group-icon">
                                <input name="eposta" type="text" class="form-control input-lg" />
                                <span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
                            </div>
                        </div>
                        <div class="form-group mb-lg">
                            <div class="clearfix">
                                <label class="pull-left">Şifre</label>
                                <a href="sifremi-unuttum.php" class="pull-right">Şifreni mi unuttun?</a>
                            </div>
                            <div class="input-group input-group-icon">
                                <input name="sifre" type="password" class="form-control input-lg" />
                                <span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
                            </div>
                        </div>
                        <div class="form-group mb-lg">
                            <div class="clearfix">
                                <?php
                                $s1 = rand(1, 9);
                                $s2 = rand(1, 9);
                                $t = $s1 + $s2;
                                $y = md5($t);
                                ?>
                                <label class="pull-left" id="giris_dogrulama_text">
                                    <?php
                                    echo "$s1+$s2 sayılarının toplamını giriniz.";
                                    ?>
                                </label>
                                <label class="pull-right">Doğrulama</label>
                                <input id="giris_dogrulama_input" class="form-control form-control-lg" type="hidden"
                                       value="<?php echo $y; ?>" name="toplam">
                            </div>
                            <div class="input-group input-group-icon">
                                <input name="dkodu" type="text" class="form-control input-lg" />
                                <span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="checkbox-custom checkbox-default">
                                    <input id="RememberMe" name="rememberme" type="checkbox"/>
                                    <label for="RememberMe">Hatırla</label>
                                </div>
                            </div>
                            <div class="col-sm-4 text-right">
                                <button type="button"  id="btnSignIn" type="submit" class="btn btn-primary hidden-xs">Giriş</button>
                                <button type="button"  id="btnSignIn" type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Giriş</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
<!-- end: page -->

<?php include "inc/footer.php"; ?>
