<style>
    .span_1_of_4 p {
    font-size: 18px;
    color: #666;
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
    padding: 0px 0;
    border-top: 1px solid #80808036;
    text-align: center;
}
.col-md-4.col-md-offset-4 {
    padding-bottom: 40px;
}

.footer-nav li {
    margin: 0 0 5px 20px;
    list-style: none;
}
.footer-nav li a {
    font-size: 13px;
    color: #666;
    vertical-align: top;
    line-height: 21px;
    text-decoration: none;
}
.footer {
    position: relative;
    background: none;
}
</style>

<div class="footer">
	<div class="wrap">
			<div class="footer-top">
				<div class="col_1_of_4 span_1_of_4">
					<div class="footer-nav">
                        <ul>
                            <li><a href="index.php" style=" font-family: serif; font-size: 18px;"><span style="font-size: 18px; font-family:serif; "> Home</span></a></li>
                            <li><a href="movies_events.php" style=" font-family: serif; font-size: 18px;;"><span style="font-size: 18px; font-family:serif; "> Movies</span></a></li>
                            <li><a href="theatre\index.php" style=" font-family: serif; font-size: 18px;;"><span style="font-size: 18px; font-family:serif; "> Admin Login</span></a></li>
                        </ul>
                    </div>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<div class="textcontact">
						<p>Applet Max Cinemas<br>						
						Ph: 977-9802736835<br>
						</p>
					</div>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<div class="call_info">
						<p class="txt_3">Call us toll free:</p>
						<p class="txt_4">3 333 444 55555</p>
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
</body>
</html>

<style>
.content {
	padding-bottom:0px !important;
}
#form111 {
                width:500px;
                margin:50px auto;
}
#search111{
                padding:8px 15px;
                background-color:#fff;
                border:0px solid #dbdbdb;
}
#button111 {
                position:relative;
                padding:6px 15px;
                left:-8px;
                border:2px solid #ca072b;
                background-color:#ca072b;
                color:#fafafa;
}
#button111:hover  {
                background-color:#b70929;
                color:white;
}
p.txt_4 {
    color: #666;
    margin-top: 2%;
    font-size: 19px;
}
</style>

<script src="js/auto-complete.js"></script>
 <link rel="stylesheet" href="css/auto-complete.css">
    <script>
        var demo1 = new autoComplete({
            selector: '#search111',
            minChars: 1,
            source: function(term, suggest){
                term = term.toLowerCase();
                <?php
						$qry2=mysqli_query($con,"select * from tbl_movie");
						?>
               var string="";
                <?php $string="";
                while($ss=mysqli_fetch_array($qry2))
                {
                
                $string .="'".strtoupper($ss['movie_name'])."'".",";
                //$string=implode(',',$string);
                
              
                }
                ?>
                //alert("<?php echo $string;?>");
              var choices=[<?php echo $string;?>];
                var suggestions = [];
                for (i=0;i<choices.length;i++)
                    if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
                suggest(suggestions);
            }
        });
    </script>