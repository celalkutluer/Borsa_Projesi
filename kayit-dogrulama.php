<?php
include "inc/header.php";

$veri= $db->prepare('SELECT kul_eposta,kul_eposta_dogrulama_kod FROM kullanicilar WHERE kul_eposta_dogrulama_kod=?');
$veri->execute(array(g('dogrulama')));
$v = $veri->fetchAll(PDO::FETCH_ASSOC);
$say = $veri->rowCount();
if ($say) {
    foreach ($v as $kullanici) ;
    $guncelle = $db->prepare("UPDATE kullanicilar SET kul_eposta_dogrulama=1 WHERE kul_eposta=?");

    $guncelleme = $guncelle->execute(array($kullanici['kul_eposta']));
    if ($guncelleme) {
        echo "<div class='alert alert-success'>E-mail adresiniz onaylanmıştır.</div>";
    }
}

include "inc/footer.php"; ?>