<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Beever | Password</title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/knacss.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<section class="sign_in">
		<div class="container_sign_in">
			<h1 class="txtcenter"><a href="../controler/c_index.php">Beever</a></h1>
			<div class="txtcenter block_sign_in"> 
				<p>Edit your password</p><br>
				<form action="../model/m_verif_change_pass.php" method="POST">
					<input type="password" name="oldpass" placeholder="Write your previous password*" required> <br>
					<input type="password" name="newpass1" placeholder="Write your new password*" id="mdp" size="40" class="mdp" required> <br>
					<input type="password" name="newpass2" placeholder="Write your password again*" size="40" onblur="verifMdp2(this)" required> <br>
					
					<button type="submit" value="Send">Send</button><br>
				</form>
					<a href="../controler/c_profile.php?id=<?php echo $user_id ?>"><button>Back to your profil</button></a>
				<hr>
				<div class="txtleft required_fields">
					<p>*Required fields</p>
				</div>
			</div>
			
		</div>
	</section>
	<script>
		function surligne(champ, erreur)
		{
			if(erreur)
				champ.style.backgroundColor = "#FFD9CF";
			else
				champ.style.backgroundColor = "";
		}

		function verifMdp2(champ)
		{
			if(champ.value != document.getElementById('mdp').value)
			{
				surligne(champ, true);
				return false;
			}
			else
			{
				surligne(champ, false);
				return true;
			}
		}
	</script>
</body>
</html>
