<?php
/**
 * PhpStorm ile oluşturulmuştur.
 * Yazar            : CELALKUTLUER
 * Test Eden        : CELALKUTLUER
 * Hata Ayıklayan   : CELALKUTLUER
 * Date: 09.06.2020
 * Time: 20:00
 */
include "inc/header.php";
$link = "http://bigpara.hurriyet.com.tr/borsa/canli-borsa/";
$icerik = file_get_contents($link);
$icerik = preg_replace('~[\r\n]~', '', $icerik);
$icerik = preg_replace('~[ ]~', '', $icerik);
$h_td_sembol = array();
$h_td_sembol = ara('target="_blank">', '</a>', $icerik);/*hisse adlarının dizisi[0] - [99] arası 100 hisse*/
$tum_hisse_dizileri = array();
$komisyon = sabit_getir("komisyon");
?>
<section role="main" class="content-body">
    <section class="section bg-color-quy">
        <section class="section bg-color-quaternary custom-padding-4 border-0 my-0">
            <div class="container">
                <div class="row mb-3">
                    <div class="col">
                        <div class="row align-items-center">
                            <div class="col-lg-6"> <!--table-responsive-lg-->
                                <table class="table table-bordered table-striped table-sm mb-0"><h3
                                            class="custom-primary-font text-center custom-fontsize-3 font-weight-normal">
                                        En Çok Yükselenler</h3>
                                    <thead>
                                    <tr>
                                        <th class="text-center" scope="col">Menkul Adı</th>
                                        <th class="text-center" scope="col">Durum</th>
                                        <th class="text-center" scope="col">Son Değeri</th>
                                        <th class="text-center" scope="col">(%) Fark</th>
                                    </tr>
                                    </thead>
                                    <tbody> <?php for ($sayi = 0; $sayi < count($h_td_sembol); $sayi++) {
                                        $tum_hiss = array();
                                        $hisse_tekil_yuzde = ara('h_td_yuzde_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
                                        $hisse_tekil_fiyat = ara('h_td_fiyat_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
                                        array_push($tum_hiss, $h_td_sembol[$sayi], convert_virgül_nokta($hisse_tekil_yuzde[0]), convert_virgül_nokta($hisse_tekil_fiyat[0]));
                                        array_push($tum_hisse_dizileri, $tum_hiss);
                                    }
                                    $sorted = val_sort($tum_hisse_dizileri, 1);/*1=yuzde*/
                                    for ($sayi = (count($h_td_sembol)-1); $sayi > (count($h_td_sembol)-6); $sayi--) { ?>
                                        <tr>
                                            <td class="text-center"
                                                id="hisse_yukselen_sembol_<?php echo $sayi; ?>"><?php echo $sorted[$sayi][0]; ?></td>
                                            <td class="text-center"><i id="hisse_yukselen_durum_<?php echo $sayi; ?>"
                                                                       class="<?php if (convert_virgül_nokta($sorted[$sayi][1]) > 0) {
                                                                           echo "fas fa-arrow-circle-up text-success";
                                                                       } elseif (convert_virgül_nokta($sorted[$sayi][1]) == 0) {
                                                                           echo "fas fa-minus text-info";
                                                                       } else {
                                                                           echo "fas fa-arrow-circle-down text-danger";
                                                                       } ?>"></i></td>
                                            <td class="text-center"
                                                id="hisse_yukselen_son_deger_<?php echo $sayi; ?>"><?php echo $sorted[$sayi][2]; ?></td>
                                            <td class="text-center"
                                                id="hisse_yukselen_fark_<?php echo $sayi; ?>"><?php echo $sorted[$sayi][1]; ?></td>
                                        </tr> <?php } ?> </tbody>
                                </table>
                            </div>
                            <div class="col-lg-6">
                                <table class="table table-bordered table-striped table-sm mb-0"><h3
                                            class="custom-primary-font text-center custom-fontsize-3 font-weight-normal">
                                        En Çok Düşenler</h3>
                                    <thead>
                                    <tr>
                                        <th class="text-center" scope="col">Menkul Adı</th>
                                        <th class="text-center" scope="col">Durum</th>
                                        <th class="text-center" scope="col">Son Değeri</th>
                                        <th class="text-center" scope="col">(%) Fark</th>
                                    </tr>
                                    </thead>
                                    <tbody> <?php for ($sayi = 0; $sayi < 5; $sayi++) { ?>
                                        <tr>
                                            <td class="text-center"
                                                id="hisse_dusen_sembol_<?php echo $sayi; ?>"><?php echo $sorted[$sayi][0]; ?></td>
                                            <td class="text-center"><i id="hisse_dusen_durum_<?php echo $sayi; ?>"
                                                                       class="<?php if (convert_virgül_nokta($sorted[$sayi][1]) > 0) {
                                                                           echo "fas fa-arrow-circle-up text-success";
                                                                       } elseif (convert_virgül_nokta($sorted[$sayi][1]) == 0) {
                                                                           echo "fas fa-minus text-info";
                                                                       } else {
                                                                           echo "fas fa-arrow-circle-down text-danger";
                                                                       } ?>"></i></td>
                                            <td class="text-center"
                                                id="hisse_dusen_son_deger_<?php echo $sayi; ?>"><?php echo $sorted[$sayi][2]; ?></td>
                                            <td class="text-center"
                                                id="hisse_dusen_fark_<?php echo $sayi; ?>"><?php echo $sorted[$sayi][1]; ?></td>
                                        </tr> <?php } ?> </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section bg-color-quaternary custom-padding-4 border-0 my-0">
            <div class="table-active"><h2 class="custom-primary-font text-center custom-fontsize-3 font-weight-normal">
                    BİST100 Hisse Verileri</h2>
                <table class="table table-bordered table-striped mb-none" id="datatable-default">
                    <thead>
                    <tr>
                        <th scope="col">Menkul</th>
                        <th class="text-center" scope="col">Durum</th>
                        <th class="text-center" scope="col">Değeri</th>
                        <th class="text-center hidden-xs" scope="col">Fark</th>
                        <th class="text-center" scope="col">(%) Fark</th>
                        <th class="text-center hidden-xs" scope="col">En Düşük</th>
                        <th class="text-center hidden-xs" scope="col">En Yüksek</th>
                        <th class="text-center hidden-xs" scope="col">Hacim(Lot)</th>
                        <th class="text-center hidden-xs" scope="col">Hacim(TL)</th>
                        <th class="text-center hidden-xs" scope="col">Zaman</th> <?php if (isset($_SESSION['yetki'])) {
                            echo " <th class='text-center' scope='col'>Alış</th> <th class='text-center' scope='col'>Satış</th>";
                        } ?> </tr>
                    </thead>
                    <tbody> <?php for ($sayi = 0;
                    $sayi < count($h_td_sembol);
                    $sayi++) {
                    $h_td_yuzde_id_deger = ara('h_td_yuzde_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
                    $h_td_fiyat_id_deger = ara('h_td_fiyat_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
                    $h_td_farktl_id_deger = ara('h_td_farktl_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
                    $h_td_dusuk_id_deger = ara('h_td_dusuk_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
                    $h_td_yuksek_id_deger = ara('h_td_yuksek_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
                    $h_td_hacimlot_id_deger = ara('h_td_hacimlot_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
                    $h_td_hacimtl_id_deger = ara('h_td_hacimtl_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
                    $h_td_saat_id_deger = ara('h_td_saat_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik); ?>
                    <tr>
                        <td class="text-center"
                            id="hisse_sembol_<?php echo $sayi; ?> "><?php echo $h_td_sembol[$sayi]; ?></td>
                        <td class="text-center"><i id="hisse_durum_<?php echo $sayi; ?>"
                                                   class=" <?php if (convert_virgül_nokta($h_td_yuzde_id_deger[0]) > 0) {
                                                       echo "fas fa-arrow-circle-up text-success";
                                                   } elseif (convert_virgül_nokta($h_td_yuzde_id_deger[0]) == 0) {
                                                       echo "fas fa-minus text-info";
                                                   } else {
                                                       echo "fas fa-arrow-circle-down text-danger";
                                                   } ?>"></i></td>
                        <td class="text-center"
                            id="hisse_son_deger_<?php echo $sayi; ?>"><?php echo $h_td_fiyat_id_deger[0]; ?></td>
                        <td class="center hidden-xs"
                            id="hisse_fark_<?php echo $sayi; ?>"><?php echo $h_td_farktl_id_deger[0]; ?></td>
                        <td class="text-center"
                            id="hisse_fark_yuzde_<?php echo $sayi; ?>"><?php echo $h_td_yuzde_id_deger[0]; ?></td>
                        <td class="center hidden-xs"
                            id="hisse_en_dusuk_<?php echo $sayi; ?>"><?php echo $h_td_dusuk_id_deger[0]; ?></td>
                        <td class="center hidden-xs"
                            id="hisse_en_yuksek_<?php echo $sayi; ?>"><?php echo $h_td_yuksek_id_deger[0]; ?></td>
                        <td class="center hidden-xs"
                            id="hisse_hacim_lot_<?php echo $sayi; ?>"><?php echo $h_td_hacimlot_id_deger[0]; ?></td>
                        <td class="center hidden-xs"
                            id="hisse_hacim_tl_<?php echo $sayi; ?>"><?php echo $h_td_hacimtl_id_deger[0]; ?></td>
                        <td class="center hidden-xs"
                            id="hisse_zaman_<?php echo $sayi; ?>"><?php echo $h_td_saat_id_deger[0]; ?></td> <?php if (isset($_SESSION['yetki'])) { ?>
                            <td class='text-center' id='hisse_alis_<?php echo $sayi; ?>'>
                                <button id='btn_hisse_alis_<?php echo $sayi; ?>' type='button'
                                        class='btn btn-success modal-with-form' href='#modalAlForm<?php echo $sayi; ?>'>
                                    AL
                                </button>
                                <div class='modal-block modal-header-color modal-block-success mfp-hide'
                                     id='modalAlForm<?php echo $sayi; ?>'>
                                    <section class='panel'>
                                        <header class='panel-heading'><h4 class='panel-title' id='formModalLabel'>Satın
                                                Al</h4></header>
                                        <div class='panel-body'> <!--ALERT-->
                                            <div id='hisse_alim_alert'></div> <!--ALERT-->
                                            <form id='hisse_alim_form_<?php echo $sayi; ?>' class='mb-4'
                                                  novalidate='novalidate'>
                                                <div class='form-group row align-items-center'><label
                                                            class='col-sm-4 text-left text-sm-right mb-0'>Hisse
                                                        Adı: </label> <label
                                                            id='hisse_alim_form_sembol_<?php echo $sayi; ?>'
                                                            class='col-sm-7 text-center mb-0'><?php echo $h_td_sembol[$sayi]; ?></label>
                                                </div>
                                                <div class='form-group row align-items-center'><label
                                                            class='col-sm-4 text-left text-sm-right mb-0'>Alış
                                                        Tutarı: </label> <label
                                                            id='hisse_deger_alim_<?php echo $sayi; ?>'
                                                            class='col-sm-7 text-center mb-0'><?php echo convert_virgül_nokta($h_td_fiyat_id_deger[0]); ?></label>
                                                </div>
                                                <div class='form-group row align-items-center'><label
                                                            class='col-sm-4 text-left text-sm-right mb-0'>Bakiyeniz: </label>
                                                    <label class='col-sm-4 text-right mb-0'><?php echo $_SESSION['bakiye']; ?></label><span
                                                            class='col-sm-4 text-left mb-0'>&#x20BA;</span></div>
                                                <div class='form-group row align-items-center'><label
                                                            class='col-sm-4 text-left text-sm-right mb-0'>Alınmak
                                                        İstenen Miktar: </label>
                                                    <div class='col-sm-7 text-center'><input
                                                                id='range_<?php echo $sayi; ?>' type='range' min='1'
                                                                max='<?php echo intval($_SESSION['bakiye']) / (floatval(convert_virgül_nokta($h_td_fiyat_id_deger[0])) * $komisyon); ?>'
                                                                onchange='alis_hesapla<?php echo $sayi; ?>()'/>
                                                        <output id='rangevalue<?php echo $sayi; ?>'> <?php if ((intval($_SESSION['bakiye']) / (floatval(convert_virgül_nokta($h_td_fiyat_id_deger[0])) * $komisyon) * 0.5) >= 1) {
                                                                $range_ = intval(intval($_SESSION['bakiye']) / (floatval(convert_virgül_nokta($h_td_fiyat_id_deger[0])) * $komisyon) * 0.5);
                                                            } elseif ($_SESSION['bakiye'] > convert_virgül_nokta($h_td_fiyat_id_deger[0])) {
                                                                $range_ = 1;
                                                            } else {
                                                                $range_ = 0;
                                                            } ?><?php echo $range_; ?> </output>
                                                    </div>
                                                </div>
                                                <div class='form-group row align-items-center'><label
                                                            class='col-sm-4 text-left text-sm-right mb-0'>Komisyon(Binde
                                                        3): </label> <label id='komisyon<?php echo $sayi; ?>'
                                                                            class='col-sm-4 text-right mb-0'><?php echo round(floatval(convert_virgül_nokta($h_td_fiyat_id_deger[0])) * ($komisyon - 1) * $range_, 2); ?></label><span
                                                            class='col-sm-4 text-left mb-0'>&#x20BA;</span></div>
                                                <div class='form-group row align-items-center'><label
                                                            class='col-sm-4 text-left text-sm-right mb-0'>Toplam
                                                        Ödenecek Tutar: </label> <label
                                                            id='toplam_odenecek_alim_tutar<?php echo $sayi; ?>'
                                                            class='col-sm-4 text-right mb-0'><?php echo round(floatval(convert_virgül_nokta($h_td_fiyat_id_deger[0])) * ($komisyon) * $range_, 2); ?> </label>
                                                    <script type="text/javascript"> function alis_hesapla<?php echo $sayi; ?>() {
                                                            var alis = $('#hisse_deger_alim_<?php echo $sayi; ?>').text();
                                                            var miktar = $('#range_<?php echo $sayi; ?>').val();
                                                            $('#rangevalue<?php echo $sayi; ?>').text($('#range_<?php echo $sayi; ?>').val());
                                                            $('#komisyon<?php echo $sayi; ?>').text((alis * miktar * (<?php echo $komisyon; ?> -1)).toFixed(2));
                                                            $('#toplam_odenecek_alim_tutar<?php echo $sayi; ?>').text((alis * miktar * (<?php echo $komisyon; ?>)).toFixed(2));
                                                        } </script>
                                                    <span class='col-sm-4 text-left mb-0'>&#x20BA;</span></div>
                                                <div class='form-group row align-items-center'><label
                                                            class='col-sm-12 text-center mb-0'> <?php if ($range_ == 0) {
                                                            echo "Yeterli Bakiyeniz Bulunmamaktadır.";
                                                        } ?> </label></div>
                                            </form>
                                        </div>
                                        <div class='panel-footer'>
                                            <div class='row'>
                                                <div class='col-md-12 text-right'>
                                                    <button type='button' class='btn btn-light modal-dismiss'>Kapat
                                                    </button>
                                                    <button type='button' id='hisse_al_btn_<?php echo $sayi; ?>'
                                                            type='submit' class='btn btn-success'
                                                            onclick="alim_btn_func('<?php echo $sayi; ?>')" <?php if ($range_ == 0) {
                                                        echo "disabled";
                                                    } ?> >Satın Al
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </td> <?php $veri = $db->prepare('SELECT varlik_elde FROM varliklar WHERE varlik_kul_id=? and varlik_hisse_sembol=?');
                            $veri->execute(array($_SESSION['kul_id'], $h_td_sembol[$sayi]));
                            $v = $veri->fetchAll(PDO::FETCH_ASSOC);
                            $say = $veri->rowCount();
                            $miktar = 0;
                            if ($say > 0) {
                                foreach ($v as $varlik_elde) ;
                                $miktar = $varlik_elde['varlik_elde'];
                            } ?>
                            <td class='text-center' id='hisse_sat_<?php echo $sayi; ?> '>
                                <button id='btn_hisse_sat_<?php echo $sayi; ?>' type='button'
                                        class='btn btn-danger modal-with-form'
                                        href='#modalsatForm<?php echo $sayi; ?>' <?php if ($miktar == 0) {
                                    echo "disabled title='Portföyünüzde Bulunmamakta.'";
                                } ?> >SAT
                                </button>
                                <div class='modal-block modal-header-color modal-block-success mfp-hide'
                                     id='modalsatForm<?php echo $sayi; ?>'>
                                    <section class='panel'>
                                        <header class='panel-heading'><h4 class='panel-title' id='formModalLabel'>
                                                Sat</h4></header>
                                        <div class='panel-body'> <!--ALERT-->
                                            <div id='hisse_sat_alert'></div> <!--ALERT-->
                                            <form id='hisse_sat_form_<?php echo $sayi; ?>' class='mb-4'
                                                  novalidate='novalidate'>
                                                <div class='form-group row align-items-center'><label
                                                            class='col-sm-4 text-left text-sm-right mb-0'>Hisse
                                                        Adı: </label> <label
                                                            id='hisse_sat_form_sembol_<?php echo $sayi; ?>'
                                                            class='col-sm-7 text-center mb-0'><?php echo $h_td_sembol[$sayi]; ?></label>
                                                </div>
                                                <div class='form-group row align-items-center'><label
                                                            class='col-sm-4 text-left text-sm-right mb-0'>Satış
                                                        Tutarı: </label> <label
                                                            id='hisse_deger_sat_<?php echo $sayi; ?>'
                                                            class='col-sm-7 text-center mb-0'><?php echo convert_virgül_nokta($h_td_fiyat_id_deger[0]); ?></label>
                                                </div>
                                                <div class='form-group row align-items-center'><label
                                                            class='col-sm-4 text-left text-sm-right mb-0'>Portföyümdeki
                                                        Hisse Adedi: </label> <label
                                                            id='hisse_varlik_elde_<?php echo $sayi; ?>'
                                                            class='col-sm-4 text-right mb-0'><?php echo $miktar; ?></label>
                                                </div>
                                                <div class='form-group row align-items-center'><label
                                                            class='col-sm-4 text-left text-sm-right mb-0'>Satilmak
                                                        İstenen Miktar: </label>
                                                    <div class='col-sm-7 text-center'><input
                                                                id='range_sat<?php echo $sayi; ?>' type='range'
                                                                min=' <? if ($miktar > 0) {
                                                                    echo "1";
                                                                } else {
                                                                    echo "0";
                                                                } ?>' max='<?php echo $miktar; ?>'
                                                                onchange='sat_hesapla<?php echo $sayi; ?>()'/>
                                                        <output id='rangevaluesat<?php echo $sayi; ?>'><?php echo ceil($miktar / 2); ?></output>
                                                    </div>
                                                </div>
                                                <div class='form-group row align-items-center'><label
                                                            class='col-sm-4 text-left text-sm-right mb-0'>Komisyon(Binde
                                                        3): </label> <label id='komisyonsat<?php echo $sayi; ?>'
                                                                            class='col-sm-4 text-right mb-0'><?php echo round(floatval(convert_virgül_nokta($h_td_fiyat_id_deger[0])) * ($komisyon - 1) * ceil($miktar / 2), 2); ?></label><span
                                                            class='col-sm-4 text-left mb-0'>&#x20BA;</span></div>
                                                <div class='form-group row align-items-center'><label
                                                            class='col-sm-4 text-left text-sm-right mb-0'>Toplam
                                                        Alinacak Tutar: </label> <label
                                                            id='toplam_odenecek_sat_tutar<?php echo $sayi; ?>'
                                                            class='col-sm-4 text-right mb-0'><?php echo round(floatval(convert_virgül_nokta($h_td_fiyat_id_deger[0])) * ceil($miktar / 2) - floatval(convert_virgül_nokta($h_td_fiyat_id_deger[0])) * ceil($miktar / 2) * ($komisyon - 1), 2); ?> </label>
                                                    <script type="text/javascript"> function sat_hesapla<?php echo $sayi; ?>() {
                                                            var sat = $('#hisse_deger_sat_<?php echo $sayi; ?>').text();
                                                            var miktarsat = $('#range_sat<?php echo $sayi; ?>').val();
                                                            $('#rangevaluesat<?php echo $sayi; ?>').text($('#range_sat<?php echo $sayi; ?>').val());
                                                            $('#komisyonsat<?php echo $sayi; ?>').text((sat * miktarsat * (<?php echo $komisyon; ?> -1)).toFixed(2));
                                                            $('#toplam_odenecek_sat_tutar<?php echo $sayi; ?>').text((sat * miktarsat - sat * miktarsat * (<?php echo $komisyon; ?> -1)).toFixed(2));
                                                        } </script>
                                                    <span class='col-sm-4 text-left mb-0'>&#x20BA;</span></div>
                                                <div class='form-group row align-items-center'><label
                                                            class='col-sm-12 text-center mb-0'> <?php if ($miktar == 0) {
                                                            echo "Yeterli Hisse Portföyünüzde Bulunmamaktadır.";
                                                        } ?> </label></div>
                                            </form>
                                        </div>
                                        <div class='panel-footer'>
                                            <div class='row'>
                                                <div class='col-md-12 text-right'>
                                                    <button type='button' class='btn btn-light modal-dismiss'>Kapat
                                                    </button>
                                                    <button type='button' id='hisse_sat_btn_<?php echo $sayi; ?>'
                                                            type='submit' class='btn btn-danger'
                                                            onclick=" satim_btn_func('<?php echo $sayi; ?>')" <?php if ($miktar == 0) {
                                                        echo "disabled";
                                                    } ?> >Sat
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </td> <?php }
                        } ?>
                    </tbody>
                </table>
                <script type="text/javascript">
                    function alim_btn_func(no) {
                        var data = {
                            'sembol': document.getElementById('hisse_alim_form_sembol_' + no).innerText,
                            'alis_tutar': document.getElementById('hisse_deger_alim_' + no).innerText,
                            'alis_miktar': document.getElementById('rangevalue' + no).innerText,
                            'alis_komisyon': document.getElementById('komisyon' + no).innerText,
                            'alis_toplam': document.getElementById('toplam_odenecek_alim_tutar' + no).innerText,
                            'kul_id': $("#anasayfa_kul_id").val()
                        }
                        $.ajax({
                            type: 'POST',
                            url: 'settings/islem.php?islem=hisse_satin_al',
                            data: data,
                            success: function (cevap) {
                                $("#hisse_alim_alert").html(cevap).hide().fadeIn(700);
                            }
                        });
                    }
                    function satim_btn_func(no) {
                        var data = {
                            'sembol': document.getElementById('hisse_sat_form_sembol_' + no).innerText,
                            'sat_tutar': document.getElementById('hisse_deger_sat_' + no).innerText,
                            'sat_miktar': document.getElementById('rangevaluesat' + no).innerText,
                            'sat_komisyon': document.getElementById('komisyonsat' + no).innerText,
                            'sat_toplam': document.getElementById('toplam_odenecek_sat_tutar' + no).innerText,
                            'kul_id': $("#anasayfa_kul_id").val()
                        }
                        $.ajax({
                            type: 'POST',
                            url: 'settings/islem.php?islem=hisse_sat',
                            data: data,
                            success: function (cevap) {
                                $("#hisse_sat_alert").html(cevap).hide().fadeIn(700);
                            }
                        });
                    }
                </script>
            </div>
        </section>
    </section>
</section>
<?php include "inc/footer.php"; ?>
