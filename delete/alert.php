<?php
if (g('silme') == 'ok') {
    echo "<div class='alert alert-success'>Silme İşlemi Başarı İle Gerçekleşti</div>";
} elseif (g('silme') == 'no') {
    echo "<div class='alert alert-danger'>Silme İşlemi sırasında hata oluştu</div>";
}
if (g('ekle') == 'ok') {
    echo "<div class='alert alert-success'>Ekleme İşlemi Başarı İle Gerçekleşti</div>";
} elseif (g('ekle') == 'no') {
    echo "<div class='alert alert-danger'>Ekleme İşlemi sırasında hata oluştu</div>";
}
if (g('guncelle') == 'ok') {
    echo "<div class='alert alert-success'>Guncelleme İşlemi Başarı İle Gerçekleşti</div>";
} elseif (g('guncelle') == 'no') {
    echo "<div class='alert alert-danger'>Guncelleme İşlemi sırasında hata oluştu</div>";
}
if (g('kayit') == 'ok') {
    echo "<div class='alert alert-success'>Kayit İşlemi Başarı İle Gerçekleşti</div>";
} elseif (g('kayit') == 'no') {
    echo "<div class='alert alert-danger'>Kayit İşlemi sırasında hata oluştu</div>";
}
?>