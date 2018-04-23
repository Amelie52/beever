<?php     

require('../../config.inc.php');
$proj_id=$_GET['id'];

$maconnexion = new PDO('mysql:host=SERVEUR;dbname=BASE', USER, PASS);
$req = "DELETE FROM projects WHERE proj_id='$proj_id'";
$maconnexion->query($req);
echo $req;
header("Location:../controler/c_projects.php");

?> 