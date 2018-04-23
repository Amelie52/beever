<?php
session_start();
$user_mail= $_SESSION['user_mail']; 
$user_id=  $_SESSION['user_id']; 
$user_name= $_SESSION['user_name']; 
$user_firstname= $_SESSION['user_firstname'];
$proj_name = $_GET['name'];

include('../view/v_add_reward.php');
?>