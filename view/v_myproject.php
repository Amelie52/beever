<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Beever | Edit my project</title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/knacss.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<section class="form_edit_project sign_up ">
	<h1 class="txtcenter"><a href="../controler/c_index.php">Beever</a></h1>
		<div class="container">
			
			<div class="block_sign_up"> 
				<div class="txtcenter"><p> Recap of your project</p></div><br>
				
				<?php foreach ($Projects as $Projects): ?>
				<div class="txtcenter"><?php  echo '<img height="100px;" src="../projects/upload/' .$Projects['proj_photo'].'">';?></div> <br>
				<span class="txtblue">Creator : </span><?php echo $user_firstname.' '.$user_name ;?><br>
				<form action="../model/m_edit_myproject.php?name=<?php echo $proj_name ?>" method="POST"> <br>

					<span class="txtblue">Title : </span><?php echo $proj_name ?>  <br><br>
					
					<span class="txtblue">Presentation : </span></span><input type="text" value="<?php echo $Projects['proj_present']  ?> " name="proj_present"><br>
					<span class="txtblue">Category : </span> <?php echo $Projects['proj_catego']  ?><br><br>
					<span class="txtblue">City : </span> <?php echo $Projects['proj_city']  ?> <br><br>
					<span class="txtblue">Country : </span> <?php echo $Projects['proj_country']  ?> <br><br>
					<span class="txtblue">Duration : </span> <?php echo $Projects['proj_duration']  ?> days.<br><br>
					<span class="txtblue">Funds objective : </span> <?php echo $Projects['proj_funds_obj'];  ?> $ <br><br>
					<span class="txtblue">Fund received : </span> <?php echo $Projects['proj_funds_received'];  ?> $<br><br>
					<span class="txtblue">Long description : </span>
					<textarea name="proj_descript"><?php echo $Projects['proj_descript'];?></textarea><br/>
					<span class="txtblue"> Video link : </span> <input type="url" value="<?php echo $Projects['proj_video_link'] ?>" name="proj_video_link"><br>
					<span class="txtblue">Creation date : </span><?php echo $Projects['proj_crea_date'] ?> <br><br>
					<span class="txtblue">Web site : </span><input type="url" value="<?php echo $Projects['proj_site'] ?>" name="proj_site"><br>
					<span class="txtblue">Youtube channel : </span><input type="url" value="<?php echo $Projects['proj_yt'] ?>" name="proj_yt"><br>
					<span class="txtblue">Twitter Page : </span><input type="url" value="<?php echo $Projects['proj_twitter'] ?>" name="proj_twitter"><br>
					<span class="txtblue">Facebook page : </span><input type="url" value="<?php echo $Projects['proj_fb'] ?>" name="proj_fb"><br>
					<span class="txtblue">Risks : </span><input type="text" value="<?php echo $Projects['proj_risk'] ?>" name="proj_risk">  <br> 
					<span class="txtblue">Statut : </span><?php echo $Projects['proj_statut']  ?><br><br>

				<?php endforeach; ?>	


				<div class="txtcenter"><button type="submit" name="Edit">Send</button></div> <br>
			</form>		  


			<div class="txtcenter"><p>Rewards</p></div><br>
			<table>
				<tr>
					<td>Summary</td>
					<td>Gift</td>
					<td>Delivery</td>
					<td>Country limit</td>
				</tr>
				<?php 
				foreach ($rewards as $rewards):
					echo " <tr> 
				<td>" .$rewards['reward_sum'] ."</td>
				<td>" .$rewards['reward_gift'] ."</td>
				<td>" .$rewards['reward_delivery'] ."</td>
				<td>" .$rewards['reward_country_limit'] ."</td>

			</tr>";
			endforeach;



			?></table>

			<br>
			<div class="txtcenter redButton"><a href="../controler/c_add_reward.php?name=<?php echo $proj_name ?>"><button><!-- <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> --> Add reward ² </button></a></div> <br>

			<div class="txtcenter"><a href="../controler/c_profile.php?id=<?php echo $user_id ?>"><button>Back to my profile</button></a></div>
			<hr>
			<div class="txtleft required_fields">
				<p>*Required fields, ² It is important to add rewards so that members can contribute to the project.</p>
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



