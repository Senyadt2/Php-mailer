<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"]))
{
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail-> SMTPAuth = true;
    $mail->Username = 'abc73357240@gmail.com';    //your gmail
    $mail->Password = 'xzngkworkmmjtewo';  //your password
    $mail->SMTPSecure = 'ssl'; //connection secured 
    $mail->Port = 465;
    $mail->setFrom('Hello@gmail.com');
    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);
    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];
    $mail->send();
    
    ?>
    <script>
        alert("Sent Successfully");
        document.location.href = 'index.html';
    </script>

    <?php
}

?>