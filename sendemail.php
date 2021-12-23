<?php
    require 'vendor/autoload.php';

    class SendEmail{

      public static function SendMail($to,$subject,$content){
        $key = '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';

        //$email = new \SendGrid\Mail\Mail();
        // $email->setFrom("ashikasitosh740@gmail.com","Maimoon Hossain");
        // $email->setSubject($subject);
        // $email->addTo($to);
        // $email->addContent("text/plain");

       // $sendgrid = new \SendGrid($key);

        // try {
        //    $response = $sendgrid->send($email);
        // }catch(Exception $e){
        //    echo 'Email exception Caught : '.$e->getMessage()."\n";
        //    return false;
        // }

      }
    }
?>