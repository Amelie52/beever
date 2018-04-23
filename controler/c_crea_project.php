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


include ('verif_crea_project.php'); 

// include('../view/v_crea_project.php');
?>