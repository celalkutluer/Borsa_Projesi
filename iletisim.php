<?php
include "inc/header.php";
?>
<section role="main" class="content-body">
    <section class="section bg-color-quy">
        <section class="section bg-color-quaternary custom-padding-4 border-0 my-0">
            <div class="col-md">
                <form  id="frmiletisim" class='mb-4' novalidate='novalidate'>
                    <section class="panel">
                        <header class="panel-heading">
                            <h2 class="panel-title">İletişim</h2>
                            <p class="panel-subtitle">
                                Lütfen görüş, öneri ve şikayetlerinizi bizimle paylaşın.
                            </p>
                        </header>
                        <div class="panel-body">
                            <!--ALERT-->
                            <div id='iletisim_alert'></div>
                            <!--ALERT-->
                            <div class="row form-group">
                                <div class="col-lg-4">
                                    <input type="text" name="iletisim_Ad" id="iletisim_Ad" placeholder="İsim"
                                           class="form-control">
                                </div>
                                <div class="mb-md hidden-lg hidden-xl"></div>
                                <div class="col-lg-4">
                                    <input type="email" name="iletisim_Soyad" id="iletisim_Soyad"
                                           placeholder="Soyisim"
                                           class="form-control">
                                </div>
                                <div class="mb-md hidden-lg hidden-xl"></div>

                                <div class="col-lg-4">
                                    <input type="email" name="iletisim_Email" id="iletisim_Email"
                                           placeholder="Email Adresiniz"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                            <textarea class="form-control" rows="5" name="iletisim_text"
                                                      id="iletisim_text"
                                                      placeholder="Mesajınız..."></textarea>
                                </div>
                            </div>
                            <div class="form-group mb-lg">
                                <div class="clearfix">
                                    <?php
                                    $s1 = rand(1, 9);
                                    $s2 = rand(1, 9);
                                    $t = $s1 + $s2;
                                    $y = md5($t);
                                    ?>
                                    <label class="pull-left" id="iletisim_dogrulama_text">
                                        <?php
                                        echo "$s1+$s2 sayılarının toplamını giriniz.";
                                        ?>
                                    </label>
                                    <label class="pull-right">Doğrulama</label>
                                    <input id="iletisim_toplam" class="form-control form-control-lg"
                                           type="hidden"
                                           value="<?php echo $y; ?>" name="iletisim_toplam">
                                </div>
                                <div class="input-group input-group-icon">
                                    <input name="iletisim_dkodu" id="iletisim_dkodu" type="text"
                                           class="form-control input-lg"/>
                                    <span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    <button type="button" name="iletisim_btn" id="iletisim_btn"
                                            class="btn btn-primary btn-block">Gönder
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
        </section>
    </section>
</section>
<?php include "inc/footer.php"; ?>
