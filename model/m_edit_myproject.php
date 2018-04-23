<?php

session_start();
$user_name = $_SESSION['user_name'];
$user_id = $_SESSION['user_id'];
$proj_name = $_GET['name'];


$proj_present = $_POST['proj_present'];
$proj_video_link= $_POST['proj_video_link'];
$proj_descript= $_POST['proj_descript'];
$proj_risk= $_POST['proj_risk'];
$proj_city = $_POST['proj_city'];
$proj_country = $_POST['proj_country'];
$proj_fb = $_POST['proj_fb'];
$proj_site = $_POST['proj_site'];
$proj_twitter = $_POST['proj_twitter'];
$proj_yt = $_POST['proj_yt'];



require('../config.inc.php');

          
			$bdd = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);

			$requete = 'UPDATE projects 
         SET proj_video_link ="' .$proj_video_link . '" ,
          proj_descript="' .$proj_descript .' " ,
          proj_yt="' .$proj_yt .'" , 
          proj_twitter="' .$proj_twitter .'" , 
          proj_site="' .$proj_site .'" , 
          proj_fb="' .$proj_fb .'" , 
          proj_country="' .$proj_country .'" , 
          proj_city="' .$proj_city .'" , 
          proj_present="' .$proj_present .'" , 
          proj_risk="' .$proj_risk .'" 
          WHERE proj_name="' .$proj_name .'"';
			$req = $bdd->query($requete);
         // echo $requete;

      $requete2 = 'SELECT * FROM projects WHERE proj_name="' .$proj_name .'"';
      $result = $bdd->query($requete2);
      $data = $result->fetch();
      // echo $requete2;

      session_start();
      $_SESSION['proj_name'] = $data['proj_name'];
      $_SESSION['proj_photo'] = $data['proj_photo'];
      $_SESSION['proj_present'] = $data['proj_present'];
      $_SESSION['proj_catego'] = $data['proj_catego'];
      $_SESSION['proj_city'] = $data['proj_city'];
      $_SESSION['proj_country'] = $data['proj_country'];
      $_SESSION['proj_duration'] = $data['proj_duration'];
      $_SESSION['proj_funds_obj'] = $data['proj_funds_obj'];
      $_SESSION['proj_funds_received'] = $data['proj_funds_received'];
      $_SESSION['proj_descript'] = $data['proj_descript'];
      $_SESSION['proj_statut'] = $data['proj_statut'];
      $_SESSION['proj_video_link'] = $data['proj_video_link'];
      $_SESSION['proj_crea_date'] = $data['proj_crea_date'];
      $_SESSION['proj_site'] = $data['proj_site'];
      $_SESSION['proj_yt'] = $data['proj_yt'];
      $_SESSION['proj_twitter'] = $data['proj_twitter'];
      $_SESSION['proj_fb'] = $data['proj_fb'];
      $_SESSION['proj_risk'] = $data['proj_risk'];

          $_SESSION['user_id'] = $user_id;
          $_SESSION['user_name'] = $user_name;


    header("Location: ../controler/c_myproject.php?name=" .$proj_name ."");



?>