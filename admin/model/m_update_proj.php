<?php     

require('../../config.inc.php');
$proj_id=$_GET['id'];
$statut = $_POST['proj_statut'];

echo $statut;
$maconnexion = new PDO('mysql:host=SERVEUR;dbname=BASE', USER, PASS);
$req = "UPDATE projects SET proj_statut='" .$statut ."' WHERE proj_id='".$proj_id."'";
$maconnexion->query($req);
//echo $req;
header("Location: ../controler/c_projects.php");

?> 