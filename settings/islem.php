<?php
include "baglantilar.php";
include "fonksiyonlar.php";
$link = "http://bigpara.hurriyet.com.tr/borsa/canli-borsa/";
$icerik = file_get_contents($link);
Global $db;
$veri = $db->prepare("SELECT `hisse_id`,`hisse_sembol`,`hisse_deger` FROM `hisse`");
$veri->execute(array());
$v = $veri->fetchAll(pdo::FETCH_ASSOC);
$say = $veri->rowCount();
if ($say) {
    foreach ($v as $tum_hisseler) {
       //echo $tum_hisseler['hisse_sembol'].";";

       /* ?>
        <script>
                document.getElementById("ad_DDD").innerHTML = <?php echo $tum_hisseler['hisse_sembol']; ?>;
        </script>
        <?php*/
        //
        $h_td_yuzde_id_aranan = 'h_td_yuzde_id_' . $tum_hisseler['hisse_sembol'] . '">';
        $h_td_yuzde_id = ara($h_td_yuzde_id_aranan, '</li>', $icerik);
        //
        $h_td_fiyat_id_aranan = 'h_td_fiyat_id_' . $tum_hisseler['hisse_sembol'] . '">';
        $h_td_fiyat_id = ara($h_td_fiyat_id_aranan, '</li>', $icerik);
        //
        $h_td_farktl_id_aranan = 'h_td_farktl_id_' . $tum_hisseler['hisse_sembol'] . '">';
        $h_td_farktl_id = ara($h_td_farktl_id_aranan, '</li>', $icerik);
        //
        $h_td_yuzde_id_aranan = 'h_td_yuzde_id_' . $tum_hisseler['hisse_sembol'] . '">';
        $h_td_yuzde_id = ara($h_td_yuzde_id_aranan, '</li>', $icerik);
        //
        $h_td_dusuk_id_aranan = 'h_td_dusuk_id_' . $tum_hisseler['hisse_sembol'] . '">';
        $h_td_dusuk_id = ara($h_td_dusuk_id_aranan, '</li>', $icerik);
        //
        $h_td_yuksek_id_aranan = 'h_td_yuksek_id_' . $tum_hisseler['hisse_sembol'] . '">';
        $h_td_yuksek_id = ara($h_td_yuksek_id_aranan, '</li>', $icerik);
        //
        $h_td_hacimlot_id_aranan = 'h_td_hacimlot_id_' . $tum_hisseler['hisse_sembol'] . '">';
        $h_td_hacimlot_id = ara($h_td_hacimlot_id_aranan, '</li>', $icerik);
        //
        $h_td_hacimtl_id_aranan = 'h_td_hacimtl_id_' . $tum_hisseler['hisse_sembol'] . '">';
        $h_td_hacimtl_id = ara($h_td_hacimtl_id_aranan, '</li>', $icerik);
        //
        $h_td_saat_id_aranan = 'h_td_saat_id_' . $tum_hisseler['hisse_sembol'] . '">';
        $h_td_saat_id = ara($h_td_saat_id_aranan, '</li>', $icerik);
        /*$json = array($tum_hisseler['hisse_id'],$tum_hisseler['hisse_sembol'],$h_td_yuzde_id,$h_td_fiyat_id,$h_td_farktl_id,
            $h_td_yuzde_id,$h_td_dusuk_id, $h_td_yuksek_id,$h_td_hacimlot_id,$h_td_hacimtl_id,$h_td_saat_id);
        */
        /*$veri_json="[{
        'hisse_id': ".$tum_hisseler['hisse_id'].
            ",'hisse_sembol': ".$tum_hisseler['hisse_sembol'].
            "'h_td_yuzde_id': ".$h_td_yuzde_id.
            "'h_td_fiyat_id': ".$h_td_fiyat_id.
            "'h_td_farktl_id': ".$h_td_farktl_id.
            "'h_td_yuzde_id': ".$h_td_yuzde_id.
            "'h_td_dusuk_id': ".$h_td_dusuk_id.
            "'h_td_yuksek_id': ".$h_td_yuksek_id.
            "'h_td_hacimlot_id': ".$h_td_hacimlot_id.
            "'h_td_hacimtl_id': ".$h_td_hacimtl_id.
            "'h_td_saat_id': ".$h_td_saat_id."]";*/
        $return_arr = array();
        $return_arr[] = array(
            "hisse_id" => $tum_hisseler['hisse_id'],
            "hisse_sembol" => $tum_hisseler['hisse_sembol'],
            "h_td_yuzde_id" => $h_td_yuzde_id,
            "h_td_fiyat_id" => $h_td_yuzde_id,
            "h_td_farktl_id" => $h_td_farktl_id,
            "h_td_yuzde_id" => $h_td_yuzde_id,
            "h_td_dusuk_id" => $h_td_dusuk_id,
            "h_td_yuksek_id" => $h_td_yuksek_id,
            "h_td_hacimlot_id" => $h_td_hacimlot_id,
            "h_td_hacimtl_id" => $h_td_hacimtl_id,
            "h_td_saat_id" => $h_td_saat_id);
    }
    echo json_encode($return_arr);

}


?>