<?php
/**
 * PhpStorm ile oluşturulmuştur.
 * Yazar            : CELALKUTLUER
 * Test Eden        : CELALKUTLUER
 * Hata Ayıklayan   : CELALKUTLUER
 * Date: 09.06.2020
 * Time: 20:00
 */
include "inc/header.php";
yoneticikontrol();
?>
    <section role="main" class="content-body">
        <div class="conteiner">
            <div class="col-md">
                <section class="panel panel-warning">
                    <header class="panel-heading">
                        <h2 class="panel-title">Mali Durum</h2>
                        <div class="panel-actions">
                            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                        </div>
                    </header>
                    <div class="panel-body">
                        <table class="table table-bordered table-striped mb-none" id="datatable-default">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Gelir Türü</th>
                                <th>İşlem Adedi</th>
                                <th>Gelir</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <?php
                                function alimlar()
                                {
                                global $db;
                                $veri = $db->prepare("SELECT COUNT(alim_hisse_komisyon) AS adet, SUM(alim_hisse_komisyon) AS toplam FROM alim");
                                $veri->execute(array());
                                $v = $veri->fetchAll(pdo::FETCH_ASSOC);
                                $say = $veri->rowCount();
                                if ($say) {
                                foreach ($v

                                as $tum_alimlar) {
                                ?>
                            <tr>
                                <td>1</td>
                                <td>Hisse Alım</td>
                                <td><?php echo $tum_alimlar['adet']; ?></td>
                                <td class="center"><?php echo $tum_alimlar['toplam']; ?><span>&#x20BA;</span></td>
                                <?php
                                }
                                }
                                }
                                alimlar();
                                ?>
                            </tr>
                            <tr>
                                <?php
                                function satimlar()
                                {
                                global $db;
                                $veri = $db->prepare("SELECT COUNT(satim_hisse_komisyon) AS adet, SUM(satim_hisse_komisyon) AS toplam FROM satim");
                                $veri->execute(array());
                                $v = $veri->fetchAll(pdo::FETCH_ASSOC);
                                $say = $veri->rowCount();
                                if ($say) {
                                foreach ($v

                                as $tum_satimlar) {
                                ?>
                            <tr>
                                <td>2</td>
                                <td>Hisse Satım</td>
                                <td><?php echo $tum_satimlar['adet']; ?></td>
                                <td class="center"><?php echo $tum_satimlar['toplam']; ?><span>&#x20BA;</span></td>
                                <?php
                                }
                                }
                                }
                                satimlar();
                                ?>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </section>
<?php include "inc/footer.php"; ?>