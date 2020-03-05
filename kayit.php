<?php
include "inc/header.php";
?>
    <span class="col-lg"></span>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <!--ALERT-->
                    <div id="ykayitAlert"></div>
                    <!--ALERT-->
                    <form>
                        <h3 class="text-center text-info">Kayıt</h3>
                        <div class="form-row ">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="text-info">*Ad</label>
                                <input type="text" class="form-control" id="inputAd1">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="text-info">*Soyad</label>
                                <input type="text" class="form-control" id="inputSoyad1">
                            </div>
                        </div>
                        <div class="form-row ">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="text-info">*E-Posta</label>
                                <input type="email" class="form-control" id="inputEmail1">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="text-info">*Şifre</label>
                                <input type="password" class="form-control" id="inputPassword1">
                            </div>
                        </div>
                        <div class="form-row ">
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="text-info">Doğum Tarihi</label>
                                <input type="date" class="form-control" id="inputDogTar1">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="text-info">Cep Telefon No</label>
                                <input type="tel" class="form-control" id="inputCepTelNo1">
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
                        <button type="submit" id="Kayit_btn" class="btn btn-primary">Kayıt</button>
                    </form>
                </div>
            </div>
            <span class="col-lg"></span>
            <div class="text-center">
                <label class="text-info">* İşareti olan alanların girilmesi zorunludur.</label>
            </div>
        </div>
    </div>
    <span class="col-lg"></span>



<?php include "inc/footer.php"; ?>