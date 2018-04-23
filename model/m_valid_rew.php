<?php

  session_start();
   $user_mail= $_SESSION['user_mail']; 
   $user_id=  $_SESSION['user_id']; 
   $user_name= $_SESSION['user_name']; 
   $user_firstname= $_SESSION['user_firstname']; 
   $user_ids = $user_id;

$rew_id = $_GET['id'];

$proj_name = $_GET['proj'];

//$somme = ;
require('../config.inc.php');
        
$bdd = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);

$req2 = "SELECT proj_funds_received FROM projects WHERE proj_name='" .$proj_name ."'";
$result = $bdd->query($req2);
$som = $result->fetch();

$req3 = "SELECT * FROM rewards WHERE reward_id='" .$rew_id ."'";
$result = $bdd->query($req3);
$rew = $result->fetch();

$amount = $rew['reward_sum'];

$funded = $som['proj_funds_received'] ;


$req = "UPDATE projects SET proj_funds_received =".$funded ."+ ".$amount ." WHERE proj_name='" .$proj_name ."'";
$resultat = $bdd->query($req);
$data = $resultat->fetch();

// echo $req2;
// echo '<br>';
// echo $req;
// echo '<br>';
// echo $req3;
// echo '<br>';

$req4 = "INSERT INTO gain ( gain_date , user_id_ , reward_id_ ) VALUES ('" .$rew['reward_delivery'] . "' , '" .$user_ids . "' , '" .$rew_id . "')";
$resultit = $bdd->query($req4);
$resultit->fetch();
// echo $req4;

header('Location: ../controler/c_end_contribute.php?name='.$proj_name .'');


?>