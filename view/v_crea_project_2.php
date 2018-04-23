<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Beever | Create your project</title>
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
			<h2>Create your project now !</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus magni vel ipsa, non voluptatem earum quidem ipsum maxime reprehenderit voluptatibus tempora omnis et, aliquam modi dolorum sed optio natus corporis!</p>
		</div>
	</section>

	<section class="nav_crea_project">
		<div class="grid-4 grid-small-1 txtcenter">
			<div><p>Launch a new project</p></div>
			<div class="active"><!-- <div class="arrow-right"></div> --><p>Describe your project</p></div>
			<div><!-- <div class="arrow-right_2"></div> --><p>Add social networks</p></div>
			<div><!-- <div class="arrow-right_2"></div> --><p>My project</p></div>
		</div>
	</section>

	<section class="form_crea_project">
		<div class="container bg_form_crea_project">
			<p class="txtcenter"><span>Please complete the form</span></p><br><br>
			<div class="txtcenter">
				<form method="POST" action="../model/m_valid_project_2.php" enctype="multipart/form-data">
					<div>
						<input type="url" name="link_video" placeholder="Video link of the project (ex: https://www.youtube.com/)*" required><br>
					</div>
					<div>
					<p>Description</p><br>
						<textarea name="description" placeholder="Project description*" required></textarea><br>
					</div>
					<div>
						<textarea name="risks" placeholder="Potential risks of my project*" required></textarea>
					</div>
					
					<div class="txtright">
						<button type="submit" name="submit">Next</button>
					</div>
				</form><br>
				<hr>
				<div class="txtleft required_fields">
					<p>*Required fields</p>
				</div>
			</div>
		</div>
	</section>

	<?php include_once("v_footer.php"); ?>


</body>
</html>