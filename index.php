<?php include "inc/header.php";
yoneticikontrol();
?>
<section class="section bg-color-quaternary custom-padding-4 border-0 my-0">
    <div class="container">
        <div class="row mb-3">
            <div class="col">

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <!--table-responsive-lg-->
                        <table class="table table-bordered table-striped table-sm mb-0">
                            <h3 class="custom-primary-font text-center custom-fontsize-3 font-weight-normal appear-animation"
                                data-appear-animation="fadeInUpShorter">En Çok Yükselenler</h3>
                            <thead>
                            <tr>
                                <th class="text-center" scope="col">Menkul Adı</th>
                                <th class="text-center" scope="col">Durum</th>
                                <th class="text-center" scope="col">Son Değeri</th>
                                <th class="text-center" scope="col">(%) Fark</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $link = "http://bigpara.hurriyet.com.tr/borsa/canli-borsa/";
                            $icerik = file_get_contents($link);
                            ///
                            $h_td_sembol = array();
                            $h_td_sembol = ara('target="_blank">', '</a>', $icerik);
                            $h_td_sembol = ara('target="_blank">', '</a>', $icerik);//hisse adlarının dizisi[0] - [99] arası 100 hisse
                            $tum_hisse_dizileri = array();
                            ///
                            for ($sayi = 0; $sayi < 100; $sayi++) {
                                $tum_hiss = array();
                                $hisse_tekil_yuzde = ara('h_td_yuzde_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
                                $hisse_tekil_fiyat = ara('h_td_fiyat_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
                                array_push($tum_hiss, $h_td_sembol[$sayi], convert_virgül_nokta($hisse_tekil_yuzde[0]), convert_virgül_nokta($hisse_tekil_fiyat[0]));
                                array_push($tum_hisse_dizileri, $tum_hiss);

                            }
                            $sorted = val_sort($tum_hisse_dizileri, 1);//1=yuzde

                            for ($sayi = 99; $sayi > 94; $sayi--) {
                                ?>
                                <tr>
                                    <td class="text-center"
                                        id="hisse_yukselen_sembol_<?php echo $sayi; ?>"><?php echo $sorted[$sayi][0]; ?></td>
                                    <td class="text-center"><i id="hisse_yukselen_durum_<?php echo $sayi; ?>"
                                                               class="<?php
                                                               if (convert_virgül_nokta($sorted[$sayi][1]) > 0) {
                                                                   echo "fas fa-arrow-circle-up text-success";
                                                               } elseif (convert_virgül_nokta($sorted[$sayi][1]) == 0) {
                                                                   echo "fas fa-minus text-info";
                                                               } else {
                                                                   echo "fas fa-arrow-circle-down text-danger";
                                                               }
                                                               ?>"></i></td>
                                    <td class="text-center"
                                        id="hisse_yukselen_son_deger_<?php echo $sayi; ?>"><?php echo $sorted[$sayi][2]; ?></td>
                                    <td class="text-center"
                                        id="hisse_yukselen_fark_<?php echo $sayi; ?>"><?php echo $sorted[$sayi][1]; ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-6">
                        <table class="table table-bordered table-striped table-sm mb-0">
                            <h3 class="custom-primary-font text-center custom-fontsize-3 font-weight-normal appear-animation"
                                data-appear-animation="fadeInUpShorter">En Çok Düşenler</h3>
                            <thead>
                            <tr>
                                <th class="text-center" scope="col">Menkul Adı</th>
                                <th class="text-center" scope="col">Durum</th>
                                <th class="text-center" scope="col">Son Değeri</th>
                                <th class="text-center" scope="col">(%) Fark</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            for ($sayi = 0; $sayi < 100; $sayi++) {
                                $tum_hiss = array();
                                $hisse_tekil_yuzde = ara('h_td_yuzde_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
                                $hisse_tekil_fiyat = ara('h_td_fiyat_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
                                array_push($tum_hiss, $h_td_sembol[$sayi], convert_virgül_nokta($hisse_tekil_yuzde[0]), convert_virgül_nokta($hisse_tekil_fiyat[0]));
                                array_push($tum_hisse_dizileri, $tum_hiss);//ayrı ayrı array oluşturup sıralama yapabilmek amacıyla
                            }
                            $sorted = val_sort($tum_hisse_dizileri, 1);//1=yuzde
                            for ($sayi = 0; $sayi < 5; $sayi++) {
                                ?>
                                <tr>
                                    <td class="text-center"
                                        id="hisse_dusen_sembol_<?php echo $sayi; ?>"><?php echo $sorted[$sayi][0]; ?></td>
                                    <td class="text-center"><i id="hisse_dusen_durum_<?php echo $sayi; ?>" class="<?php
                                        if (convert_virgül_nokta($sorted[$sayi][1]) > 0) {
                                            echo "fas fa-arrow-circle-up text-success";
                                        } elseif (convert_virgül_nokta($sorted[$sayi][1]) == 0) {
                                            echo "fas fa-minus text-info";
                                        } else {
                                            echo "fas fa-arrow-circle-down text-danger";
                                        }
                                        ?>"></i></td>
                                    <td class="text-center"
                                        id="hisse_dusen_son_deger_<?php echo $sayi; ?>"><?php echo $sorted[$sayi][2]; ?></td>
                                    <td class="text-center"
                                        id="hisse_dusen_fark_<?php echo $sayi; ?>"><?php echo $sorted[$sayi][1]; ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section bg-color-quaternary custom-padding-4 border-0 my-0">
    <div class="container">
        <h2 class="custom-primary-font text-center custom-fontsize-3 font-weight-normal appear-animation"
            data-appear-animation="fadeInUpShorter">BİST100 HİSSE VERİLERİ</h2>
        <table class="table table-responsive-lg table-bordered table-striped table-sm mb-0">
            <thead>
            <tr>
                <th scope="col">Menkul Adı</th>
                <th class="text-center" scope="col">Durum</th>
                <th class="text-center" scope="col">Son Değeri</th>
                <th class="text-center" scope="col">Fark</th>
                <th class="text-center" scope="col">(%) Fark</th>
                <th class="text-center" scope="col">En Düşük</th>
                <th class="text-center" scope="col">En Yüksek</th>
                <th class="text-center" scope="col">Hacim(Lot)</th>
                <th class="text-center" scope="col">Hacim(TL)</th>
                <th class="text-center" scope="col">Zaman</th>
                <th class="text-center" scope="col">Alış</th>
                <th class="text-center" scope="col">Satış</th>
            </tr>
            </thead>
            <tbody>
            <?php
            for ($sayi = 0; $sayi < 100; $sayi++) {
                ///
                $h_td_yuzde_id_deger = ara('h_td_yuzde_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
                $h_td_fiyat_id_deger = ara('h_td_fiyat_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
                $h_td_farktl_id_deger = ara('h_td_farktl_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
                $h_td_dusuk_id_deger = ara('h_td_dusuk_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
                $h_td_yuksek_id_deger = ara('h_td_yuksek_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
                $h_td_hacimlot_id_deger = ara('h_td_hacimlot_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
                $h_td_hacimtl_id_deger = ara('h_td_hacimtl_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
                $h_td_saat_id_deger = ara('h_td_saat_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
                ///
                ?>
                <tr>
                    <td class="text-center"
                        id="hisse_sembol_<?php echo $sayi; ?>"><?php echo $h_td_sembol[$sayi]; ?></td>
                    <td class="text-center"><i id="hisse_durum_<?php echo $sayi; ?>" class="
                        <?php
                        if (convert_virgül_nokta($h_td_yuzde_id_deger[0]) > 0) {
                            echo "fas fa-arrow-circle-up text-success";
                        } elseif (convert_virgül_nokta($h_td_yuzde_id_deger[0]) == 0) {
                            echo "fas fa-minus text-info";
                        } else {
                            echo "fas fa-arrow-circle-down text-danger";
                        }
                        ?>"></i></td>
                    <td class="text-center"
                        id="hisse_son_deger_<?php echo $sayi; ?>"><?php echo $h_td_fiyat_id_deger[0]; ?></td>
                    <td class="text-center"
                        id="hisse_fark_<?php echo $sayi; ?>"><?php echo $h_td_farktl_id_deger[0]; ?></td>
                    <td class="text-center"
                        id="hisse_fark_yuzde_<?php echo $sayi; ?>"><?php echo $h_td_yuzde_id_deger[0]; ?></td>
                    <td class="text-center"
                        id="hisse_en_dusuk_<?php echo $sayi; ?>"><?php echo $h_td_dusuk_id_deger[0]; ?></td>
                    <td class="text-center"
                        id="hisse_en_yuksek_<?php echo $sayi; ?>"><?php echo $h_td_yuksek_id_deger[0]; ?></td>
                    <td class="text-center"
                        id="hisse_hacim_lot_<?php echo $sayi; ?>"><?php echo $h_td_hacimlot_id_deger[0]; ?></td>
                    <td class="text-center"
                        id="hisse_hacim_tl_<?php echo $sayi; ?>"><?php echo $h_td_hacimtl_id_deger[0]; ?></td>
                    <td class="text-center"
                        id="hisse_zaman_<?php echo $sayi; ?>"><?php echo $h_td_saat_id_deger[0]; ?></td>
                    <td class="text-center" id="hisse_alis_<?php echo $sayi; ?>">
                        <?php
                        echo "<button id='btn_hisse_alis_" . $sayi . "' type='button' class='btn btn-success' data-toggle='collapse'
                                    data-target='#collapseExample" . $sayi . "' aria-expanded='false'
                                    aria-controls='collapseExample'>AL</button>
                        <div class='collapse ' id='collapseExample" . $sayi . "'>
                            <div class='list-group'>
                            <h align='justify'>Alınmak istenen hisse :".$h_td_sembol[$sayi]."</h>
                                <h align='left'>Hisse Değeri : ".$h_td_fiyat_id_deger[0]." </h>
                                <h align='left'>Bakiyeniz :  </h>
                            </div>
                        </div>";
                        ?>
                    </td>
                    <td class="text-center" id="hisse_satis_<?php echo $sayi; ?>">
                        <?php
                        echo "<button id='btn_hisse_satis_" . $sayi . "' type='button' class='btn btn-danger'>SAT</button>";
                        ?>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</section>
<?php include "inc/footer.php"; ?>

