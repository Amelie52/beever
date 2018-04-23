<?php

session_start();
$user_mail= $_SESSION['user_mail']; 
$user_id=  $_SESSION['user_id']; 
$user_name= $_SESSION['user_name']; 
$user_firstname= $_SESSION['user_firstname']; 
$user_post_code=  $_SESSION['user_post_code']; 
$user_country=  $_SESSION['user_country']; 
$user_civility=  $_SESSION['user_civility']; 
$user_photo=  $_SESSION['user_photo']; 
$user_pass=  $_SESSION['user_pass']; 
$user_bio=  $_SESSION['user_bio']; 
$user_fb=  $_SESSION['user_fb']; 
$user_twitter=  $_SESSION['user_twitter']; 
$user_lkn=  $_SESSION['user_lkn'];

$prev_pass= hash("sha256", $_POST['oldpass']);
$new_pass1= hash("sha256", $_POST['newpass1']); 
$new_pass2= hash("sha256", $_POST['newpass2']);

include_once("../config.inc.php");
$bdd = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);
$req = 'SELECT user_pass FROM users WHERE user_id=' . $user_id;
$result = $bdd->query($req);
$resultat = $result->fetch();


 //$result = $bdd->query(sprintf("INSERT INTO account VALUES (NULL, '%s', md5('%s'))", $_POST['pseudoo'], $_POST['mdpp']));

// ruhug('UPDATE users SET user_pass='"%s%"' WHERE user_id=%d%',md5($new_pass1),$user_id);

// foreach($resultat as $res){
if($prev_pass == $resultat['user_pass'] && $new_pass2 == $new_pass1)
{ 
	$bdd = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);
	$req = 'UPDATE users SET user_pass="' . $new_pass1 .'" WHERE user_id=' . $user_id .'';
	$resultat = $bdd->query($req);
  //echo '<meta http-equiv="refresh" content="0; URL=c_profile.php?id='.$user_id.'">';
  header('Location: ../controler/c_profile.php?id='.$user_id .'');
	//header('c_profile.php?id='.$user_id .'');
} 
else
{
	echo 'Check informations ! ';
}
// }
?>