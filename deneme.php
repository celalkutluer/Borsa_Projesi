<?php
function ara($bas, $son, $yazi)
{
    @preg_match_all('/' . preg_quote($bas, '/') .
        '(.*?)'. preg_quote($son, '/').'/i', $yazi, $m);
    return @$m[1];
}

$link = "http://bigpara.hurriyet.com.tr/borsa/canli-borsa/";
$icerik = file_get_contents($link);

$sehir = ara('<li class="cell048 node-c" id="h_td_fiyat_id_AEFES">','</li>',$icerik);
print_r($sehir);
?>