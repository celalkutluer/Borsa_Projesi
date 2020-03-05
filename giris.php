<?php
include "inc/header.php";
?>
    <span class="col-lg"></span>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <!--ALERT-->
                        <div id="ygirisAlert"></div>
                        <!--ALERT-->
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Giriş</h3>
                            <div class="form-group">
                                <label for="eposta" class="text-info">E-Posta Adresiniz:</label><br>
                                <input type="text" name="eposta" id="eposta" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Şifreniz:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <!--DOĞRULAMA-->
                            <div class="form-group">
                                <?php
                                $s1 = rand(1, 9);
                                $s2 = rand(1, 9);
                                $t = $s1 + $s2;
                                $y = md5($t);
                                ?>
                                <label for="password"
                                       class="text-info"><?php echo "$s1+$s2 sayılarının toplamını giriniz"; ?></label><br>
                                <input type="hidden" value="<?php echo $y; ?>" name="toplam">
                            </div>
                            <div class="input-group input-group-icon">
                                <input name="dkodu" type="text" class="form-control input-lg"/>
                            </div>
                            <!--DOĞRULAMA-->
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Beni hatırla</span> <span><input
                                                id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md " value="Giriş">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="kayit.php" class="text-info">Kayıt olmak için tıklayınız.</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <span class="col-lg"></span>
<?php include "inc/footer.php"; ?>