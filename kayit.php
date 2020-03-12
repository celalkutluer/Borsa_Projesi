<?php
include "inc/header.php";
?>

    <div class="container">

        <div class="row justify-content-center">
                <div class="row justify-content-md-center"">
                <div class="row">
                    <div class="featured-box featured-box-primary text-left mt-0">
                        <div class="box-content">
                            <!--ALERT-->
                            <div id="ykayitAlert"></div>
                            <!--ALERT-->
                            <form>
                                <h3 class="custom-primary-font text-center text-info  custom-fontsize-3">Üyeliğinizi Oluşturun.</h3>
                                <div class="form-row ">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4" class="text-info">*Ad</label>
                                        <input type="text" class="form-control form-control-lg" id="inputAd1">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="text-info">*Soyad</label>
                                        <input type="text" class="form-control form-control-lg" id="inputSoyad1">
                                    </div>
                                </div>
                                <div class="form-row ">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4" class="text-info">*E-Posta</label>
                                        <input type="email" class="form-control form-control-lg" id="inputEmail1">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="text-info">*Şifre</label>
                                        <input type="password" class="form-control form-control-lg" id="inputPassword1">
                                    </div>
                                </div>
                                <div class="form-row ">
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="text-info">Doğum Tarihi</label>
                                        <input type="date" class="form-control form-control-lg" id="inputDogTar1">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4" class="text-info">Cep Telefon No</label>
                                        <input id="phone" data-plugin-masked-input data-input-mask="(999) 999-9999" placeholder="(999) 999-9999" class="form-control form-control-lg" id="inputCepTelNo1">
                                    </div>
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
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label text-info" for="gridCheck">
                                            Herşeyi kabul ediyorum.
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" id="btn_kayit" value="Giriş"
                                        class="btn btn-primary btn-modern float-right"
                                        data-loading-text="Loading...">Kayıt</button>
                            </form>
                        </div>
                        <div class="text-center">
                            <label class="text-info">* İşareti olan alanların girilmesi zorunludur.</label>
                        </div>
                    </div>
                </div>
        </div>
    </div>


<?php include "inc/footer.php"; ?>