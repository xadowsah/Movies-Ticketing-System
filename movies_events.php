
<style>
.single img {
    height: 40%;
    width: 100%;
    border-radius: 7px;
    object-fit: cover;
}
.movie-text {
    color: white;
    font-size: 19px;
    font-family: serif;
}
.color2 {
    text-decoration: none;
    font-size: 17px !important;
    color: #adef45 !important;
    font-family: serif;
}
.imageRow {
    box-shadow: -8px 11px 11px 0px rgb(0 0 0 / 87%), -20px 9px 20px 6px rgb(0 0 0 / 73%);
}
</style>

<?php include('header.php');?>
</div>
<div class="content">
	<div class="wrap">
		<div class="content-top">
			<center><h1 style="color:#555;">(NOW SHOWING)</h1></center>
			
			<?php
          	 $today=date("Y-m-d");
          	 $qry2=mysqli_query($con,"select * from  tbl_movie ");
		
          	  while($m=mysqli_fetch_array($qry2))
                   {
                    ?>
                    
                    <div class="col_1_of_4 span_1_of_4">
					<div class="imageRow">
						  	<div class="single">
						  		<?php
						
						?>
						  		<a href="about.php?id=<?php echo $m['movie_id'];?>"><img src="<?php echo $m['image'];?>" alt="" /></a>
						  	</div>
						  	<div class="movie-text">
						  		<h4 class="h-text"><a href="about.php?id=<?php echo $m['movie_id'];?>" style="text-decoration:none;"><?php echo $m['movie_name'];?></a></h4>
						  		Cast: <Span class="color2" style="text-decoration:none;"><?php echo $m['cast'];?></span><br>
						  		
						  	</div>
		  				</div>
		  		</div>
		  		
  	    <?php
  	    	}
  	    	?>
			
			</div>
				<div class="clear"></div>		
			</div>
			<?php include('footer.php');?>