<?php
require('../config.inc.php');

function getFavorites () { 
$user_ids = $_GET['id'];
$proj_name = $_GET['name'];
$bdd2 = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);
$req2 = "SELECT proj_name , proj_photo , user_id___ , proj_name_ , fav_id FROM favorites 
INNER JOIN projects ON projects.proj_name = favorites.proj_name_ 
WHERE user_id___='" .$user_ids ."'";
$resultat = $bdd2->query($req2);
//echo $req2;
$getFavorites = $resultat-> fetchAll();
return $getFavorites;
}


?>