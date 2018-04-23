<?php
 $proj_name = $_GET['name'];
require ('../config.inc.php');


 function getProjects() {
$proj_name = $_GET['name'];
$bdd = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);
$req= "SELECT * FROM projects WHERE proj_name='" .$proj_name ."'";
$result = $bdd->query($req);
$getProjects = $result-> fetchAll();
//echo $req;
return $getProjects;
}

function getRewards () { 
$proj_name = $_GET['name'];
$bdd2 = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);
$req2 = "SELECT * FROM rewards WHERE proj_name_='" .$proj_name ."'";
$resultat = $bdd2->query($req2);
// echo $req2;
$getRewards = $resultat->fetchAll();
return $getRewards;
}
?>
