<?php
include "inc/header.php";
?>

    <div class="container">

        <div class="row">
            <div class="col">

                <div class="featured-boxes">
                <div class="row">
                    <div class="featured-box featured-box-primary text-left mt-0">
                        <div class="box-content">
                            <h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-0">Şifrenizimi Unuttunuz?</h4>
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
                                <!--DOĞRULAMA-->
                                <div class="form-row">
                                    <div class="form-group col">
                                        <input type="submit" value="Gönder" class="btn btn-primary btn-modern float-right" data-loading-text="Loading...">
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