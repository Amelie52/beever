<?php 

session_start();
$user_mail= $_SESSION['user_mail']; 
$user_id=  $_SESSION['user_id']; 
$user_name= $_SESSION['user_name']; 
$user_firstname= $_SESSION['user_firstname']; 
$user_ids = $_GET['id'];


if(!isset($user_id)) {
  include('../view/v_login.php'); 
  
} else {
	$x=1;
}

require('../model/m_myfavorite.php');

$myfav = getFavorites();

include('../view/v_myfavorite.php');
?>