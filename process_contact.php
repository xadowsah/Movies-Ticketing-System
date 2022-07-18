<?php
    require './vendor/autoload.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    include('config.php');

    if(isset($_POST['submit'])) {
        $name = $_POST['your_name'];
        $email = $_POST['your_email'];
        $phone = $_POST['your_phone'];
        $comment = $_POST['comments'];

        if(empty($name) || empty($email) || empty($phone) || empty($comment)) {
            header('location:contact.php?error');
        }else{
            $query = "INSERT INTO tbl_contact VALUES(NULL, '$name', '$email', '$phone', '$comment')";
            $run = mysqli_query($con, $query);

            if($run) {
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
                    $mail->addAddress('shaedow65@gmail.com', 'name');     
                    
                    //Content
                    $mail->isHTML(true);  
                    $random = rand(1111,9999);                                //Set email format to HTML
                    $mail->Subject = 'Received New Message from User';
                    $mail->Body    = '
                        <div>
                            <div>
                                <strong>Name:</strong><span>'. $name .'</span>
                            </div><br>
                            <div>
                                <strong>Email:</strong><span>'. $email .'</span>
                            </div><br>
                            <div>
                                <strong>Mobile:</strong><span>'. $phone .'</span>
                            </div><br>
                            <div>
                                <strong>Comment:</strong><span>'. $comment .'</span>
                            </div>
                        </div>
                    ';
                
                    $mail->send();
                    
                    ?>  
                        <script>
                            window.open("./contact.php","_self");
                        </script>
                    <?php
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
            }
        }
    }
   
//    if(isset($_POST['submit']))
//    {
//        $UserName = $_POST['name'];
//        $Email = $_POST['email'];
//        $Subject = $_POST['subject'];
//        $Msg = $_POST['msg'];

//        if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
//        {
//        }
//        else
//        {
//            $to = "shaedow65@gmail.com";

//            if(mail($to,$Subject,$Msg,$Email))
//            {
//                header("location:contact.php?success");
//            }
//        }

//    }
//    else
//    {
//        header("location:index.php");
//    }
//     //echo $qry;
//     //header('location:contact.php');
?>