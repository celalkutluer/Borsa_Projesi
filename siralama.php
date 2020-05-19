<?php
include "inc/header.php";
?>


    <section role="main" class="content-body">
        <div class="conteiner">
            <div class="tabs ">
                <ul class="nav nav-tabs nav-justified">
                    <li class="active">
                        <a href="#kullanici" data-toggle="tab" class="text-center">KULLANICI SIRALAMASI</a>
                    </li>
                    <li>
                        <a href="#lig" data-toggle="tab" class="text-center">LİG SIRALAMASI</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="kullanici" class="tab-pane active">
                        <div class="tabs tabs-danger">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active">
                                    <a href="#kullanici_gun" data-toggle="tab" class="text-center">GÜNLÜK</a>
                                </li>
                                <li>
                                    <a href="#kullanici_hafta" data-toggle="tab" class="text-center">HAFTALIK</a>
                                </li>
                                <li>
                                    <a href="#kullanici_ay" data-toggle="tab" class="text-center">AYLIK</a>
                                </li>
                                <li>
                                    <a href="#kullanici_genel" data-toggle="tab" class="text-center">GENEL</a>
                                </li>
                            </ul>
                            <div class="tab-content  tabs-danger">
                                <div id="kullanici_gun" class="tab-pane active">
                                    <section class="panel">
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">Sıra</th>
                                                        <th class="text-center">Ad</th>
                                                        <th class="text-center">Soyad</th>
                                                        <th class="text-center">Kazanç/Kayıp</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $sayi=0;
                                                    $veri_gunluk_kul_sira = $db->prepare('SELECT UPPER(kullanicilar.kul_Ad) AS AD,UPPER(kullanicilar.kul_Soyad) AS SOYAD, SUM(satim.satim_kar_zarar) AS DURUM FROM satim INNER JOIN kullanicilar ON kullanicilar.kul_Id = satim.satim_kul_id WHERE satim_zaman between CURDATE() and DATE_SUB(CURDATE(), INTERVAL -1 DAY) GROUP BY satim_kul_id ORDER BY satim_kar_zarar DESC LIMIT 10');
                                                    $veri_gunluk_kul_sira->execute(array());
                                                    $v_gunluk_kul_sira = $veri_gunluk_kul_sira->fetchAll(PDO::FETCH_ASSOC);
                                                    $say_gunluk_kul_sira = $veri_gunluk_kul_sira->rowCount();
                                                    foreach ($v_gunluk_kul_sira as $gunluk_kul_sira) {
                                                        echo
                                                            "<tr>
                                                        <td class='text-center'>" . ($sayi+1) . "</td>
                                                        <td class='text-center' id='kaybedenler_gun_Ad_" . $sayi . "'>" . $gunluk_kul_sira['AD']. "</td>
                                                        <td class='text-center' id='kaybedenler_gun_Soyad_" . $sayi . "'>" . $gunluk_kul_sira['SOYAD']. "</td>
                                                        <td class='text-center' id='kaybedenler_gun_TL_" . $sayi . "'>" . $gunluk_kul_sira['DURUM']. " TL</td>
                                                                </tr> 
                                                                ";
                                                        $sayi++;
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div id="kullanici_hafta" class="tab-pane">
                                    <section class="panel">
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">Sıra</th>
                                                        <th class="text-center">Ad</th>
                                                        <th class="text-center">Soyad</th>
                                                        <th class="text-center">Kazanç/Kayıp</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $sayi=0;
                                                    $veri_gunluk_kul_sira = $db->prepare('
SELECT UPPER(kullanicilar.kul_Ad) AS AD,UPPER(kullanicilar.kul_Soyad) AS SOYAD, SUM(satim.satim_kar_zarar) AS DURUM FROM satim 
INNER JOIN kullanicilar ON kullanicilar.kul_Id = satim.satim_kul_id 
WHERE satim_zaman between DATE_SUB(DATE_SUB(CURDATE(), INTERVAL 1 WEEK), INTERVAL -1 DAY) and DATE_SUB(CURDATE(), INTERVAL -1 DAY) GROUP BY satim_kul_id ORDER BY satim_kar_zarar DESC LIMIT 10');
                                                    $veri_gunluk_kul_sira->execute(array());
                                                    $v_gunluk_kul_sira = $veri_gunluk_kul_sira->fetchAll(PDO::FETCH_ASSOC);
                                                    $say_gunluk_kul_sira = $veri_gunluk_kul_sira->rowCount();
                                                    foreach ($v_gunluk_kul_sira as $gunluk_kul_sira) {
                                                        echo
                                                            "<tr>
                                                        <td class='text-center'>" . ($sayi+1) . "</td>
                                                        <td class='text-center' id='kaybedenler_gun_Ad_" . $sayi . "'>" . $gunluk_kul_sira['AD']. "</td>
                                                        <td class='text-center' id='kaybedenler_gun_Soyad_" . $sayi . "'>" . $gunluk_kul_sira['SOYAD']. "</td>
                                                        <td class='text-center' id='kaybedenler_gun_TL_" . $sayi . "'>" . $gunluk_kul_sira['DURUM']. " TL</td>
                                                                </tr> 
                                                                ";
                                                        $sayi++;
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div id="kullanici_ay" class="tab-pane ">
                                    <section class="panel">
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">Sıra</th>
                                                        <th class="text-center">Ad</th>
                                                        <th class="text-center">Soyad</th>
                                                        <th class="text-center">Kazanç/Kayıp</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $sayi=0;
                                                    $veri_gunluk_kul_sira = $db->prepare('
SELECT UPPER(kullanicilar.kul_Ad) AS AD,UPPER(kullanicilar.kul_Soyad) AS SOYAD, SUM(satim.satim_kar_zarar) AS DURUM FROM satim 
INNER JOIN kullanicilar ON kullanicilar.kul_Id = satim.satim_kul_id 
WHERE satim_zaman between DATE_SUB(DATE_SUB(CURDATE(), INTERVAL 1 MONTH), INTERVAL -1 DAY) and DATE_SUB(CURDATE(), INTERVAL -1 DAY) GROUP BY satim_kul_id ORDER BY satim_kar_zarar DESC LIMIT 10');
                                                    $veri_gunluk_kul_sira->execute(array());
                                                    $v_gunluk_kul_sira = $veri_gunluk_kul_sira->fetchAll(PDO::FETCH_ASSOC);
                                                    $say_gunluk_kul_sira = $veri_gunluk_kul_sira->rowCount();
                                                    foreach ($v_gunluk_kul_sira as $gunluk_kul_sira) {
                                                        echo
                                                            "<tr>
                                                        <td class='text-center'>" . ($sayi+1) . "</td>
                                                        <td class='text-center' id='kaybedenler_gun_Ad_" . $sayi . "'>" . $gunluk_kul_sira['AD']. "</td>
                                                        <td class='text-center' id='kaybedenler_gun_Soyad_" . $sayi . "'>" . $gunluk_kul_sira['SOYAD']. "</td>
                                                        <td class='text-center' id='kaybedenler_gun_TL_" . $sayi . "'>" . $gunluk_kul_sira['DURUM']. " TL</td>
                                                                </tr> 
                                                                ";
                                                        $sayi++;
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div id="kullanici_genel" class="tab-pane">
                                    <section class="panel">
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">Sıra</th>
                                                        <th class="text-center">Ad</th>
                                                        <th class="text-center">Soyad</th>
                                                        <th class="text-center">Kazanç/Kayıp</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $sayi=0;
                                                    $veri_gunluk_kul_sira = $db->prepare('
SELECT UPPER(kullanicilar.kul_Ad) AS AD,UPPER(kullanicilar.kul_Soyad) AS SOYAD, SUM(satim.satim_kar_zarar) AS DURUM FROM satim 
INNER JOIN kullanicilar ON kullanicilar.kul_Id = satim.satim_kul_id 
WHERE satim_zaman between DATE_SUB(DATE_SUB(CURDATE(), INTERVAL 1 YEAR), INTERVAL -1 DAY) and DATE_SUB(CURDATE(), INTERVAL -1 DAY) GROUP BY satim_kul_id ORDER BY satim_kar_zarar DESC LIMIT 10');
                                                    $veri_gunluk_kul_sira->execute(array());
                                                    $v_gunluk_kul_sira = $veri_gunluk_kul_sira->fetchAll(PDO::FETCH_ASSOC);
                                                    $say_gunluk_kul_sira = $veri_gunluk_kul_sira->rowCount();
                                                    foreach ($v_gunluk_kul_sira as $gunluk_kul_sira) {
                                                        echo
                                                            "<tr>
                                                        <td class='text-center'>" . ($sayi+1) . "</td>
                                                        <td class='text-center' id='kaybedenler_gun_Ad_" . $sayi . "'>" . $gunluk_kul_sira['AD']. "</td>
                                                        <td class='text-center' id='kaybedenler_gun_Soyad_" . $sayi . "'>" . $gunluk_kul_sira['SOYAD']. "</td>
                                                        <td class='text-center' id='kaybedenler_gun_TL_" . $sayi . "'>" . $gunluk_kul_sira['DURUM']. " TL</td>
                                                                </tr> 
                                                                ";
                                                        $sayi++;
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="lig" class="tab-pane">
                        <div class="tabs tabs-success">
                            <ul class="nav nav-tabs nav-justified">
                                <li>
                                    <a href="#lig_hafta" data-toggle="tab" class="text-center">HAFTALIK</a>
                                </li>
                                <li>
                                    <a href="#lig_ay" data-toggle="tab" class="text-center">AYLIK</a>
                                </li>
                                <li>
                                    <a href="#lig_genel" data-toggle="tab" class="text-center">GENEL</a>
                                </li>
                            </ul>
                            <div class="tab-content  tabs-danger">
                                <div id="lig_hafta" class="tab-pane active">
                                    <section class="panel">
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">Sıra</th>
                                                        <th class="text-center">Ad</th>
                                                        <th class="text-center">Soyad</th>
                                                        <th class="text-center">Kazanç</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    for ($sayi = 0; $sayi < 10; $sayi++) {
                                                        echo
                                                            "<tr>
                                                        <td class='text-center'>" . ($sayi + 1) . "</td>
                                                        <td class='text-center' id='kazananlar_gun_Ad_" . $sayi . "'>Ad</td>
                                                        <td class='text-center' id='kazananlar_gun_Soyad_" . $sayi . "'>Soyad</td>
                                                        <td class='text-center' id='kazananlar_gun_TL_" . $sayi . "'>TL</td>
                                                    </tr> 
                                                ";
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div id="lig_ay" class="tab-pane">
                                    <section class="panel">
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">Sıra</th>
                                                        <th class="text-center">Ad</th>
                                                        <th class="text-center">Soyad</th>
                                                        <th class="text-center">Kazanç</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    for ($sayi = 0; $sayi < 10; $sayi++) {
                                                        echo
                                                            "<tr>
                                                        <td class='text-center'>" . ($sayi + 1) . "</td>
                                                        <td class='text-center' id='kazananlar_hafta_Ad_" . $sayi . "'>Ad</td>
                                                        <td class='text-center' id='kazananlar_hafta_Soyad_" . $sayi . "'>Soyad</td>
                                                        <td class='text-center' id='kazananlar_hafta_TL_" . $sayi . "'>TL</td>
                                                                </tr> 
                                                                ";
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </section>

                                </div>
                                <div id="lig_genel" class="tab-pane ">
                                    <section class="panel">
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">Sıra</th>
                                                        <th class="text-center">Ad</th>
                                                        <th class="text-center">Soyad</th>
                                                        <th class="text-center">Kazanç</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    for ($sayi = 0; $sayi < 10; $sayi++) {
                                                        echo
                                                            "<tr>
                                                        <td class='text-center'>" . ($sayi + 1) . "</td>
                                                        <td class='text-center' id='kazananlar_ay_Ad_" . $sayi . "'>Ad</td>
                                                        <td class='text-center' id='kazananlar_ay_Soyad_" . $sayi . "'>Soyad</td>
                                                        <td class='text-center' id='kazananlar_ay_TL_" . $sayi . "'>TL</td>
                                                                </tr> 
                                                                ";
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include "inc/footer.php"; ?>