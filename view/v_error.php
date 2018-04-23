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
	

<?
session_start();

/* 
si la variable de session login n'existe pas cela siginifie que le visiteur 
n'a pas de session ouverte, il n'est donc pas logué ni autorisé à
acceder à l'espace membres
*/
  echo '<section class="sign_in">
		<div class="container_sign_in">
			<h1 class="txtcenter"><a href="../controler/c_index.php">Beever</a></h1>
			<div class="txtcenter block_sign_in"> 
				<p>Login doesn\'t exist or wrong password</p><br>
					<a href="c_login.php"><button>Try again ! Log In</button></a>
					<a href="c_registration.php"><button>Sign Up</button></a>
			</div>
			
		</div>
	</section>';

?> 
</body>
</html>
