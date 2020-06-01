<?php
include "inc/header.php";
$komisyon = 1.003;
kullanicikontrol();
?>
<section role="main" class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-3">
                <section class="panel">
                    <div class="panel-body">
                        <div class="row">
                            <div class="small-12 medium-2 large-2 columns">
                                <div class="circle">
                                    <!-- User Profile Image -->
                                    <form method="post" action="" enctype="multipart/form-data" id="myform">
                                        <div class='preview'>
                                            <img src='
                                                 <?php
                                            $veri_resim = $db->prepare('SELECT kul_Resim FROM kullanicilar WHERE kul_Id=?');
                                            $veri_resim->execute(array($_SESSION['kul_id']));
                                            $v_resim = $veri_resim->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($v_resim as $kul_resim) ;
                                            echo $kul_resim['kul_Resim'];
                                            ?>' id="img" width="250" height="250">
                                        </div>
                                        <div>
                                            <input type="file" id="file" name="file" accept="image/*"/>
                                            <!--ALERT-->
                                            <div id="profil_resim_Alert"></div>
                                            <!--ALERT-->
                                            <input type="button" class="btn btn-primary btn-block" value="Değiştir" id="but_upload">
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                </section>
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                            <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                        </div>
                        <h2 class="panel-title">Bilgiler</h2>
                    </header>
                    <div class="panel-body">
                        <ul class="simple-post-list">
                            <li>
                                <div class="post-info">
                                    <div class="text-center">Son 5 Online Olunan Tarih</div>
                                    <?php
                                    /**/
                                    $sayi = 0;
                                    $veri_tarih = $db->prepare('SELECT log_zaman FROM log WHERE log_kul_id=? and log_eylem="Giriş" ORDER BY log_zaman DESC LIMIT 5');
                                    $veri_tarih->execute(array($_SESSION['kul_id']));
                                    $v_tarih = $veri_tarih->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($v_tarih as $tarih) {
                                        echo "<div class='text-center'>" . (new \DateTime($tarih['log_zaman']))->format('d-m-Y H:i:s') . PHP_EOL . "</div>";
                                        $sayi++;
                                    }
                                    /**/
                                    ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
            <div class="col-md-8 col-lg-6">
                <div class="tabs">
                    <ul class="nav nav-tabs tabs-primary">
                        <li class="active">
                            <a href="#overview" data-toggle="tab">Kullanıcı Bilgileri</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="overview" class="tab-pane active">
                            <?php
                            $veri_profil = $db->prepare('SELECT `kul_Ad`,`kul_Soyad`,`kul_Eposta`,`kul_CepNo`,`kul_DogumTar` FROM `kullanicilar` WHERE `kul_Id`=?');
                            $veri_profil->execute(array($_SESSION['kul_id']));
                            $v_profil = $veri_profil->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($v_profil as $profil) ;
                            ?>
                            <!--ALERT-->
                            <div id='profil_alert'></div>
                            <!--ALERT-->
                            <form class="form-horizontal" method="get" id="profil_form_bilgi">
                                <fieldset>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="profilAd">Ad</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="profilAd"
                                                   value="<?php echo $profil['kul_Ad']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="profilSoyad">Soyad</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="profilSoyad"
                                                   value="<?php echo $profil['kul_Soyad']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="profilEposta">E-posta</label>
                                        <div class="col-md-8">
                                            <input type="email" class="form-control" id="profilEposta"
                                                   value="<?php echo $profil['kul_Eposta']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="profilCepNo">Cep Telefonu</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="profilCepNo"
                                                   value="<?php echo $profil['kul_CepNo']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="profilDogumTar">Doğum
                                            Tarihi</label>
                                        <div class="col-md-8">
                                            <input type="date" class="form-control" id="profilDogumTar"
                                                   value="<?php echo $profil['kul_DogumTar']; ?>">
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="panel-footer">
                                    <div class="container-fluid">
                                        <div class="col-md">
                                            <button id="profil_bilgi_kaydet_btn" type="button"
                                                    class="btn btn-primary btn-block"<?php echo "onclick=" . chr(34) . "profil_bilgi_kaydet()" . chr(34); ?>
                                                    disabled>Kaydet
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <hr class="dotted tall">
                                <script type="text/javascript">
                                    function profil_bilgi_kaydet() {
                                        var data = {
                                            'profilAd': document.getElementById('profilAd').value,
                                            'profilSoyad': document.getElementById('profilSoyad').value,
                                            'profilEposta': document.getElementById('profilEposta').value,
                                            'profilCepNo': document.getElementById('profilCepNo').value,
                                            'profilDogumTar': document.getElementById('profilDogumTar').value,
                                            'kul_id': $("#anasayfa_kul_id").val()
                                        }
                                        $.ajax({
                                            type: 'POST',
                                            url: 'settings/islem.php?islem=profil_bilgi_kaydet',
                                            data: data,
                                            success: function (cevap) {
                                                $("#profil_alert").html(cevap).hide().fadeIn(700);
                                            }
                                        });
                                    }
                                </script>
                            </form>
                            <!--ALERT-->
                            <div id='profil_sifre_alert'></div>
                            <!--ALERT-->
                            <form class="form-horizontal" method="get" id="profil_form_sifre">
                                <h4 class="mb-xlg">Şifre Değiştirme</h4>
                                <fieldset class="mb-xl">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="profileNewPassword">Yeni
                                            Şifre</label>
                                        <div class="col-md-8">
                                            <input type="password" class="form-control" id="profileNewPassword">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="profileNewPasswordRepeat">Yei
                                            Şifre
                                            Tekrar</label>
                                        <div class="col-md-8">
                                            <input type="password" class="form-control"
                                                   id="profileNewPasswordRepeat">
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="panel-footer">
                                    <div class="container-fluid">
                                        <div class="col-md">
                                            <button id="profil_sifre_kaydet_btn" type="button"
                                                    class="btn btn-primary btn-block"<?php echo "onclick=" . chr(34) . "profil_sifre_kaydet()" . chr(34); ?>
                                                    disabled>Kaydet
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    function profil_sifre_kaydet() {
                                        var data = {
                                            'sifre': document.getElementById('profileNewPassword').value,
                                            'sifre_tekrar': document.getElementById('profileNewPasswordRepeat').value,
                                            'kul_id': $("#anasayfa_kul_id").val()
                                        }
                                        $.ajax({
                                            type: 'POST',
                                            url: 'settings/islem.php?islem=profil_sifre_kaydet',
                                            data: data,
                                            success: function (cevap) {
                                                $("#profil_sifre_alert").html(cevap).hide().fadeIn(700);
                                            }
                                        });
                                    }
                                </script>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-3">

                <h4 class="mb-md">Mali Bilgiler</h4>
                <ul class="simple-card-list mb-xlg">
                    <li class="info">
                        <h3><?php echo $_SESSION['bakiye']; ?> &#x20BA;</h3>
                        <p>Toplam Varlığım</p>
                    </li>
                    <li class="primary">
                        <h3>
                            <?php
                            $veri_profil_elimdeki_lot = $db->prepare('SELECT sum(`alim_lot_satilmayan`) as toplam_lot FROM `alim` WHERE `alim_kul_id`=?');
                            $veri_profil_elimdeki_lot->execute(array($_SESSION['kul_id']));
                            $v_profil_elimdeki_lot = $veri_profil_elimdeki_lot->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($v_profil_elimdeki_lot as $profil_elimdeki_lot) ;
                            echo $profil_elimdeki_lot['toplam_lot'];
                            ?>
                        </h3>
                        <p>Elimdeki Lot</p>
                    </li>
                    <li class="warning">
                        <?php
                        //
                        $sayi = 0;
                        $veri_aktif_varlik = $db->prepare('SELECT * FROM `alim` WHERE `alim_kul_id`=? and alim_lot_satilmayan>0 order by alim_lot_satilmayan desc ');
                        $veri_aktif_varlik->execute(array($_SESSION['kul_id']));
                        $v_aktif_varlik = $veri_aktif_varlik->fetchAll(PDO::FETCH_ASSOC);
                        $say_aktif_varlik = $veri_aktif_varlik->rowCount();
                        ////
                        if($say_aktif_varlik>0){
                            $satilmayan_fiyat = 0;
                            $satilmayan_son_deger = 0;
                            /////////////
                            foreach ($v_aktif_varlik as $aktif_varlik) {
                                ////
                                $aktif_varlik_fiyat = round(($aktif_varlik['alim_hisse_toplam_tutar'] / $aktif_varlik['alim_hisse_lot']), 2);
                                $satilmayan_fiyat = $satilmayan_fiyat + round(($aktif_varlik_fiyat * $aktif_varlik['alim_lot_satilmayan']), 2);
                                //
                                $son_deger = round(bakiye_son($aktif_varlik['alim_hisse_sembol']), 2);
                                $satilmayan_son_deger = $satilmayan_son_deger + round((($son_deger * $aktif_varlik['alim_lot_satilmayan']) - ($son_deger * $aktif_varlik['alim_lot_satilmayan']) * ($komisyon - 1)), 2);
                                ///
                            }
                            $toplam_varlik_kar = round((($satilmayan_son_deger / $satilmayan_fiyat) - 1), 5);
                            echo "<h3 class='";
                            if ($toplam_varlik_kar > 0) {
                                echo "fa fa-arrow-up";
                            } elseif ($toplam_varlik_kar == 0) {
                                echo "fa fa-minus";
                            } else {
                                echo "fa fa-arrow-down";
                            }
                            echo " '> " . $toplam_varlik_kar;
                        }
                        echo " %</h3>
                        <p>Elimdeki Lotların Kar-Zarar Durumu</p>
                    </li>";
                        ?>
                    <li class="success">
                        <h3>
                            <?php
                            $veri_profil_aylik_kar = $db->prepare('SELECT sum(`satim_kar_zarar`) as durum,sum(`satim_hisse_toplam_tutar`) as toplam FROM `satim` WHERE satim_zaman between DATE_SUB(DATE_SUB(CURDATE(), INTERVAL 1 MONTH), INTERVAL -1 DAY) and DATE_SUB(CURDATE(), INTERVAL -1 DAY) and `satim_kul_id`=?');
                            $veri_profil_aylik_kar->execute(array($_SESSION['kul_id']));
                            $v_profil_aylik_kar = $veri_profil_aylik_kar->fetchAll(PDO::FETCH_ASSOC);
                            $say_profil_aylik_kar = $veri_profil_aylik_kar->rowCount();
                            foreach ($v_profil_aylik_kar as $profil_aylik_kar) ;

                            if($say_profil_aylik_kar>0&&($profil_aylik_kar['toplam'] - $profil_aylik_kar['durum'])!=0){
                                echo round(($profil_aylik_kar['durum'] / ($profil_aylik_kar['toplam'] - $profil_aylik_kar['durum'])), 5);
                            }
                            echo " %</h3>
                        <p>Son 1 aydaki Kar-Zarar Durumum</p>
                    </li>";
                            ?>
                    <li class="dark">
                        <h3>
                            <?php
                            $veri_profil_aylik_kar = $db->prepare('SELECT sum(`satim_kar_zarar`) as durum,sum(`satim_hisse_toplam_tutar`) as toplam FROM `satim` WHERE satim_zaman between DATE_SUB(DATE_SUB(CURDATE(), INTERVAL 1 MONTH), INTERVAL -1 DAY) and DATE_SUB(CURDATE(), INTERVAL -1 DAY) and `satim_kul_id`=?');
                            $veri_profil_aylik_kar->execute(array($_SESSION['kul_id']));
                            $v_profil_aylik_kar = $veri_profil_aylik_kar->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($v_profil_aylik_kar as $profil_aylik_kar) ;
                            if(($profil_aylik_kar['toplam'] - $profil_aylik_kar['durum'])!=0){echo round(($profil_aylik_kar['durum'] / ($profil_aylik_kar['toplam'] - $profil_aylik_kar['durum'])), 5) ;}
                             echo  " %</h3>
                        <p>Genel Kar-Zarar Durumum</p>
                    </li>";
                            ?>
                </ul>
            </div>
        </div>
        <!-- end: page -->

    </div>
</section>
<?php include "inc/footer.php"; ?>
