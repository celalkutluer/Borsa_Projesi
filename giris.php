<?php include "inc/header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="featured-boxes">
                    <div class="row">
                        <div class="featured-box featured-box-primary text-left mt-5">
                            <div class="box-content">
                                <!--ALERT-->
                                <div id="ygirisAlert"></div>
                                <!--ALERT-->
                                <form id="frmSignIn" method="post" >
                                    <div class="form-row">
                                        <div class="form-group col">
                                            <label class="font-weight-bold text-info text-2">E-mail Adresi</label>
                                            <input name="eposta" type="text" value="" class="form-control form-control-lg" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col">
                                            <a class="float-right text-info" href="sifremi-unuttum.php">(Şifrenizi unuttunuz mu?)</a>
                                            <label class="font-weight-bold text-info text-2">Şifre</label>
                                            <input name="sifre" type="password" value="" class="form-control form-control-lg"
                                                   required>
                                        </div>
                                    </div>
                                    <!--DOĞRULAMA-->
                                    <div class="form-row">
                                        <div class="form-group col">
                                            <?php
                                            $s1 = rand(1, 9);
                                            $s2 = rand(1, 9);
                                            $t = $s1 + $s2;
                                            $y = md5($t);
                                            ?>
                                            <label for="password"
                                                   class="font-weight-bold text-info text-2">
                                                <?php
                                                echo "$s1+$s2 sayılarının toplamını giriniz";
                                                ?>
                                            </label>
                                            <input class="form-control form-control-lg" type="hidden"
                                                   value="<?php echo $y; ?>" name="toplam">
                                        </div>
                                    </div>
                                    <div class="input-group input-group-icon">
                                        <input type="text" value="" name="dkodu" class="form-control input-lg" required>
                                    </div>
                                    <!--DOĞRULAMA-->
                                    <div class="form-row">
                                        <div class="form-group col-lg-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="rememberme">
                                                <label class="custom-control-label text-info text-2" for="rememberme">Beni
                                                    Hatırla</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input id="btnSignIn" value="Giriş"
                                                   class="btn btn-primary btn-modern float-right"
                                                   data-loading-text="Loading...">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include "inc/footer.php"; ?>

