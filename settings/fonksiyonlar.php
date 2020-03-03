<?php
function g($par)
{
    $par = temiz(@$_GET[$par]);
    return $par;
}
function p($par)
{
    $par = htmlspecialchars(addslashes(trim($_POST[$par])));
    return $par;
}
///////////////////////SESSİON
function s($par)
{
    $session = $_SESSION[$par];
    return $session;
}
///////////////////////YONETİCİ
/*function yoneticikontrol()
{
    if (!$_SESSION || !$_SESSION['yetki'] == '1') {
        header("Location:giris.php");
    }
}
function kullanicikontrol()
{
    if ($_SESSION || $_SESSION['yetki'] == '1'||$_SESSION['yetki'] == '2'||$_SESSION['yetki'] == '3') {
    }
    else
    {
        header("Location:giris.php");

    }
}*/
?>