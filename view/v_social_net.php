<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Beever | Social networks</title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/knacss.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<section class="sign_in">
		<div class="container_sign_in">
			<h1 class="txtcenter"><a href="../controler/c_index.php">Beever</a></h1>
			<div class="txtcenter block_sign_in"> 
				<p>My social networks</p><br>
				<form action="../model/m_change_soc_net.php" method="POST">
					<input type="url"  name="user_fb" placeholder="Facebook, ex: http://www.facebook.com/jean.dupon" value="<?php echo $user_fb ?>"><br>
					<input type="url"  name="user_twitter" placeholder="Twitter, ex: http://www.twitter.com/jean.dupon" value="<?php echo $user_twitter ?>"><br>
					<input type="url"  name="user_lkn" placeholder="Linkedin, ex: http://www.linkedin.com/jean.dupon" value="<?php echo $user_lkn ?>"><br>
					
					<button type="submit" value="Add / Edit">Send</button><br>
				</form>
				<a href="../controler/c_profile.php?id=<?php echo $user_id ?>"><button>Back to your profil</button></a>
				
			</div>
			
		</div>
	</section>
</body>
</html>
