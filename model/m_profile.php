<?php
require ('../config.inc.php');
  session_start();
   $user_mail= $_SESSION['user_mail']; 
   $user_id=  $_SESSION['user_id']; 

 function getProjects() {
 $user_id=  $_SESSION['user_id']; 
$bdd = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);
$req = "SELECT * FROM projects INNER JOIN users ON projects._user_id=users.user_id WHERE _user_id='" .$user_id ."'";
$result = $bdd->query($req);
$getProjects = $result-> fetchAll();
//echo $req;
return $getProjects;
}


function getInvestedFunds (){
$user_id=  $_SESSION['user_id'];
$bdd2 = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);
$req2 = "SELECT * FROM gain 
INNER JOIN rewards ON rewards.reward_id = gain.reward_id_ 
INNER JOIN users ON users.user_id = gain.user_id_ 
INNER JOIN projects ON projects.proj_name = rewards.proj_name_
WHERE user_id_ = '" .$user_id ."'";
$resultat = $bdd2->query($req2);
//echo $req2;
$getInvestedFunds = $resultat->fetchAll();
return $getInvestedFunds;
}

?>