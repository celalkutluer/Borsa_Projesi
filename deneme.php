
<form action="#" method="POST" enctype="multipart/form-data">
    <input type="file" name="dosya" />
    <input type="submit" name="yukle" value="Yükle">
</form>
<?php
if ($_FILES['dosya']['name'] != "")
{
    echo "Dosya Yüklendi.\n";
} else {
    echo "Dosya Yüklenemedi!\n";
}
?>