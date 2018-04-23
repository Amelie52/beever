<?php


require('../../config.inc.php');

function allProjects() {  
$bdd = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);
$result = $bdd->query("SELECT * FROM projects WHERE proj_statut='required validation'");
$allProjects = $result-> fetchAll();
return $allProjects;
}

?>	
