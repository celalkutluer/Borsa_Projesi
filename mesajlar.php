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
yoneticikontrol();
?>
    <section role="main" class="content-body">
        <div class="conteiner">
            <div class="col-md">
                <section class="panel panel-info">
                    <header class="panel-heading">
                        <h2 class="panel-title">Mesajlar</h2>
                        <div class="panel-actions">
                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        </div>
                    </header>
                    <div class="panel-body">
                        <!--ALERT-->
                        <div id='mesaj_alert'></div>
                        <!--ALERT-->
                        <table class="table table-bordered table-striped mb-none" id="datatable-default">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Ad</th>
                                <th>Soyad</th>
                                <th>E-Posta</th>
                                <th>Kullanıcı mı?</th>
                                <th>Mesaj</th>
                                <th>Tarih Saat</th>
                                <th class="hidden-xs">Oku</th>
                                <th class="hidden-xs">Cevap Ver</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            function mesajlar()
                            {
                                global $db;
                                $sayi = 0;
                                $veri = $db->prepare("SELECT * FROM `mesajlar` WHERE `msj_okundumu` IS NULL");
                                $veri->execute(array());
                                $v = $veri->fetchAll(pdo::FETCH_ASSOC);
                                $say = $veri->rowCount();
                                if ($say) {
                                    foreach ($v as $tum_mesajlar) {
                                        ?>
                                        <tr>
                                            <td id="msj_id_<?php echo $sayi; ?>"><?php echo $tum_mesajlar['msj_id']; ?></td>
                                            <td><?php echo $tum_mesajlar['msj_ad']; ?></td>
                                            <td><?php echo $tum_mesajlar['msj_soyad']; ?></td>
                                            <td><?php echo $tum_mesajlar['msj_eposta']; ?></td>
                                            <td><?php if ($tum_mesajlar['msj_kul_id'] == null) echo "Ziyaretçi"; else echo "Kullanıcı"; ?></td>
                                            <td><?php echo $tum_mesajlar['msj_text']; ?></td>
                                            <td><?php echo (new \DateTime($tum_mesajlar['msj_zaman']))->format('d-m-Y H:i:s') . PHP_EOL; ?></td>
                                            <td class="center hidden-xs">
                                                <button id='btn_okundu' type='button' class="btn btn-success"
                                                        onclick="okundu_btn('<?php echo $sayi; ?>')">Okundu
                                                </button>
                                            </td>
                                            <td class='text-center' id='msj_cvp_<?php echo $sayi; ?> '>
                                                <button id='btn_msj_cvp_<?php echo $sayi; ?>' type='button'
                                                        class='btn btn-danger modal-with-form'
                                                        href='#modalmsj_cvpForm<?php echo $sayi; ?>'>Cevap
                                                </button>
                                                <div class='modal-block modal-header-color modal-block-success mfp-hide'
                                                     id='modalmsj_cvpForm<?php echo $sayi; ?>'>
                                                    <section class='panel'>
                                                        <header class='panel-heading'><h4 class='panel-title'
                                                                                          id='formModalLabel'>
                                                                Cevap Ver</h4></header>
                                                        <div class='panel-body'>
                                                            <!--ALERT-->
                                                            <div id='msj_cvp_alert'></div>
                                                            <!--ALERT-->
                                                            <form id='msj_cvp_form_<?php echo $sayi; ?>' class='mb-4'
                                                                  novalidate='novalidate'>
                                                                <div class='form-group row align-items-center'>
                                                                    <label
                                                                            class='col-sm-4 text-left text-sm-right mb-0'>Eposta
                                                                        Adresi</label>
                                                                    <label
                                                                            id='msj_eposta_<?php echo $sayi; ?>'
                                                                            class='col-sm-7 text-center mb-0'><?php echo $tum_mesajlar['msj_eposta']; ?>
                                                                    </label>
                                                                </div>

                                                                <div class='form-group row align-items-center'>
                                                                    <textarea class="form-control" rows="5"
                                                                              id="msj_text_<?php echo $sayi; ?>"
                                                                              placeholder="Mesajınız..."></textarea>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class='panel-footer'>
                                                            <div class='row'>
                                                                <div class='col-md-12 text-right'>
                                                                    <button type='button'
                                                                            class='btn btn-light modal-dismiss'>Kapat
                                                                    </button>
                                                                    <button type='button'
                                                                            id='msj_cvp_btn_<?php echo $sayi; ?>'
                                                                            type='submit' class='btn btn-danger'
                                                                            onclick=" msj_cvp('<?php echo $sayi; ?>')">
                                                                        Gönder
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                        $sayi++;
                                    }
                                }
                            }
                            mesajlar();
                            ?>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                            function okundu_btn(no) {
                                var id = document.getElementById('msj_id_' + no).innerText;
                                $.ajax({
                                        type: 'POST',
                                        url: 'settings/islem.php?islem=mesaj_okundu',
                                        data: {id: id},
                                        success: function (cevap) {
                                            $("#mesaj_alert").html(cevap).hide().fadeIn(700);
                                        }
                                    }
                                );
                            }
                            function msj_cvp(no) {
                                var eposta = document.getElementById('msj_eposta_' + no).innerText;
                                var mesaj_text  = document.getElementById('msj_text_' + no).value;
                                $.ajax({
                                    type: 'POST',
                                    url: 'settings/islem.php?islem=mesaj_cevap',
                                    data: {eposta:eposta,mesaj_text:mesaj_text},
                                    success: function (cevap) {
                                        $("#msj_cvp_alert").html(cevap).hide().fadeIn(700);
                                    }
                                });
                            }
                        </script>
                    </div>
                </section>
            </div>
        </div>
    </section>
<?php include "inc/footer.php"; ?>