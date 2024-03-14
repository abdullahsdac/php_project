<?php 

include "connection.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/opt/bitnami/apache/htdocs/PHPMailer/src/Exception.php';
require '/opt/bitnami/apache/htdocs/PHPMailer/src/PHPMailer.php';
require '/opt/bitnami/apache/htdocs/PHPMailer/src/SMTP.php';

$name = $_POST["name"];
$email = $_POST["email"];
$number = $_POST["number"];
$query = $_POST["query"];

$sql = "INSERT INTO `contact` (`id`, `name`, `email`, `number`, `query`) VALUES (NULL, '$name', '$email', '$number', '$query');";


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
            $mail->Port = 587;
        
            // Recipient information
            $mail->setFrom($senderemail, 'sdac');
            $mail->addAddress($email, $name);
            $mail->addReplyTo($senderemail, 'Sdac Infotech');
        
        
            // Email content
            $mail->isHTML(true);
            $mail->Subject = 'Thank You';
            $mail->Body    = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto aspernatur dolorum obcaecati quidem ea? Est possimus autem voluptatibus dolorem, minima soluta in nesciunt tenetur sequi, iure nemo blanditiis, accusantium quidem.';
        
            $mail->send();
            header("location:thankyou.html");  
            } 
            catch (Exception $e) {
            echo 'Failed to send email: ', $mail->ErrorInfo;
        }
        



} else {
    echo "failed". mysqli_error($conn);
}


mysqli_close($conn);
?>




