<?php
function hisse_dusenler()
{
    Global $db;
    $veri = $db->prepare("SELECT * FROM `hisseler` order by hisse_yuzde ASC LIMIT 10");
    $veri->execute(array());
    $v = $veri->fetchAll(pdo::FETCH_ASSOC);
    $say = $veri->rowCount();
    if ($say) {
        foreach ($v as $tum_hisseler) {
            ?>
            <td class="text-center">
                <?php
                echo $tum_hisseler['hisse_sembol'];
                ?>
            </td>
            <td>
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
            <td>
                <?php
                echo $tum_hisseler['hisse_deger'];
                ?>
            </td>
            <td>
                <?php
                echo $tum_hisseler['hisse_yuzde'];
                ?>
            </td>
            <?php
        }
    }
}

hisse_dusenler();
?>