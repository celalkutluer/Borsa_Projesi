<?php
include "inc/header.php";
kullanicikontrol();
?>

    <section role="main" class="content-body">
        <div class="conteiner">
            <div class="col-md">
                <section class="panel panel-info">
                    <header class="panel-heading">
                        <h2 class="panel-title">Geçmiş Alımlar</h2>
                        <div class="panel-actions">
                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        </div>
                    </header>
                    <div class="panel-body">
                        <table class="table table-bordered table-striped mb-none" id="datatable-default">
                            <thead>
                            <tr>
                                <th>Sıra</th>
                                <th>Hisse Adı</th>
                                <th>Değer</th>
                                <th>Miktar</th>
                                <th>Toplam Tutar</th>
                                <th>Zaman</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sayi = 0;
                            $veri_gecmis_alim = $db->prepare('SELECT `alim_hisse_sembol`,`alim_hisse_deger`,`alim_hisse_lot`,`alim_hisse_toplam_tutar`,`alim_zaman` FROM `alim` WHERE `alim_kul_id`=? and `alim_lot_satilmayan`=0 order BY `alim_zaman` desc limit 100');
                            $veri_gecmis_alim->execute(array($_SESSION['kul_id']));
                            $v_gecmis_alim = $veri_gecmis_alim->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($v_gecmis_alim as $gecmis_alim) {
                                echo
                                    "<tr>
                                <td class='text-center' id='gecmis_alim_sira_" . $sayi . "'>" . ($sayi + 1) . "</td>
                                <td class='text-center' id='gecmis_alim_hisse_" . $sayi . "'>" . $gecmis_alim['alim_hisse_sembol'] . "</td>
                                <td class='text-center' id='gecmis_alim_deger_" . $sayi . "'>" . $gecmis_alim['alim_hisse_deger'] . " &#x20BA;</td>
                                <td class='text-center' id='gecmis_alim_miktar_" . $sayi . "'>" . $gecmis_alim['alim_hisse_lot'] . "</td>
                                <td class='text-center' id='gecmis_alim_toplam_" . $sayi . "'>" . $gecmis_alim['alim_hisse_toplam_tutar'] . " &#x20BA;</td>
                                <td class='text-center' id='gecmis_alim_zaman_" . $sayi . "'>" . (new \DateTime($gecmis_alim['alim_zaman']))->format('d-m-Y H:i:s') . PHP_EOL . "</td>
                                    </tr>";
                                $sayi++;

                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </section>
                <section class="panel panel-danger">
                    <header class="panel-heading">
                        <h2 class="panel-title">Geçmiş Satımlar</h2>
                        <div class="panel-actions">
                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        </div>
                    </header>
                    <div class="panel-body">
                        <table class="table table-bordered table-striped mb-none" id="datatable-default">
                            <thead>
                            <tr>
                                <th>Sıra</th>
                                <th>Hisse Adı</th>
                                <th>Değer</th>
                                <th>Miktar</th>
                                <th>Toplam Tutar</th>
                                <th>Zaman</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sayi = 0;
                            $veri_gecmis_satim = $db->prepare('SELECT `satim_hisse_sembol`,`satim_hisse_deger`,`satim_hisse_lot`,`satim_hisse_toplam_tutar`,`satim_zaman` FROM `satim` WHERE `satim_kul_id`=? order BY `satim_zaman` desc limit 100');
                            $veri_gecmis_satim->execute(array($_SESSION['kul_id']));
                            $v_gecmis_satim = $veri_gecmis_satim->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($v_gecmis_satim as $gecmis_satim) {
                                echo
                                    "<tr>
                                <td class='text-center' id='gecmis_satim_sira_" . $sayi . "'>" . ($sayi + 1) . "</td>
                                <td class='text-center' id='gecmis_satim_hisse_" . $sayi . "'>" . $gecmis_satim['satim_hisse_sembol'] . "</td>
                                <td class='text-center' id='gecmis_satim_deger_" . $sayi . "'>" . $gecmis_satim['satim_hisse_deger'] . " &#x20BA;</td>
                                <td class='text-center' id='gecmis_satim_miktar_" . $sayi . "'>" . $gecmis_satim['satim_hisse_lot'] . "</td>
                                <td class='text-center' id='gecmis_satim_toplam_" . $sayi . "'>" . $gecmis_satim['satim_hisse_toplam_tutar'] . " &#x20BA;</td>
                                <td class='text-center' id='gecmis_satim_zaman_" . $sayi . "'>" . (new \DateTime($gecmis_satim['satim_zaman']))->format('d-m-Y H:i:s') . PHP_EOL . "</td>
                                    </tr>";
                                $sayi++;

                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <!--KODLAR BURAYA-->


<?php include "inc/footer.php"; ?>