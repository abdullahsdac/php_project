<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:/xampp/htdocs/full project/PHPMailer/src/Exception.php';
require 'C:/xampp/htdocs/full project/PHPMailer/src/PHPMailer.php';
require 'C:/xampp/htdocs/full project/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);
    
try {
    $senderemail = 'labdemo80@gmail.com';
    $senderemailpass = 'zcym mavq avnm jcjw';     
    $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $senderemail;
        $mail->Password = $senderemailpass;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 25;
    
        // Recipient information
        $mail->setFrom($senderemail, 'sdac');
        $mail->addAddress('abdullahmithani00@gmail.com', 'Abdullah');
        $mail->addReplyTo($senderemail, 'sdac');
    
    
        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'Test Email from Localhost';
        $mail->Body    = 'This is a test email sent from localhost using PHPMailer and Gmail SMTP.';
    
        $mail->send();
        echo 'Email sent successfully';   
        } 
        catch (Exception $e) {
        echo 'Failed to send email: ', $mail->ErrorInfo;
    }
    