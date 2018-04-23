<?php     

require('../../config.inc.php');
$user_com=$_GET['id'];

$maconnexion = new PDO('mysql:host=SERVEUR;dbname=BASE', USER, PASS);
$req = "DELETE FROM comments WHERE com_id='$user_com'";
$maconnexion->query($req);
echo $req;
header("Location:../controler/c_comments.php");

?> 