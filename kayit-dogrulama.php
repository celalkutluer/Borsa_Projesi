<?php include "inc/header.php";
?>
    <section role="main" class="content-body">
        <section class="section bg-color-quy">
            <div class="panel">
                <div class="panel-body">
                    <!--ALERT-->
                    <div id='kod_alert'></div>
                    <!--ALERT-->
                    <form  id="frmD" class='mb-4' novalidate='novalidate'>
                        <div class="form-group mb-lg">
                            <label>Doğrulama Kodu</label>
                            <input  type="text" id='kod' name="kod" class="form-control input-lg" required/>
                        </div>
                        <div class="form-group mb-lg">
                            <div class="col-sm-12 text-right">
                                <button type="button" id="btnKodD" class="btn btn-primary btn-block" >Doğrula</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </section>
<?php include "inc/footer.php";
?>