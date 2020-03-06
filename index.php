<?php
include "inc/header.php";
?>
<span class="col-lg"></span>
<div class="conteiner">
    <div class=" row ">
        <div class="col-sm-6">
            <div class="table col-sm ">
                <table class="table table-bordered bg-light">
                    <span class="h6 font-weight-light text-info">En Çok Yükselenler</span>
                    <thead>
                    <tr>
                        <th scope="col">Menkul Adı</th>
                        <th scope="col">Durum</th>
                        <th scope="col">Son Değeri</th>
                        <th scope="col">(%)Fark</th>
                    </tr>
                    </thead>
                    <tbody>
                    <td>*</td>
                    <td>*</td>
                    <td>*</td>
                    <td>*</td>
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
                        <th scope="col">Menkul Adı</th>
                        <th scope="col">Durum</th>
                        <th scope="col">Son Değeri</th>
                        <th scope="col">(%)Fark</th>
                    </tr>
                    </thead>
                    <tbody>
                    <td>*</td>
                    <td>*</td>
                    <td>*</td>
                    <td>*</td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<span class="col-md"></span>
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
                    $veri = $db->prepare("SELECT hisse_sembol FROM hisse ");
                    $veri->execute(array());
                    $v = $veri->fetchAll(pdo::FETCH_ASSOC);
                    $say = $veri->rowCount();
                    if ($say) {
                        foreach ($v as $tum_hisseler) {
                            ?>
                            <tr>
                                <td class="text-center">
                                    <?php
                                    echo $tum_hisseler['hisse_sembol'];
                                    ?>
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
                                    <?php
                                    echo "<button id='btn_satis_".$say."'  type='button' class='btn btn-success'>AL</button>";
                                    ?>
                                </td>
                                <td class="text-center">
                                    <?php
                                    echo "<button id='btn_alis_".$say."' type='button' class='btn btn-danger'>SAT</button>";
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


<?php include "inc/footer.php"; ?>

