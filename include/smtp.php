<?php

use PHPMailer\PHPMailer\PHPMailer;

// MESSAGE & EMAIL CONFIGURATION FOR SCRIPT
class message{
    private $conn;
    public function send_mail($email, $message, $subject){

        $mail = new PHPMailer();
        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "mail.cryptogiant.biz"; // Change Email Host
        $mail->SMTPAuth = true;
        $mail->Username = "test@cryptogiant.biz"; // Change Email Address
        $mail->Password = '+C@ppy126'; // Change Email Password
        $mail->Port = 587; //465; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom('test@cryptogiant.biz','Support Fortage Union'); // Change
        $mail->addAddress($email);
        $mail->AddReplyTo("test@cryptogiant.biz", "Support Fortage Union"); // Change
        $mail->Subject = $subject;
        $mail->MsgHTML($message);
        $mail->Send();


    }

}


?>