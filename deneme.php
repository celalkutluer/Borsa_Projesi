<?php
/*
$Eposta="celalkutluer@gmail.com";
echo "<strong >Üyeliğiniz oluşturulmuştur.</strong></br>
<a href=  'kayit-dogrulama.php?dogrulama=".sha1(md5($Eposta))."'>
    Eposta adresinizi doğrulamak için tıklayınız.
</a>";
*/
require __DIR__.'/vendor/autoload.php';
$Email="celalkutluer@gmail.com";
$email = new \SendGrid\Mail\Mail();
$email->setFrom("info@celalkutluer.com.tr", "Borsa Yatırım Fantazi Ligi");
$email->setSubject("Üyelik Hakkında");
$email->addTo($Email, 'rr');
$email->addContent(
    "text/html", "<strong >Üyeliğiniz oluşturulmuştur.</strong>
                                                "
);
$sendgrid = new \SendGrid('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');
try {
    $response = $sendgrid->send($email);
    if($response->statusCode()=="202"){ echo "tttt";
    }

} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}
?>