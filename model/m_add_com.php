<?php

$proj_name = $_GET['proj'];
$user_id_ = $_GET['id'];
$com_mess = $_POST['message'];


require('../config.inc.php');

$bdd = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS );
$req = 'INSERT INTO comments(com_mess , com_date , user_id_ , proj_name_) 
	VALUES (" '.$com_mess .'" , now() , "' .$user_id_ .'" , "' .$proj_name .'")';
$bdd->query($req);
// echo $req;
header('location:../controler/c_project.php?name='.$proj_name);


?>