<?php

session_start();
$user_mail= $_SESSION['user_mail']; 
$user_id=  $_SESSION['user_id']; 
$user_name= $_SESSION['user_name']; 
$user_firstname= $_SESSION['user_firstname']; 
$user_ids = $_GET['id'];

$fav_id = $_GET['idf'];

require('../config.inc.php');

$bdd = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS );
$req = 'DELETE FROM favorites WHERE fav_id ="' .$fav_id .'" ';
$bdd->query($req);
//echo $req;
header('location:../controler/c_myfavorite.php?id='.$user_id.'');



?>