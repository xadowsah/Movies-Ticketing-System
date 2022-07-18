
<!DOCTYPE HTML>
<html>
<head>
<title>Applet Max Cinemas</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/custo.css" type="text/css" media="all" />
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js'></script>
<script src='js/jquery.color-RGBa-patch.js'></script>
<script src='js/example.js'></script>
</head>
<style>
	.header-top	.wrap {
  width: 80%;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: flex-end;
}
span.caste {
    color: aqua;
    font-size: 19px;
}
span.release1 {
    color: aqua;
    font-size: 19px;
}
.textcontact {
    font-size: 16px;
    color: white;
    line-height: 20px;
    font-family: serif;
}
.span_1_of_4 p {
    font-size: 18px;
    color: white;
    line-height: 1.8em;
    font-family: serif;
}
.h-logo {
    /* float: left; */
    width: 18%;
}
.nav-wrap {
    float: right;
    width: 67%;
    margin: 22px auto;
}
.header-top {
    border-bottom: 2px ridge #333;
    background: linear-gradient(
171deg
, black, #0d1a5afa);
}
.span_1_of_4 p {
    font-size: 18px;
    color: white;
    line-height: 1.8em;
}
.call_info, .footer-nav ul li {
    font-family: serif;
    font-size: 18px;
    font-weight: 200;
}
span.tollfree {
    font-size: 20px;
    color: aqua;
    padding: 0;
    margin: 0;
}
.footer .wrap {
    width: 100% !important;
}
.footer-top {
    padding: 20px 0;
    border-top: 1px solid gray;
    text-align: center;
}
.footer-nav li {
    margin: 0 0 5px 20px;
    list-style: none;
}
.footer-nav li a {
    vertical-align: top;
    text-decoration: none;
    font-size: 16px;
    color: #fbfbfb;
    line-height: 20px;
    font-family: serif;
}
.footer {
    position: relative;
    background: none;
}
.content {
    background: #060c28;
}
label {
    color: white;
    font-family: serif;
    font-size: 16px;
    font-weight: 700;
    padding-left: 14px;
}
.block {
    margin-top: 0px;
    background: #80008036;
}
.contact-form span {
    color: white;
}
.footer-top {
    padding: 20px 0;
    border-top: 1px solid gray;
    text-align: center;
    background: #480448;
}
.contact-form {
    position: relative;
    padding-bottom: 30px;
    box-shadow: -20px 17px 28px 20px rgb(0 0 0 / 25%), -15px 20px 20px 18px rgb(0 0 0 / 22%);
    width: 70%;
    border-radius: 18px;
}
.contact-form input[type="text"], .contact-form textarea {
    color: white;
    background: transparent;
    font-size: 17px;
    font-family: serif;
    border: 1px solid #060c28;
    opacity: .5;
    width: 97%;
	border-radius: 10px;
	padding-left: 14px;
}
input[type="number"] {
    background: transparent;
	color: white;
	padding: 5px 18px;
	border: 1px solid #80808033;
	padding-left: 14px;
}
.response_msg{
margin-top:10px;
font-size:13px;
background:#E5D669;
color:#ffffff;
width:250px;
padding:3px;
display:none;
}
input.form-control {
    background: transparent;
    width: 99%;
    height: 33px;
    border: 1px solid #80808033;
	color: white;
	opacity: .5;
	border-radius: 10px;
	padding-left: 14px;
	font-family: serif;
	font-size: 17px;
}
.contact-form div {
    padding: 5px 17px;
}
button#submit_form {
    font-family: serif;
    font-size: 17px;
    margin-top: 10px;
    background: linear-gradient(155deg, black 43%, #9b009e 99%);
    color: white;
    padding: 11px 36px;
    border: none;
    border-radius: 9px;
}
button#submit_form:hover {
	background: linear-gradient(155deg, #9b009e 10%, black 69%);
}
.company_address p span {
    text-decoration: none;
    color: #00ffff8a;
    cursor: pointer;
    font-family: serif;
    font-size: 15px;
}
.alert.alert-danger {
    color: mediumaquamarine;
    font-family: serif;
}
.btn-sends {
    text-align: center;
}
.contact-header {
    text-align: center;
}
</style>
<body>
<div class="header">
	<div class="header-top">
		<div class="wrap">
			<div class="h-logo">
			<a href="index.php"><img src="logobar.png" alt=""/></a>
		</div>
			  <div class="nav-wrap">
					<ul class="group" id="example-one">
			           <li><a href="index.php">Home</a></li>
			           <!--<li><a href="#">About</a></li> -->
			  		   <li class="current_page_item"><a href="contact.php">Contact</a></li>
			        </ul>
			  </div>
 			<div class="clear"></div>
   		</div>
    </div>
	<div class="block">
		<div class="wrap">		
			<form action="#" id="reservation-form" method="post">
				<fieldset>
					<div class="field">
						<label>Find a Movie:</label>
						<select class="select2">
							<option>Movie list</option>
						</select>
					</div>
					<div class="field1">
						<label>Search</label>
						<select class="select1">
							<option>Movies or Actors</option>
						</select>
					</div>
				</fieldset>
            </form>
            <div class="clear"></div>
   		</div>
	</div>
</div>
<div class="content">
	<div class="wrap">
		<div class="content-top">
				<div class="section group">
					<div class="col span_2_of_3">
						<div class="contact-form">
							<div class="contact-header"><h3 style="font-family: serif; font-size:24px;">Contact Us</h3></div>
							<?php
								$Msg = "";
								if(isset($_GET['error']))
									{
										$Msg = "Please Fill in the Blanks";
										echo '<div class="alert alert-danger">'.$Msg.'</div>';
									}

									if(isset($_GET['success']))
									{
										$Msg = "Your Message Has Been Sent";
										echo '<div class="alert alert-success">'.$Msg.'</div>';
									}
							?>
								<form action="process_contact.php" method="post" name="form11">
								<div class="form-group">
									<label for="Name">Name</label><br><br>
									<input type="text" class="form-control" name="your_name" placeholder="Name" required>
									</div>
									<div class="form-group">
									<label for="exampleInputEmail1">Email address</label><br><br>
									<input type="email" class="form-control" name="your_email" placeholder="Email" required>
									</div>
									<div class="form-group">
									<label for="Phone">Phone</label><br><br>
									<input type="text" class="form-control" name="your_phone" placeholder="Phone" required>
									</div>
									<div class="form-group">
									<label for="comments">Comments</label><br><br>
									<textarea name="comments" class="form-control" rows="3" cols="28" rows="5" placeholder="Comments"></textarea> 
									</div>
									<div class="btn-sends">
										<button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Submit</button>
									</div>
								</form>
						</div>
					</div>
				<div class="col span_1_of_3">
					<div class="contact_info">
    	 				<h3>Find Us Here</h3>
					    	  <div class="map">
							   	    <iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
							  </div>
      				</div>
      			<div class="company_address">
				     	<h3>Company Information :</h3>
						    	<p>Applet Max Cinemas,</p>
						   		<p>Chabahil, Kathmandu</p>
						<p>Phone:(00) 222 666 444</p>				   		
				 	 	<p>Email: <span>shaedow65@gmail.com</span></p>
				   		<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				   </div>
				 </div>
			  </div>
				<div class="clear"></div>		
			</div>
	</div>
	
</div>
<div class="footer">
	<div class="wrap">
			<div class="footer-top">
				<div class="col_1_of_4 span_1_of_4">
					<div class="footer-nav">
		                <ul>
		                   <li><a href="index.php">Home</a></li>
		                    <li><a href="login.php">Login</a></li>
		                     <li><a href="contact.php">Contact Us</a></li>
		                       <li><a href="#">About Us</a></li>
		                   </ul>
		              </div>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<div class="textcontact">
						<p>Applet Max Cinemas<br>
						Ph: +977-9815674789<br>
						Email: appletmaxcinemas@gmail.com<br>
						</p>
					</div>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<div class="call_info">
						<p class="txt_3">Call us toll free:</p>
						<p class="txt_4">1 222 333 4444</p>
					</div>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<div class=social>
						<a href="#"><img src="images/fb.png" alt=""/></a>
						<a href="#"><img src="images/tw.png" alt=""/></a>
						<a href="#"><img src="images/dribble.png" alt=""/></a>
						<a href="#"><img src="images/pinterest.png" alt=""/></a>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
	<div class="wrap">
	<div class="copy">
		<p>All rights Reserved | Design by <a href="#">Purushottam Sah</a></p>
	</div>
 	</div>
</div>
<script>
$(document).ready(function(){
$("#contact-form").on("submit",function(e){
e.preventDefault();
if($("#contact-form [name='your_name']").val() === '')
{
$("#contact-form [name='your_name']").css("border","1px solid red");
}
else if ($("#contact-form [name='your_email']").val() === '')
{
$("#contact-form [name='your_email']").css("border","1px solid red");
}
else
{
$("#loading-img").css("display","block");
var sendData = $( this ).serialize();
$.ajax({
type: "POST",
url: "get_response.php",
data: sendData,
success: function(data){
$("#loading-img").css("display","none");
$(".response_msg").text(data);
$(".response_msg").slideDown().fadeOut(3000);
$("#contact-form").find("input[type=text], input[type=email], textarea").val("");
}
});
}
});
$("#contact-form input").blur(function(){
var checkValue = $(this).val();
if(checkValue != '')
{
$(this).css("border","1px solid #eeeeee");
}
});
});
</script>
</body>
</html>
