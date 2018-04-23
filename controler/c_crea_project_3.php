<?php
session_start();
$proj_name = $_SESSION['proj_name'];
$user_id =  $_SESSION['user_id']; 
$user_name =  $_SESSION['user_name'];


include('../view/v_crea_project_3.php');
?>