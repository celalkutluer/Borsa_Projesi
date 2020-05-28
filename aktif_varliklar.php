<?php
include "inc/header.php";
kullanicikontrol();
$komisyon = 1.003;
?>

    <section role="main" class="content-body">
        <div class="conteiner">
            <div class="col-md">
                <section class="panel panel-success">
                    <header class="panel-heading">
                        <h2 class="panel-title">Aktif Varlıklarım</h2>
                        <div class="panel-actions">
                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        </div>
                    </header>
                    <div class="panel-body">
                        <!--ALERT-->
                        <div id='aktif_varlik_alert'></div>
                        <!--ALERT-->
                        <table class="table table-bordered table-striped mb-none" id="datatable-default">
                            <thead>
                            <tr>
                                <th>Sıra</th>
                                <th>Hisse Adı</th>
                                <th>Hisse Miktarı</th>
                                <th>Alım Tarihi</th>
                                <th>Alım Fiyatı(Komisyon Dahil-Hisse Başı)</th>
                                <th>Anlık Hisse Değeri</th>
                                <th>Durum</th>
                                <th>Anlık Satımda Kar/Zarar(Komisyon Dahil)</th>
                                <th>Sat</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            //
                            $sayi = 0;
                            $veri_aktif_varlik = $db->prepare('SELECT * FROM `alim` WHERE `alim_kul_id`=? and alim_lot_satilmayan>0 order by alim_lot_satilmayan desc ');
                            $veri_aktif_varlik->execute(array($_SESSION['kul_id']));
                            $v_aktif_varlik = $veri_aktif_varlik->fetchAll(PDO::FETCH_ASSOC);
                            $say_aktif_varlik = $veri_aktif_varlik->rowCount();
                            foreach ($v_aktif_varlik as $aktif_varlik) {
                                $aktif_varlik_fiyat=$aktif_varlik['alim_hisse_toplam_tutar']/$aktif_varlik['alim_hisse_lot'];
                                $son_deger=bakiye_son($aktif_varlik['alim_hisse_sembol'] );
                                echo
                                    "<tr>
                                <td class='text-center' id='aktif_varlik_sira_" . $sayi . "'>" . ($sayi + 1) . "</td>
                                <td class='text-center' id='aktif_varlik_sembol_" . $sayi . "'>" . $aktif_varlik['alim_hisse_sembol'] . "</td>
                                <td class='text-center' id='aktif_varlik_miktar_" . $sayi . "'>" . $aktif_varlik['alim_lot_satilmayan'] . "</td>
                                <td class='text-center' id='aktif_varlik_zaman_" . $sayi . "'>" . (new \DateTime($aktif_varlik['alim_zaman']))->format('d-m-Y H:i:s') . PHP_EOL . "</td>
                                <td class='text-center' id='aktif_varlik_fiyat_" . $sayi . "'>" . round($aktif_varlik_fiyat,2) . " &#x20BA;</td>
                                <td class='text-center' id='aktif_varlik_deger_" . $sayi . "'>
                                ".round($son_deger,2)." &#x20BA;
                                </td>
                                <td class='text-center' id='aktif_varlik_durum_" . $sayi . "'>
                                <i id='aktif_varlik_durum_i_" . $sayi . "' class='";

                            if (round((($son_deger-$son_deger*($komisyon-1))-$aktif_varlik_fiyat),4)> 0) {
                                echo "fas fa-arrow-circle-up text-success";
                            } elseif (round((($son_deger-$son_deger*($komisyon-1))-$aktif_varlik_fiyat),4)== 0) {
                                echo "fas fa-minus text-info";
                            } else {
                                echo "fas fa-arrow-circle-down text-danger";
                            }
                            echo "'></i>
                                </td>
                                <td class='text-center' id='aktif_varlik_fark_" . $sayi . "'>
                                ".round((($son_deger-$son_deger*($komisyon-1))-$aktif_varlik_fiyat),4)." &#x20BA;
                                </td>
                                <td class='text-center' id='aktif_varlik_sat'>
                                   <button class='btn btn-danger modal-with-form' href='#modalaktif_varliksatForm" . $sayi . "' type='button' >SAT</button>
                                    <div class='modal-block modal-header-color modal-block-success mfp-hide' id='modalaktif_varliksatForm" . $sayi . "'>
                                    <section class='panel'>
                                            <header class='panel-heading'>
                                                <h4 class='panel-title' id='formModalLabel'>Sat</h4>
                                            </header>
                                            <div class='panel-body'>
                                                <!--ALERT-->
                                                <div id='hisse_sat_aktif_varlik_alert'></div>
                                                <!--ALERT-->
                                                <form id='hisse_sat_aktif_varlik_form_" . $sayi . "' class='mb-4' novalidate='novalidate'>
                                                    <div class='form-group row align-items-center'>
                                                        <label class='col-sm-4 text-left text-sm-right mb-0'>Hisse Adı: </label>
                                                        <label id='hisse_sat_aktif_varlik_form_sembol_" . $sayi . "' class='col-sm-7 text-center  mb-0'>" . $aktif_varlik['alim_hisse_sembol'] . "</label>
                                                    </div>
                                                    <div class='form-group row align-items-center'>
                                                        <label class='col-sm-4 text-left text-sm-right mb-0'>Satış Tutarı: </label>
                                                        <label id='hisse_sat_aktif_varlik_deger_" . $sayi . "' class='col-sm-7 text-center  mb-0'>" . convert_virgül_nokta($son_deger) . "</label>
                                                    </div>
                                                    <div class='form-group row align-items-center'>
                                                        <label class='col-sm-4 text-left text-sm-right mb-0'>Portföyümdeki Hisse Adedi: </label>
                                                        <label id='hisse_sat_aktif_varlik_elde_" . $sayi . "' class='col-sm-4 text-right  mb-0'>";
                                                        echo $aktif_varlik['alim_lot_satilmayan'];
                                                        echo "</label>
                                                    </div>
                                                    <div class='form-group row align-items-center'>
                                                        <label class='col-sm-4 text-left text-sm-right mb-0'>Satilmak İstenen Miktar: </label>
                                                        <div class='col-sm-7 text-center'>
                                                            <input id='hisse_sat_aktif_varlik_range_sat" . $sayi . "' type = 'range' min='";
                                                            if($aktif_varlik['alim_lot_satilmayan']>0) {
                                                                echo "1";
                                                            }
                                                            else{
                                                                echo "0";
                                                            }
                                                            echo "' max='" . $aktif_varlik['alim_lot_satilmayan'] . "' onchange='hisse_sat_aktif_varlik_sat_hesapla" . $sayi . "()'/>
                                                            <output  id='hisse_sat_aktif_varlik_rangevaluesat" . $sayi . "'>" . ceil($aktif_varlik['alim_lot_satilmayan']/2) . "</output>
                                                        </div>
                                                    </div>
                                                    <div class='form-group row align-items-center'>
                                                        <label class='col-sm-4 text-left text-sm-right mb-0'>Komisyon(Binde 3): </label>
                                                        <label id='hisse_sat_aktif_varlik_komisyonsat" . $sayi . "' class='col-sm-4 text-right  mb-0'>" . round(floatval(convert_virgül_nokta($son_deger)) * ($komisyon - 1) * ceil($aktif_varlik['alim_lot_satilmayan']/2), 2) . "</label><span class='col-sm-4 text-left  mb-0'>&#x20BA;</span>
                                                    </div>
                                                    <div class='form-group row align-items-center'>
                                                        <label class='col-sm-4 text-left text-sm-right mb-0'>Toplam Alinacak Tutar: </label>
                                                        <label id='hisse_sat_aktif_varlik_toplam_odenecek_sat_tutar" . $sayi . "' class='col-sm-4 text-right  mb-0'>

                                                        " . round(floatval(convert_virgül_nokta($son_deger)) * ceil($aktif_varlik['alim_lot_satilmayan']/2)-floatval(convert_virgül_nokta($son_deger)) * ceil($aktif_varlik['alim_lot_satilmayan']/2)*($komisyon-1), 2) . "
                                                       </label>
                                                       <script>
                                                        function hisse_sat_aktif_varlik_sat_hesapla" . $sayi . "() {
                                                            var sat=$('#hisse_sat_aktif_varlik_deger_" . $sayi . "').text();
                                                            var miktarsat=$('#hisse_sat_aktif_varlik_range_sat" . $sayi . "').val();
                                                            $('#hisse_sat_aktif_varlik_rangevaluesat" . $sayi . "').text($('#hisse_sat_aktif_varlik_range_sat" . $sayi . "').val());
                                                            $('#hisse_sat_aktif_varlik_komisyonsat" . $sayi . "').text((sat*miktarsat*(" . $komisyon . "-1)).toFixed(2));
                                                            $('#hisse_sat_aktif_varlik_toplam_odenecek_sat_tutar" . $sayi . "').text((sat*miktarsat-sat*miktarsat*(" . $komisyon . "-1)).toFixed(2));
                                                        }
                                                        </script>
                                                       <span class='col-sm-4 text-left  mb-0'>&#x20BA;</span>
                                                    </div>
                                                    <div class='form-group row align-items-center'>
                                                        <label class='col-sm-12 text-center  mb-0'>    
                                                        ";
                                                        if($aktif_varlik['alim_lot_satilmayan']==0){ echo "Yeterli Hisse Portföyünüzde Bulunmamaktadır."; }
                                                        echo "                                                    
                                                        </label>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class='panel-footer'>
                                                <div class='row'>
                                                    <div class='col-md-12 text-right'>
                                                        <button type='button' class='btn btn-light modal-dismiss' >Kapat</button>
                                                        <button type='button' id='hisse_sat_aktif_varlik_btn_" . $sayi . "' type='submit'  class='btn btn-danger'";
                                                        if($aktif_varlik['alim_lot_satilmayan']==0){ echo "disabled"; }
                                                        echo "onclick=".chr(34)."aktif_varlik_sat_btn("."'".$sayi."'".")".chr(34).">Sat</button>
                                                    </div>
                                                </div>
                                            </div>
                                    </section>
                                </div>
                                </td>
                                    </tr>";
                                $sayi++;
                            }
                            ?>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                            function aktif_varlik_sat_btn(no)
                            {
                                var data = {
                                    'sembol': document.getElementById('hisse_sat_aktif_varlik_form_sembol_'+no).innerText,
                                    'sat_tutar': document.getElementById('hisse_sat_aktif_varlik_deger_'+no).innerText,
                                    'sat_miktar': document.getElementById('hisse_sat_aktif_varlik_rangevaluesat'+no).innerText,
                                    'sat_komisyon': document.getElementById('hisse_sat_aktif_varlik_komisyonsat'+no).innerText,
                                    'sat_toplam': document.getElementById('hisse_sat_aktif_varlik_toplam_odenecek_sat_tutar'+no).innerText,
                                    'kul_id': $("#anasayfa_kul_id").val()
                                }
                                $.ajax({
                                    type: 'POST', url: 'settings/islem.php?islem=hisse_sat_aktif_varlik', data: data, success: function (cevap) {
                                        $("#hisse_sat_aktif_varlik_alert").html(cevap).hide().fadeIn(700);
                                    }
                                });
                            }
                        </script>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <!--KODLAR BURAYA-->


<?php include "inc/footer.php"; ?>