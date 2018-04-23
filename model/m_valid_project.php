<?php
session_start();
$user_id =  $_SESSION['user_id']; 
$user_name =  $_SESSION['user_name']; 


$proj_name = $_POST['proj_name'];
//$proj_photo = $_POST['proj_photo'];
$proj_present = $_POST['proj_present'];
$proj_catego = $_POST['proj_catego'];
$proj_city = $_POST['proj_city'];
$proj_country = $_POST['proj_country'];
$proj_duration = $_POST['proj_duration'];
$proj_funds_obj = $_POST['proj_funds_obj'];
 
require('../config.inc.php');

if(!empty($proj_name) &&
//   !empty($proj_photo) &&
   !empty($proj_present) &&
   !empty($proj_catego) &&
   !empty($proj_city) &&
   !empty($proj_country) &&
   !empty($proj_duration) &&
   !empty($proj_funds_obj)
   )
{



/////////////////////////
$dossier = '/home/etudiants/mmid114a12/public_html/beever/projects/upload/';
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
          
			$bdd = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);
			$requete = 'INSERT INTO projects(proj_name , proj_photo , proj_present , proj_catego , proj_city , proj_country , proj_duration , proj_funds_obj , proj_statut , proj_crea_date , _user_id) 
			  VALUES (' .'"' .$proj_name .'", "'.$fichier.'", "'.$proj_present.'", "'.$proj_catego.'", "'.$proj_city.'","'.$proj_country .'" , "'.$proj_duration.'" , "'.$proj_funds_obj.'" , "required validation" , now() , "' .$user_id .'")';
			$req = $bdd->query($requete);
      // echo $requete;
			session_start();
        $_SESSION['proj_name'] = $proj_name; 
        $_SESSION['user_id'] = $user_id; 
    		$_SESSION['user_name'] = $user_name; 
 

			header("Location: ../controler/c_crea_project_2.php");

     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
          echo '<meta http-equiv="refresh" content="3; URL=../controler/c_crea_project.php>';
     }
     //move_uploaded_file($_FILES['avatar']['tmp_name'], '/home/etudiants/mmid114b02/public_html/projetS3/testupload/upload/' . basename($fichier));
}
else
{
     echo $erreur;
}



////////////////////////////
//header("Location: ../controler/c_creat_proj2.php");

}
 else 
{
	echo "Please fill all the field ! ";
	echo '<meta http-equiv="refresh" content="3; URL=../controler/c_crea_project.php>';

}

?>