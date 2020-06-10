<?php
include "../settings/baglantilar.php";
include "../settings/fonksiyonlar.php";


    /*ÖLÜL KULLANICI HAFTALIK*/
    $veri_odul_kul_haf = $db->prepare('SELECT * FROM `oduller`WHERE `odul_zaman` between DATE_SUB(CURRENT_TIMESTAMP, INTERVAL 1 WEEK) and CURRENT_TIMESTAMP and `odul_tur`="haftalik_kullanici"');
    $veri_odul_kul_haf->execute(array());
    $say_odul_kul_haf = $veri_odul_kul_haf->rowCount();
    echo $say_odul_kul_haf."</br>";
    /*ÖDÜL KULLANICI AYLIK*/
    $veri_odul_ay_kul = $db->prepare('SELECT * FROM `oduller`WHERE `odul_zaman` between DATE_SUB(CURRENT_TIMESTAMP, INTERVAL 1 MONTH) and CURRENT_TIMESTAMP and `odul_tur`="aylik_kullanici"');
    $veri_odul_ay_kul->execute(array());
    $say_odul_ay_kul = $veri_odul_ay_kul->rowCount();
    echo $say_odul_ay_kul."</br>";
    /*ÖDÜL HAFTALIK LİG*/
    $veri_odul_haf_lig = $db->prepare('SELECT * FROM `oduller`WHERE `odul_zaman` between DATE_SUB(CURRENT_TIMESTAMP, INTERVAL 1 WEEK) and CURRENT_TIMESTAMP and `odul_tur`="haftalik_lig"');
    $veri_odul_haf_lig->execute(array());
    $say_odul_haf_lig = $veri_odul_haf_lig->rowCount();
    echo $say_odul_haf_lig."</br>";
    /*ÖDÜL AYLIK LİG*/
    $veri_odul_ay_lig = $db->prepare('SELECT * FROM `oduller`WHERE `odul_zaman` between DATE_SUB(CURRENT_TIMESTAMP, INTERVAL 1 MONTH) and CURRENT_TIMESTAMP and `odul_tur`="aylik_lig"');
    $veri_odul_ay_lig->execute(array());
    $say_odul_ay_lig = $veri_odul_ay_lig->rowCount();
    echo $say_odul_ay_lig;

