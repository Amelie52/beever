<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Beever | profile</title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/knacss.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>

	<?php include_once("../view/v_navigation.php"); ?>

	<section class="txtcenter ban_white">
		<div class="container">
			<h2>Welcome to your profile <?php echo $user_firstname ?></h2>
			<p>You can start filling out your profile to let others know you’re here.<br>And that’s it! Beever is yours to enjoy. Let us know if you have any questions.<br> (You must reconnect to see updates to your profile)</p>

		</div>
	</section>

	<section class="my_profile">
		<div class="container">
			<div class="grid-1-3">
				<div class="pre txtright">
					<?php 
					if(empty($user_photo)) 
						{ echo '<img src="../photos/avatar.jpg" height="100%;">'; }
					else 
						{ echo '<img height="100%;" src="../members/upload/' .$user_photo .'">';}
					?>
					<a href="../controler/c_add_photo.php"><div class="add_photo_link txtcenter">Add your photo</div></a>
				</div>

				<div>

					<h3><?php echo $user_firstname.' '.$user_name ?></h3>
					<p><?php echo $user_bio ?></p><br>
					
					<div >
					<div>
					<p>Mail : <?php echo $user_mail ?></p>
					<p>Localisation : <?php echo $user_post_code.', '.$user_country ?></p>
				
					<p><?php 
						if(empty($user_fb)) 
						{ echo 'You don\'t have a facebook link'; }
						else 
						{ echo '<a href="'.$user_fb.'" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i> '.$user_fb. '</a>';}
					?></p>
					<p><?php 
						if(empty($user_twitter)) 
							{ echo 'You don\'t have a twitter link'; }
						else 
							{ echo '<a href="'.$user_fb.'" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i> '.$user_twitter. '</a>';}
					?></p>
					<p><?php 
						if(empty($user_lkn)) 
								{ echo 'You don\'t have a linkedin link'; }
						else 
								{ echo '<a href="'.$user_lkn.'" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i> '.$user_lkn. '</a>';}
					?></p>
					</div>
				</div><br>

				</div>
				
			</div><br><br>
			
			<div class="grid-4 grid-small-1">
				<div><a href="c_edit_profile.php"><button>Edit your profile</button></a></div> 
				<div><a href="c_change_pass.php"><button>Change password</button></a></div>
				<div><a href="c_social_net.php"><button>Add my social network</button></a></div>
				<div class="txtcenter"><a href="c_disconnect.php"><button>Leave/disconnect</button></a></div>
			</div><br><br>


			<ul class="unstyled ulBb txtcenter">
				<li><a class="current onglet">Your current projects</a></li>
				<li><a class="funded onglet">Funded projects</a></li>
			</ul>

			<div class="contentCurrent">
			
				<div class="list_projects_total">
					<div class="grid-3 grid-small-1">
						<?php foreach ($projects as $projects): ?>
						<div>
							<div class="list_min_project">
								<a href="c_project.php?name=<?php echo $projects['proj_name'] ?>" class="go_project">
									<div class="min_photo_project" style="background: url('../projects/upload/<?php echo $projects['proj_photo']?>') center 0 no-repeat;background-size: cover">
										<!-- 
										<div class="more">
											<img src="" alt="See more projects">
											 -->
											<!-- mettre en display:none de base -->
											<!-- 
										</div>
										 -->
									</div>
								</a>
								<div class="contenu_min_project">
									<div class="bloc_text_min_project">
										<div class="top_titre_min_project">
											<a href="c_project.php?name=<?php echo $projects['proj_name'] ?>" class="go_project"><p><?php echo $projects['proj_name'] ?></p></a>
										</div><br>
										<div class="country_member_min_project">
											<p>
												<?php echo $projects['user_firstname'] ?> <?php echo $projects['user_name'] ?>,
												
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<?php echo $projects['proj_country'] ?>
											</p>
										</div>
										<div class="present_min_project">
											<p>
												<?php echo $projects['proj_present'] ?>
											</p>
										</div>
									</div>
									<div class="bottom_min_project">
										<progress max="<?php echo $projects['proj_funds_obj'] ?>" value="<?php echo $projects['proj_funds_received'] ?>" form="form-id"></progress>
										<div class="grid-1-2">
											<div>
												<div class="catego_min_project">
													<p>
														<?php echo $projects['proj_catego'] ?>
													</p>
												</div>
											</div>
											<div class="txtright">
												<div class="funds_min_project">
													<p>
														<b>
															<?php echo $projects['proj_funds_received'] ?>
															$ 
														</b>
														/ 
														<?php echo $projects['proj_funds_obj'] ?>
														$
													</p>
												</div>
											</div>
											<div></div>
											<div class="txtright"><a href='c_myproject.php?name=<?php echo $projects['proj_name']?> '><button>Edit my project</button></a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						
					</div>
					<?php endforeach ?>
				</div>
			</div>

			
		</div>
		<div class="contentFunded">
				<div class="list_projects_total">
					<div class="grid-3 grid-small-1">
						<?php  foreach ($fundsInvested as $fundsInvested): ?>
						<div>
							<div class="list_min_project">
								<a href="c_project.php?name=<?php echo $fundsInvested['proj_name'] ?>" class="go_project">
									<div class="min_photo_project" style="background: url('../projects/upload/<?php echo $fundsInvested['proj_photo']?>') center 0 no-repeat;background-size: cover">
										
									</div>
								</a>
								<div class="contenu_min_project">
									<div class="bloc_text_min_project">
										<div class="top_titre_min_project">
											<a href="c_project.php?name=<?php echo $fundsInvested['proj_name'] ?>" class="go_project"><p><?php echo $fundsInvested['proj_name'] ?></p></a>
										</div><br>
										<div class="country_member_min_project">
											<p>
												<?php echo $fundsInvested['user_firstname'] ?> <?php echo $fundsInvested['user_name'] ?>,
												
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<?php echo $fundsInvested['proj_country'] ?>
											</p>
										</div>
										<div class="present_min_project">
											<p>
												<?php echo $fundsInvested['proj_present'] ?>
											</p>
										</div>
									</div>
									<div class="bottom_min_project">
										<progress max="<?php echo $fundsInvested['proj_funds_obj'] ?>" value="<?php echo $fundsInvested['proj_funds_received'] ?>" form="form-id"></progress>
										<div class="grid-1-2">
											<div>
												<div class="catego_min_project">
													<p>
														<?php echo $fundsInvested['proj_catego'] ?>
													</p>
												</div>
											</div>
											<div class="txtright">
												<div class="funds_min_project">
													<p>
														<b>
															<?php echo $fundsInvested['proj_funds_received'] ?>
															$ 
														</b>
														/ 
														<?php echo $fundsInvested['proj_funds_obj'] ?>
														$
													</p>
												</div>
											</div>
										</div>
										<p><i>Reward sum :</i> <?php echo $fundsInvested['reward_sum'] ?></p>
											<p><i>Reward gift :</i> <?php echo $fundsInvested['reward_gift'] ?></p>
											<p><i>Gain date :</i> <?php echo $fundsInvested['gain_date'] ?></p>
									</div>
								</div>
							</div>
						
					</div>
					<?php endforeach ?>
				</div>
			</div>
   		</div>	
</section>



<?php include_once("v_footer.php"); ?>


<script>
		$(document).ready(function(){

			$('.contentFunded').fadeOut(0);
			

			$('.current').addClass("active");

			$('.funded').click(function(){
				$('.current').removeClass("active");
				$(this).addClass("active");
				$('.contentCurrent').fadeOut(0);
				$('.contentFunded').fadeIn();
			});

			$('.current').click(function(){
				$('.funded').removeClass("active");
				$(this).addClass("active");
				$('.contentFunded').fadeOut(0);
				$('.contentCurrent').fadeIn();
			});


		});
	</script>

</body>
</html>




