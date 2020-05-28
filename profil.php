<?php
include "inc/header.php";
kullanicikontrol();
?>

<section  role="main" class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-3">
                <section class="panel">
                    <div class="panel-body">

                        <div class="row">
                            <div class="small-12 medium-2 large-2 columns">
                                <div class="circle">
                                    <!-- User Profile Image -->
                                    <img class="profile-picture" src="img/!logged-user.jpg" width="250" height="250" >

                                    <!-- Default Image -->
                                    <!-- <i class="fa fa-user fa-5x"></i> -->
                                </div>
                                <div class="p-image">
                                    <i class="fa fa-camera upload-button"></i>
                                    <input class="file-upload" type="file" accept="image/*"/>
                                </div>
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
                                    //
                                    $sayi = 0;
                                    $veri_tarih = $db->prepare('SELECT log_zaman FROM log WHERE log_kul_id=? and log_eylem="Giriş" ORDER BY log_zaman DESC LIMIT 5');
                                    $veri_tarih ->execute(array($_SESSION['kul_id']));
                                    $v_tarih = $veri_tarih ->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($v_tarih  as $tarih ) {
                                        echo"<div class='text-center'>".(new \DateTime($tarih['log_zaman']))->format('d-m-Y H:i:s') . PHP_EOL."</div>";
                                        $sayi++;
                                    }
                                    //
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
                            $veri_profil ->execute(array($_SESSION['kul_id']));
                            $v_profil = $veri_profil ->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($v_profil  as $profil );
                            ?>
                            <!--ALERT-->
                            <div id='profil_alert'></div>
                            <!--ALERT-->
                            <form class="form-horizontal" method="get" id="profil_form_bilgi">
                                <fieldset>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="profilAd">Ad</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="profilAd" value="<?php echo $profil['kul_Ad'];?>" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="profilSoyad">Soyad</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="profilSoyad" value="<?php echo $profil['kul_Soyad'];?>" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="profilEposta">E-posta</label>
                                        <div class="col-md-8">
                                            <input type="email" class="form-control" id="profilEposta" value="<?php echo $profil['kul_Eposta'];?>" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="profilCepNo">Cep Telefonu</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="profilCepNo" value="<?php echo $profil['kul_CepNo'];?>" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="profilDogumTar">Doğum Tarihi</label>
                                        <div class="col-md-8">
                                            <input type="date" class="form-control" id="profilDogumTar" value="<?php echo $profil['kul_DogumTar'];?>" >
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="panel-footer">
                                    <div class="container-fluid">
                                        <div class="col-md">
                                            <button id="profil_bilgi_kaydet_btn" type="button" class="btn btn-primary btn-block"<?php echo "onclick=".chr(34)."profil_bilgi_kaydet()".chr(34); ?> disabled>Kaydet</button>
                                        </div>
                                    </div>
                                </div>
                                <hr class="dotted tall">
                                <script type="text/javascript">
                                    function profil_bilgi_kaydet(){
                                        var data = {
                                            'profilAd': document.getElementById('profilAd').value,
                                            'profilSoyad': document.getElementById('profilSoyad').value,
                                            'profilEposta': document.getElementById('profilEposta').value,
                                            'profilCepNo': document.getElementById('profilCepNo').value,
                                            'profilDogumTar': document.getElementById('profilDogumTar').value,
                                            'kul_id': $("#anasayfa_kul_id").val()
                                        }
                                        $.ajax({
                                            type: 'POST', url: 'settings/islem.php?islem=profil_bilgi_kaydet', data: data, success: function (cevap) {
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
                                        <label class="col-md-3 control-label" for="profileNewPassword">Yeni Şifre</label>
                                        <div class="col-md-8">
                                            <input type="password" class="form-control" id="profileNewPassword">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="profileNewPasswordRepeat">Yei Şifre Tekrar</label>
                                        <div class="col-md-8">
                                            <input type="password" class="form-control" id="profileNewPasswordRepeat">
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="panel-footer">
                                    <div class="container-fluid">
                                        <div class="col-md">
                                            <button id="profil_sifre_kaydet_btn" type="button" class="btn btn-primary btn-block"<?php echo "onclick=".chr(34)."profil_sifre_kaydet()".chr(34); ?> disabled>Kaydet</button>
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
                                            type: 'POST', url: 'settings/islem.php?islem=profil_sifre_kaydet', data: data, success: function (cevap) {
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
                        <h3><?php echo $_SESSION['bakiye'];?> &#x20BA;</h3>
                        <p>Toplam Varlığım</p>
                    </li>
                    <li class="primary">
                        <h3>488</h3>
                        <p>Elimdeki Lot</p>
                    </li>
                    <li class="warning">
                        <h3 class=" fa fa-arrow-down"> -4,36 %</h3>
                        <p>Elimdeki Lotların Kar-Zarar Durumu</p>
                    </li>
                    <li class="success">
                        <h3>16 %</h3>
                        <p>Son 1 aydaki Kar-Zarar Durumum</p>
                    </li>
                    <li class="dark">
                        <h3>1,025 %</h3>
                        <p>Genel Kar-Zarar Durumum</p>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end: page -->

    </div>
</section>

<?php include "inc/footer.php"; ?>
