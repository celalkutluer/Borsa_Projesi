<?php include "inc/header.php";
?>
    <section class="body-sign">
        <div class="center-sign">
            <div class="panel panel-sign">
                <div class="panel-title-sign mt-xl text-right">
                    <h2 class="title text-uppercase text-weight-bold m-none">Tekrar Kod Gönder</h2>
                </div>
                <div class="panel">

                    <div class="panel-body">
                        <!--ALERT-->
                        <div id='kodt_alert'></div>
                        <!--ALERT-->
                        <form id="frmDt" class='mb-4' novalidate='novalidate'>
                            <div class="form-group mb-lg">
                                <label>Eposta Adresi</label>
                                <input type="text" id='kodt' name="eposta_kod" class="form-control input-lg" required/>
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
                                    <input id="kodt_dogrulama_input" class="form-control form-control-lg" type="hidden"
                                           value="<?php echo $y; ?>" name="toplam">
                                </div>
                                <div class="input-group input-group-icon">
                                    <input name="dkodu" id="kodt_dkodu" type="text" class="form-control input-lg"/>
                                    <span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
                                </div>
                            </div>
                            <div class="form-group mb-lg">
                                <div class="col-sm-12 text-right">
                                    <button type="button" id="btnKodt" class="btn btn-primary btn-block">Tekrar Kod Gönder
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