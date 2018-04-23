<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Beever | Photo</title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/knacss.css">
	<link rel="stylesheet" href="../css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
</head>
<body>
	<section class="sign_in">
		<div class="container_sign_in">
			<h1 class="txtcenter"><a href="../controler/c_index.php">Beever</a></h1>
			<div class="txtcenter block_sign_in"> 
				<p>Add your photo</p><br>
				<form method="POST" action="../model/m_add_photo.php" enctype="multipart/form-data">
					<input type="hidden" name="MAX_FILE_SIZE" value="1000000">
     				<input id="pictures" class="inputfile" style="border:none;" type="file" name="avatar" required>
     				<label for="pictures"><i class="fa fa-file-image-o" aria-hidden="true"></i> Add image</label>
					
					<button type="submit" name="envoyer" value="Send file">Send</button>
					<a href="../controler/c_profile.php?id=<?php echo $user_id ?>"><button>Back to your profil</button></a>
				</form>
				<hr>
				<div class="txtleft required_fields">
					<p>*Required field</p>
				</div>
			</div>
			
		</div>
	</section>
</body>
</html>

