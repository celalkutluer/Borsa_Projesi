<?php
include "inc/header.php";
?>
<?php
/*
<div class="conteiner">
    <div class=" row ">
        <div class="col-sm-6">
            <div class="table col-sm ">
                <table class="table table-bordered bg-light">
                    <span class="h6 font-weight-light text-info">En Çok Yükselenler</span>
                    <thead>
                    <tr>
                        <th class="text-center" scope="col">Menkul Adı</th>
                        <th class="text-center" scope="col">Durum</th>
                        <th class="text-center" scope="col">Son Değeri</th>
                        <th class="text-center" scope="col">(%) Fark</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php
                        function hisse_yukselen()
                        {
                        Global $db;
                        $veri = $db->prepare("SELECT * FROM `hisseler` order by hisse_yuzde DESC LIMIT 5");
                        $veri->execute(array());
                        $v = $veri->fetchAll(pdo::FETCH_ASSOC);
                        $say = $veri->rowCount();
                        if ($say) {
                        foreach ($v

                        as $tum_hisseler) {
                        ?>
                        <td class="text-center">
                            <?php
                            echo $tum_hisseler['hisse_sembol'];
                            ?>
                        </td>
                        <td class="text-center">
                            <?php
                            if ($tum_hisseler['hisse_yuzde'] > 0) {
                                echo "<i class=\"fas fa-arrow-circle-up text-success\"></i>";
                            } elseif ($tum_hisseler['hisse_yuzde'] == 0) {
                                echo "<i class=\"fas fa-minus text-info\"></i>";
                            } else {
                                echo "<i class=\"fas fa-arrow-circle-down text-danger\"></i>";
                            };
                            ?>
                        </td>
                        <td class="text-center">
                            <?php
                            echo convert_nokta_virgül($tum_hisseler['hisse_deger']);
                            ?>
                        </td>
                        <td class="text-center">
                            <?php
                            echo convert_nokta_virgül($tum_hisseler['hisse_yuzde']);
                            ?>
                        </td>
                    </tr>
                    <?php
                    }
                    }
                    }

                    hisse_yukselen();
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="table col-sm">
                <table class="table table-bordered bg-light">
                    <span class="h6 font-weight-light text-info">En Çok Düşenler</span>
                    <thead>
                    <tr>
                        <th class="text-center" scope="col">Menkul Adı</th>
                        <th class="text-center" scope="col">Durum</th>
                        <th class="text-center" scope="col">Son Değeri</th>
                        <th class="text-center" scope="col">(%) Fark</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php
                        function hisse_dusenler()
                        {
                        Global $db;
                        $veri = $db->prepare("SELECT * FROM `hisseler` order by hisse_yuzde ASC LIMIT 5");
                        $veri->execute(array());
                        $v = $veri->fetchAll(pdo::FETCH_ASSOC);
                        $say = $veri->rowCount();
                        if ($say) {
                        foreach ($v

                        as $tum_hisseler) {
                        ?>
                        <td class="text-center">
                            <?php
                            echo $tum_hisseler['hisse_sembol'];
                            ?>
                        </td>
                        <td class="text-center">
                            <?php
                            if ($tum_hisseler['hisse_yuzde'] > 0) {
                                echo "<i class=\"fas fa-arrow-circle-up text-success\"></i>";
                            } elseif ($tum_hisseler['hisse_yuzde'] == 0) {
                                echo "<i class=\"fas fa-minus text-info\"></i>";
                            } else {
                                echo "<i class=\"fas fa-arrow-circle-down text-danger\"></i>";
                            };
                            ?>
                        </td>
                        <td class="text-center">
                            <?php
                            echo convert_nokta_virgül($tum_hisseler['hisse_deger']);
                            ?>
                        </td>
                        <td class="text-center">
                            <?php
                            echo convert_nokta_virgül($tum_hisseler['hisse_yuzde']);
                            ?>
                        </td>
                    </tr>
                    <?php
                    }
                    }
                    }

                    hisse_dusenler();
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="conteiner col-sm-12">
    <div class=" row ">
        <div class="table col-sm">
            <table class="table table-bordered bg-light">
                <thead>
                <tr>
                    <th scope="col">Menkul Adı</th>
                    <th class="text-center" scope="col">Durum</th>
                    <th class="text-center" scope="col">Son Değeri</th>
                    <th class="text-center" scope="col">Fark</th>
                    <th class="text-center" scope="col">(%) Fark</th>
                    <th class="text-center" scope="col">En Düşük</th>
                    <th class="text-center" scope="col">En Yüksek</th>
                    <th class="text-center" scope="col">Hacim(Lot)</th>
                    <th class="text-center" scope="col">Hacim(TL)</th>
                    <th class="text-center" scope="col">Zaman</th>
                    <th class="text-center" scope="col">Alış</th>
                    <th class="text-center" scope="col">Satış</th>
                </tr>
                </thead>
                <tbody>

                <?php
                function hisse()
                {
                    $link = "http://bigpara.hurriyet.com.tr/borsa/canli-borsa/";
                    $icerik = file_get_contents($link);
                    Global $db;
                    $veri = $db->prepare("SELECT `hisse_id`,`hisse_sembol`,`hisse_deger` FROM `hisse`");
                    $veri->execute(array());
                    $v = $veri->fetchAll(pdo::FETCH_ASSOC);
                    $say = $veri->rowCount();
                    if ($say) {
                        foreach ($v

                                 as $tum_hisseler) {
                            ?>
                            <tr>
                                <td class="text-center" id="hisse_sembol_<?php echo $tum_hisseler['hisse_id']; ?>">
                                    <?php echo $tum_hisseler['hisse_sembol']; ?>
                                </td>
                                <td class="text-center">
                                    <?php
                                    $aranan = 'h_td_yuzde_id_' . $tum_hisseler['hisse_sembol'] . '">';
                                    $deger = ara($aranan, '</li>', $icerik);

                                    if (convert_virgül_nokta($deger[0]) > 0) {
                                        echo "<i class=\"fas fa-arrow-circle-up text-success\"></i>";
                                    } elseif (convert_virgül_nokta($deger[0]) == 0) {
                                        echo "<i class=\"fas fa-minus text-info\"></i>";
                                    } else {
                                        echo "<i class=\"fas fa-arrow-circle-down text-danger\"></i>";
                                    };
                                    ?>
                                </td>
                                <td class="text-center">
                                    <?php
                                    $aranan = 'h_td_fiyat_id_' . $tum_hisseler['hisse_sembol'] . '">';
                                    $deger = ara($aranan, '</li>', $icerik);
                                    echo $deger[0];
                                    ?>
                                </td>
                                <td class="text-center">
                                    <?php
                                    $aranan = 'h_td_farktl_id_' . $tum_hisseler['hisse_sembol'] . '">';
                                    $deger = ara($aranan, '</li>', $icerik);
                                    echo $deger[0];
                                    ?>
                                </td>
                                <td class="text-center">
                                    <?php
                                    $aranan = 'h_td_yuzde_id_' . $tum_hisseler['hisse_sembol'] . '">';
                                    $deger = ara($aranan, '</li>', $icerik);
                                    echo $deger[0];
                                    ?>
                                </td>
                                <td class="text-center">
                                    <?php
                                    $aranan = 'h_td_dusuk_id_' . $tum_hisseler['hisse_sembol'] . '">';
                                    $deger = ara($aranan, '</li>', $icerik);
                                    echo $deger[0];
                                    ?>
                                </td>
                                <td class="text-center">
                                    <?php
                                    $aranan = 'h_td_yuksek_id_' . $tum_hisseler['hisse_sembol'] . '">';
                                    $deger = ara($aranan, '</li>', $icerik);
                                    echo $deger[0];
                                    ?>
                                </td>
                                <td class="text-center">
                                    <?php
                                    $aranan = 'h_td_hacimlot_id_' . $tum_hisseler['hisse_sembol'] . '">';
                                    $deger = ara($aranan, '</li>', $icerik);
                                    echo $deger[0];
                                    ?>
                                </td>
                                <td class="text-center">
                                    <?php
                                    $aranan = 'h_td_hacimtl_id_' . $tum_hisseler['hisse_sembol'] . '">';
                                    $deger = ara($aranan, '</li>', $icerik);
                                    echo $deger[0];
                                    ?>
                                    <span>&#8378;</span>
                                </td>
                                <td class="text-center">
                                    <?php
                                    $aranan = 'h_td_saat_id_' . $tum_hisseler['hisse_sembol'] . '">';
                                    $deger = ara($aranan, '</li>', $icerik);
                                    echo $deger[0];
                                    ?>
                                </td>
                                <td class="text-center">
                                    <!-- Button trigger modal -->
                                    <?php
                                    echo "<button type='button' class='btn btn-success' data-toggle='modal' data-target='#exampleModalCenter_al_" . $tum_hisseler['hisse_id'] . "'>"; ?>
                                    AL
                                    </button>

                                    <!-- Modal -->
                                    <?php
                                    echo "<div class='modal fade' id='exampleModalCenter_al_" . $tum_hisseler['hisse_id'] . "' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>"; ?>
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Hisse Alım</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form-group">
                                                    <div class="form-group">
                                                        <?php
                                                        echo "<label" . $tum_hisseler['hisse_sembol'] . " hissini almak istediğinizden eminmisiniz?</label>";
                                                        ?>
                                                        </br>
                                                        <label">Bakiyeniz :</label>
                                                        <?php
                                                        echo "<label id='lbl_al_bakiye_" . $tum_hisseler['hisse_id'] . "'></label>";?>
                                                        </br>
                                                        <?php
                                                        echo "<label>Alış Tutarı:  " . $tum_hisseler['hisse_deger'] . "</label>";
                                                        ?>
                                                        </br>
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-sm-10">
                                                                    <script>
                                                                        function updateTextInput(val) {
                                                                            document.getElementById("lbl_miktar").innerHTML = val;
                                                                        }
                                                                    </script>
                                                                    <input type="range" name="rangeInput" min="0"
                                                                           max="100"
                                                                           onchange="updateTextInput(this.value,);"
                                                                           class="form-control-range"
                                                                           id="formControlRange">
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <label id="lbl_miktar"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label for="customRange2">Toplam :</label>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                                <?php
                                                echo "<button id='satin_al" . $tum_hisseler['hisse_id'] . "' type=' button'  class=' btn btn-primary' >Satın al</button>";
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php echo "</div>"; ?>
                                </td>
                                <td class="text-center">
                                    <?php
                                    echo "<button id='btn_alis_" . $say . "' type='button' class='btn btn-danger'>SAT</button>";
                                    ?>
                                </td>
                            </tr>
                            <!--///////////////////////////-->
                            <?php
                        }
                    }
                }

                hisse();
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
*/
?>
    <section class="section bg-color-quaternary custom-padding-4 border-0 my-0">
        <div class="container">
            <div class="row mb-3">
                <div class="col">

                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <!--table-responsive-lg-->
                            <table class="table table-bordered table-striped table-sm mb-0">
                                <h3 class="custom-primary-font text-center custom-fontsize-3 font-weight-normal appear-animation"
                                    data-appear-animation="fadeInUpShorter">En Çok Yükselenler</h3>
                                <thead>
                                <tr>
                                    <th class="text-center" scope="col">Menkul Adı</th>
                                    <th class="text-center" scope="col">Durum</th>
                                    <th class="text-center" scope="col">Son Değeri</th>
                                    <th class="text-center" scope="col">(%) Fark</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                for ($sayi = 1; $sayi <= 5; $sayi++) {
                                    ?>
                                    <tr>
                                        <td class="text-center" id="hisse_yukselen_sembol_<?php echo $sayi; ?>"></td>
                                        <td class="text-center" id="hisse_yukselen_durum_<?php echo $sayi; ?>"></td>
                                        <td class="text-center" id="hisse_yukselen_son_deger_<?php echo $sayi; ?>"></td>
                                        <td class="text-center" id="hisse_yukselen_fark_<?php echo $sayi; ?>"></td>
                                    </tr>
                                <?php } ?>
                                <?php
                                /*
                                                                function hisse_yukselen()
                                                                {
                                                                Global $db;
                                                                $veri = $db->prepare("SELECT * FROM `hisseler` order by hisse_yuzde DESC LIMIT 5");
                                                                $veri->execute(array());
                                                                $v = $veri->fetchAll(pdo::FETCH_ASSOC);
                                                                $say = $veri->rowCount();
                                                                if ($say) {
                                                                foreach ($v

                                                                as $tum_hisseler) {
                                                                ?>
                                                                <td class="text-center">
                                                                    <?php
                                                                    echo $tum_hisseler['hisse_sembol'];
                                                                    ?>
                                                                </td>
                                                                <td class="text-center">
                                                                    <?php
                                                                    if ($tum_hisseler['hisse_yuzde'] > 0) {
                                                                        echo "<i class=\"fas fa-arrow-circle-up text-success\"></i>";
                                                                    } elseif ($tum_hisseler['hisse_yuzde'] == 0) {
                                                                        echo "<i class=\"fas fa-minus text-info\"></i>";
                                                                    } else {
                                                                        echo "<i class=\"fas fa-arrow-circle-down text-danger\"></i>";
                                                                    };
                                                                    ?>
                                                                </td>
                                                                <td class="text-center">
                                                                    <?php
                                                                    echo convert_nokta_virgül($tum_hisseler['hisse_deger']);
                                                                    ?>
                                                                </td>
                                                                <td class="text-center">
                                                                    <?php
                                                                    echo convert_nokta_virgül($tum_hisseler['hisse_yuzde']);
                                                                    ?>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                            }
                                                            }
                                                            }

                                                            hisse_yukselen();
                                                            */
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-6">
                            <table class="table table-bordered table-striped table-sm mb-0">
                                <h3 class="custom-primary-font text-center custom-fontsize-3 font-weight-normal appear-animation"
                                    data-appear-animation="fadeInUpShorter">En Çok Düşenler</h3>
                                <thead>
                                <tr>
                                    <th class="text-center" scope="col">Menkul Adı</th>
                                    <th class="text-center" scope="col">Durum</th>
                                    <th class="text-center" scope="col">Son Değeri</th>
                                    <th class="text-center" scope="col">(%) Fark</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                for ($sayi = 1; $sayi <= 5; $sayi++) {
                                    ?>
                                    <tr>
                                        <td class="text-center" id="hisse_dusen_sembol_<?php echo $sayi; ?>"></td>
                                        <td class="text-center" id="hisse_dusen_durum_<?php echo $sayi; ?>"></td>
                                        <td class="text-center" id="hisse_dusen_son_deger_<?php echo $sayi; ?>"></td>
                                        <td class="text-center" id="hisse_dusen_fark_<?php echo $sayi; ?>"></td>
                                    </tr>
                                <?php } ?>

                                <?php
                                /*
                                                                function hisse_dusenler()
                                                                {
                                                                Global $db;
                                                                $veri = $db->prepare("SELECT * FROM `hisseler` order by hisse_yuzde ASC LIMIT 5");
                                                                $veri->execute(array());
                                                                $v = $veri->fetchAll(pdo::FETCH_ASSOC);
                                                                $say = $veri->rowCount();
                                                                if ($say) {
                                                                foreach ($v

                                                                as $tum_hisseler) {
                                                                ?>
                                                                <td class="text-center">
                                                                    <?php
                                                                    echo $tum_hisseler['hisse_sembol'];
                                                                    ?>
                                                                </td>
                                                                <td class="text-center">
                                                                    <?php
                                                                    if ($tum_hisseler['hisse_yuzde'] > 0) {
                                                                        echo "<i class=\"fas fa-arrow-circle-up text-success\"></i>";
                                                                    } elseif ($tum_hisseler['hisse_yuzde'] == 0) {
                                                                        echo "<i class=\"fas fa-minus text-info\"></i>";
                                                                    } else {
                                                                        echo "<i class=\"fas fa-arrow-circle-down text-danger\"></i>";
                                                                    };
                                                                    ?>
                                                                </td>
                                                                <td class="text-center">
                                                                    <?php
                                                                    echo convert_nokta_virgül($tum_hisseler['hisse_deger']);
                                                                    ?>
                                                                </td>
                                                                <td class="text-center">
                                                                    <?php
                                                                    echo convert_nokta_virgül($tum_hisseler['hisse_yuzde']);
                                                                    ?>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                            }
                                                            }
                                                            }

                                                            hisse_dusenler();
                                                           */
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-color-quaternary custom-padding-4 border-0 my-0">
        <div class="container">
            <h2 class="custom-primary-font text-center custom-fontsize-3 font-weight-normal appear-animation"
                data-appear-animation="fadeInUpShorter">BİST100 HİSSE VERİLERİ</h2>
            <table class="table table-responsive-lg table-bordered table-striped table-sm mb-0">
                <thead>
                <tr>
                    <th scope="col">Menkul Adı</th>
                    <th class="text-center" scope="col">Durum</th>
                    <th class="text-center" scope="col">Son Değeri</th>
                    <th class="text-center" scope="col">Fark</th>
                    <th class="text-center" scope="col">(%) Fark</th>
                    <th class="text-center" scope="col">En Düşük</th>
                    <th class="text-center" scope="col">En Yüksek</th>
                    <th class="text-center" scope="col">Hacim(Lot)</th>
                    <th class="text-center" scope="col">Hacim(TL)</th>
                    <th class="text-center" scope="col">Zaman</th>
                    <th class="text-center" scope="col">Alış</th>
                    <th class="text-center" scope="col">Satış</th>
                </tr>
                </thead>
                <tbody>

                <?php
                for ($sayi = 1; $sayi <= 100; $sayi++) { ?>
                    <tr>
                        <td class="text-center" id="hisse_sembol_<?php echo $sayi; ?>"></td>
                        <td class="text-center" id="hisse_durum_<?php echo $sayi; ?>"></td>
                        <td class="text-center" id="hisse_son_deger_<?php echo $sayi; ?>"></td>
                        <td class="text-center" id="hisse_fark_<?php echo $sayi; ?>"></td>
                        <td class="text-center" id="hisse_fark_yuzde_<?php echo $sayi; ?>"></td>
                        <td class="text-center" id="hisse_en_dusuk_<?php echo $sayi; ?>"></td>
                        <td class="text-center" id="hisse_en_yuksek_<?php echo $sayi; ?>"></td>
                        <td class="text-center" id="hisse_hacim_lot_<?php echo $sayi; ?>"></td>
                        <td class="text-center" id="hisse_hacim_tl_<?php echo $sayi; ?>"></td>
                        <td class="text-center" id="hisse_zaman_<?php echo $sayi; ?>"></td>
                        <td class="text-center" id="hisse_alis_<?php echo $sayi; ?>">
                            <?php
                            echo "<button id='btn_hisse_alis_" . $sayi . "' type='button' class='btn btn-success'>AL</button>";
                            ?>
                        </td>
                        <td class="text-center" id="hisse_satis_<?php echo $sayi; ?>">
                            <?php
                            echo "<button id='btn_hisse_satis_" . $sayi . "' type='button' class='btn btn-danger'>SAT</button>";
                            ?>
                        </td>
                    </tr>
                <?php } ?>
                <?php
                /*}
                            function hisse()
                            {
                                $link = "http://bigpara.hurriyet.com.tr/borsa/canli-borsa/";
                                $icerik = file_get_contents($link);
                                Global $db;
                                $veri = $db->prepare("SELECT `hisse_id`,`hisse_sembol`,`hisse_deger` FROM `hisse`");
                                $veri->execute(array());
                                $v = $veri->fetchAll(pdo::FETCH_ASSOC);
                                $say = $veri->rowCount();
                                if ($say) {
                                    foreach ($v

                                             as $tum_hisseler) {
                                        ?>
                                        <tr>
                                            <td class="text-center" id="hisse_sembol_<?php echo $tum_hisseler['hisse_id']; ?>">
                                                <?php echo $tum_hisseler['hisse_sembol']; ?>
                                            </td>
                                            <td class="text-center">
                                                <?php
                                                $aranan = 'h_td_yuzde_id_' . $tum_hisseler['hisse_sembol'] . '">';
                                                $deger = ara($aranan, '</li>', $icerik);

                                                if (convert_virgül_nokta($deger[0]) > 0) {
                                                    echo "<i class=\"fas fa-arrow-circle-up text-success\"></i>";
                                                } elseif (convert_virgül_nokta($deger[0]) == 0) {
                                                    echo "<i class=\"fas fa-minus text-info\"></i>";
                                                } else {
                                                    echo "<i class=\"fas fa-arrow-circle-down text-danger\"></i>";
                                                };
                                                ?>
                                            </td>
                                            <td class="text-center">
                                                <?php
                                                $aranan = 'h_td_fiyat_id_' . $tum_hisseler['hisse_sembol'] . '">';
                                                $deger = ara($aranan, '</li>', $icerik);
                                                echo $deger[0];
                                                ?>
                                            </td>
                                            <td class="text-center">
                                                <?php
                                                $aranan = 'h_td_farktl_id_' . $tum_hisseler['hisse_sembol'] . '">';
                                                $deger = ara($aranan, '</li>', $icerik);
                                                echo $deger[0];
                                                ?>
                                            </td>
                                            <td class="text-center">
                                                <?php
                                                $aranan = 'h_td_yuzde_id_' . $tum_hisseler['hisse_sembol'] . '">';
                                                $deger = ara($aranan, '</li>', $icerik);
                                                echo $deger[0];
                                                ?>
                                            </td>
                                            <td class="text-center">
                                                <?php
                                                $aranan = 'h_td_dusuk_id_' . $tum_hisseler['hisse_sembol'] . '">';
                                                $deger = ara($aranan, '</li>', $icerik);
                                                echo $deger[0];
                                                ?>
                                            </td>
                                            <td class="text-center">
                                                <?php
                                                $aranan = 'h_td_yuksek_id_' . $tum_hisseler['hisse_sembol'] . '">';
                                                $deger = ara($aranan, '</li>', $icerik);
                                                echo $deger[0];
                                                ?>
                                            </td>
                                            <td class="text-center">
                                                <?php
                                                $aranan = 'h_td_hacimlot_id_' . $tum_hisseler['hisse_sembol'] . '">';
                                                $deger = ara($aranan, '</li>', $icerik);
                                                echo $deger[0];
                                                ?>
                                            </td>
                                            <td class="text-center">
                                                <?php
                                                $aranan = 'h_td_hacimtl_id_' . $tum_hisseler['hisse_sembol'] . '">';
                                                $deger = ara($aranan, '</li>', $icerik);
                                                echo $deger[0];
                                                ?>
                                                <span>&#8378;</span>
                                            </td>
                                            <td class="text-center">
                                                <?php
                                                $aranan = 'h_td_saat_id_' . $tum_hisseler['hisse_sembol'] . '">';
                                                $deger = ara($aranan, '</li>', $icerik);
                                                echo $deger[0];
                                                ?>
                                            </td>
                                            <td class="text-center">
                                                <!-- Button trigger modal -->
                                                <?php
                                                echo "<button type='button' class='btn btn-success ' data-toggle='modal' data-target='#exampleModalCenter_al_" . $tum_hisseler['hisse_id'] . "'>"; ?>
                                                AL
                                                </button>

                                                <!-- Modal -->
                                                <?php
                                                echo "<div class='modal fade' id='exampleModalCenter_al_" . $tum_hisseler['hisse_id'] . "' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>"; ?>
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Hisse Alım</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="form-group">
                                                                <div class="form-group">
                                                                    <?php
                                                                    echo "<label" . $tum_hisseler['hisse_sembol'] . " hissini almak istediğinizden eminmisiniz?</label>";
                                                                    ?>
                                                                    </br>
                                                                    <label">Bakiyeniz :</label>
                                                                    <?php
                                                                    echo "<label id='lbl_al_bakiye_" . $tum_hisseler['hisse_id'] . "'></label>";?>
                                                                    </br>
                                                                    <?php
                                                                    echo "<label>Alış Tutarı:  " . $tum_hisseler['hisse_deger'] . "</label>";
                                                                    ?>
                                                                    </br>
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-sm-10">
                                                                                <script>
                                                                                    function updateTextInput(val) {
                                                                                        document.getElementById("lbl_miktar").innerHTML = val;
                                                                                    }
                                                                                </script>
                                                                                <input type="range" name="rangeInput" min="0"
                                                                                       max="100"
                                                                                       onchange="updateTextInput(this.value,);"
                                                                                       class="form-control-range"
                                                                                       id="formControlRange">
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <label id="lbl_miktar"></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <label for="customRange2">Toplam :</label>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                                Close
                                                            </button>
                                                            <?php
                                                            echo "<button id='satin_al" . $tum_hisseler['hisse_id'] . "' type=' button'  class=' btn btn-primary' >Satın al</button>";
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php echo "</div>"; ?>
                                            </td>
                                            <td class="text-center">
                                                <?php
                                                echo "<button id='btn_alis_" . $say . "' type='button' class='btn btn-danger'>SAT</button>";
                                                ?>
                                            </td>
                                        </tr>
                                        <!--///////////////////////////-->
                                        <?php
                                    }
                                }
                            }

                            hisse();
                            */
                ?>
                </tbody>
            </table>
        </div>
    </section>
<?php include "inc/footer.php"; ?>