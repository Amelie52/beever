<?php

$proj_name = $_GET['name'];

// RECUP INFOS REWARD 
$reward_sum = $_POST['reward_sum'];
$reward_gift = $_POST['reward_gift'];
$reward_delivery = $_POST['reward_delivery'];
$reward_country_limit = $_POST['country_limit'];


if(!empty($reward_sum) &&
   !empty($reward_gift) &&
   !empty($reward_delivery) &&
   !empty($reward_country_limit))

{
          require('../config.inc.php');
		$bdd = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);

		$requete = 'INSERT INTO rewards(reward_sum , reward_gift , reward_delivery , reward_country_limit , proj_name_) 
		  VALUES ("' .$reward_sum .' " , " ' .$reward_gift .'" , " ' .$reward_delivery .'" , " ' .$reward_country_limit .'" ,"' .$proj_name . '")';
		$req = $bdd->query($requete);
      // echo $requete;


         
         session_start();
         $_SESSION['user_id'] = $user_id; 
         $_SESSION['proj_name'] = $proj_name; 
			header("Location: ../controler/c_myproject.php?name=$proj_name");

}
 else 
{
	echo "Please fill all the field ! ";
	echo '<meta http-equiv="refresh" content="3; URL=../controler/c_crea_project.php>'; 

}

?>