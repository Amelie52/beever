<?php

  session_start();
   $user_mail= $_SESSION['user_mail']; 
   $user_id=  $_SESSION['user_id']; 
   $user_name= $_SESSION['user_name']; 
   $user_firstname= $_SESSION['user_firstname']; 
   $user_ids = $user_id;

include('verif_contribute.php');


require('../model/m_contribute.php');

$rewards = getRewards();


if ($x==1) {
	include('../view/v_contribute.php');
}

?>