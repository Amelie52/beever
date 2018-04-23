<?php 
  session_start();
   $user_mail= $_SESSION['user_mail']; 
   $user_id=  $_SESSION['user_id']; 
   $user_name= $_SESSION['user_name']; 
   $user_firstname= $_SESSION['user_firstname']; 
   $user_ids = $user_id;

require('../model/m_project.php');

$rewards = getRewards();
$getCom = getCom();
include('../view/v_project.php');
?>