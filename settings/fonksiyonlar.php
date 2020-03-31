<?php
function ara($bas, $son, $yazi)
{
    @preg_match_all('/' . preg_quote($bas, '/') .
        '(.*?)' . preg_quote($son, '/') . '/i', $yazi, $m);
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

///////////////////////SESSİON
function s($par)
{
    $session = $_SESSION[$par];
    return $session;
}

///////////////////////YONETİCİ
function yoneticikontrol()
{

    if ($_SESSION['yetki'] == '1') {
    } else {
        header("Location:index.php");
        exit;
    }
}

/////////////////////////////KULLANICI KONTROL
function kullanicikontrol()
{

    if ($_SESSION['yetki'] == '0' || $_SESSION['yetki'] == '1') {
    } else {
        header("Location:index.php");
        exit;
    }
}

/////////////////////////////
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
{
    //Loop through and get the values of our specified key
    foreach ($array as $k => $v) {
        $b[] = strtolower($v[$key]);
    }
    //print_r($b);
    asort($b);
    //echo '<br />';
    //print_r($b);
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

?>