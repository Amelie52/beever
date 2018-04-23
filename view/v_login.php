<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Beever | Sign in</title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/knacss.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<section class="sign_in">
		<div class="container_sign_in">
			<h1 class="txtcenter"><a href="../controler/c_index.php">Beever</a></h1>
			<div class="txtcenter block_sign_in"> 
				<p>Sign In</p><br>
				<form action="../model/m_connexion.php" method="POST">
					<input type="text" name="email" placeholder="Email*" required /><br>
					<input type="password" name="password" placeholder="Password*" required />
					<div class="grid-2">
						<div class="txtleft">
						</div>
						<div class="txtright">
							<a href="../controler/c_registration.php">Sign up here !</a>
						</div>
					</div><br>
					<button type="submit" value="Connexion">Sign In</button>
				</form>
				<a href="../controler/c_index.php"><button>Back to home</button></a>
				<hr>
				<div class="txtleft required_fields">
					<p>*Required fields</p>
				</div>
			</div>
			
		</div>
	</section>
</body>
</html>