<?php
$host="localhost";
$dbname="borsa";
$kullanici="root";
$sifre="";

try
{
    $db=new PDO("mysql:host=$host;dbname=$dbname;charset=utf8","$kullanici","$sifre");
}
catch (PDOException $e)
{
    print $e->getMessage();
}
$veri = $db->prepare('SELECT varlik_elde FROM varliklar WHERE varlik_kul_id=? and varlik_hisse_sembol=?');
$veri->execute(array(1, 'AEFES'));
$v = $veri->fetchAll(PDO::FETCH_ASSOC);
foreach ($v as $ykul_bilgileri) ;
echo $ykul_bilgileri['varlik_elde'];