<?php
include "inc/header.php";
?>
    <span class="col-lg"></span>
    <div class="conteiner ">
        <div class=" row ">
            <div class="col-sm-6">
                <div class="table col-sm">
                    <table class="table table-bordered bg-light">
                        <span class="h6 text-info">En Çok Yükselenler</span>
                        <thead>
                        <tr>
                            <th scope="col">Sembol</th>
                            <th scope="col">Fiyat</th>
                            <th scope="col">(%)Fark</th>
                        </tr>
                        </thead>
                        <tbody>
                        <td class="text-center"><i class="fas fa-minus text-info"></i></td>
                        <td>*</td>
                        <td>*</td>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="table col-sm">
                    <table class="table table-bordered bg-light">
                        <span class="h6 text-info">En Çok Düşenler</span>
                        <thead>
                        <tr>
                            <th scope="col">Sembol</th>
                            <th scope="col">Fiyat</th>
                            <th scope="col">(%)Fark</th>
                        </tr>
                        </thead>
                        <tbody>
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
                        <th scope="col">Sembol</th>
                        <th scope="col">Şirket</th>
                        <th scope="col">Durum</th>
                        <th scope="col">Fiyat</th>
                        <th scope="col">(%)Fark</th>
                        <th scope="col">Zaman</th>
                        <th scope="col">Alış</th>
                        <th scope="col">Satış</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    function hisse()
                    {
                        Global $db;
                        $veri = $db->prepare("SELECT * FROM borsa_bilgi LEFT JOIN borsa_anlik ON borsa_bilgi.Sembol=borsa_anlik.Sembol");
                        $veri->execute(array());
                        $v = $veri->fetchAll(pdo::FETCH_ASSOC);
                        $say = $veri->rowCount();
                        if ($say) {
                            foreach ($v as $tum_hisseler) {
                                ?>
                                <tr>
                                    <td><?php echo $tum_hisseler['Sembol']; ?></td>
                                    <td><?php echo $tum_hisseler['Tam_Ad']; ?></td>
                                    <td class="text-center"><i class="fas fa-arrow-circle-up text-success"></i></td>
                                    <td><?php echo $tum_hisseler['Fiyat']; ?></td>
                                    <td class="text-center"><i class="fas fa-arrow-down text-danger"></i></td>
                                    <td><?php echo $tum_hisseler['Zaman']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-success">ALIŞ</button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger">SATIŞ</button>
                                    </td>
                                </tr>
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