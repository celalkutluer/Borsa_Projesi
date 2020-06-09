<?php
/**
 * PhpStorm ile oluşturulmuştur.
 * Yazar            : CELALKUTLUER
 * Test Eden        : CELALKUTLUER
 * Hata Ayıklayan   : CELALKUTLUER
 * Date: 09.06.2020
 * Time: 20:00
 */
include_once "baglantilar.php";

function ara($bas, $son, $yazi)
{
    @preg_match_all('/' . preg_quote($bas, '/') . '(.*?)' . preg_quote($son, '/') . '/i', $yazi, $m);
    return @$m[1];
}
function temiz($text)
{
    $text = strip_tags($text);
    $text = preg_replace('/<a\s+.*?href="([^")]+)"[^>]*>([^<]+)<\/a>/is', '\2 (\1)', $text);
    $text = preg_replace('/<!--.+?-->/', '', $text);
    $text = preg_replace('/{.+?}/', '', $text);
    $text = preg_replace('/&nbsp;/', ' ', $text);
    $text = preg_replace('/&amp;/', ' ', $text);
    $text = preg_replace('/&quot;/', ' ', $text);
    $text = htmlspecialchars($text);
    $text = addslashes($text);
    return $text;
}
function g($par)
{
    $par = temiz(@$_GET[$par]);
    return $par;
}
function p($par)
{
    $par = htmlspecialchars(addslashes(trim($_POST[$par])));
    return $par;
}
function kelime_kontrol($par)
{
    Global $db;
    $veri = $db->prepare('SELECT kelime FROM `yasakli_kelimeler`');
    $veri->execute(array($par));
    $v = $veri->fetchAll(PDO::FETCH_ASSOC);
    $i=0;
    foreach ($v as $kelimeler) {
        if(strstr($par,$kelimeler['kelime'])){
            $i++;
        }
    }
    return $i;
}
/*SESSİON*/
function s($par)
{
    $session = $_SESSION[$par];
    return $session;
}
/*YONETİCİ*/
function yoneticikontrol()
{
    if ($_SESSION['yetki'] == '1') {
    } else {
        header("Location:index.php");
        exit;
    }
}
/*KULLANICI KONTROL*/
function kullanicikontrol()
{
    if ($_SESSION['yetki'] == '0' || $_SESSION['yetki'] == '1') {
    } else {
        header("Location:index.php");
        exit;
    }
}
/**/
function convert_virgül_nokta($data)
{
    if (strpos($data, ",")) {
        $chng = str_replace(",", ".", $data);
        $data = $chng;
    }
    return $data;
}
function convert_nokta_virgül($data)
{
    if (strpos($data, ".")) {
        $chng = str_replace(".", ",", $data);
        $data = $chng;
    }
    return $data;
}
function val_sort($array, $key)
{ /*Loop through and get the values of our specified key*/
    foreach ($array as $k => $v) {
        $b[] = strtolower($v[$key]);
    } /*print_r($b);*/
    asort($b); /*echo '<br />';*/ /*print_r($b);*/
    foreach ($b as $k => $v) {
        $c[] = $array[$k];
    }
    return $c;
}
function bakiye_son($sembol)
{
    $link = "http://bigpara.hurriyet.com.tr/borsa/canli-borsa/";
    $icerik = file_get_contents($link);
    $h_td_fiyat_id_deger = ara('h_td_fiyat_id_' . $sembol . '">', '</li>', $icerik);
    return convert_virgül_nokta($h_td_fiyat_id_deger[0]);
}
function rasgeleharf($kackarakter)
{
    $s = "";
    $char = "ABCDEFGHIJKLMNOPRSTUVWYZQX";
    for ($k = 1; $k <= $kackarakter; $k++) {
        $h = substr($char, mt_rand(0, strlen($char) - 1), 1);
        $s .= $h;
    }
    return $s;
}
function uzanti($dosya)
{
    $uzanti = pathinfo($dosya);
    $uzanti = $uzanti["extension"];
    return $uzanti;
}
function resimadi()
{
    $rn = rand(1000, 9999);
    $rn .= rasgeleharf(1);
    $rn .= rand(1000, 9999);
    $rn .= rasgeleharf(2);
    $rn .= rasgeleharf(2);
    $rn .= rand(1000, 9999);
    $rn .= rasgeleharf(1);
    $rn .= rand(1000, 9999);
    $rn .= rasgeleharf(2);
    $rn .= rasgeleharf(2);
    $rn .= rand(1000, 9999);
    $rn .= rasgeleharf(1);
    $rn .= rand(1000, 9999);
    $rn .= rasgeleharf(2);
    $rn .= rasgeleharf(2);
    $rn .= rand(1000, 9999);
    $rn .= rasgeleharf(1);
    $rn .= rand(1000, 9999);
    $rn .= rasgeleharf(2);
    $rn .= rasgeleharf(2);
    $rn .= rand(1000, 9999);
    $rn .= rasgeleharf(1);
    return $rn;
}
function resimyukle($postisim, $yeniisim, $yol)
{ /* VEROT RESİM YÜKLEME*/
    $foo = new Upload($_FILES[$postisim]);
    if ($foo->uploaded) {
        $foo->allowed = array('image/*');
        $foo->file_new_name_body = $yeniisim;
        $foo->image_resize = true;
        $foo->image_x = 200;
        $foo->image_ratio_y = true;
        $foo->Process($yol);
        if ($foo->processed) {
            $foo->Clean();
            return true;
        } else {
            return false;
        }
    } /* VEROT RESİM YÜKLEME*/
}
function NumarayiFormatla($TelefonNumarasi)
{
    $TelefonNumarasi = preg_replace('/[^0-9]/', '', $TelefonNumarasi); /*TelefonNumarasi değişkenini tüm karakterlerden arındırıyoruz.*/
    if (strlen($TelefonNumarasi) > 10) { /*TelefonNumarasi değişkeni 10 haneden büyükse*/
        $UlkeKodu = substr($TelefonNumarasi, 0, strlen($TelefonNumarasi) - 10);
        $AlanKodu = substr($TelefonNumarasi, -10, 3);
        $SonrakiUcHane = substr($TelefonNumarasi, -7, 3);
        $SonDortHane = substr($TelefonNumarasi, -4, 4);
        $TelefonNumarasi = '+' . $UlkeKodu . ' (' . $AlanKodu . ') ' . $SonrakiUcHane . '-' . $SonDortHane; /* Oluşan Sonuç = + 90 (555) 444-3322*/
    } else if (strlen($TelefonNumarasi) == 10) { /*TelefonNumarasi değişkeni 10 haneye eşitse*/
        $AlanKodu = substr($TelefonNumarasi, 0, 3);
        $SonrakiUcHane = substr($TelefonNumarasi, 3, 3);
        $SonDortHane = substr($TelefonNumarasi, 6, 4);
        $TelefonNumarasi = '(' . $AlanKodu . ') ' . $SonrakiUcHane . '-' . $SonDortHane; /* Oluşan Sonuç = (555) 444-3322*/
    } else if (strlen($TelefonNumarasi) == 7) { /*TelefonNumarasi değişkeni 7 haneye eşitse*/
        $SonrakiUcHane = substr($TelefonNumarasi, 0, 3);
        $SonDortHane = substr($TelefonNumarasi, 3, 4);
        $TelefonNumarasi = $SonrakiUcHane . '-' . $SonDortHane; /* Oluşan Sonuç = 444-3322*/
    }
    return $TelefonNumarasi;
}
/**/
function sabit_getir($par)
{
    Global $db;
    $veri = $db->prepare('SELECT `sabit_deger` as deger FROM `sabitler` WHERE `sabit_ad`=?');
    $veri->execute(array($par));
    $v = $veri->fetchAll(PDO::FETCH_ASSOC);
    foreach ($v as $sabit) ;

    return $sabit['deger'];
}

?>