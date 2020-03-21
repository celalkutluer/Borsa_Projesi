<?php
include "inc/header.php";
?>

    <section class="body-sign">
    <div class="center-sign">
        <div class="panel panel-sign">
            <div class="panel-title-sign mt-xl text-center">
                <h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-0">Şifrenizimi Unuttunuz?</h4>
            </div>
            <div class="panel-body">
                <p class="text-2 opacity-7">Size şifrenizi sıfırlamanız için bir bağlantı göndereceğiz.</br>Lütfen e-posta adresinizi giriniz.</p>
                <form action="/" id="frmLostPassword" method="post" class="needs-validation">
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="font-weight-bold text-info text-2">E-mail Adresi</label>
                            <input type="text" value="" class="form-control form-control-lg" required>
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
                        <input type="text" value="" name="dkodu" class="form-control form-control-lg" required>
                    </div>
                    <br>
                    <!--DOĞRULAMA-->
                    <div class="form-row">
                        <div class="form-group">
                            <button type="button"  id="btnSifre_Unuttum" type="submit" class="btn btn-primary btn-modern btn-lg btn-block hidden-xs">Gönder</button>
                            <button type="button"  id="btnSifre_Unuttum" type="submit" class="btn btn-primary btn-modern btn-block btn-lg visible-xs mt-lg">Gönder</button>
                        </div> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>


<?php include "inc/footer.php"; ?>