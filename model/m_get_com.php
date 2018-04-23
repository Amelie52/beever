<?php 
$proj_name = $_GET['name'];
require('../config.inc.php');
$bdd = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS );

$req = "SELECT * FROM comments ";
echo $req;
$state = $bdd->query($req);
// avec cet etat on peut faire un fetch ==> associer les éléments a un tableau array
$results = $state-> fetchAll();


foreach ($results as $com) {
	echo "<p> " .strftime("%e %b - [%H:%M" , strtotime($com['com_date'])) ."] -   <strong>" .$com['user_id_'] ."</strong> :  " .$com['com_mess'] ."</p>";
}
?>


