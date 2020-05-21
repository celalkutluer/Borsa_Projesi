<?php
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
                    $veril = $db->prepare('SELECT lig_baslik FROM ligler WHERE lig_id=?');
                    $veril->execute(array($ligler['kul_lig_id']));
                    $vl = $veril->fetchAll(PDO::FETCH_ASSOC);
                    $say_ = $veril->rowCount();
                    foreach ($vl as $liglerl) ;
                    ?>
                    <header class="panel-heading">
                        <h2 class="panel-title">Ligim - <?php if ($say_ > 0) {
                                echo $liglerl['lig_baslik'];
                            } ?></h2>
                        <div class="panel-actions">
                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        </div>
                    </header>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-condensed mb-none">
                                <thead>
                                <tr>
                                    <th class='text-center'>#</th>
                                    <th class='text-center'>Ad</th>
                                    <th class='text-center'>Soyad</th>
                                    <th class='text-center'>Toplam Kazanç</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                if ($ligler['kul_lig_id'] == null) {

                                } else {
                                    $sayi = 0;
                                    $veri_lig = $db->prepare('SELECT upper(kullanicilar.kul_Ad) as ad, upper(kullanicilar.kul_Soyad) as soyad,sum(satim.satim_kar_zarar) as kazanc FROM kullanicilar INNER JOIN satim on satim.satim_kul_id=kullanicilar.kul_Id WHERE kul_lig_id=1 GROUP By kul_Id ORDER by sum(satim.satim_kar_zarar) DESC
');
                                    $veri_lig->execute(array($ligler['kul_lig_id']));
                                    $v_lig = $veri_lig->fetchAll(PDO::FETCH_ASSOC);
                                    $say_lig = $veri_lig->rowCount();
                                    foreach ($v_lig as $lig) {
                                        echo
                                            "<tr>
                                <td class='text-center' id='lig_baslik_" . $sayi . "'>" . ($sayi + 1) . "</td>
                                <td class='text-center' id='lig_baslik_" . $sayi . "'>" . $lig['ad'] . "</td>
                                <td class='text-center' id='lig_bosluk_" . $sayi . "'>" . $lig['soyad'] . "</td>
                                <td class='text-center' id='lig_kazanc_" . $sayi . "'>" . $lig['kazanc'] . " TL</td>
                                    </tr>";
                                        $sayi++;

                                    }
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <!--KODLAR BURAYA-->

<?php include "inc/footer.php"; ?>