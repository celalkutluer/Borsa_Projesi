<?php
include "inc/header.php";
kullanicikontrol();
?>
    <section role="main" class="content-body">
        <div class="conteiner">
            <div class="col-md">
                <section class="panel panel-info">
                    <header class="panel-heading">
                        <h2 class="panel-title">Ligler</h2>
                        <div class="panel-actions">
                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        </div>
                    </header>
                    <div class="panel-body">
                        <button id='lig_olustur' type='button' class='btn btn-success btn-block modal-with-form' href='#modalligOlusturForm'>Yeni Lig Oluştur</button>

                        <div class='modal-block modal-header-color modal-block-success mfp-hide' id='modalligOlusturForm'>
                            <section class='panel'>
                                <header class='panel-heading'>
                                    <h4 class='panel-title' id='formModalLabel'>Yeni Lig Oluştur</h4>
                                </header>
                                <div class='panel-body'>
                                    <!--ALERT-->
                                    <div id='lig_olustur_alert'></div>
                                    <!--ALERT-->
                                    <form id='lig_olustur_form' class='mb-4' novalidate='novalidate'>

                                    </form>
                                </div>
                                <div class='panel-footer'>
                                    <div class='row'>
                                        <div class='col-md-12 text-right'>
                                            <button type='button' class='btn btn-light modal-dismiss' >Kapat</button>
                                            <button type='button' id='lig_olustur_btn' type='submit'  class='btn btn-success'>Oluştur</button>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <table class="table table-bordered table-striped mb-none" id="datatable-default">
                            <thead>
                            <tr>
                                <th class='text-center' >#</th>
                                <th class='text-center' >Lig Adı</th>
                                <th class='text-center' >Lig Üye Sayısı</th>
                                <th class='text-center' >Lig Kazancı</th>
                                <th class='text-center' >Lige Katıl</th>
                                <th class='text-center' >Ligden Ayrıl</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sayi=0;
                            $veri_lig = $db->prepare('SELECT ligler.lig_baslik, ligler.lig_bos_uyelik, sum(satim.satim_kar_zarar) as durum FROM kullanicilar INNER JOIN satim on satim.satim_kul_id=kullanicilar.kul_Id INNER JOIN ligler on ligler.lig_id=kullanicilar.kul_lig_id GROUP BY ligler.lig_id ORDER BY COUNT(satim.satim_kar_zarar) ASC');
                            $veri_lig->execute(array());
                            $v_lig = $veri_lig->fetchAll(PDO::FETCH_ASSOC);
                            $say_lig = $veri_lig->rowCount();
                            foreach ($v_lig as $lig) {
                                echo
                                    "<tr>
                                <td class='text-center' id='lig_baslik_" . $sayi . "'>" .($sayi+1). "</td>
                                <td class='text-center' id='lig_baslik_" . $sayi . "'>" . $lig['lig_baslik'] . "</td>
                                <td class='text-center' id='lig_bosluk_" . $sayi . "'>" . $lig['lig_bos_uyelik'] . "</td>
                                <td class='text-center' id='lig_kazanc_" . $sayi . "'>" . $lig['durum'] . "</td>
                                <td class='text-center' id='lig_katil_" . $sayi . " '>
                                    <button id='btn_lig_kayil_" . $sayi . "' type='button' class='btn btn-primary' >KATIL
                                    </button>
                                </td>
                                <td class='text-center' id='lig_ayril_" . $sayi . " '>
                                    <button id='btn_lig_kayil_" . $sayi . "' type='button' class='btn btn-danger' >AYRIL
                                    </button>
                                </td>
                                                                </tr> 
                                                                ";
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