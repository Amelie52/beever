<?php


require('../../config.inc.php');

function allComments() {  
$bdd = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);
$result = $bdd->query("SELECT * FROM comments ");
$allUsers = $result-> fetchAll();
return $allUsers;
}

?>	
