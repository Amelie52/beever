<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Beever | <?php echo $data['proj_name'];  ?></title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/knacss.css">
	<link rel="stylesheet" href="../css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<!-- <link rel="stylesheet" href="../css/style.css"> -->
	<style>
		/*A REVOIR SI TU NE LAS PAS FAIT OU A EFFACER*/
		/*header{width: 100%;height:90vh;background-color: #2886c4;}*/
		/** {box-sizing:border-box;margin: 0;}*/
		h1,h2,h3,p{margin: 0;}
		/*-*/


	</style>
</head>
<body>

	<?php include_once("../view/v_navigation.php"); ?>
	

	<header class="min_photo_project" style="background: url('../projects/upload/<?php echo $data['proj_photo']?>') center 0 no-repeat;background-size: cover; height: 50vh;">
	</header>
	<section class="container">

		<h1 class="txtbluetitle"><?php echo $data['proj_name'];  ?></h1>
		<p class="txtgray">Created by <?php echo $data['user_firstname'];?> <?php echo $data['user_name'];?> | <?php echo $data['proj_country']; ?> | <?php echo $data['proj_catego']; ?></p>

		<?php 	if(!empty($data['proj_site']))  echo '<a href="'.$data['proj_site'] .'" target="_blank"><button class="soNet"><i class="fa fa-desktop" aria-hidden="true"></i><span>&nbsp</span>Site</button></a>'; ?>
		<?php 	if(!empty($data['proj_yt']))  echo '<a href="' .$data['proj_yt'] .'" target="_blank"><button class="soNet"><i class="fa fa-youtube-play" aria-hidden="true"></i><span>&nbsp</span>Youtube</button></a>'; ?>
		<?php 	if(!empty($data['proj_twitter']))  echo '<a href="' .$data['proj_twitter'] .'" target="_blank"><button class="soNet"><i class="fa fa-twitter-square" aria-hidden="true"></i><span>&nbsp</span>Twitter</button></a>'; ?>
		<?php 	if(!empty($data['proj_fb']))  echo '<a href="' .$data['proj_fb'] .'" target="_blank"><button class="soNet"><i class="fa fa-facebook-square" aria-hidden="true"></i><span>&nbsp</span>Facebook</button></a>'; ?>
		<a class="pinkButton" href="../model/m_favorite.php?proj=<?php echo $data['proj_name'];?>&id=<?php echo $user_ids;?>"><button class="soNet"><i class="fa fa-heart-o" aria-hidden="true"></i><span>&nbsp</span>Add this project to my favorites</button></a>
		<div class="grid-2-1 grid-small-1">
			<div>
				<div class="video video-container"><?php if(!empty($data['proj_video_link'])) { $url=$data['proj_video_link'];$url = str_replace("watch?v=", "v/",  $url);echo '<iframe width="492" height="277" src="'.$url.'" frameborder="0" allowfullscreen></iframe> ';} else {echo '<img src="../photos/help_about.jpg" />';} ?></div>

				<ul class="unstyled ulBb">
					<li><a class="project onglet">project</a></li>
					<li><a class="comments onglet">comments</a></li>
				</ul>

				<div class="contentProject">
					<h3>Description</h3><br>
					<?php echo nl2br($data['proj_descript']); ?><br>
					<h3>Risks</h3><br>
					<?php echo nl2br($data['proj_risk']); ?>
				</div>
				<div class="contentComments">
					<div class="comment">
						<div class="grid-1-4">
							<?php foreach ($getCom as $getCom): ?>
								<div class="txtcenter">
									<div class="photo_comment" style="background: url('../members/upload/<?php echo $getCom['user_photo']; ?>') center 0 no-repeat;background-size: cover;">
									</div><br>
								</div>
								<div class="comment_contain">
									<p>by<span class="txtblue">&nbsp<?php echo $getCom['user_firstname'].' '.$getCom['user_name']; ?>&nbsp</span>at<span class="txtblue">&nbsp<?php echo $getCom['com_date']; ?></span></p>
									<p><span><?php echo $getCom['com_mess']; ?></span></p><br>
								</div>
							<?php endforeach ?>
						</div>
						
					</div>
					<div class="post_comment">
						<p><span class="txtblue">Post a comment !</span></p>
						<?php if(empty($user_ids)) { echo '<a href="c_login.php" >Log in </a>';  } else { ; ?>
							<form action="../model/m_add_com.php?proj=<?php echo $data['proj_name'];?>&id=<?php echo $user_ids;?>"  method="POST" id="form">

								<textarea required type="text" id="message" name="message" placeholder="Your message" ></textarea>
								<div class="txtright"> <button type="submit" id="bouton" value="Envoyer">Send</button></div>
							</form>
							<?php } ?>
						</div>
					</div>
				</div>

				<div id="sidebarUp" class="sidebar">
					<div class="profil pr">
						<div>
							<div class="pictureProfil" style="background: url('../members/upload/<?php echo $data['user_photo']; ?>') 0 no-repeat;background-size: cover;"></div>
						</div>

						<div>
							<h2 class="txtcenter">Creator : <?php echo $data['user_firstname'].' '.$data['user_name']; ?></h2>

							<div class="txtcenter">
								
								<p>
									<?php 
									if(empty($data['user_fb'])) 
										{ echo ''; }
									else 
										{ echo '<a href="'.$data['user_fb'].'" target="_blank" title="Facebook"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>';}
									?>



									<?php 
									if(empty($data['user_twitter'])) 
										{ echo ''; }
									else 
										{ echo '<a href="'.$data['user_twitter'].'" target="_blank" title="Twitter"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>';}
									?>



									<?php 
									if(empty($data['user_lkn'])) 
										{ echo ''; }
									else 
										{ echo '<a href="'.$data['user_lkn'].'" target="_blank" title="linkedin"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>';}
									?>
								</p>

							</div>

							<div class="txtcenter">
								<p><?php echo $data['user_mail']?></p>
								<p><?php echo $data['user_country']?></p>
							</div><br>

							<div>
								<p><?php echo $data['user_bio'];?></span></p>
							</div>
						</div>
					</div>
					<div class="collected"><br>
						<div><progress max="<?php echo $data['proj_funds_obj'] ?>" value="<?php echo $data['proj_funds_received'] ?>" form="form-id"></progress>
						</div><br>
						<div>

							<?php

							$datecrea = $data['proj_crea_date'];
							$duree = $data['proj_duration'];

							// on ajoute la durée du projet
							$date = date("Y-m-d", strtotime($datecrea." +".$duree." days"));

							// on recupere la date d'aujourd'hui
							$now = date("Y-m-d");

							// on calcule la différence 
							$diff = (strtotime($date) - strtotime($now));
							// on obtient un nombre en seconde, donc on divise par 86400
							$result = $diff * (1/86400);
							?>

							<p><span class="txtblue"><?php echo $data['proj_funds_received']; ?>$&nbsp</span>collected on<span class="txtblue">&nbsp<?php echo $data['proj_funds_obj']; ?>$</span></p>
							<p><span class="txtblue"><?php echo $result;?>&nbsp</span>day(s) remaining</p>
							<a href="c_contribute.php?name=<?php echo $data['proj_name'];  ?>"><button class="buttonContribute">Contribute !</button></a>
						</div>
					</div>
					<div class="rewards">
						<h3 class="txtblue txtcenter">Rewards</h3>
						<?php foreach ($rewards as $rewards): ?>
							<div>
								<h4 class="somme txtblue"><?php echo $rewards['reward_sum'];?>$</h4>
								<p><?php echo $rewards['reward_gift'];?></p>
								<p><span class="txtblue">Reward delivery : </span><?php echo $rewards['reward_delivery'] ?></p>
								<p><span class="txtblue">Limit : </span><?php echo $rewards['reward_country_limit'] ?></p>
							</div>
						<?php endforeach ?>
					</div>
				</div>


			</div>
		</section>

		<?php include_once("v_footer.php"); ?>

		<!-- SCRIPT à mettre dans ton fichier .js-->
		<script>
			$(document).ready(function(){

				$('.contentComments').fadeOut(0);
				$('.contentProject').fadeIn();

				$('.project').addClass('active');

				$('.project').click(function(){
					$('.comments').removeClass("active");
					$(this).addClass("active");
					$('.contentComments').fadeOut(0);
					$('.contentProject').fadeIn();
				});

				$('.comments').click(function(){
					$('.project').removeClass("active");
					$(this).addClass("active");
					$('.contentProject').fadeOut(0);
					$('.contentComments').fadeIn();
				});

				var winWidth = $(window).width();
				if(winWidth <= 640) {
					$("#sidebarUp").addClass("grid-item-first");
					$("#sidebarUp > div").addClass("w100");
					$("#sidebarUp").css({
						'margin-left' : '0'
					});
				}

				$(window).resize(function(){
					var width = $(window).width();
					if(width <= 640) {
						$("#sidebarUp").addClass("grid-item-first");
						$("#sidebarUp > div").addClass("w100");
						$("#sidebarUp").css({
							'margin-left' : '0'
						});
					} else {
						$("#sidebarUp").removeClass("grid-item-first");
						$("#sidebarUp > div").removeClass("w100");
						$("#sidebarUp").css({
							'margin-left' : '2rem'
						});
					}
				});

			});
		</script>
	</body>
	</html>

