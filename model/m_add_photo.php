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
$user_photo=  $_SESSION['user_photo']; 


//////////////////////
// $dossier = '/home/etudiants/mmid114b02/public_html/projetS3/Beever/members/';
$dossier = '/home/etudiants/mmid114a12/public_html/beever/members/upload/';
$fichier = basename($_FILES['avatar']['name']);
$taille_maxi = 1000000;
$taille = filesize($_FILES['avatar']['tmp_name']);
$extensions = array('.png', '.gif', '.jpg', '.jpeg' , '.JPG');
$extension = strrchr($_FILES['avatar']['name'], '.'); 
//Début des vérifications de sécurité...
if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
 $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
}
if($taille>$taille_maxi)
{
 $erreur = 'Le fichier est trop gros...';
}
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
     //On formate le nom du fichier ici...
 $fichier = strtr($fichier, 
  'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
  'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
 $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
     if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
      echo 'Upload effectué avec succès !';
      include_once("../config.inc.php");
      $bdd = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);
      $req = 'UPDATE users SET user_photo="' .$fichier .'"   WHERE user_id='.$user_id .'';
      $resultat = $bdd->query($req); 
          //echo $req;
      header('Location: ../controler/c_profile.php?id='.$user_id .'');

    }
     else //Sinon (la fonction renvoie FALSE).
     {
      echo 'Echec de l\'upload !';
    }
     //move_uploaded_file($_FILES['avatar']['tmp_name'], '/home/etudiants/mmid114b02/public_html/projetS3/testupload/upload/' . basename($fichier));
  }
  else
  {
   echo $erreur;
 }
       //       echo 'Upload effectué avec succès !';

       //header('location: ../controler/c_profile.php?id='.$data["user_id"] . ' ');

 ?>