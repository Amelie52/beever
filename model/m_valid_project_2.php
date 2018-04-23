<?php

session_start();
$proj_name = $_SESSION['proj_name'];
$user_name = $_SESSION['user_name'];
$user_id = $_SESSION['user_id'];


$proj_video_link= $_POST['link_video'];
$proj_descript= $_POST['description'];
$proj_risk= $_POST['risks'];


require('../config.inc.php');

if(!empty($proj_video_link) &&
   !empty($proj_descript) &&
   !empty($proj_risk)
   )
{
          
			$bdd = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);

			$requete = 'UPDATE projects 
         SET proj_video_link ="' .$proj_video_link . '" , proj_descript="' .$proj_descript .' " , proj_risk="' .$proj_risk .'"
          WHERE proj_name = "' .$proj_name .'"';
			$req = $bdd->query($requete);
         echo $requete;
         session_start();
         $_SESSION['user_id'] = $user_id;
         $_SESSION['user_name'] = $user_name;
         $_SESSION['proj_name'] = $proj_name;
          echo '<br>';
          echo $proj_name;
          echo '<br>';
          echo $user_id;
          echo '<br>';
          echo $user_name;
          echo '<br>';
			header("Location: ../controler/c_crea_project_3.php");

}
 else 
{
	echo "Please fill all the field ! ";
	echo '<meta http-equiv="refresh" content="3; URL=../controler/c_crea_project_2.php>';

}

?>