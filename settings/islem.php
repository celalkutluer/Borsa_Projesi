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
        if (isset($_POST['rememberme'])) {
            setcookie("eposta", $eposta, strtotime("+7 day"));
            setcookie("sifre", $sifre, strtotime("+7 day"));
        } else {
            setcookie("eposta", $eposta, strtotime("-7 day"));
            setcookie("sifre", $sifre, strtotime("-7 day"));
        }
        //////////////////////////////////////////////////////////////////////////////////////////////////
        $veri = $db->prepare('SELECT kul_Id, kul_Ad, kul_Soyad, kul_Eposta, kul_Bakiye, kul_Sifre,kul_Yetki FROM kullanicilar WHERE kul_Eposta=? AND kul_Sifre=?');
        $veri->execute(array($eposta, md5($sifre)));
        $v = $veri->fetchAll(PDO::FETCH_ASSOC);
        $say = $veri->rowCount();
        foreach ($v as $ykul_bilgileri) ;
        if ($say) {
            if ($ykul_bilgileri['kul_Yetki'] == '1' || $ykul_bilgileri['kul_Yetki'] == '0') {
                $_SESSION['isim'] = $ykul_bilgileri['kul_Ad'];
                $_SESSION['soyisim'] = $ykul_bilgileri['kul_Soyad'];
                $_SESSION['eposta'] = $ykul_bilgileri['kul_Eposta'];
                $_SESSION['yetki'] = $ykul_bilgileri['kul_Yetki'];
                $_SESSION['bakiye'] = $ykul_bilgileri['kul_Bakiye'];
                $_SESSION['kul_id'] = $ykul_bilgileri['kul_Id'];
                echo "<div class='alert alert-success'>Giriş Başarılı Lütfen Bekleyiniz</div><meta http-equiv='refresh' content='1; url=index.php'>";

            } else {
                echo "<div class='alert alert-warning'>Giriş yetkiniz bulunmamaktadır.</div>";

            }
        } else {
            echo "<div class='alert alert-warning'>Böyle Bir Kullanıcı Bulunmamaktadır. Lütfen Kayit olun</div><meta http-equiv='refresh' content='1; url=kayit.php'>";
        }
        //////////////////////////////////////////////////////////////////////////////////

    }
}
if (g('islem') == 'cikis') {
    session_unset();
    session_destroy();
    header("Location:../index.php");
    exit;
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
    } else if (empty($Soyad)) {
        echo "<div class='alert alert-warning'>Lütfen Soyadınızı giriniz.</div>";
    } else if (empty($Email)) {
        echo "<div class='alert alert-warning'>Lütfen E-posta adresinizi giriniz.</div>";
    } else if (empty($Sifre)) {
        echo "<div class='alert alert-warning'>Lütfen Şifrenizi giriniz.</div>";
    } else if (empty($Sifreconfirm)) {
        echo "<div class='alert alert-warning'>Lütfen Şifrenizi tekrar giriniz.</div>";
    } else if (empty($Dogum_tar)) {
        echo "<div class='alert alert-warning'>Lütfen Doğum Tarihinizi giriniz.</div>";
    } else if (empty($CepTelNo)) {
        echo "<div class='alert alert-warning'>Lütfen Cep Telefon Numaranızı giriniz.</div>";
    } elseif (empty($dkodu)) {
        echo "<div class='alert alert-warning'>Lütfen Doğrulama kodunu giriniz.</div>";
    } elseif ($toplam != md5($dkodu)) {
        echo "<div class='alert alert-warning'>Doğrulama kodunuz hatalı.</div>";
    } else {
        //////////////////////////////////////////////////////////////////////////////////////////////////
        $veri1 = $db->prepare('SELECT kul_Eposta FROM kullanicilar WHERE kul_Eposta=?');
        $veri1->execute(array($Email));
        $v1 = $veri1->fetchAll(PDO::FETCH_ASSOC);
        $say1 = $veri1->rowCount();
        foreach ($v1 as $kul_kayit) ;

        if (!$say1) {
            $ekle = $db->prepare("INSERT INTO kullanicilar(kul_Ad, kul_Soyad, kul_Eposta,kul_Eposta_Dogrulama_Kod, kul_CepNo, kul_DogumTar, kul_Sifre) 
VALUES ('" . $Ad . "','" . $Soyad . "','" . $Email . "','" . sha1(md5($Email)) . "','" . $CepTelNo . "','" . $Dogum_tar . "','" . md5($Sifre) . "')");

            $ekleme = $ekle->execute(array());
            if ($ekleme) {

                /*
                require '../vendor/autoload.php';

                $email = new \SendGrid\Mail\Mail();
                $email->setFrom("celalkutluer@gmail.com", "Celal KUTLUER");
                $email->setSubject("Üyelik Hakkında");
                $email->addTo($Email, $Ad . " " . $Soyad);
                $email->addContent(
                    "text/html", "<strong >Üyeliğiniz oluşturulmuştur.</strong></br>
                                                <a href=  'kayit-dogrulama.php?dogrulama=" . sha1(md5($Email)) . "'>
                                                    Eposta adresinizi doğrulamak için tıklayınız.
                                                </a>"
                );
                $key = '';
                /* $sendgrid = new \SendGrid($key);
                 try {
                     $response = $sendgrid->send($email);
                     if($response->statusCode()=="202"){
                         echo "<div class='alert alert-success'>Kayit işleminiz başarı ile gerçekleştirildi. E-posta adresinize doğrulama kodu gönderildi.</div>";//<meta http-equiv='refresh' content='1; url=giris.php'>
                     }

                 } catch (Exception $e) {
                     echo 'Caught exception: '. $e->getMessage() ."\n";
                 }*/
                echo "<div class='alert alert-success'>Kayit işleminiz başarı ile gerçekleştirildi. E-posta adresinize doğrulama kodu gönderildi.</div>";//<meta http-equiv='refresh' content='1; url=giris.php'>

            } else {
                echo "<div class='alert alert-danger'>Kayit işlemi sırasında bir hata meydana geldi</div>";
            }
        } else {
            echo "<div class='alert alert-info'>Eposta adresinize tanımlı üyelik mevcut. Lütfen Giriş yapınız.</div><meta http-equiv='refresh' content='1; url=giris.php'>";
        }

    }
}
if (g('islem') == 'lig_olustur') {
    ///
    $baslik = p('lig_olustur_baslık');
    $duyuru = p('lig_olustur_duyuru');


    if (empty($baslik)) {
        echo "<div class='alert alert-warning'>Lütfen Lig Başlığı Yazın.</div>";
    } else if (empty($duyuru)) {
        echo "<div class='alert alert-warning'>Lütfen Lig Duyurusu Yazın.</div>";
    } else {
        $veri = $db->prepare('SELECT kul_lig_id FROM kullanicilar WHERE kul_Id=?');
        $veri->execute(array($_SESSION['kul_id']));
        $v = $veri->fetchAll(PDO::FETCH_ASSOC);
        $say = $veri->rowCount();
        foreach ($v as $ligler) ;
        //
        $veri = $db->prepare('SELECT lig_baslik FROM ligler WHERE lig_baslik=?');
        $veri->execute(array($baslik));
        $v = $veri->fetchAll(PDO::FETCH_ASSOC);
        $say = $veri->rowCount();
        foreach ($v as $ligler) ;

        if (!$say) {
            $ekle = $db->prepare("INSERT INTO ligler( lig_baslik, lig_duyuru, lig_bos_uyelik, lig_yonetici_id) VALUES ('" . $baslik . "','" . $duyuru . "',9,'" . $_SESSION['kul_id'] . "')");
            $ekleme = $ekle->execute(array());
            //
            $veri = $db->prepare('SELECT lig_id FROM ligler WHERE lig_baslik=?');
            $veri->execute(array($baslik));
            $v = $veri->fetchAll(PDO::FETCH_ASSOC);
            foreach ($v as $ligle) ;
            //
            $kul_gunce = $db->prepare("UPDATE kullanicilar SET kul_lig_id='" . $ligle['lig_id'] . "' WHERE kul_Id=?");
            $kul_guncell = $kul_gunce->execute(array($_SESSION['kul_id']));

            if ($ekleme || $kul_guncell) {

                echo "<div class='alert alert-success'>Lig Kayıt İşleminiz Gerçekleşti.</div><meta http-equiv='refresh' content='1; url=ligler.php'>";
            } else {
                echo "<div class='alert alert-success'>Lig Kayıt İşlemi Başarısız oldu</div>";
            }
        } else {
            echo "<div class='alert alert-success'>Girilen Lig Başlığı Mevcut. Başka Bir Lig Başlığı Deneyin.</div>";

        }
    }
}
if (g('islem') == 'lig_katil') {
    ///
    $baslik = p('lig_baslik');
    //
    $veri = $db->prepare('SELECT lig_id,lig_bos_uyelik FROM ligler WHERE lig_baslik=?');
    $veri->execute(array($baslik));
    $v = $veri->fetchAll(PDO::FETCH_ASSOC);
    foreach ($v as $ligle) ;
    //
    if ($ligle['lig_bos_uyelik'] > 0) {
        ///
        $kul_gunce = $db->prepare("UPDATE kullanicilar SET kul_lig_id='" . $ligle['lig_id'] . "' WHERE kul_Id=?");
        $kul_guncellem = $kul_gunce->execute(array($_SESSION['kul_id']));
        ///
        $lig_gunce = $db->prepare("UPDATE ligler SET lig_bos_uyelik='" . ($ligle['lig_bos_uyelik']-1) . "' WHERE lig_Id=?");
        $lig_guncellemem = $lig_gunce->execute(array($ligle['lig_id']));

        if ($kul_guncellem&&$lig_guncellemem) {
            echo "<div class='alert alert-success'>Seçilen Lige Kayıt İşleminiz Gerçekleşti.</div><meta http-equiv='refresh' content='1; url=ligler.php'>";
        } else {
            echo "<div class='alert alert-success'>Seçilen Lige Kayıt İşlemi Başarısız Oldu</div>";
        }
    }
    else{
        echo "<div class='alert alert-success'>Seçilen Ligde Boş Üyelik Mevcut Değil</div>";
    }
}
if (g('islem') == 'lig_ayril') {
    ///
    $veri = $db->prepare('SELECT kul_lig_id FROM kullanicilar WHERE kul_Id=?');
    $veri->execute(array($_SESSION['kul_id']));
    $v = $veri->fetchAll(PDO::FETCH_ASSOC);
    foreach ($v as $kulla) ;
    ///
    $verim = $db->prepare('SELECT lig_bos_uyelik,lig_yonetici_id FROM ligler WHERE lig_Id=?');
    $verim->execute(array($kulla['kul_lig_id']));
    $vm = $verim->fetchAll(PDO::FETCH_ASSOC);
    foreach ($vm as $liglerim) ;
    ///
    if($liglerim['lig_yonetici_id']==$_SESSION['kul_id'])
    {
        $lig_gunce = $db->prepare("UPDATE ligler SET lig_yonetici_id=null WHERE lig_Id=?");
        $lig_guncellemem = $lig_gunce->execute(array($kulla['kul_lig_id']));
    }

    $lig_guncem = $db->prepare("UPDATE ligler SET lig_bos_uyelik='" . ($liglerim['lig_bos_uyelik']+1) . "' WHERE lig_Id=?");
    $lig_guncelleme = $lig_guncem->execute(array($kulla['kul_lig_id']));
    ///
    $kul_gunce = $db->prepare("UPDATE kullanicilar SET kul_lig_id=null WHERE kul_Id=?");
    $kul_guncellemem = $kul_gunce->execute(array($_SESSION['kul_id']));
    ///
    if ($kul_guncellemem&&$lig_guncelleme) {
        echo "<div class='alert alert-success'>Ligden Ayrılma İşleminiz Gerçekleşti.</div><meta http-equiv='refresh' content='1; url=ligler.php'>";
    } else {
        echo "<div class='alert alert-success'>Lig Ayrılma İşleminiz Başarısız oldu</div>";
    }
}
/*HİSSE BİLGİLERİ YÜKLEME*/
///
$link = "http://bigpara.hurriyet.com.tr/borsa/canli-borsa/";
$icerik = file_get_contents($link);
$icerik = preg_replace('~[\r\n]~', '', $icerik);
$icerik = preg_replace('~[ ]~', '', $icerik);
///
$h_td_sembol = array();
$h_td_sembol = ara('target="_blank">', '</a>', $icerik);
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
        $hisse_tekil_yuzde = ara('h_td_yuzde_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
        $hisse_tekil_fiyat = ara('h_td_fiyat_id_' . $h_td_sembol[$sayi] . '">', '</li>', $icerik);
        array_push($tum_hiss, $h_td_sembol[$sayi], convert_virgül_nokta($hisse_tekil_yuzde[0]), convert_virgül_nokta($hisse_tekil_fiyat[0]));
        array_push($tum_hisse_dizileri, $tum_hiss);

    }
    $sorted = val_sort($tum_hisse_dizileri, 1);//1=yuzde
    //echo "<pre>";
    //print_r($sorted);
    echo json_encode($sorted);
    //echo "</pre>";
}
/*HİSSE BİLGİLERİ YÜKLEME*/
if (g('islem') == 'hisse_satin_al') {
    ///
    $hisse_satin_al_kul_id = p('kul_id');
    $hisse_satin_al_sembol = p('sembol');
    $hisse_satin_al_tutar = p('alis_tutar');
    $hisse_satin_al_miktar = p('alis_miktar');
    $hisse_satin_al_komisyon = p('alis_komisyon');
    $hisse_satin_al_toplam = p('alis_toplam');
    ///
    $veri = $db->prepare('SELECT kul_Ad,kul_Soyad,kul_bakiye FROM kullanicilar WHERE kul_id=?');
    $veri->execute(array($hisse_satin_al_kul_id));
    $v = $veri->fetchAll(PDO::FETCH_ASSOC);
    foreach ($v as $kul_bilgilerim) ;
    ///
    $verim = $db->prepare('SELECT varlik_id,varlik_kul_id,varlik_hisse_sembol,varlik_alim_adet,varlik_satim_adet,varlik_elde FROM varliklar WHERE varlik_kul_id=? AND varlik_hisse_sembol=?');
    $verim->execute(array($hisse_satin_al_kul_id, $hisse_satin_al_sembol));
    $vm = $verim->fetchAll(PDO::FETCH_ASSOC);
    $say_ekle = $verim->rowCount();
    foreach ($vm as $varlık_bilgilerim) ;
    ///
    if (bakiye_son($hisse_satin_al_sembol) == $hisse_satin_al_tutar) {
        if ($kul_bilgilerim['kul_bakiye'] > $hisse_satin_al_toplam) {
            //
            $yeni_bakiye = $kul_bilgilerim['kul_bakiye'] - $hisse_satin_al_toplam;
            //
            $ekle = $db->prepare("INSERT INTO alim(alim_kul_id, alim_hisse_sembol, alim_hisse_deger, alim_hisse_komisyon, alim_hisse_lot,alim_lot_satilmayan,alim_hisse_toplam_tutar) VALUES ('" . $hisse_satin_al_kul_id . "','" . $hisse_satin_al_sembol . "','" . $hisse_satin_al_tutar . "','" . $hisse_satin_al_komisyon . "','" . $hisse_satin_al_miktar . "','" . $hisse_satin_al_miktar . "','" . $hisse_satin_al_toplam . "')");
            $ekleme = $ekle->execute(array());
            //
            if ($say_ekle > 0) {
                $alim_adet = $varlık_bilgilerim['varlik_alim_adet'] + $hisse_satin_al_miktar;
                $elde = $varlık_bilgilerim['varlik_elde'] + $hisse_satin_al_miktar;
                //
                $varlik_e = $db->prepare("UPDATE varliklar SET varlik_alim_adet='" . $alim_adet . "',varlik_elde='" . $elde . "' WHERE varlik_kul_id=? AND varlik_hisse_sembol=?");
                $varlik_ekl = $varlik_e->execute(array($hisse_satin_al_kul_id, $hisse_satin_al_sembol));
            } else {
                $varlik_e = $db->prepare("INSERT INTO varliklar(varlik_kul_id, varlik_hisse_sembol, varlik_alim_adet, varlik_elde) VALUES ('" . $hisse_satin_al_kul_id . "','" . $hisse_satin_al_sembol . "','" . $hisse_satin_al_miktar . "','" . $hisse_satin_al_miktar . "')");
                $varlik_ekl = $varlik_e->execute(array());
            }
            //
            $guncelle = $db->prepare('UPDATE kullanicilar SET kul_bakiye=? WHERE kul_id=?');
            $guncelleme = $guncelle->execute(array($yeni_bakiye, $hisse_satin_al_kul_id));
            //
            if ($ekleme && $guncelleme && $varlik_ekl) {
                echo "<div class='alert alert-success'>Satın Alma İşlemi Başarı ile Gerçekleşti.</div>";
                echo "<div class='alert alert-success'>Kalan Bakiyeniz:  " . $yeni_bakiye . " &#x20BA;</div><meta http-equiv='refresh' content='1; url=index.php'>";
                //
                $logekle = $db->prepare("INSERT INTO log(log_kul_id, log_eylem, log_aciklama) VALUES ('" . $hisse_satin_al_kul_id . "','Hisse Alım','" . $hisse_satin_al_kul_id . " -Nolu kullanıcı " . $kul_bilgilerim['kul_Ad'] . " " . $kul_bilgilerim['kul_Soyad'] . " " . $hisse_satin_al_sembol . " hissesini " . $hisse_satin_al_tutar . " TL tutardan " . $hisse_satin_al_miktar . " adet aldı. Bu işlem için " . $hisse_satin_al_komisyon . " TL komisyon ile " . $hisse_satin_al_toplam . " TL toplam tutar ödedi.')");
                $logekleme = $logekle->execute(array());
                if ($logekleme) {
                    echo "<div class='alert alert-success'>Log Ekleme İşlemi Tamamlandı.</div>";
                } else {
                    echo "<div class='alert alert-danger'>Log Kayıt İşlemi Başarısız.</div>";
                }
            } else {
                echo "<div class='alert alert-danger'>Bir Hata Meydana Geldi.</div>";
            }

        } else {
            echo "<div class='alert alert-danger'>Yeterli Bakiye Mevcut Değil</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Hisse Fiyatı Değişti</div>";
    }
}
if (g('islem') == 'hisse_sat') {
    ///
    $hisse_sat_kul_id = p('kul_id');
    $hisse_sat_sembol = p('sembol');
    $hisse_sat_tutar = p('sat_tutar');
    $hisse_sat_miktar = p('sat_miktar');
    $hisse_sat_komisyon = p('sat_komisyon');
    $hisse_sat_toplam = p('sat_toplam');
    //
    $veri = $db->prepare('SELECT varlik_elde,varlik_satim_adet FROM varliklar WHERE varlik_kul_id=? and varlik_hisse_sembol=?');
    $veri->execute(array($hisse_sat_kul_id, $hisse_sat_sembol));
    $v = $veri->fetchAll(PDO::FETCH_ASSOC);
    foreach ($v as $varlik_elde) ;
    //
    $veri = $db->prepare('SELECT kul_Ad,kul_Soyad,kul_bakiye FROM kullanicilar WHERE kul_id=?');
    $veri->execute(array($hisse_sat_kul_id));
    $v = $veri->fetchAll(PDO::FETCH_ASSOC);
    foreach ($v as $kul_bilgilerim) ;
    //
    if ($varlik_elde['varlik_elde'] >= $hisse_sat_miktar) {//sahte girişlere karşı veritabanı karşılaştırması
        if (bakiye_son($hisse_sat_sembol) == $hisse_sat_tutar) {//hisse fiyatı değişti mi ? karşılaştırması
            //
            $varlik_satim_guncel = $varlik_elde['varlik_satim_adet'] + $hisse_sat_miktar;
            $varlik_elde_guncel = $varlik_elde['varlik_elde'] - $hisse_sat_miktar;
            $yeni_bakiyem = $kul_bilgilerim['kul_bakiye'] + $hisse_sat_toplam;
            ///
            ///
            ///
            $toplam_kar_zarar = 0;
            $lot_degisen = $hisse_sat_miktar;
            //
            $veri_kar_zarar = $db->prepare('SELECT alim_id,alim_hisse_lot,alim_lot_satilmayan,alim_hisse_toplam_tutar FROM alim WHERE alim_lot_satilmayan>0 AND alim_kul_id=? AND alim_hisse_sembol=?  ORDER BY alim_zaman ASC');
            $veri_kar_zarar->execute(array($hisse_sat_kul_id, $hisse_sat_sembol));
            $v_kar_zarar = $veri_kar_zarar->fetchAll(PDO::FETCH_ASSOC);
            $say_kar_zarar = $veri_kar_zarar->rowCount();
            foreach ($v_kar_zarar as $kar_zarar) {

                if ($lot_degisen > 0) {
                    if ($kar_zarar['alim_hisse_lot'] >= $lot_degisen) {
                        $toplam_kar_zarar = $toplam_kar_zarar + $kar_zarar['alim_hisse_toplam_tutar'] * $lot_degisen / $kar_zarar['alim_hisse_lot'];
                        //
                        $alim_satilmayan_gunce = $db->prepare("UPDATE alim SET alim_lot_satilmayan='" . ($kar_zarar['alim_lot_satilmayan'] - $lot_degisen) . "' WHERE alim_id=?");
                        $alim_satilmayan_guncellemem = $alim_satilmayan_gunce->execute(array($kar_zarar['alim_id']));
                        //
                        break;
                    } else {
                        $toplam_kar_zarar = $toplam_kar_zarar + $kar_zarar['alim_hisse_toplam_tutar'];
                        $lot_degisen = $lot_degisen - $kar_zarar['alim_hisse_lot'];
                        //
                        $alim_satilmayan_gunc = $db->prepare("UPDATE alim SET alim_lot_satilmayan=0 WHERE alim_id=?");
                        $alim_satilmayan_guncelleme = $alim_satilmayan_gunc->execute(array($kar_zarar['alim_id']));
                    }
                } else {
                    echo "<div class='alert alert-success'>Hata .</div>";
                }
            }
            $kar_zarar_durum = ($hisse_sat_toplam - $toplam_kar_zarar);
            ///
            ///
            ///
            $satekle = $db->prepare("INSERT INTO satim(satim_kul_id, satim_hisse_sembol, satim_hisse_deger, satim_hisse_komisyon, satim_hisse_lot,satim_kar_zarar, satim_hisse_toplam_tutar) VALUES ('" . $hisse_sat_kul_id . "','" . $hisse_sat_sembol . "','" . $hisse_sat_tutar . "','" . $hisse_sat_komisyon . "','" . $hisse_sat_miktar . "','" . $kar_zarar_durum . "','" . $hisse_sat_toplam . "')");
            $satekleme = $satekle->execute(array());
            //
            $varlikguncelle = $db->prepare("UPDATE varliklar SET varlik_satim_adet='" . $varlik_satim_guncel . "',varlik_elde='" . $varlik_elde_guncel . "' WHERE varlik_kul_id=? AND varlik_hisse_sembol=?");
            $varlikguncelleme = $varlikguncelle->execute(array($hisse_sat_kul_id, $hisse_sat_sembol));
            //
            $bakiyegun = $db->prepare('UPDATE kullanicilar SET kul_Bakiye=? WHERE kul_Id=?');
            $bakiyeguncel = $bakiyegun->execute(array($yeni_bakiyem, $hisse_sat_kul_id));
            //
            if ($satekleme && $varlikguncelleme && $bakiyeguncel) {
                echo "<div class='alert alert-success'>Satım İşlemi Başarı ile Gerçekleşti.</div>";
                echo "<div class='alert alert-success'>Kalan Hisse Miktarı:  " . $varlik_elde_guncel . "</div>";
                echo "<div class='alert alert-success'>Bakiyeniz:  " . $yeni_bakiyem . "</div><meta http-equiv='refresh' content='1; url=index.php'>";
                //
                $ekle = $db->prepare("INSERT INTO log(log_kul_id, log_eylem, log_aciklama) VALUES ('" . $hisse_sat_kul_id . "','Hisse Satım','" . $hisse_sat_kul_id . " -Nolu kullanıcı " . $kul_bilgilerim['kul_Ad'] . " " . $kul_bilgilerim['kul_Soyad'] . " " . $hisse_sat_sembol . " hissesini " . $hisse_sat_tutar . " TL tutardan " . $hisse_sat_miktar . " adet sattı. Bu işlem için " . $hisse_sat_komisyon . " TL komisyon ödedi. " . $hisse_sat_toplam . " TL toplam tutar aldı.')");
                $ekleme = $ekle->execute(array());
                if ($ekleme) {
                    echo "<div class='alert alert-success'>Log Ekleme İşlemi Tamamlandı.</div>";
                } else {
                    echo "<div class='alert alert-danger'>Log Kayıt İşlemi Başarısız.</div>";
                }
            } else {
                echo "<div class='alert alert-danger'>İşlem Başarısız.</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Hisse Fiyatı Değişti</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Girilen Hisse Miktarı Portföyünüzde Bulunmamakta.</div>";
    }
}

?>
