<?php
include "baglantilar.php";
include "fonksiyonlar.php";
if (g('islem') == 'ygiris') {
    $eposta = p('eposta');
    $sifre = p('sifre');
    $toplam = p('toplam');
    $dkodu = p('dkodu');


    if (empty($eposta)) {
        echo "<div class='alert alert-warning'>Lütfen E-posta adresinizi giriniz.</div>";
    } else if (empty($sifre)) {
        echo "<div class='alert alert-warning'>Lütfen Şifrenizi giriniz.</div>";
    } elseif (empty($dkodu)) {
        echo "<div class='alert alert-warning'>Lütfen Doğrulama kodunu giriniz.</div>";
    } elseif ($toplam != md5($dkodu)) {
        echo "<div class='alert alert-warning'>Doğrulama kodunuz hatalı.</div>";
    } else {
        //////////////////////////////////////////////////////////////////////////////////////////////////
        $veri= $db->prepare('SELECT kul_id, kul_adi, kul_soyadi, kul_eposta, kul_bakiye, kul_sifre,kul_yetki FROM kullanicilar WHERE kul_eposta=? AND kul_sifre=?');
        $veri->execute(array($eposta, md5($sifre)));
        $v = $veri->fetchAll(PDO::FETCH_ASSOC);
        $say = $veri->rowCount();
        foreach ($v as $ykul_bilgileri) ;
        if ($say) {
            if ($ykul_bilgileri['kul_yetki'] == '1' || $ykul_bilgileri['kul_yetki'] == '0' ) {
                $_SESSION['ykul_id'] = $eposta;
                $_SESSION['isim'] = $ykul_bilgileri['kul_adi'];
                $_SESSION['soyisim'] = $ykul_bilgileri['kul_soyadi'];
                $_SESSION['eposta'] = $ykul_bilgileri['kul_eposta'];
                $_SESSION['yetki'] = $ykul_bilgileri['kul_yetki'];
                $_SESSION['bakiye'] = $ykul_bilgileri['kul_bakiye'];
                $_SESSION['kul_id'] = $ykul_bilgileri['kul_id'];
                echo "<div class='alert alert-success'>Giriş Başarılı Lütfen Bekleyiniz</div><meta http-equiv='refresh' content='1; url=index.php'>";
            } else {
                echo "<div class='alert alert-warning'>Giriş yetkiniz bulunmamaktadır.</div>";

            }
        } else {
            echo "<div class='alert alert-warning'>Böyle Bir Kullanıcı Bulunmamaktadır. Lütfen Kayit olun</div><meta http-equiv='refresh' content='1; url=kayit.php'>";
        }
    }
}
if (g('islem') == 'cikis') {
    session_unset();
    session_destroy();
    header("Location:../index.php");
}
///
if (g('islem') == 'kayit') {
    ///
    $Ad = p('frmKayitAd');
    $Soyad = p('frmKayitSoyad');
    $Email = p('frmKayitEmail');
    $Sifre = p('frmKayitSifre');
    $Sifreconfirm = p('frmKayitSifreconfirm');
    $Dogum_tar = p('frmKayitDogum_tar');
    $CepTelNo = p('frmKayitCepTelNo');
    ///
    $toplam = p('frmKayittoplam');
    $dkodu = p('frmKayitdkodu');
    ///
    //$Sozlesme = p('frmKayitSozlesme');
    ///
    if (empty($Ad)) {
        echo "<div class='alert alert-warning'>Lütfen Adınızı giriniz.</div>";
    }
    else if (empty($Soyad)) {
        echo "<div class='alert alert-warning'>Lütfen Soyadınızı giriniz.</div>";
    }
    else if (empty($Email)) {
        echo "<div class='alert alert-warning'>Lütfen E-posta adresinizi giriniz.</div>";
    }
    else if (empty($Sifre)) {
        echo "<div class='alert alert-warning'>Lütfen Şifrenizi giriniz.</div>";
    }
    else if (empty($Sifreconfirm)) {
        echo "<div class='alert alert-warning'>Lütfen Şifrenizi tekrar giriniz.</div>";
    }
    else if (empty($Dogum_tar)) {
        echo "<div class='alert alert-warning'>Lütfen Doğum Tarihinizi giriniz.</div>";
    }
    else if (empty($CepTelNo)) {
        echo "<div class='alert alert-warning'>Lütfen Cep Telefon Numaranızı giriniz.</div>";
    }
    elseif (empty($dkodu)) {
        echo "<div class='alert alert-warning'>Lütfen Doğrulama kodunu giriniz.</div>";
    }
    elseif ($toplam != md5($dkodu)) {
        echo "<div class='alert alert-warning'>Doğrulama kodunuz hatalı.</div>";
    }
    else {
        //////////////////////////////////////////////////////////////////////////////////////////////////
        $veri1 = $db->prepare('SELECT kul_eposta FROM kullanicilar WHERE kul_eposta=?');
        $veri1->execute(array($Email));
        $v1 = $veri1->fetchAll(PDO::FETCH_ASSOC);
        $say1 = $veri1->rowCount();
        foreach ($v1 as $kul_kayit) ;

        if (!$say1) {
            $ekle = $db->prepare("INSERT INTO kullanicilar(kul_adi, kul_soyadi, kul_eposta,kul_eposta_dogrulama_kod, kul_cep_tel, kul_dogum_tar, kul_sifre) 
VALUES ('" . $Ad . "','" . $Soyad . "','" . $Email . "','" . sha1(md5($Email)) . "','" .  $CepTelNo. "','" . $Dogum_tar . "','" . md5($Sifre) . "')");

            $ekleme = $ekle->execute(array());
            if ($ekleme) {
                require '../vendor/autoload.php';

                $email = new \SendGrid\Mail\Mail();
                $email->setFrom("celalkutluer@gmail.com", "Celal KUTLUER");
                $email->setSubject("Üyelik Hakkında");
                $email->addTo($Email, $Ad . " " . $Soyad);
                $email->addContent(
                    "text/html", "<strong >Üyeliğiniz oluşturulmuştur.</strong></br>
                                                <a href=  'kayit-dogrulama.php?dogrulama=".sha1(md5($Email))."'>
                                                    Eposta adresinizi doğrulamak için tıklayınız.
                                                </a>"
                );
                $sendgrid = new \SendGrid('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');
                try {
                    $response = $sendgrid->send($email);
                    if($response->statusCode()=="202"){
                        echo "<div class='alert alert-success'>Kayit işleminiz başarı ile gerçekleştirildi. E-posta adresinize doğrulama kodu gönderildi.</div>";//<meta http-equiv='refresh' content='1; url=giris.php'>
                    }

                } catch (Exception $e) {
                    echo 'Caught exception: '. $e->getMessage() ."\n";
                }

            } else {
                echo "<div class='alert alert-danger'>Kayit işlemi sırasında bir hata meydana geldi</div>";
            }
        }
        else {
            echo "<div class='alert alert-info'>Eposta adresinize tanımlı üyelik mevcut. Lütfen Giriş yapınız.</div><meta http-equiv='refresh' content='1; url=giris.php'>";
        }

    }
}

/*HİSSE BİLGİLERİ YÜKLEME*/
///
///
///
///
$link = "http://bigpara.hurriyet.com.tr/borsa/canli-borsa/";
$icerik = file_get_contents($link);
///
$h_td_sembol = array();
$h_td_sembol = ara('target="_blank">', '</a>', $icerik);
///
///
///
///
if (g('islem') == 'tablo_bilgi_al') {
    $h_td_sembol = ara('target="_blank">', '</a>', $icerik);//hisse adlarının dizisi[0] - [99] arası 100 hisse
    $tum_hisse_dizileri = array();

    for ($sayi = 0; $sayi < 100; $sayi++) {
        $hisse_tekil = array();

        $h_td_yuzde_id_deger = ara('h_td_yuzde_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
        $h_td_fiyat_id_deger = ara('h_td_fiyat_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
        $h_td_farktl_id_deger = ara('h_td_farktl_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
        $h_td_dusuk_id_deger = ara('h_td_dusuk_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
        $h_td_yuksek_id_deger = ara('h_td_yuksek_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
        $h_td_hacimlot_id_deger = ara('h_td_hacimlot_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
        $h_td_hacimtl_id_deger = ara('h_td_hacimtl_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
        $h_td_saat_id_deger = ara('h_td_saat_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);

        array_push($hisse_tekil,
            $h_td_sembol[$sayi],
            $h_td_yuzde_id_deger,
            $h_td_fiyat_id_deger,
            $h_td_farktl_id_deger,
            $h_td_dusuk_id_deger,
            $h_td_yuksek_id_deger,
            $h_td_hacimlot_id_deger,
            $h_td_hacimtl_id_deger,
            $h_td_saat_id_deger
        );
        array_push($tum_hisse_dizileri, $hisse_tekil);
    }
    echo json_encode($tum_hisse_dizileri);
}
if (g('islem') == 'tablo_yukselen_dusen') {
    $h_td_sembol = ara('target="_blank">', '</a>', $icerik);//hisse adlarının dizisi[0] - [99] arası 100 hisse
    $tum_hisse_dizileri = array();

    for ($sayi = 0; $sayi < 100; $sayi++) {
        $tum_hiss = array();
        $hisse_tekil_yuzde= ara('h_td_yuzde_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
        $hisse_tekil_fiyat= ara('h_td_fiyat_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
        array_push($tum_hiss, $h_td_sembol[$sayi],convert_virgül_nokta($hisse_tekil_yuzde[0]),convert_virgül_nokta($hisse_tekil_fiyat[0]));
        array_push($tum_hisse_dizileri, $tum_hiss);

    }
    $sorted = val_sort($tum_hisse_dizileri, 1);//1=yuzde
    //echo "<pre>";
    //print_r($sorted);
    echo json_encode($sorted);
    //echo "</pre>";
}
/*HİSSE BİLGİLERİ YÜKLEME*/

?>
