
 			<div class="listview_1_of_3 images_1_of_3">
					<h2 style="color:#555;">Films in Theaters</h2>
					
					<?php
          	 $today=date("Y-m-d");
          	$qry2=mysqli_query($con,"select * from  tbl_movie where status='0' order by rand() limit 5");
						
          	  while($m=mysqli_fetch_array($qry2))
                   {
                    ?>
            <div class="content-left">
					<div class="listimg listimg_1_of_2">
					<?php
						
						?>
						 <a href="about.php?id=<?php echo $m['movie_id'];?>"><img src="<?php echo $m['image'];?>"></a>
					</div>
					<div class="text list_1_of_2">
						  <div class="extra-wrap1">
                                         <a href="about.php?id=<?php echo $m['movie_id'];?>" class="link4" style="text-decoration:none; font-size:18px; color:aqua; font-family:serif;"><?php echo $m['movie_name'];?></a><br>
										 <span style="color:white; font-weight: 700; font-family: serif; font-size: 20px;" class="data">Release Date: <?php echo $m['release_date'];?></span><br><br>
										 <span style="color:#bdbbb; font-weight: 100; font-family: serif; font-size: 16px;" class="data"><span class="caste"> Cast:</span> <Span class="data"><?php echo $m['cast'];?></span><br>
                                       <span style="color:#bdbbb; padding-top: 18px; font-weight: 100; font-family: serif; font-size: 16px;"><span style="color: aqua;"> Description:</span></span> <span" class="color2" style="text-decoration:none; color:#bdbbb !important;"><?php echo $m['desc'];?></span><br>
                                    </div>
					</div>
					
					<div class="clear"></div>
				</div>
  	    <?php
  	    	}
  	    	?>
					
					
				
				
					
					
				
				
				
				
				</div>		
				<div class="clear"></div>		
			
