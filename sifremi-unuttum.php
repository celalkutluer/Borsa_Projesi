<?php
include "inc/header.php";
?>

    <section class="body-sign">
        <div class="center-sign">
            <div class="panel panel-sign">
                <div class="panel-title-sign mt-xl text-center">
                    <h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-0">Şifrenizimi
                        Unuttunuz?</h4>
                </div>
                <div class="panel-body">
                    <!--ALERT-->
                    <div id='sif_u_alert'></div>
                    <!--ALERT-->
                    <p class="text-2 opacity-7">Şifreniz sıfırlanacak ve eposta adresinize gönderilecek.</br>Lütfen
                        e-posta adresinizi giriniz.</p>
                    <form action="/" id="frmLostPassword" method="post" class="needs-validation">
                        <div class="form-group mb-lg">
                            <label class="font-weight-bold text-info text-2">E-mail Adresi</label>
                            <input type="text" id="sif_u_eposta" value="" class="form-control form-control-lg" required>
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