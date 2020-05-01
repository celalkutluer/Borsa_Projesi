<?php
include "inc/header.php";
yoneticikontrol();
?>
    <section role="main" class="content-body">
        <div class="conteiner">
            <div class="col-md">
                <section class="panel panel-dark">
                    <header class="panel-heading">
                        <h2 class="panel-title">Log Kayıtları</h2>
                        <div class="panel-actions">
                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        </div>
                    </header>
                    <div class="panel-body">
                        <table class="table table-bordered table-striped mb-none" id="datatable-default">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Ad</th>
                                <th>Soyad</th>
                                <th>Eylem</th>
                                <th>Açıklama</th>
                                <th>Zamanı</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            function loglar()
                            {
                                global $db;
                                $veri = $db->prepare("SELECT log.log_id,kullanicilar.kul_Ad,kullanicilar.kul_Soyad,log.log_eylem,log.log_aciklama,log.log_zaman FROM log inner join kullanicilar on log.log_kul_id=kullanicilar.kul_Id");
                                $veri->execute(array());
                                $v = $veri->fetchAll(pdo::FETCH_ASSOC);
                                $say = $veri->rowCount();
                                if ($say) {
                                    foreach ($v as $tum_kullanicilar) {
                                        ?>
                                        <tr>
                                            <td><?php echo $tum_kullanicilar['log_id']; ?></td>
                                            <td><?php echo $tum_kullanicilar['kul_Ad']; ?></td>
                                            <td><?php echo $tum_kullanicilar['kul_Soyad']; ?></td>
                                            <td><?php echo $tum_kullanicilar['log_eylem']; ?></td>
                                            <td><?php echo $tum_kullanicilar['log_aciklama']; ?></td>
                                            <td><?php echo $tum_kullanicilar['log_zaman']; ?></td>
                                        </tr>
                                        <?php
                                    }
                                }
                            }

                            loglar();
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