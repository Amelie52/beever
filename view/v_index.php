<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Beever | home</title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/knacss.css">
	<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
	 <link rel="stylesheet" type="text/css" href="../css/slick.css">
 	 <link rel="stylesheet" type="text/css" href="../css/slick-theme.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>

	<?php include_once("../view/v_navigation.php"); ?>
	

	<section class="slider_news">
		<div class="slider_news_percent one slider">
			<div class="slider_news1">
				<div class="container">  <!-- 1080px projet 1 -->
					<div class="grid-2-small-1">
						<div class="contain_slider">
							<div class="slider_present w50 center">
								<h2>Welcome to Beever</h2>
								<p>Beever helps artists, musicians, filmmakers, designers, and other creators find the resources and support they need to make their ideas a reality. To date, tens of thousands of creative projects — big and small — have come to life with the support of the Beever community. </p><br>
									<a href="../controler/c_about.php" title="about Beever"><button>More</button></a>
							</div>
						</div>
						<div>

						</div>
					</div>
				</div>
			</div>
				
					<?php foreach ($projectLast as $key => $une): ?>
						<div class="slider_news2" style="background: url('../projects/upload/<?php echo $une['proj_photo']?>') center 0 no-repeat;background-size: cover">
							<div class="container">  <!-- 1080px projet 1 -->
								<div class="grid-2-small-1">
									<div class="contain_slider">
										<div class="slider_present w50 center">
											<h2><?php echo $une['proj_name'] ?></h2>
											<p><?php echo $une['proj_present'] ?></p><br>
											<a href="c_project.php?name=<?php echo $une['proj_name'] ?>" title="Project page" class="go_project"><button>More</button></a>
										</div>
									</div>
									<div>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach ?>	
		</div>
	</section>

		<section class="favorites">
			<div class="container">
				<div class="top_section_blue grid-2">
					<div class="txtleft"><h3>Our selection</h3></div>
					<div class="txtright"><a href="../controler/c_list_cur_projects.php"><button class="v">See all projects</button></a></div>
				</div>

				<div class="slider_3 three slider">
					<?php foreach ($projectHeart as $key => $une): ?>
						<div>
							<div class="list_min_project">
								<a href="c_project.php?name=<?php echo $une['proj_name'] ?>" class="go_project"><div class="min_photo_project" style="background: url('../projects/upload/<?php echo $une['proj_photo']?>') center 0 no-repeat;background-size: cover">
									<!-- 	<div class="more">
									<img src="" alt="See more projects"> --> <!-- mettre en display:none de base -->
									<!-- </div> --> 
								</div></a>

								<div class="contenu_min_project">
									<div class="bloc_text_min_project">
										<div class="top_titre_min_project">
											<a href="c_project.php?name=<?php echo $une['proj_name'] ?>" class="go_project"><p><?php echo $une['proj_name'] ?></p></a>  
										</div>
										<div class="country_member_min_project"><p><?php echo $une['user_firstname'] ?> <?php echo $une['user_name'] ?><br><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $une['proj_country'] ?></p></div>
										<div class="present_min_project"><p><?php echo $une['proj_present'] ?></p></div>
									</div>

									<div class="bottom_min_project">
										<progress max="<?php echo $une['proj_funds_obj'] ?>" value="<?php echo $une['proj_funds_received'] ?>" form="form-id"></progress>
										<div class="grid-1-2">

											<div class="txtleft">
												<div class="catego_min_project"><p><?php echo $une['proj_catego'] ?></p></div>
											</div>

											<div class="txtright">
												<div class="funds_min_project">

													<p><b> <?php echo $une['proj_funds_received'] ?>$ </b>/ <?php echo $une['proj_funds_obj'] ?>$</p>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					<?php endforeach ?>	
				</div>

				<div class="slider_3_mobile">
					<?php foreach ($projectHeart as $key => $une): ?>
						<div >
							<div class="list_min_project">
								<a href="c_project.php?name=<?php echo $une['proj_name'] ?>" class="go_project"><div class="min_photo_project" style="background: url('../projects/upload/<?php echo $une['proj_photo']?>') center 0 no-repeat;background-size: cover">
									<!-- 	<div class="more">
									<img src="" alt="See more projects"> --> <!-- mettre en display:none de base -->
									<!-- </div> -->
								</div></a>

								<div class="contenu_min_project">
									<div class="bloc_text_min_project">
										<div class="top_titre_min_project">
											<a href="c_project.php?name=<?php echo $une['proj_name'] ?>" class="go_project"><p><?php echo $une['proj_name'] ?></p></a>  
										</div>
										<div class="country_member_min_project"><p><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $une['proj_country'] ?></p></div>
										<div class="present_min_project"><p><?php echo $une['proj_present'] ?></p></div>
									</div>

									<div class="bottom_min_project">
										<progress max="<?php echo $une['proj_funds_obj'] ?>" value="<?php echo $une['proj_funds_received'] ?>" form="form-id"></progress>
										<div class="grid-1-2">

											<div class="txtleft">
												<div class="catego_min_project"><p><?php echo $une['proj_catego'] ?></p></div>
											</div>

											<div class="txtright">
												<div class="funds_min_project">
													<p><b> <?php echo $une['proj_funds_received'] ?>$ </b>/ <?php echo $une['proj_funds_obj'] ?>$</p>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					<?php endforeach ?>	
				</div>

			</div>
		</section>

		<section class="quote">
			<div class="container">
				<blockquote class="txtcenter">Some people dream their life, some other live their dream  - Ed Sheeran</blockquote>
			</div>
		</section>

		<section class="statistics">
			<div class="container">
				<div class="grid-3-small-1 pie1 txtcenter">
					<div>
						<div class="pie animated pie1">0%
							<p>54 821 <br>Susbscribers</p>
						</div>
					</div>
					<div>
						<div class="pie animated pie2">0%
						</div>
					</div>
					<div>
						<div class="pie animated pie3">0%
						</div>
					</div>


				</div>

				<div class="grid-3-small-1 stat_text txtcenter">
					<div>
						<div class="round center"><p>54 821<br>Susbscribers</p></div>
					</div>

					<div>
						<div class="round center"> <!-- border radius 50% -->
							<p>21,388<br>projects<br>financed</p>
						</div>
					</div>
					<div>
						<div class="round center"> <!-- border radius 50% -->
							<p>43%<br>Contributing<br>Members</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>



	<section class="partners top_section_blue">
		<div class="grid-7-small-2">
			<div class="flex-item-double"><h3>Our partners</h3></div>
			<div class="partners_position"><img src="../photos/ea.png" alt="logo ea"></div>
			<div><img src="../photos/hsbc.png" alt="logo hsbc"></div>
			<div><img src="../photos/intel.png" alt="logo intel"></div>
			<div><img src="../photos/benandjerris.png" alt="logo ben and jerries"></div>
			<div><img src="../photos/sony.png" alt="logo sony"></div>
		</div>
	</section>

	<section class="top_members">
		<div class="container">
			<div class="top_section_white">
				<h3>Top 4 members</h3>
			</div>
			
			<div class="grid-2-small-1">
				<?php foreach ($topMember as $key => $une): ?>
					<div>
						<div class="grid-1-2 contenu_top_member">
							<div class="left_top_member" style="background: url('../members/upload/<?php echo $une['user_photo']?>') center 0 no-repeat;background-size: cover">
								<!-- php photo membre -->
							</div>
							<div class="bloc_text_top_member">
								<div class="top_member_name"><p><?php echo $une['user_firstname']." ".$une['user_name'] ?></p></div>													
								<div class="top_member_registered"><p><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $une['user_country'] ?></p><p><?php echo $une['user_bio'] ?> </p></div>
								<div class="top_member_invested txtright"><p><span>1500$</span> invested</p></div>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
			
			

			<div class="grid-2-small-1">
				<?php foreach ($topMember2 as $key => $une): ?>
					<div>
						<div class="grid-2-1 contenu_top_member">
							<div class="bloc_text_top_member">
								<div class="top_member_name"><p><?php echo $une['user_firstname']." ".$une['user_name'] ?></p></div>													
								<div class="top_member_registered"><p><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $une['user_country'] ?></p><p><?php echo $une['user_bio'] ?></p></div>
								<div class="top_member_invested txtright"><p><span>1500$</span> invested</p></div>
							</div>
							<div class="right_top_member" style="background: url('../members/upload/<?php echo $une['user_photo']?>') center 0 no-repeat;background-size: cover">
								<!-- php photo membre -->
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
			


			
		</div>
	</section>

	<?php include_once("v_footer.php"); ?>


</body>
</html>