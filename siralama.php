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
                                                        <th class="text-center">#</th>
                                                        <th class="text-center">Avatar</th>
                                                        <th class="text-center">Ad</th>
                                                        <th class="text-center">Soyad</th>
                                                        <th class="text-center">Kazanç/Kayıp</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $sayi = 0;
                                                    $veri_gunluk_kul_sira = $db->prepare('SELECT UPPER(kullanicilar.kul_Ad) AS AD,
 UPPER(kullanicilar.kul_Soyad) AS SOYAD, SUM(satim.satim_kar_zarar) AS DURUM,kullanicilar.kul_Resim as kul_resmi FROM satim INNER JOIN kullanicilar 
 ON kullanicilar.kul_Id = satim.satim_kul_id WHERE satim_zaman between CURDATE() and DATE_SUB(CURDATE(), INTERVAL -1 DAY) GROUP BY satim_kul_id 
 ORDER BY durum DESC LIMIT 10');
                                                    $veri_gunluk_kul_sira->execute(array());
                                                    $v_gunluk_kul_sira = $veri_gunluk_kul_sira->fetchAll(PDO::FETCH_ASSOC);
                                                    $say_gunluk_kul_sira = $veri_gunluk_kul_sira->rowCount();
                                                    foreach ($v_gunluk_kul_sira as $gunluk_kul_sira) { ?>
                                                        <tr>
                                                            <td class='text-center'>
                                                                <img src='<?php echo "img/sira/".($sayi + 1)."_sira.jpg"; ?>'
                                                                     width='50' height='50'/>
                                                            </td>
                                                            <td class='text-center'>
                                                                <img src='<?php echo $gunluk_kul_sira['kul_resmi']; ?>'
                                                                     width='50' height='50'/>
                                                            </td>
                                                            <td class='text-center'
                                                                id='kullanici_gun_Ad_<?php echo $sayi; ?>'><?php echo $gunluk_kul_sira['AD']; ?></td>
                                                            <td class='text-center'
                                                                id='kullanici_gun_Soyad_<?php echo $sayi; ?>'><?php echo $gunluk_kul_sira['SOYAD']; ?></td>
                                                            <td class='text-center'
                                                                id='kullanici_gun_TL_<?php echo $sayi; ?>'><?php echo $gunluk_kul_sira['DURUM']; ?>
                                                                TL
                                                            </td>
                                                        </tr>
                                                        <?php
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
                                                        <th class="text-center">#</th>
                                                        <th class="text-center">Avatar</th>
                                                        <th class="text-center">Ad</th>
                                                        <th class="text-center">Soyad</th>
                                                        <th class="text-center">Kazanç/Kayıp</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $sayi = 0;
                                                    $veri_hafta_kul_sira = $db->prepare('SELECT UPPER(kullanicilar.kul_Ad) AS AD,
 UPPER(kullanicilar.kul_Soyad) AS SOYAD, SUM(satim.satim_kar_zarar) AS DURUM,kullanicilar.kul_Resim as kul_resmi FROM satim INNER JOIN kullanicilar 
 ON kullanicilar.kul_Id = satim.satim_kul_id WHERE satim_zaman between DATE_SUB(DATE_SUB(CURDATE(), INTERVAL 1 WEEK), INTERVAL -1 DAY) 
 and DATE_SUB(CURDATE(), INTERVAL -1 DAY) GROUP BY satim_kul_id ORDER BY durum DESC LIMIT 10');
                                                    $veri_hafta_kul_sira->execute(array());
                                                    $v_hafta_kul_sira = $veri_hafta_kul_sira->fetchAll(PDO::FETCH_ASSOC);
                                                    foreach ($v_hafta_kul_sira as $hafta_kul_sira) { ?>
                                                        <tr>
                                                            <td class='text-center'>
                                                                <img src='<?php echo "img/sira/".($sayi + 1)."_sira.jpg"; ?>'
                                                                     width='50' height='50'/>
                                                            </td>
                                                            <td class='text-center'>
                                                                <img src='<?php echo $hafta_kul_sira['kul_resmi']; ?>'
                                                                     width='50' height='50'/>
                                                            </td>
                                                            <td class='text-center'
                                                                id='kullanici_gun_Ad_<?php echo $sayi; ?>'><?php echo $hafta_kul_sira['AD']; ?></td>
                                                            <td class='text-center'
                                                                id='kullanici_gun_Soyad_<?php echo $sayi; ?>'><?php echo $hafta_kul_sira['SOYAD']; ?></td>
                                                            <td class='text-center'
                                                                id='kullanici_gun_TL_<?php echo $sayi; ?>'><?php echo $hafta_kul_sira['DURUM']; ?>
                                                                TL
                                                            </td>
                                                        </tr>
                                                        <?php
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
                                                        <th class="text-center">#</th>
                                                        <th class="text-center">Avatar</th>
                                                        <th class="text-center">Ad</th>
                                                        <th class="text-center">Soyad</th>
                                                        <th class="text-center">Kazanç/Kayıp</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $sayi = 0;
                                                    $veri_ay_kul_sira = $db->prepare('SELECT UPPER(kullanicilar.kul_Ad) AS AD, 
UPPER(kullanicilar.kul_Soyad) AS SOYAD,  SUM(satim.satim_kar_zarar) AS DURUM ,kullanicilar.kul_Resim as kul_resmi FROM satim 
INNER JOIN kullanicilar ON kullanicilar.kul_Id = satim.satim_kul_id WHERE satim_zaman 
between DATE_SUB(DATE_SUB(CURDATE(), INTERVAL 1 MONTH), INTERVAL -1 DAY) and DATE_SUB(CURDATE(), INTERVAL -1 DAY)GROUP BY satim_kul_id 
ORDER BY durum DESC LIMIT 10');
                                                    $veri_ay_kul_sira->execute(array());
                                                    $v_ay_kul_sira = $veri_ay_kul_sira->fetchAll(PDO::FETCH_ASSOC);
                                                    foreach ($v_ay_kul_sira as $ay_kul_sira) { ?>
                                                        <tr>
                                                            <td class='text-center'>
                                                                <img src='<?php echo "img/sira/".($sayi + 1)."_sira.jpg"; ?>'
                                                                     width='50' height='50'/>
                                                            </td>
                                                            <td class='text-center'>
                                                                <img src='<?php echo $ay_kul_sira['kul_resmi']; ?>'
                                                                     width='50' height='50'/>
                                                            </td>
                                                            <td class='text-center'
                                                                id='kullanici_gun_Ad_<?php echo $sayi; ?>'><?php echo $ay_kul_sira['AD']; ?></td>
                                                            <td class='text-center'
                                                                id='kullanici_gun_Soyad_<?php echo $sayi; ?>'><?php echo $ay_kul_sira['SOYAD']; ?></td>
                                                            <td class='text-center'
                                                                id='kullanici_gun_TL_<?php echo $sayi; ?>'><?php echo $ay_kul_sira['DURUM']; ?>
                                                                TL
                                                            </td>
                                                        </tr>
                                                        <?php
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
                                                        <th class="text-center">#</th>
                                                        <th class="text-center">Avatar</th>
                                                        <th class="text-center">Ad</th>
                                                        <th class="text-center">Soyad</th>
                                                        <th class="text-center">Kazanç/Kayıp</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $sayi = 0;
                                                    $veri_genel_kul_sira = $db->prepare('SELECT UPPER(kullanicilar.kul_Ad) AS AD, 
UPPER(kullanicilar.kul_Soyad) AS SOYAD, SUM(satim.satim_kar_zarar) AS DURUM,kullanicilar.kul_Resim as kul_resmi FROM satim 
INNER JOIN kullanicilar ON kullanicilar.kul_Id = satim.satim_kul_id WHERE satim_zaman 
between DATE_SUB(DATE_SUB(CURDATE(), INTERVAL 1 YEAR), INTERVAL -1 DAY) and DATE_SUB(CURDATE(), INTERVAL -1 DAY) GROUP BY satim_kul_id 
ORDER BY durum DESC LIMIT 10');
                                                    $veri_genel_kul_sira->execute(array());
                                                    $v_genel_kul_sira = $veri_genel_kul_sira->fetchAll(PDO::FETCH_ASSOC);
                                                    foreach ($v_genel_kul_sira as $genel_kul_sira) { ?>
                                                        <tr>
                                                            <td class='text-center'>
                                                                <img src='<?php echo "img/sira/".($sayi + 1)."_sira.jpg"; ?>'
                                                                     width='50' height='50'/>
                                                                </td>
                                                            <td class='text-center'>
                                                                <img src='<?php echo $genel_kul_sira['kul_resmi']; ?>'
                                                                     width='50' height='50'/>
                                                            </td>
                                                            <td class='text-center'
                                                                id='kullanici_gun_Ad_<?php echo $sayi; ?>'><?php echo $genel_kul_sira['AD']; ?></td>
                                                            <td class='text-center'
                                                                id='kullanici_gun_Soyad_<?php echo $sayi; ?>'><?php echo $genel_kul_sira['SOYAD']; ?></td>
                                                            <td class='text-center'
                                                                id='kullanici_gun_TL_<?php echo $sayi; ?>'><?php echo $genel_kul_sira['DURUM']; ?>
                                                                TL
                                                            </td>
                                                        </tr>
                                                        <?php
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
                                                        <th class="text-center">#</th>
                                                        <th class="text-center">Lig Adı</th>
                                                        <th class="text-center">Kazanç</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $sayi = 0;
                                                    $veri_lig_hafta_sira = $db->prepare('SELECT UPPER(ligler.lig_baslik) AS LIG, 
SUM(satim.satim_kar_zarar) AS DURUM FROM satim INNER JOIN kullanicilar ON kullanicilar.kul_Id = satim.satim_kul_id 
INNER JOIN ligler ON ligler.lig_id = kullanicilar.kul_lig_id WHERE satim_zaman 
between DATE_SUB(DATE_SUB(CURDATE(), INTERVAL 1 WEEK), INTERVAL -1 DAY) and DATE_SUB(CURDATE(), INTERVAL -1 DAY) GROUP BY ligler.lig_id 
ORDER BY durum DESC LIMIT 10');
                                                    $veri_lig_hafta_sira->execute(array());
                                                    $v_lig_hafta_sira = $veri_lig_hafta_sira->fetchAll(PDO::FETCH_ASSOC);
                                                    $say_lig_hafta_sira = $veri_lig_hafta_sira->rowCount();
                                                    foreach ($v_lig_hafta_sira as $lig_hafta_sira) { ?>
                                                        <tr>
                                                            <td class='text-center'>
                                                                <img src='<?php echo "img/sira/".($sayi + 1)."_sira.jpg"; ?>'
                                                                     width='50' height='50'/>
                                                            </td>
                                                            <td class='text-center'
                                                                id='lig_hafta_Ad_<?php echo $sayi; ?>'><?php echo $lig_hafta_sira['LIG']; ?></td>
                                                            <td class='text-center'
                                                                id='lig_hafta_TL_<?php echo $sayi; ?>'><?php echo $lig_hafta_sira['DURUM']; ?>
                                                                TL
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        $sayi++;
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
                                                        <th class="text-center">#</th>
                                                        <th class="text-center">Lig Adı</th>
                                                        <th class="text-center">Kazanç</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $sayi = 0;
                                                    $veri_lig_ay_sira = $db->prepare('SELECT UPPER(ligler.lig_baslik) AS LIG, 
SUM(satim.satim_kar_zarar) AS DURUM,kullanicilar.kul_Resim as kul_resmi  FROM satim INNER JOIN kullanicilar ON kullanicilar.kul_Id = satim.satim_kul_id 
INNER JOIN ligler ON ligler.lig_id = kullanicilar.kul_lig_id WHERE satim_zaman 
between DATE_SUB(DATE_SUB(CURDATE(), INTERVAL 1 MONTH), INTERVAL -1 DAY) and DATE_SUB(CURDATE(), INTERVAL -1 DAY) 
GROUP BY ligler.lig_id ORDER BY durum DESC LIMIT 10');
                                                    $veri_lig_ay_sira->execute(array());
                                                    $v_lig_ay_sira = $veri_lig_ay_sira->fetchAll(PDO::FETCH_ASSOC);
                                                    $say_lig_ay_sira = $veri_lig_ay_sira->rowCount();
                                                    foreach ($v_lig_ay_sira as $lig_ay_sira) {?>
                                                        <tr>
                                                            <td class='text-center'>
                                                                <img src='<?php echo "img/sira/".($sayi + 1)."_sira.jpg"; ?>'
                                                                     width='50' height='50'/>
                                                            </td>
                                                            <td class='text-center'
                                                                id='lig_hafta_Ad_<?php echo $sayi; ?>'><?php echo $lig_ay_sira['LIG']; ?></td>
                                                            <td class='text-center'
                                                                id='lig_hafta_TL_<?php echo $sayi; ?>'><?php echo $lig_ay_sira['DURUM']; ?>
                                                                TL
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        $sayi++;
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
                                                        <th class="text-center">#</th>
                                                        <th class="text-center">Lig Adı</th>
                                                        <th class="text-center">Kazanç</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $sayi = 0;
                                                    $veri_lig_genel_sira = $db->prepare('SELECT UPPER(ligler.lig_baslik) AS LIG, 
SUM(satim.satim_kar_zarar) AS DURUM,kullanicilar.kul_Resim as kul_resmi  FROM satim INNER JOIN kullanicilar ON kullanicilar.kul_Id = satim.satim_kul_id  
INNER JOIN ligler ON ligler.lig_id = kullanicilar.kul_lig_id  WHERE satim_zaman
between DATE_SUB(DATE_SUB(CURDATE(), INTERVAL 1 YEAR), INTERVAL -1 DAY) and DATE_SUB(CURDATE(), INTERVAL -1 DAY) 
GROUP BY ligler.lig_id ORDER BY durum DESC LIMIT 10');
                                                    $veri_lig_genel_sira->execute(array());
                                                    $v_lig_genel_sira = $veri_lig_genel_sira->fetchAll(PDO::FETCH_ASSOC);
                                                    $say_lig_genel_sira = $veri_lig_genel_sira->rowCount();
                                                    foreach ($v_lig_genel_sira as $lig_genel_sira) {?>
                                                        <tr>
                                                            <td class='text-center'>
                                                                <img src='<?php echo "img/sira/".($sayi + 1)."_sira.jpg"; ?>'
                                                                     width='50' height='50'/>
                                                            </td>
                                                            <td class='text-center'
                                                                id='lig_hafta_Ad_<?php echo $sayi; ?>'><?php echo $lig_genel_sira['LIG']; ?></td>
                                                            <td class='text-center'
                                                                id='lig_hafta_TL_<?php echo $sayi; ?>'><?php echo $lig_genel_sira['DURUM']; ?>
                                                                TL
                                                            </td>
                                                        </tr>
                                                        <?php
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
                </div>
            </div>
        </div>
    </section>
<?php include "inc/footer.php"; ?>