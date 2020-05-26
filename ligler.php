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
                <?php
                $veri = $db->prepare('SELECT kul_lig_id FROM kullanicilar WHERE kul_Id=?');
                $veri->execute(array($_SESSION['kul_id']));
                $v = $veri->fetchAll(PDO::FETCH_ASSOC);
                $say = $veri->rowCount();
                foreach ($v as $ligler) ;
                ?>
                <div class="panel-body">
                    <!--ALERT-->
                    <div id='lig_alert'></div>
                    <!--ALERT-->
                    <div class="row">
                        <div class="col-md-6">
                            <button id='lig_olustur' type='button' class='btn btn-success btn-block modal-with-form'
                                    href='#modalligOlusturForm' <?php if (!$say || $ligler['kul_lig_id'] == null) {
                            } else {
                                echo "disabled";
                            } ?> >
                                Yeni Lig Oluştur
                            </button>
                        </div>
                        <div class="col-md-6">
                            <button id='lig_ayril_btn' type='button' class='btn btn-block btn-danger' <?php if (!$say || $ligler['kul_lig_id'] == null) {
                                echo "disabled"; } else {

                            } ?> >Ayrıl</button>

                        </div>
                    </div>
                    <div class='modal-block modal-header-color modal-block-success mfp-hide'
                         id='modalligOlusturForm'>
                        <section class='panel'>
                            <header class='panel-heading'>
                                <h4 class='panel-title' id='formModalLabel'>Yeni Lig Oluştur</h4>
                            </header>
                            <div class='panel-body'>
                                <!--ALERT-->
                                <div id='lig_olustur_alert'></div>
                                <!--ALERT-->
                                <form id='lig_olustur_form' class='mb-4' novalidate='novalidate'>
                                    <div class="form-group mt-lg">
                                        <label class="col-sm-3 control-label">Lig Başlığı: </label>
                                        <div class="col-sm-9">
                                            <input id='lig_olustur_baslık' type="text"
                                                   name="lig_olustur_baslık"
                                                   class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Lig Duyuru: </label>
                                        <div class="col-sm-9">
                                            <input id='lig_olustur_duyuru'
                                                   name="lig_olustur_duyuru" type="text"
                                                   class="form-control" required/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class='panel-footer'>
                                <div class='row'>
                                    <div class='col-md-12 text-right'>
                                        <button type='button' class='btn btn-light modal-dismiss'>Kapat
                                        </button>
                                        <button type='button' id='lig_olustur_btn' type='submit'
                                                class='btn btn-success'>Oluştur
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <table class="table table-bordered table-striped mb-none" id="datatable-default">
                        <thead>
                        <tr>
                            <th class='text-center'>Sıra</th>
                            <th class='text-center'>Lig Id</th>
                            <th class='text-center'>Lig Adı</th>
                            <th class='text-center'>Lig Boş Üye Sayısı</th>
                            <th class='text-center'>Lig Kazancı</th>
                            <th class='text-center'>Katıl</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        //
                        $sayi = 0;
                        $veri_lig = $db->prepare('SELECT ligler.lig_id,ligler.lig_baslik, ligler.lig_bos_uyelik, sum(satim.satim_kar_zarar) as durum FROM kullanicilar INNER JOIN satim on satim.satim_kul_id=kullanicilar.kul_Id INNER JOIN ligler on ligler.lig_id=kullanicilar.kul_lig_id GROUP BY ligler.lig_id ORDER BY SUM(satim.satim_kar_zarar) DESC');
                        $veri_lig->execute(array());
                        $v_lig = $veri_lig->fetchAll(PDO::FETCH_ASSOC);
                        $say_lig = $veri_lig->rowCount();
                        foreach ($v_lig as $lig) {
                            echo
                                "<tr>
                                <td class='text-center' id='lig_sira_" . $sayi . "'>" . ($sayi + 1) . "</td>
                                <td class='text-center' id='lig_id_" . $sayi . "'>" . $lig['lig_id'] . "</td>
                                <td class='text-center' id='lig_baslik_" . $sayi . "'>" . $lig['lig_baslik'] . "</td>
                                <td class='text-center' id='lig_bosluk_" . $sayi . "'>" . $lig['lig_bos_uyelik'] . "/10</td>
                                <td class='text-center' id='lig_kazanc_" . $sayi . "'>" . $lig['durum'] . " TL</td>
                                <td class='text-center' id='katil'>
                                   <button class='btn btn-primary' onclick=".chr(34)."katil_btn("."'".$sayi."'".")".chr(34);
                            if (!$say || $ligler['kul_lig_id'] == null) {
                            } else {
                                echo "disabled";
                            }
                            echo ">Katıl</button>
                                </td>

                                    </tr>";

                            $sayi++;
                        }
                        ?>
                        </tbody>
                    </table>
                    <script type="text/javascript">
                        function katil_btn(no)
                        {
                            var lig=document.getElementById('lig_baslik_'+no).innerText;
                            $.ajax({
                                    type: 'POST',
                                    url: 'settings/islem.php?islem=lig_katil',
                                    data: { lig_baslik: lig},
                                    success: function (cevap) {
                                        $("#lig_alert").html(cevap).hide().fadeIn(700);
                                    }
                                }
                            );
                        }
                    </script>
                </div>
            </section>
        </div>
    </div>
</section>
<!--KODLAR BURAYA-->
<?php include "inc/footer.php"; ?>
