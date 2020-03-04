<?php
include "settings/baglantilar.php";
//include "settings/fonksiyonlar.php";
include "inc/header.php";
?>


    <div class="table">
        <table class="table table-bordered">
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
                $veri = $db->prepare("SELECT * FROM borsa_bilgi 
LEFT JOIN borsa_anlik ON borsa_bilgi.Sembol=borsa_anlik.Sembol");
                $veri->execute(array());
                $v = $veri->fetchAll(pdo::FETCH_ASSOC);
                $say = $veri->rowCount();
                if ($say) {
                    foreach ($v as $tum_hisseler) {
                        ?>
                        <tr>
                            <td><?php echo $tum_hisseler['Sembol']; ?></td>
                            <td><?php echo $tum_hisseler['Tam_Ad']; ?></td>
                            <td>*</td>
                            <td><?php echo $tum_hisseler['Fiyat']; ?></td>
                            <td>*</td>
                            <td><?php echo $tum_hisseler['Zaman']; ?></td>
                            <td><button type="button" class="btn btn-success">ALIŞ</button></td>
                            <td><button type="button" class="btn btn-danger">SATIŞ</button></td>
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


<?php include "inc/footer.php"; ?>