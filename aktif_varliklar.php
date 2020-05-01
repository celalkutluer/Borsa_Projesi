<?php
include "inc/header.php";
kullanicikontrol();
?>

    <section role="main" class="content-body">
        <div class="conteiner">
            <div class="col-md">
                <section class="panel panel-success">
                    <header class="panel-heading">
                        <h2 class="panel-title">Aktif Varlıklarım</h2>
                        <div class="panel-actions">
                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        </div>
                    </header>
                    <div class="panel-body">
                        <table class="table table-bordered table-striped mb-none" id="datatable-default">
                            <thead>
                            <tr>
                                <th>*</th>
                                <th>*</th>
                                <th>*</th>
                                <th class="hidden-xs">**</th>
                                <th class="hidden-xs">*</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            function aktif_varliklar()
                            {
                                global $db;
                                $veri = $db->prepare("SELECT * FROM varliklar");
                                $veri->execute(array());
                                $v = $veri->fetchAll(pdo::FETCH_ASSOC);
                                $say = $veri->rowCount();
                                if ($say) {
                                    foreach ($v as $tum_aktif_varliklar) {
                                        ?>
                                        <tr>
                                            <td><?php echo $tum_aktif_varliklar['kul_Id']; ?></td>
                                            <td><?php echo $tum_aktif_varliklar['kul_Ad']; ?></td>
                                            <td><?php echo $tum_aktif_varliklar['kul_Soyad']; ?></td>
                                            <td><?php echo $tum_aktif_varliklar['kul_Eposta']; ?></td>
                                            <td><?php echo $tum_aktif_varliklar['kul_Son_Giris_Tar']; ?></td>
                                        </tr>
                                        <?php
                                    }
                                }
                            }

                            aktif_varliklar();
                            ?>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <!--KODLAR BURAYA-->


<?php include "inc/footer.php"; ?>