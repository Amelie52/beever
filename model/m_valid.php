<html>
<head>
  <title></title>
</head>
<body>

<?php
//Connexion à la BDD  
//include ('verif.php');
include_once("../config.inc.php");
  try
  {
  
 
  $bdd = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);
  
  }
  
  catch(Exception $e)
  {
   die('Erreur :'.$e->getMessage());
  }
  
    if(ISSET($_POST['submit']))
{
//On créer les variables
$user_name = $_POST['user_name'];
$user_firstname = $_POST['user_firstname'];
$user_mail = $_POST['user_mail'];
$user_country = $_POST['user_country'];
$user_post_code = $_POST['user_post_code'];
$user_bio = $_POST['user_bio'];
//$user_pass = $_POST['user_pass'];
$user_civility = $_POST['user_civility'];
$user_fb = $_POST['user_fb'];
$user_twitter = $_POST['user_twitter'];
$user_lkn = $_POST['user_lkn'];



$user_pass = hash("sha256", $_POST['user_pass']);

$bdd = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);
$requete = 'INSERT INTO users(user_name, user_firstname, user_mail, user_country, user_post_code, user_bio, user_pass , user_civility , user_fb, user_twitter , user_lkn) 
  VALUES (' .'"' .$user_name.'", "'.$user_firstname.'", "'.$user_mail.'", "'.$user_country.'", "'.$user_post_code.'","'.$user_bio .'" , "'.$user_pass.'" , "'.$user_civility.'" , "'.$user_fb.'" , "'.$user_twitter.'" , "'.$user_lkn.'")';
$req = $bdd->query($requete);
echo $requete;

if(!empty($user_name) && !empty($user_firstname) && !empty($user_mail) && !empty($user_country)  && !empty($user_post_code) && !empty($user_bio) && !empty($user_pass))
{


}else{
?>


<b>Please, fill in all the fields!</b>
<meta http-equiv="refresh" content="5; URL=../controler/c_registration.php">

<?php
}


if(empty($user_name) && empty($user_firstname) && empty($user_mail) && empty($user_country) && empty($user_pays) && empty($user_post_code) && empty($user_bio) && empty($user_pass))
{


}else{

require('../config.inc.php');
$co = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);
  $req = 'SELECT * FROM users WHERE user_mail = "' .$user_mail .'"';
  $resultat = $co->query($req);
  $data = $resultat->fetch();

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



header("Location: ../controler/c_profile.php?id=".$data['user_id']."");
//echo ' <strong>Yes !</strong> Vous etes bien logué, Redirection dans 5 secondes ! 
//    <meta http-equiv="refresh" content="0; URL=c_profile.php?id='.$data['user_id'].'">';


}


}

   // echo '<br> <br><br> '.$requete;
   // echo '<br>';
   // echo $user_name .' / ' .$user_firstname.' / ' .$user_mail  .' / ' .$user_country .' / ' .$user_code_post .' / ' .$user_bio .' / ' .$user_pass.' . ';
   ?>

</body>
</html>