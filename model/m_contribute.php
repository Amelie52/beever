<?php


$proj_name = $_GET['name'];
require('../config.inc.php');
        
$bdd = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);

$req = "SELECT  user_bio , user_name , user_firstname , user_id , user_photo , proj_id , proj_name , proj_photo , proj_present , proj_catego , proj_city , proj_country, proj_duration ,
 proj_funds_obj , proj_funds_received , proj_descript , proj_statut , proj_video_link , proj_crea_date , proj_risk , 
 proj_fb , proj_twitter , proj_yt , proj_site , _user_id  
 FROM projects INNER JOIN users ON users.user_id=projects._user_id WHERE proj_name='" .$proj_name ."'";

$result = $bdd->query($req);
$data = $result->fetch();
//echo $req;


function getRewards () { 
	$proj_name = $_GET['name'];
$bdd2 = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);
$req2 = "SELECT * FROM rewards WHERE proj_name_='" .$proj_name ."'";
$resultat = $bdd2->query($req2);
//echo $req2;
$getRewards = $resultat-> fetchAll();
return $getRewards;
}


?>