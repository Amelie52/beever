<?php

require ('../../config.inc.php');

function countProj () {
$bdd1 = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);
$req1 = "SELECT COUNT(*) FROM projects";
$resultat = $bdd1->query($req1);
$countProj = $resultat-> fetch();
return $countProj;
}
function countUsers () {
$bdd2 = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);
$req2 = "SELECT COUNT(*) FROM users";
$result = $bdd2->query($req2);
$countUsers = $result-> fetch();
return $countUsers;
}
function countComments () {
$bdd3 = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);
$req3 = "SELECT COUNT(*) FROM comments";
$resul = $bdd3->query($req3);
$Comments = $resul-> fetch();
return $Comments;
}
function SomFundsInvested () {
$bdd4 = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);
$req4 = "SELECT SUM(proj_funds_received) FROM projects";
$resul = $bdd4->query($req4);
$SomFundsInvested = $resul-> fetch();
return $SomFundsInvested;
}
?>