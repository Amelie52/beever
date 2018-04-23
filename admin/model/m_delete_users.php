<?php     

require('../../config.inc.php');
$user_id=$_GET['id'];

$maconnexion = new PDO('mysql:host=SERVEUR;dbname=BASE', USER, PASS);
$req = "DELETE FROM users WHERE user_id='$user_id'";
$maconnexion->query($req);
echo $req;
header("Location:../controler/c_users.php");

?> 