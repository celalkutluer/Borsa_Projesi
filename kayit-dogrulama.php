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
?>
    <section class="body-sign">
        <div class="center-sign">
            <div class="panel panel-sign">
                <div class="panel-title-sign mt-xl text-right">
                    <h2 class="title text-uppercase text-weight-bold m-none">Doğrula</h2>
                </div>
                <div class="panel">
                    <div class="panel-body">
                        <!--ALERT-->
                        <div id='kod_alert'></div>
                        <!--ALERT-->
                        <form id="frmD" class='mb-4' novalidate='novalidate'>
                            <div class="clearfix">
                                <a href="kod_gonder.php" class="pull-right">Kod Gelmedi mi?</a>
                            </div>
                            <div class="form-group mb-lg">
                                <label>Doğrulama Kodu</label>
                                <input type="text" id='kod' name="kod" class="form-control input-lg" required/>
                            </div>
                            <div class="form-group mb-lg">
                                <div class="clearfix">
                                    <?php
                                    $s1 = rand(1, 9);
                                    $s2 = rand(1, 9);
                                    $t = $s1 + $s2;
                                    $y = md5($t);
                                    ?>
                                    <label class="pull-left" id="giris_dogrulama_text">
                                        <?php
                                        echo "$s1+$s2 sayılarının toplamını giriniz.";
                                        ?>
                                    </label>
                                    <label class="pull-right"></label>
                                    <input id="kod_dogrulama_input" class="form-control form-control-lg" type="hidden"
                                           value="<?php echo $y; ?>" name="toplam">
                                </div>
                                <div class="input-group input-group-icon">
                                    <input name="dkodu" id="kod_dkodu" type="text" class="form-control input-lg"/>
                                    <span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    <button type="button" id="btnKodD" class="btn btn-primary btn-block">Doğrula
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include "inc/footer.php";
?>