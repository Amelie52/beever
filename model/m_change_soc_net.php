<?php

session_start();
$user_mail= $_SESSION['user_mail']; 
$user_id=  $_SESSION['user_id']; 
$user_name= $_SESSION['user_name']; 
$user_firstname= $_SESSION['user_firstname']; 
$user_post_code=  $_SESSION['user_post_code']; 
$user_country=  $_SESSION['user_country']; 
$user_civility=  $_SESSION['user_civility']; 
$user_photo=  $_SESSION['user_photo']; 
$user_pass=  $_SESSION['user_pass']; 
$user_bio=  $_SESSION['user_bio']; 
$user_fb=  $_SESSION['user_fb']; 
$user_twitter=  $_SESSION['user_twitter']; 
$user_lkn=  $_SESSION['user_lkn']; 
$user_photo=  $_SESSION['user_photo']; 




$user_fb2=$_POST['user_fb'];
$user_twitter2=$_POST['user_twitter'];
$user_lkn2=$_POST['user_lkn'];

include_once("../config.inc.php");
$bdd = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);
$req = 'UPDATE users SET user_fb="' .$user_fb2 .'" , user_twitter="' .$user_twitter2 .'" , user_lkn="' .$user_lkn2 .'"  WHERE user_id='.$user_id .'';
$resultat = $bdd->query($req);

header('location: ../controler/c_profile.php?id='.$data["user_id"] . ' ');

?>