<?php
include('config.php');
session_start();
// require './vendor/autoload.php';
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

$email = $_POST["Email"];
$pass = $_POST["Password"];
$qry=mysqli_query($con,"select * from tbl_login where username='$email' and password='$pass'");
if(mysqli_num_rows($qry))
{
	$usr=mysqli_fetch_array($qry);
	if($usr['user_type']==2)
	{
		
		
		//two step verification
		//Create an instance; passing `true` enables exceptions
		// $mail = new PHPMailer(true);
		
		// try {
		// 	//Server settings
		// 	$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
		// 	$mail->isSMTP();                                            //Send using SMTP
		// 	$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
		// 	$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		// 	$mail->Username   = 'shahpurushottam22@gmail.com';                     //SMTP username
		// 	$mail->Password   = 'Shadowboss980';                               //SMTP password
		// 	$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
		// 	$mail->Port       = 465;                                       //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

		// 	//Recipients
		// 	$mail->setFrom('shahpurushottam22@gmail.com', 'Appletmaxcinemas');
		// 	$mail->addAddress($email, 'name');     
			
		// 	//Content
		// 	$mail->isHTML(true);  
		// 	$random = rand(1111,9999);                                //Set email format to HTML
		// 	$mail->Subject = 'Code For Verification';
		// 	$mail->Body    = '<h1>Your OTP is: '.$random.'</h1>';
			
		// 	$mail->send();

		// 	$_SESSION['otptwostep'] = $random;
			$_SESSION['user']=$usr['user_id'];
			$_SESSION['username'] = $usr['username'];

			header('location:booking.php');
		// } catch (Exception $e) {
		// 	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		// }
	}
	else
	{
		$_SESSION['error']="Login Failed!";
		header("location:login.php");
	}
	
}
else
{
	$_SESSION['error']="Login Failed!";
	header("location:login.php");
}
?>