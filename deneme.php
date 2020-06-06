<?php
include "settings/fonksiyonlar.php";
$a="amçük";
$b="a";
echo kelime_kontrol($a);

if (kelime_kontrol($a) == 0 || kelime_kontrol($b) == 0) {
    echo kelime_kontrol($a)."-".kelime_kontrol($b);

}
