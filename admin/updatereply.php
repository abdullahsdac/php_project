<?php 

include "connection.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\PHPMailer\src\Exception.php';
require 'C:\xampp\htdocs\PHPMailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\PHPMailer\src\SMTP.php';

$id = $_POST["id"];
$name = $_POST["name"];
$email = $_POST["email"];
$number = $_POST["number"];
$query = $_POST["query"];
$reply = $_POST["reply"];

$sql = "UPDATE `contact` SET `name` = '$name', `email` = '$email', `number` = '$number', `query` = '$query', `replied` = '$reply' WHERE `contact`.`id` = $id;";


if (mysqli_query($conn,$sql)) {

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
            $mail->addAddress($email, $name);
            $mail->addReplyTo($senderemail, 'moin');
        
        
            // Email content
            $mail->isHTML(true);
            $mail->Subject = 'Your Query has been Solved';
            $mail->Body    = $reply;
        
            $mail->send();
            header("location:contactmanage.php");  
            } 
            catch (Exception $e) {
            echo 'Failed to send email: ', $mail->ErrorInfo;
        }
        



} else {
    echo "failed". mysqli_error($conn);
}


mysqli_close($conn);
?>




