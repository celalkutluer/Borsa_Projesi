<?php
include "inc/header.php";
?>


    <section role="main" class="content-body">
        <div class="conteiner">
            <div class="tabs ">
                <ul class="nav nav-tabs nav-justified">
                    <li class="active">
                        <a href="#kazananlar" data-toggle="tab" class="text-center">KAZANANLAR</a>
                    </li>
                    <li>
                        <a href="#kaybedenler" data-toggle="tab" class="text-center">KAYBEDENLER</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="kazananlar" class="tab-pane active">
                        <div class="tabs tabs-success">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active">
                                    <a href="#kazananlar_gun" data-toggle="tab" class="text-center">GÜN</a>
                                </li>
                                <li>
                                    <a href="#kazananlar_hafta" data-toggle="tab" class="text-center">HAFTA</a>
                                </li>
                                <li>
                                    <a href="#kazananlar_ay" data-toggle="tab" class="text-center">AY</a>
                                </li>
                                <li>
                                    <a href="#kazananlar_yil" data-toggle="tab" class="text-center">YIL</a>
                                </li>
                            </ul>
                            <div class="tab-content  tabs-danger">
                                <div id="kazananlar_gun" class="tab-pane active">
                                    <section class="panel">
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">Sıra</th>
                                                        <th class="text-center">Ad</th>
                                                        <th class="text-center">Soyad</th>
                                                        <th class="text-center">Kazanç</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    for ($sayi = 0; $sayi < 10; $sayi++) {
                                                        echo
                                                            "<tr>
                                                        <td class='text-center'>" . ($sayi + 1) . "</td>
                                                        <td class='text-center' id='kazananlar_gun_Ad_" . $sayi . "'>Ad</td>
                                                        <td class='text-center' id='kazananlar_gun_Soyad_" . $sayi . "'>Soyad</td>
                                                        <td class='text-center' id='kazananlar_gun_TL_" . $sayi . "'>TL</td>
                                                    </tr> 
                                                ";
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div id="kazananlar_hafta" class="tab-pane">
                                    <section class="panel">
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">Sıra</th>
                                                        <th class="text-center">Ad</th>
                                                        <th class="text-center">Soyad</th>
                                                        <th class="text-center">Kazanç</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    for ($sayi = 0; $sayi < 10; $sayi++) {
                                                        echo
                                                            "<tr>
                                                        <td class='text-center'>" . ($sayi + 1) . "</td>
                                                        <td class='text-center' id='kazananlar_hafta_Ad_" . $sayi . "'>Ad</td>
                                                        <td class='text-center' id='kazananlar_hafta_Soyad_" . $sayi . "'>Soyad</td>
                                                        <td class='text-center' id='kazananlar_hafta_TL_" . $sayi . "'>TL</td>
                                                                </tr> 
                                                                ";
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </section>

                                </div>
                                <div id="kazananlar_ay" class="tab-pane ">
                                    <section class="panel">
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">Sıra</th>
                                                        <th class="text-center">Ad</th>
                                                        <th class="text-center">Soyad</th>
                                                        <th class="text-center">Kazanç</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    for ($sayi = 0; $sayi < 10; $sayi++) {
                                                        echo
                                                            "<tr>
                                                        <td class='text-center'>" . ($sayi + 1) . "</td>
                                                        <td class='text-center' id='kazananlar_ay_Ad_" . $sayi . "'>Ad</td>
                                                        <td class='text-center' id='kazananlar_ay_Soyad_" . $sayi . "'>Soyad</td>
                                                        <td class='text-center' id='kazananlar_ay_TL_" . $sayi . "'>TL</td>
                                                                </tr> 
                                                                ";
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div id="kazananlar_yil" class="tab-pane">
                                    <section class="panel">
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">Sıra</th>
                                                        <th class="text-center">Ad</th>
                                                        <th class="text-center">Soyad</th>
                                                        <th class="text-center">Kazanç</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    for ($sayi = 0; $sayi < 10; $sayi++) {
                                                        echo
                                                            "<tr>
                                                        <td class='text-center'>" . ($sayi + 1) . "</td>
                                                        <td class='text-center' id='kazananlar_yil_Ad_" . $sayi . "'>Ad</td>
                                                        <td class='text-center' id='kazananlar_yil_Soyad_" . $sayi . "'>Soyad</td>
                                                        <td class='text-center' id='kazananlar_yil_TL_" . $sayi . "'>TL</td>
                                                                </tr> 
                                                                ";
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="kaybedenler" class="tab-pane">
                        <div class="tabs tabs-danger">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active">
                                    <a href="#kaybedenler_gun" data-toggle="tab" class="text-center">GÜN</a>
                                </li>
                                <li>
                                    <a href="#kaybedenler_hafta" data-toggle="tab" class="text-center">HAFTA</a>
                                </li>
                                <li>
                                    <a href="#kaybedenler_ay" data-toggle="tab" class="text-center">AY</a>
                                </li>
                                <li>
                                    <a href="#kaybedenler_yil" data-toggle="tab" class="text-center">YIL</a>
                                </li>
                            </ul>
                            <div class="tab-content  tabs-danger">
                                <div id="kaybedenler_gun" class="tab-pane active">
                                    <section class="panel">
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">Sıra</th>
                                                        <th class="text-center">Ad</th>
                                                        <th class="text-center">Soyad</th>
                                                        <th class="text-center">Kayıp</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    for ($sayi = 0; $sayi < 10; $sayi++) {
                                                        echo
                                                            "<tr>
                                                        <td class='text-center'>" . ($sayi + 1) . "</td>
                                                        <td class='text-center' id='kaybedenler_gun_Ad_" . $sayi . "'>Ad</td>
                                                        <td class='text-center' id='kaybedenler_gun_Soyad_" . $sayi . "'>Soyad</td>
                                                        <td class='text-center' id='kaybedenler_gun_TL_" . $sayi . "'>TL</td>
                                                                </tr> 
                                                                ";
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div id="kaybedenler_hafta" class="tab-pane">
                                    <section class="panel">
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">Sıra</th>
                                                        <th class="text-center">Ad</th>
                                                        <th class="text-center">Soyad</th>
                                                        <th class="text-center">Kayıp</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    for ($sayi = 0; $sayi < 10; $sayi++) {
                                                        echo
                                                            "<tr>
                                                        <td class='text-center'>" . ($sayi + 1) . "</td>
                                                        <td class='text-center' id='kaybedenler_hafta_Ad_" . $sayi . "'>Ad</td>
                                                        <td class='text-center' id='kaybedenler_hafta_Soyad_" . $sayi . "'>Soyad</td>
                                                        <td class='text-center' id='kaybedenler_hafta_TL_" . $sayi . "'>TL</td>
                                                                </tr> 
                                                                ";
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div id="kaybedenler_ay" class="tab-pane ">
                                    <section class="panel">
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">Sıra</th>
                                                        <th class="text-center">Ad</th>
                                                        <th class="text-center">Soyad</th>
                                                        <th class="text-center">Kayıp</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    for ($sayi = 0; $sayi < 10; $sayi++) {
                                                        echo
                                                            "<tr>
                                                        <td class='text-center'>" . ($sayi + 1) . "</td>
                                                        <td class='text-center' id='kaybedenler_ay_Ad_" . $sayi . "'>Ad</td>
                                                        <td class='text-center' id='kaybedenler_ay_Soyad_" . $sayi . "'>Soyad</td>
                                                        <td class='text-center' id='kaybedenler_ay_TL_" . $sayi . "'>TL</td>
                                                                </tr> 
                                                                ";
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div id="kaybedenler_yil" class="tab-pane">
                                    <section class="panel">
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">Sıra</th>
                                                        <th class="text-center">Ad</th>
                                                        <th class="text-center">Soyad</th>
                                                        <th class="text-center">Kayıp</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    for ($sayi = 0; $sayi < 10; $sayi++) {
                                                        echo
                                                            "<tr>
                                                        <td class='text-center'>" . ($sayi + 1) . "</td>
                                                        <td class='text-center' id='kaybedenler_yil_Ad_" . $sayi . "'>Ad</td>
                                                        <td class='text-center' id='kaybedenler_yil_Soyad_" . $sayi . "'>Soyad</td>
                                                        <td class='text-center' id='kaybedenler_yil_TL_" . $sayi . "'>TL</td>
                                                                </tr> 
                                                                ";
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include "inc/footer.php"; ?>