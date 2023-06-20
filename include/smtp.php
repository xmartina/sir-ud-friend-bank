<?php

use PHPMailer\PHPMailer\PHPMailer;

// MESSAGE & EMAIL CONFIGURATION FOR SCRIPT
class message{
    private $conn;
    public function send_mail($email, $message, $subject){

        $mail = new PHPMailer();
        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "mail.matagram.com"; // Change Email Host
        $mail->SMTPAuth = true;
        $mail->Username = "support@matagram.com"; // Change Email Address
        $mail->Password = '+C@ppy126'; // Change Email Password
        $mail->Port = 587; //465; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom('info@fortageunion.com','Support Fortage Union'); // Change
        $mail->addAddress($email);
        $mail->AddReplyTo("info@fortageunion.com", "Support Fortage Union"); // Change
        $mail->Subject = $subject;
        $mail->MsgHTML($message);
        $mail->Send();


    }

}


?>