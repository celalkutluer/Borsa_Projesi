<?php include "inc/header.php";
?>
    <section class="body-sign">
        <div class="center-sign">
            <div class="panel panel-sign">
                <div class="panel-title-sign mt-xl text-right">
                    <h2 class="title text-uppercase text-weight-bold m-none">Doğrula veya Tekrar Kod Gönder</h2>
                </div>
                <div class="panel">
                    <div class="panel-body">
                        <!--ALERT-->
                        <div id='kod_alert'></div>
                        <!--ALERT-->
                        <form id="frmD" class='mb-4' novalidate='novalidate'>
                            <div class="form-group mb-lg">
                                <label>Doğrulama Kodu</label>
                                <input type="text" id='kod' name="kod" class="form-control input-lg" required/>
                            </div>
                            <div class="form-group mb-lg">
                                <div class="col-sm-12 text-right">
                                    <button type="button" id="btnKodD" class="btn btn-primary btn-block">Doğrula
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="panel-body">
                        <!--ALERT-->
                        <div id='kodt_alert'></div>
                        <!--ALERT-->
                        <form id="frmDt" class='mb-4' novalidate='novalidate'>
                            <div class="form-group mb-lg">
                                <label>Eposta Adresi</label>
                                <input type="text" id='kodt' name="eposta_kod" class="form-control input-lg" required/>
                            </div>
                            <div class="form-group mb-lg">
                                <div class="col-sm-12 text-right">
                                    <button type="button" id="btnKodt" class="btn btn-primary btn-block">Tekrar Kod Gönder
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include "inc/footer.php";
?>