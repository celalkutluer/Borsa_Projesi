<?php
include "baglantilar.php";
include "fonksiyonlar.php";
/*HİSSE BİLGİLERİ YÜKLEME*/
$link = "http://bigpara.hurriyet.com.tr/borsa/canli-borsa/";
$icerik = file_get_contents($link);
$h_td_sembol = array();
$h_td_sembol = ara('target="_blank">', '</a>', $icerik);
if (g('islem') == 'sembol_yaz') {
    echo json_encode($h_td_sembol);
}
if (g('islem') == 'h_td_yuzde_id_') {
    $h_td_yuzde_id_deger = array();
    for ($sayi = 0; $sayi < 100; $sayi++) {
        array_push($h_td_yuzde_id_deger,ara('h_td_yuzde_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik));

    }
    echo json_encode($h_td_yuzde_id_deger);
}
if (g('islem') == 'h_td_fiyat_id_') {
    $h_td_fiyat_id_deger = array();
    for ($sayi = 0; $sayi < 100; $sayi++) {
        array_push($h_td_fiyat_id_deger, ara('h_td_fiyat_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik));
    }
    echo json_encode($h_td_fiyat_id_deger);
}
if (g('islem') == 'h_td_farktl_id_') {
    $h_td_farktl_id_deger = array();
    for ($sayi = 0; $sayi < 100; $sayi++) {
        array_push($h_td_farktl_id_deger, ara('h_td_farktl_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik));
    }
    echo json_encode($h_td_farktl_id_deger);
}
if (g('islem') == 'h_td_yuzde_') {
    $h_td_yuzde_id_ = array();
    for ($sayi = 0; $sayi < 100; $sayi++) {
        array_push($h_td_yuzde_id_,ara('h_td_yuzde_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik));
    }
    echo json_encode($h_td_yuzde_id_);
}
if (g('islem') == 'h_td_dusuk_id_') {
    $h_td_dusuk_id_deger = array();
    for ($sayi = 0; $sayi < 100; $sayi++) {
        array_push($h_td_dusuk_id_deger, ara('h_td_dusuk_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik));
    }
    echo json_encode($h_td_dusuk_id_deger);
}
if (g('islem') == 'h_td_yuksek_id_') {
    $h_td_yuksek_id_deger = array();
    for ($sayi = 0; $sayi < 100; $sayi++) {
        array_push($h_td_yuksek_id_deger, ara('h_td_yuksek_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik));
    }
    echo json_encode($h_td_yuksek_id_deger);
}
if (g('islem') == 'h_td_hacimlot_id_') {
    $h_td_hacimlot_id_deger = array();
    for ($sayi = 0; $sayi < 100; $sayi++) {
        array_push($h_td_hacimlot_id_deger, ara('h_td_hacimlot_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik));
    }
    echo json_encode($h_td_hacimlot_id_deger);
}
if (g('islem') == 'h_td_hacimtl_id_') {
    $h_td_hacimtl_id_deger = array();
    for ($sayi = 0; $sayi < 100; $sayi++) {
        array_push($h_td_hacimtl_id_deger, ara('h_td_hacimtl_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik));
    }
    echo json_encode($h_td_hacimtl_id_deger);
}
if (g('islem') == 'h_td_saat_id_') {
    $h_td_saat_id_deger = array();
    for ($sayi = 0; $sayi < 100; $sayi++) {
        array_push($h_td_saat_id_deger, ara('h_td_saat_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik));
    }
    echo json_encode($h_td_saat_id_deger);
}
/*HİSSE BİLGİLERİ YÜKLEME*/
?>
