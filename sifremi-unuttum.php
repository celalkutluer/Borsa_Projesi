<?php
include "inc/header.php";
?>

    <section class="body-sign">
        <div class="center-sign">
            <div class="panel panel-sign">
                <div class="panel-title-sign mt-xl text-right">
                    <h2 class="title text-uppercase text-weight-bold m-none">Şifremi Unuttum!</h2>
                </div>
                <div class="panel-body">
                    <!--ALERT-->
                    <div id='sif_u_alert'></div>
                    <!--ALERT-->
                    <p class="text-2 text-center opacity-7">Şifreniz sıfırlanacak ve eposta adresinize gönderilecek.</br>Lütfen
                        e-posta adresinizi giriniz.</p>
                    <form action="/" id="frmLostPassword" method="post" class="needs-validation">
                        <div class="form-group mb-lg">
                            <label >E-mail Adresi</label>
                            <input type="text" id="sif_u_eposta" value="" class="form-control input-lg" required>
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
                                <input id="kodsif_dogrulama_input" class="form-control form-control-lg" type="hidden"
                                       value="<?php echo $y; ?>" name="toplam">
                            </div>
                            <div class="input-group input-group-icon">
                                <input name="dkodu" id="kodsif_dkodu" type="text" class="form-control input-lg"/>
                                <span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
                            </div>
                        </div>
                        <div class="form-group mb-lg">
                            <button type="button" id="btnSifre_Unuttum"
                                    class="btn btn-primary btn-modern btn-lg btn-block">Gönder
                            </button>
                        </div>
                </div>
                </form>
            </div>
        </div>
        </div>
    </section>


<?php include "inc/footer.php"; ?>