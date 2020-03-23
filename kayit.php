<?php
include "inc/header.php";
?>

    <section class="body-sign">
        <div class="center-sign">
            <div class="panel panel-sign">
                <div class="panel-title-sign mt-xl text-right">
                    <h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i>Kayıt</h2>
                </div>
                <div class="panel-body">
                    <!--ALERT-->
                    <div id="ykayitAlert"></div>
                    <!--ALERT-->
                    <form  id="frmKayit" method="post" >
                        <div class="form-group mb-none">
                            <div class="row">
                                <div class="col-sm-6 mb-lg">
                                    <label>Ad</label>
                                    <input id="frmKayitAd" name="frmKayitAd" type="text" class="form-control input-lg" />
                                </div>
                                <div class="col-sm-6 mb-lg">
                                    <label>Soyad</label>
                                    <input id="frmKayitSoyad" name="frmKayitSoyad" type="text" class="form-control input-lg" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-lg">
                            <label>E-Posta</label>
                            <input id="frmKayitEmail" name="frmKayitEmail" type="email" class="form-control input-lg" />
                        </div>
                        <div class="form-group mb-none">
                            <div class="row">
                                <div class="col-sm-6 mb-lg">
                                    <label>Şifre</label>
                                    <input id="frmKayitSifre" name="frmKayitSifre"  name="pwd" type="password" class="form-control input-lg" />
                                </div>
                                <div class="col-sm-6 mb-lg">
                                    <label>Yeniden Şifre</label>
                                    <input  id="frmKayitSifreconfirm" name="frmKayitSifreconfirm"  type="password" class="form-control input-lg" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-none">
                            <div class="row">
                                <div class="col-sm-6 mb-lg">
                                    <label>Doğum Tarihi</label>
                                    <input id="frmKayitDogum_tar" name="frmKayitDogum_tar" type="date" class="form-control input-lg" />
                                </div>
                                <div class="col-sm-6 mb-lg">
                                    <label>Cep Telefon No</label>
                                    <input id="frmKayitCepTelNo" name="frmKayitCepTelNo" type="text" data-plugin-masked-input data-input-mask="(999) 999-9999" placeholder="(555) 555-5555" class="form-control input-lg" />
                                </div>
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
                                <label class="pull-left" id="frmKayitgiris_dogrulama_text">
                                    <?php
                                    echo "$s1+$s2 sayılarının toplamını giriniz.";
                                    ?>
                                </label>
                                <label class="pull-right">Doğrulama</label>
                                <input id="frmKayitgiris_dogrulama_input" class="form-control form-control-lg" type="hidden"
                                       value="<?php echo $y; ?>" name="frmKayittoplam">
                            </div>
                            <div class="input-group input-group-icon">
                                <input name="frmKayitdkodu" type="text" class="form-control input-lg" />
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
                                    <input id="frmKayitSozlesme" name="frmKayitSozlesme" type="checkbox"/>
                                    <label for="frmKayitSozlesme"><a href="#">Üyelik Sözleşmesi</a>ni kabul ediyorum.</label>
                                </div>
                            </div>
                            <div class="col-sm-4 text-right">
                                <button type="button" type="submit" id="btnfrmKayit" class="btn btn-primary btn-block">Kayıt</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php include "inc/footer.php"; ?>
