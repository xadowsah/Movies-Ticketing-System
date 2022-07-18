
<?php
session_start();
if(!isset($_SESSION['user']))
{
	header('location:login.php');
}
extract($_POST);
?>
<!doctype html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />

    <title>Applet MAx Cinemas</title>
    <link href="css/bank.css" rel="stylesheet" type="text/css"/>
</head>
<body style="background-color: #0a0323;">
  <div id="mainContainer" class="row large-centered" style="background:purple; border-radius: 8px; border-color:gray;    box-shadow: 0px 0px 13px 20px rgb(0 0 0 / 25%), -20px 19px 20px 20px rgb(0 0 0 / 22%); 
  line-height: 8px">
    <div class="text-center"><h2 style="font-family:serif; font-size:28px; font-weight:700; color:white;">BANK</h2></div>
    <hr class="divider">
    <dl class="mercDetails">
      <dt style="color:white; font-family:serif;">Merchant</dt><dd style="color:white; font-family:serif;">Shop Street</dd>
      <dt style="color:white; font-family:serif;">Transaction Amount</dt><dd style="color:white; font-family:serif;">NPR <?php echo  $_SESSION['amount'];?></dd>
      <dt style="color:white; font-family:serif;">Debit Card</dt><dd style="color:white; font-family:serif;"><?php echo  $_SESSION['cardnumber'];?></%></dd>
    </dl>
    <hr class="divider">
  
  
    <form name="form1" id="form1" method="post" action="complete_payment.php">
      <fieldset class="page2">
        <div class="page-heading">
          <h6 class="form-heading" style="color:skyblue; font-size:18px; font-family:serif;">Authenticate Payment</h6>
          <p class="form-subheading" style="color:#ccc; font-family:serif;">OTP sent to your Email</p>
        </div>

        <div class="row formInputSection">
          <div class="large-7 columns">
            <label>
              Enter One Time Password (OTP)
              <input type="tel" name="otp"  class="form-control optPass" value="" maxlength="6" autocomplete="off"/>
            </label>
          </div>
          <div class="large-5 columns">
            <label>&nbsp;</label><button class="expanded button next" onClick="ValidateForm()">Make Payment</button>
          </div>
        </div>
    <!-- <div class="text-right resendBtn requestOTP"><a class="request-link" href="javascript:void(0)">Resend OTP</a></div> -->
        <p>
          <a class="tryAgain" href="process_booking.php">Go back</a> to merchant
        </p>
    </fieldset>
  </form>
</div>
<script src="bank/script/jquery-1.9.1.js"></script>
<script>
document.onmousedown = rightclickD; function rightclickD(e) { e = e||event; if (e.button == 2) { alert('Function Disabled...'); return false; } }
function ValidateForm() { 
	var regPin = RegExp("^[0-9]{4,6}$");
	if( document.form1.customerpin.value == "" || !document.form1.customerpin.value.match(regPin) ) {	 
		alert("Please enter a valid 6 digit One Time Password (OTP) receive on your registered Mobile Number."); document.form1.customerpin.focus(); return false;  
	}
    else
        {
            document.form1.submit();
        }

}
</script>

</body>
</html>