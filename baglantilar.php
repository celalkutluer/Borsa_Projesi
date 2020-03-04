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
//error_reporting(0);
session_start();
ob_start();
