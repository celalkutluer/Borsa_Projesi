<?php
/**
 * PhpStorm ile oluşturulmuştur.
 * Yazar            : CELALKUTLUER
 * Test Eden        : CELALKUTLUER
 * Hata Ayıklayan   : CELALKUTLUER
 * Date: 09.06.2020
 * Time: 20:00
 */
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
//error_reporting(0);
session_start();
ob_start();
