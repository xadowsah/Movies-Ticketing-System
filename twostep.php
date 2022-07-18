<?php
//Load Composer's autoloader
session_start();
require './vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'shaedow65@gmail.com';                     //SMTP username
    $mail->Password   = 'Shadowboss9800';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                       //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('shaedow65@gmail.com', 'Appletmaxcinemas');
    $mail->addAddress($_SESSION['username'], 'name');     
    
    //Content
    $mail->isHTML(true);  
    $random = rand(1111,9999);                                //Set email format to HTML
    $mail->Subject = 'Code For Verification';
    $mail->Body    = '<h1>Your OTP is: '.$random.'</h1>';

    $mail->send();
    $_SESSION['otp'] = $random;
    $_SESSION['cardnumber'] = $_POST['number'];

    header('location:bank.php');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>