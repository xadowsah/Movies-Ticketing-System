<?php
include('config.php');
session_start();
date_default_timezone_set('Asia/Kathmandu');
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Applet Max Cinemas</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/Customs.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/custom.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
<link type="text/css" rel="stylesheet" href="http://www.dreamtemplate.com/dreamcodes/tabs/css/tsc_tabs.css" />
<link rel="stylesheet" href="css/tsc_tabs.css" type="text/css" media="all" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src='js/jquery.color-RGBa-patch.js'></script>
<script src='js/example.js'></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
    
.content-top h3 {
    color: white;
    font-family: serif;
    font-size: 28px;
    border-bottom: 1px solid #406c10;
    background: purple;
    border-radius: 8px;
}
.listview_1_of_3.images_1_of_3 h2 {
    color: #fcac03 !important;
    font-size: 28px !important;
    border-bottom: 1px solid #406c10;
}

 .panel-default {
    border-color: transparent;
    box-shadow: -20px 17px 28px 13px rgb(0 0 0 / 52%), 0 10px 10px rgb(0 0 0 / 22%);
    border: 1px solid #8080802b;
    line-height: 48px;
}
.panel{
    background: transparent;
}   
.footer-top {
    padding: 0px 0px;
    border-top: 1px solid gray;
    text-align: center;
}
.panel-default>.panel-heading {
    color: white;
    background-color: transparent;
    border-color: #dddddd24;
    font-family: serif;
    font-size: 20px;
    text-align: center;
}
h4.h-text {
    text-align: center;
}
p.login-box-msg {
    color: white;
    font-family: serif;
    font-size: 18px;
}
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
    font-family: serif;
    font-size: 18px;
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
fieldset {
    position: absolute;
    top: 97px;
    right: 16%;
}
#search111 {
    padding: 20px 25px !important;
    background-color: #fff;
    border: 0px solid #dbdbdb;
    font-family: serif;
    font-size: 16px;
    color: black;
}
input#button111 {
    height: 30px;
    font-family: serif;
    font-size: 16px;
}
.header {
    background: linear-gradient( 
74deg
 , black, #0d1a5afa);
}

.table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
    border: 1px solid #80808063;
}
button.btn.btn-info {
    background: purple;
}

.text-center {
    text-align: center;
    color: white;
    font-family: serif;
    font-size: 18px;
    letter-spacing: 3px;
}
.table-hover>tbody>tr:hover {
    background-color: transparent;
}
td:hover {
    color: white;
}
button.btn.btn-default:hover {
    color: black;
}
.content-left {
    border: 1px solid #80808042;
    border-radius: 12px;
    margin-bottom: 25px;
    box-shadow: -20px 17px 28px 13px rgb(0 0 0 / 52%), 0 10px 10px rgb(0 0 0 / 22%);
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    flex-direction: column;
    border-radius: 12px;
    overflow: hidden;
    z-index: -999;
}
.color2 {
    text-decoration: none;
    font-size: 16px;
    color: #888;
}
.listimg1 {
    width: 100%;
    margin-right: 0px;
    float: none;
    border-radius: 18px;
    overflow: hidden;
}
.text.list_1_of_2 {
    display: none;
    margin-top: -232px;
    background: #000000e0;
    overflow: hidden;
}
.content-left:hover .text.list_1_of_2 {
    display: block;
    overflow: hidden;
}
.list_1_of_2 {
    width: 100%; 
}
.listimg_1_of_2{
    width: 100%;
    padding-bottom: 7px;
}
.images_1_of_3 img {
    width: 100%;
    padding-bottom: 7px;
    height: 430px;
}
.link {
    font-size: 20px;
    color: aqua;
    font-weight: bold;
    text-decoration: none;
    line-height: 1.8em;
    font-family: serif;
    padding-left: 80px;
}
.link:hover{
    color: whitesmoke;
}

.text {
    text-align: center;
    line-height: 22px;
    padding: 0px 15px;
}

.content {
    background: #0a0323;
    padding: 20px 0;
    background-position: center;
    background-size: cover;
}
label {
    font-weight: 200;
    color: white;
    font-family: serif;
    font-size: 18px;
}
.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 20px;
    color: whitesmoke;
}
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 4px;
    font-family: serif;
}
@media only screen and (max-width: 640px) and (min-width: 480px){
    #example-one a {
        padding: 0px 3px;
    }
    .header-top .wrap {
        width: 80%;
        margin: 0px 70px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .h-logo {
        /* float: left; */
        width: 25%;
    }
}
</style>
<body>
<div class="header">
	<div class="header-top">
		<div class="wrap">
			<div class="h-logo">
			<a href="index.php"><img src="logobar.png" alt="Logo Image Here"/></a>
		</div>
        <div class="nav-wrap">
					<ul class="group" id="example-one" >
			           <li><a href="index.php" >Home</a></li>
			  		   <li><a href="movies_events.php">Movies</a></li>
                         <li><a href="contact.php">Contact Us</a></li>
			  		   <li><?php if(isset($_SESSION['user'])){
			  		   $us=mysqli_query($con,"select * from tbl_registration where user_id='".$_SESSION['user']."'");
                        $user=mysqli_fetch_array($us);?><a href="profile.php"><?php echo $user['name'];?></a><a href="logout.php">Logout</a><?php }else{?><a href="login.php">Login</a> <a href="registration.php">Register</a><?php }?></li>
			        </ul>
			  </div>
 			<div class="clear"></div>
			
   		</div>
		
    </div>
     			<div class="clear"></div>
   	
<div class="block">
	<div class="wrap">
		
        <form action="process_search.php" id="reservation-form" method="post" onsubmit="myFunction()">
		       <fieldset>
		       	<div class="field" >
		       	
		       		     
                                <input type="text" placeholder="Enter A Movie Name" style="height:30px;width:300px"  required id="search111" name="search">
                                
                                <input type="submit" value="Search" style="height:34px;padding-top:3px" id="button111">
    </div>       	

		       </fieldset>
            </form>
            <div class="clear"></div>
   </div>
</div>
<script>
	function myFunction() {
						if($('#hero-demo').val()=="")
							{
								alert("Please enter movie name...");
								return false;
							}
						else{
							return true;
							}
						
					}
</script>

