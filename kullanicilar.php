<?php
include "inc/header.php";
yoneticikontrol();
?>
    <section role="main" class="content-body">
        <div class="conteiner">
            <div class="col-md">
                <section class="panel panel-info">
                    <header class="panel-heading">
                        <h2 class="panel-title">Kullanıcılar</h2>
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
                                <th>E-Posta</th>
                                <th>Yetki</th>
                                <th>Son Giriş Tarihi</th>
                                <th class="hidden-xs">Üyelik Tarihi</th>
                                <th class="hidden-xs">Pasife Al</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            function kullanicilar()
                            {
                                global $db;
                                $veri = $db->prepare("SELECT * FROM kullanicilar");
                                $veri->execute(array());
                                $v = $veri->fetchAll(pdo::FETCH_ASSOC);
                                $say = $veri->rowCount();
                                if ($say) {
                                    foreach ($v as $tum_kullanicilar) {
                                        ?>
                                        <tr>
                                            <td><?php echo $tum_kullanicilar['kul_Id']; ?></td>
                                            <td><?php echo $tum_kullanicilar['kul_Ad']; ?></td>
                                            <td><?php echo $tum_kullanicilar['kul_Soyad']; ?></td>
                                            <td><?php echo $tum_kullanicilar['kul_Eposta']; ?></td>
                                            <td><?php if ($tum_kullanicilar['kul_Yetki'] == 1) echo "Yönetici"; else echo "Yatırımcı"; ?></td>
                                            <td><?php echo $tum_kullanicilar['kul_Son_Giris_Tar']; ?></td>
                                            <td class="center hidden-xs"><?php echo $tum_kullanicilar['kul_Uyelik_Tarih']; ?></td>
                                            <td class="center hidden-xs">
                                                <button id='btn_' type='button' class="btn btn-warning" >PASİF AL</button></td>
                                        </tr>
                                        <?php
                                    }
                                }
                            }

                            kullanicilar();
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