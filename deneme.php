<?php
require 'vendor/autoload.php'; // If you're using Composer (recommended)
// Comment out the above line if not using Composer
// require("<PATH TO>/sendgrid-php.php");
    // If not using Composer, uncomment the above line and
    // download sendgrid-php.zip from the latest release here,
    // replacing <PATH TO> with the path to the sendgrid-php.php file,
        // which is included in the download:
        // https://github.com/sendgrid/sendgrid-php/releases

        $email = new \SendGrid\Mail\Mail();
        $email->setFrom("info@celalkutluer.com.tr", "Borsa Yatırım Fantazi Ligi");
        $email->setSubject("Üyelik Hakkında");
        $email->addTo("celalkutluer2@gmail.com", "Example User");
        $email->addContent(
        "text/html", "<strong>Üyeliğiniz oluşturulmuştur.</strong>"
        );
        //$sendgrid = new \SendGrid(getenv('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'));
        $sendgrid = new \SendGrid('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');
        try {
        $response = $sendgrid->send($email);
        print $response->statusCode() . "\n";
        print_r($response->headers());
        print $response->body() . "\n";
        } catch (Exception $e) {
        echo 'Caught exception: '. $e->getMessage() ."\n";
        }

        ?>