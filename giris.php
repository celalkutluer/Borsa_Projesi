<?php
include "inc/header.php";
?>

    <section class="body-sign">
        <div class="center-sign">
            <div class="panel panel-sign">
                <div class="panel-title-sign mt-xl text-right">
                    <h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i>Giriş</h2>
                </div>
                <div class="panel-body">
                    <!--ALERT-->
                    <div id="ygirisAlert"></div>
                    <!--ALERT-->
                    <form  id="frmSignIn" method="post" >
                        <div class="form-group mb-lg">
                            <label>E-posta Adresi</label>
                            <div class="input-group input-group-icon">
                                <input name="eposta" type="text" class="form-control input-lg" />
                                <span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
                            </div>
                        </div>
                        <div class="form-group mb-lg">
                            <div class="clearfix">
                                <label class="pull-left">Şifre</label>
                                <a href="sifremi-unuttum.php" class="pull-right">Şifreni mi unuttun?</a>
                            </div>
                            <div class="input-group input-group-icon">
                                <input name="sifre" type="password" class="form-control input-lg" />
                                <span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
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
                                <label class="pull-left" id="giris_dogrulama_text">
                                    <?php
                                    echo "$s1+$s2 sayılarının toplamını giriniz.";
                                    ?>
                                </label>
                                <label class="pull-right">Doğrulama</label>
                                <input id="giris_dogrulama_input" class="form-control form-control-lg" type="hidden"
                                       value="<?php echo $y; ?>" name="toplam">
                            </div>
                            <div class="input-group input-group-icon">
                                <input name="dkodu" type="text" class="form-control input-lg" />
                                <span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="checkbox-custom checkbox-default">
                                    <input id="RememberMe" name="rememberme" type="checkbox"/>
                                    <label for="RememberMe">Hatırla</label>
                                </div>
                            </div>
                            <div class="col-sm-4 text-right">
                                <button type="button"  id="btnSignIn" type="submit" class="btn btn-primary hidden-xs">Giriş</button>
                                <button type="button"  id="btnSignIn" type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Giriş</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php include "inc/footer.php"; ?>
