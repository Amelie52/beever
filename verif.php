<?
session_start();

/*
if variable doesn't exist -> user doesn't have open session -> he can't go on member space
*/
if(!isset($_SESSION['user_mail'])) {
  include('../view/v_login.php'); 
  
} else {
	$x=1;
}
?> 