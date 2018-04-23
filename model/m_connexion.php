<?php

//$password = $_POST['password'];
$password= hash("sha256", $_POST['password']);

// recup login
$email=$_POST['email'];

// on se connecte à MySQL 
include_once("../config.inc.php");
$bdd = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);

if(isset($_POST) && !empty($_POST['email']) && !empty($_POST['password'])) {
//$_POST['password'];
// = hash("sha256", $_POST['pass']);
  //extract($_POST);
  // on recupére le password de la table qui correspond au login du visiteur
  $req = 'SELECT * FROM users WHERE user_mail = "' .$email .'" AND user_pass = "' .$password .'"';
  $resultat = $bdd->query($req);
  $data = $resultat->fetch();

  // vérification que le mdp est correct
  if($data['user_pass'] != $password) {
    header("Location: ../controler/c_error.php");
  }
  // si le mdp est bon
  else {
    session_start();
    $_SESSION['user_mail'] = $data['user_mail'];
    $_SESSION['user_id'] = $data['user_id'];
    $_SESSION['user_name'] = $data['user_name'];
    $_SESSION['user_firstname'] = $data['user_firstname'];
    $_SESSION['user_post_code'] = $data['user_post_code'];
    $_SESSION['user_country'] = $data['user_country'];
    $_SESSION['user_civility'] = $data['user_civility'];
    $_SESSION['user_photo'] = $data['user_photo'];
    $_SESSION['user_pass'] = $data['user_pass'];
    $_SESSION['user_bio'] = $data['user_bio'];
    $_SESSION['user_fb'] = $data['user_fb'];
    $_SESSION['user_twitter'] = $data['user_twitter'];
    $_SESSION['user_lkn'] = $data['user_lkn'];
    $_SESSION['user_photo'] = $data['user_photo'];


header('Location: ../controler/c_profile.php?id='.$user_id .'');

  }    
}
else {
  $champs = '<p><b>(Remplissez tous les champs pour vous connectez !)</b></p><meta http-equiv="refresh" content="3; URL=connexion.php">';
  echo $champs;
}


?>