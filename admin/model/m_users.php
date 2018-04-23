<?php


require('../../config.inc.php');

function allUsers() {  
$bdd = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);
$result = $bdd->query("SELECT * FROM users ");
$allUsers = $result-> fetchAll();
return $allUsers;
}

?>	
