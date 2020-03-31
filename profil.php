<?php
include "inc/header.php";
kullanicikontrol();
?>

<section  role="main" class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-3">
                <section class="panel">
                    <div class="panel-body">

                        <div class="row">
                            <div class="small-12 medium-2 large-2 columns">
                                <div class="circle">
                                    <!-- User Profile Image -->
                                    <img class="profile-picture" src="img/!logged-user.jpg" width="250" height="250" >

                                    <!-- Default Image -->
                                    <!-- <i class="fa fa-user fa-5x"></i> -->
                                </div>
                                <div class="p-image">
                                    <i class="fa fa-camera upload-button"></i>
                                    <input class="file-upload" type="file" accept="image/*"/>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                            <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                        </div>
                        <h2 class="panel-title">Bilgiler</h2>
                    </header>
                    <div class="panel-body">
                        <ul class="simple-post-list">
                            <li>
                                <div class="post-info">
                                    <div >Son Online Olunan Tarih</div>
                                    <div class="text-center">02/01/2020</div>
                                </div>
                            </li>
                            <li>

                            </li>
                            <li>

                            </li>
                        </ul>
                    </div>
                </section>
            </div>
            <div class="col-md-8 col-lg-6">
                <div class="tabs">
                    <ul class="nav nav-tabs tabs-primary">
                        <li class="active">
                            <a href="#overview" data-toggle="tab">Kullanıcı Bilgileri</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="overview" class="tab-pane active">
                            <form class="form-horizontal" method="get">
                                <fieldset>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="profileFirstName">Ad</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="profileFirstName">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="profileLastName">Soyad</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="profileLastName">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="profileAddress">E-posta</label>
                                        <div class="col-md-8">
                                            <input type="email" class="form-control" id="profileAddress">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="profileCompany">Cep Teleonu</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="profileCompany">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="profileCompany">Doğum Tarihi</label>
                                        <div class="col-md-8">
                                            <input type="date" class="form-control" id="profileCompany">
                                        </div>
                                    </div>
                                </fieldset>
                                <hr class="dotted tall">
                                <h4 class="mb-xlg">Şifre Değiştirme</h4>
                                <fieldset class="mb-xl">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="profileNewPassword">Yeni Şifre</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="profileNewPassword">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="profileNewPasswordRepeat">Yei Şifre Tekrar</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="profileNewPasswordRepeat">
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="panel-footer">
                                    <div class="container-fluid">
                                        <div class="col-md">
                                            <button type="submit" class="btn btn-primary btn-block">Kaydet</button>
                                        </div>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-3">

                <h4 class="mb-md">Mali Bilgiler</h4>
                <ul class="simple-card-list mb-xlg">
                    <li class="info">
                        <h3>12503,20 &#x20BA;</h3>
                        <p>Toplam Varlığım</p>
                    </li>
                    <li class="primary">
                        <h3>488</h3>
                        <p>Elimdeki Lot</p>
                    </li>
                    <li class="warning">
                        <h3 class=" fa fa-arrow-down"> -4,36 %</h3>
                        <p>Elimdeki Lotların Kar-Zarar Durumu</p>
                    </li>
                    <li class="success">
                        <h3>16 %</h3>
                        <p>Son 1 aydaki Kar-Zarar Durumum</p>
                    </li>
                    <li class="dark">
                        <h3>1,025 %</h3>
                        <p>Genel Kar-Zarar Durumum</p>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end: page -->

    </div>
</section>

<?php include "inc/footer.php"; ?>
