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

    $id = $_POST['showid'];
    $query = "select * from tbl_bookings where show_id = '$id'";

    $data = array();
    for($i=0;$i<count($data);$i++){
        $mail->addAddress($data[$i]['username'], 'name');     
        
        //Content
        $mail->isHTML(true);                                //Set email format to HTML
        $mail->Subject = 'ticket id, showname, etc etc';
        $mail->Body    = 'ticket id, showname, etc etc.............';
    
        $mail->send();
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>