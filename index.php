<html>
	<style>
.listview_1_of_3 {
    display: block;
    float: left;
    margin: 0% 0 0% 3.6% !important;
}
	</style>
	<body>
	<?php
		include('header.php');
	?>
	<div class="content">
		<div class="wrap">
			<div class="content-top">
				<div class="listview_1_of_3 images_1_of_3">
					<h2 style="color:#555;">Upcoming Movies</h2>
					<?php 
					$qry3=mysqli_query($con,"SELECT * FROM tbl_news LIMIT 5");
					
					while($n=mysqli_fetch_array($qry3))
					{
					?>
					<div class="content-left">
						<div class="listimg listimg_1_of_2">
							 <img src="admin/<?php echo $n['attachment'];?>">
						</div>
						<div class="text list_1_of_2">
							<div class="extra-wrap">
								<span style="color:white; font-weight: 700; font-family: serif; font-size: 22px;" class="data"><strong><?php echo $n['name'];?></strong><br><br>
									<span style="color:#bdbbb; font-weight: 100; font-family: serif; font-size: 16px;" class="data"><span class="caste"> Cast</span> :<?php echo $n['cast'];?><br>
									<div class="data"><span class="release1"> Release Date</span> :<?php echo $n['news_date'];?></div>
										<span style="color:#bdbbb; padding-top: 18px; font-weight: 100; font-family: serif; font-size: 16px;" class="text-top"><?php echo $n['description'];?></span>
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<?php
					}
					?>
				
			
				</div>				
		<div class="listview_1_of_3 images_1_of_3">
			<h2 style="color:#555;">Movie Trailers</h2>
				<div class="middle-list">
			<?php 
			$qry4=mysqli_query($con,"SELECT * FROM tbl_movie ORDER BY rand() LIMIT 6");
		
			while($nm=mysqli_fetch_array($qry4))
			{
			?>			
				<div class="listimg1">
					<a target="_blank" href="<?php echo $nm['video_url'];?>"><img src="<?php echo $nm['image'];?>" alt=""/></a>
					<a target="_blank" href="<?php echo $nm['video_url'];?>" class="link" style="text-decoration:none; font-size:20px;"><?php echo $nm['movie_name'];?></a>
				</div>
				<?php
			}
			?>
			</div>					
		</div>			
		<?php include('movie_sidebar.php');?>
	</div>
</div>
<?php include('footer.php');?>
</div>
<?php include('searchbar.php');?>