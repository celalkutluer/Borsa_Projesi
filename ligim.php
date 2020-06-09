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
kullanicikontrol();
?>
    <section role="main" class="content-body">
        <div class="conteiner">
            <div class="col-md">
                <section class="panel panel-warning">
                    <?php
                    $veri = $db->prepare('SELECT kul_lig_id FROM kullanicilar WHERE kul_Id=?');
                    $veri->execute(array($_SESSION['kul_id']));
                    $v = $veri->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($v as $ligler) ;
                    //
                    $veril = $db->prepare('SELECT lig_baslik,lig_duyuru,lig_id FROM ligler WHERE lig_id=?');
                    $veril->execute(array($ligler['kul_lig_id']));
                    $vl = $veril->fetchAll(PDO::FETCH_ASSOC);
                    $say_ = $veril->rowCount();
                    foreach ($vl as $liglerl) ;
                    ?>
                    <header class="panel-heading">
                        <h2 class="panel-title">Ligim - <?php if ($say_ > 0) {
                                echo $liglerl['lig_baslik']."-".$liglerl['lig_duyuru']; ?>
                                <h2 id="lig_id" hidden><?php echo $liglerl['lig_id']; ?></h2><?php
                            } ?></h2>
                        <div class="panel-actions">
                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        </div>
                    </header>
                    <div class="panel-body">
                        <!--ALERT-->
                        <div id='ligim_alert'></div>
                        <!--ALERT-->
                        <div class="table-responsive">
                            <table class="table table-condensed mb-none">
                                <thead>
                                <tr>
                                    <th class='text-center'>#</th>
                                    <th class='text-center' hidden>Id</th>
                                    <th class='text-center'>Ad</th>
                                    <th class='text-center'>Soyad</th>
                                    <th class='text-center'>Yatırımcı/Yönetici</th>
                                    <th class='text-center'>Toplam Kazanç</th>
                                    <th class='text-center'>Yöneticiliği Devret</th>
                                    <th class='text-center'>Ligden At</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                if ($ligler['kul_lig_id'] == null) {

                                } else {
                                    $sayi = 0;
                                    /////
                                    $veri_lig_yon = $db->prepare('SELECT `lig_yonetici_id` FROM `ligler` WHERE `lig_id`=?');
                                    $veri_lig_yon->execute(array($ligler['kul_lig_id']));
                                    $v_lig_yon = $veri_lig_yon->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($v_lig_yon as $lig_yon) ;
                                    /////
                                    $veri_lig = $db->prepare('SELECT kullanicilar.kul_Id as id,upper(kullanicilar.kul_Ad) as ad, upper(kullanicilar.kul_Soyad) as soyad,sum(satim.satim_kar_zarar) as kazanc FROM kullanicilar INNER JOIN satim on satim.satim_kul_id=kullanicilar.kul_Id WHERE kul_lig_id=? GROUP By kul_Id ORDER by sum(satim.satim_kar_zarar) DESC');
                                    $veri_lig->execute(array($ligler['kul_lig_id']));
                                    $v_lig = $veri_lig->fetchAll(PDO::FETCH_ASSOC);
                                    $say_lig = $veri_lig->rowCount();
                                    ///
                                    foreach ($v_lig as $lig) { ?>
                                        <tr>
                                            <td class='text-center'
                                                id='lig_sira_<?php echo $sayi; ?>'><?php echo($sayi + 1); ?></td>
                                            <td class='text-center'
                                                id='lig_kul_id_<?php echo $sayi; ?>'
                                                hidden><?php echo $lig['id']; ?></td>
                                            <td class='text-center'
                                                id='lig_uye_ad_<?php echo $sayi; ?>'><?php echo $lig['ad']; ?></td>
                                            <td class='text-center'
                                                id='lig_uye_soyad<?php echo $sayi; ?>'><?php echo $lig['soyad']; ?></td>
                                            <td class='text-center' id='lig_yon_<?php echo $sayi; ?>'>
                                                <?php
                                                if ($lig['id'] == $lig_yon['lig_yonetici_id']) {
                                                    echo "Lig Yöneticisi";
                                                } else {
                                                    echo "Yatırımcı";
                                                }
                                                ?>
                                            </td>
                                            <td class='text-center'
                                                id='lig_kazanc_<?php echo $sayi; ?>'><?php echo $lig['kazanc']; ?>
                                                &#x20BA;
                                            </td>

                                            <td class='text-center' id='devret'>
                                                <button class='btn btn-info'
                                                        onclick="devret_btn('<?php echo $sayi; ?>')"
                                                    <?php

                                                    if ($lig_yon['lig_yonetici_id'] == $_SESSION['kul_id']&&$_SESSION['kul_id']!=$lig['id']) {
                                                    } else {
                                                        echo "disabled";
                                                    }

                                                    ?>
                                                >Devret
                                                </button>
                                            </td>
                                            <td class='text-center' id='at'>
                                                <button class='btn btn-danger' onclick="at_btn('<?php echo $sayi; ?>')"
                                                    <?php
                                                    if ($lig_yon['lig_yonetici_id'] == $_SESSION['kul_id']&&$_SESSION['kul_id']!=$lig['id']) {
                                                    } else {
                                                        echo "disabled";
                                                    }
                                                    ?>
                                                >At
                                                </button>
                                            </td>
                                        </tr>
                                        <?php
                                        $sayi++;

                                    }
                                }
                                ?>
                                </tbody>
                            </table>
                            <script type="text/javascript">
                                function devret_btn(no) {
                                    var kul_id = document.getElementById('lig_kul_id_' + no).innerText;
                                    var lig_id = document.getElementById('lig_id').innerText;
                                    $.ajax({
                                            type: 'POST',
                                            url: 'settings/islem.php?islem=lig_yon_devret',
                                            data: {kul_id: kul_id, kul_lig_id: lig_id},
                                            success: function (cevap) {
                                                $("#ligim_alert").html(cevap).hide().fadeIn(700);
                                            }
                                        }
                                    );
                                }

                                function at_btn(no) {
                                    var kul_id = document.getElementById('lig_kul_id_' + no).innerText;
                                    var lig_id = document.getElementById('lig_id').innerText;
                                    $.ajax({
                                            type: 'POST',
                                            url: 'settings/islem.php?islem=lig_uye_at',
                                            data: {kul_id: kul_id, kul_lig_id: lig_id},
                                            success: function (cevap) {
                                                $("#ligim_alert").html(cevap).hide().fadeIn(700);
                                            }
                                        }
                                    );
                                }
                            </script>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
<?php include "inc/footer.php"; ?>