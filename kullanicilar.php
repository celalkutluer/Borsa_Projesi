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
                        <!--ALERT-->
                        <div id='kullanici_alert'></div>
                        <!--ALERT-->
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
                                <th class="hidden-xs">Yetki Ver</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            function kullanicilar()
                            {
                                global $db;
                                $sayi=0;
                                $veri = $db->prepare("SELECT * FROM kullanicilar");
                                $veri->execute(array());
                                $v = $veri->fetchAll(pdo::FETCH_ASSOC);
                                $say = $veri->rowCount();
                                if ($say) {
                                    foreach ($v as $tum_kullanicilar) {
                                        ?>
                                        <tr>
                                            <td id="kullanici_id_<?php echo $sayi;?>"><?php echo $tum_kullanicilar['kul_Id']; ?></td>
                                            <td><?php echo $tum_kullanicilar['kul_Ad']; ?></td>
                                            <td><?php echo $tum_kullanicilar['kul_Soyad']; ?></td>
                                            <td><?php echo $tum_kullanicilar['kul_Eposta']; ?></td>
                                            <td><?php if ($tum_kullanicilar['kul_Yetki'] == 1) echo "Yönetici"; else echo "Yatırımcı"; ?></td>
                                            <td><?php echo (new \DateTime($tum_kullanicilar['kul_Son_Giris_Tar']))->format('d-m-Y H:i:s') . PHP_EOL; ?></td>
                                            <td class="center hidden-xs"><?php echo (new \DateTime($tum_kullanicilar['kul_Uyelik_Tarih']))->format('d-m-Y H:i:s') . PHP_EOL; ?></td>
                                            <td class="center hidden-xs">
                                                <button id='btn_' type='button' class="btn btn-warning" <?php echo "onclick=".chr(34)."pasife_al_btn("."'".$sayi."'".")".chr(34); if($tum_kullanicilar['kul_Pasif_Durum']=='0'){ echo "disabled";} ?> >Pasife Al</button>
                                            </td>
                                            <td class="center hidden-xs">
                                                <button id='btn_yetki_' type='button' class="btn btn-success" <?php echo "onclick=".chr(34)."yetki_ver_btn("."'".$sayi."'".")".chr(34); if($tum_kullanicilar['kul_Id'] == $_SESSION['kul_id']){ echo "disabled";} ?> >Yöneticilik Al/Ver</button>
                                            </td>
                                        </tr>
                                        <?php
                                        $sayi++;
                                    }
                                }
                            }

                            kullanicilar();
                            ?>
                            </tbody>
                        </table>
                        <script type="text/javascript">
                            function pasife_al_btn(no)
                            {
                                var id=document.getElementById('kullanici_id_'+no).innerText;
                                $.ajax({
                                        type: 'POST',
                                        url: 'settings/islem.php?islem=pasife_al',
                                        data: { id: id},
                                        success: function (cevap) {
                                            $("#kullanici_alert").html(cevap).hide().fadeIn(700);
                                        }
                                    }
                                );
                            }
                            function yetki_ver_btn(no)
                            {
                                var id=document.getElementById('kullanici_id_'+no).innerText;
                                $.ajax({
                                        type: 'POST',
                                        url: 'settings/islem.php?islem=yetki_ver',
                                        data: { id: id},
                                        success: function (cevap) {
                                            $("#kullanici_alert").html(cevap).hide().fadeIn(700);
                                        }
                                    }
                                );
                            }
                        </script>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <!--KODLAR BURAYA-->


<?php include "inc/footer.php"; ?>