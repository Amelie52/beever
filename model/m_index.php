<?php

include_once("../config.inc.php");

function get_project_heart()
{
	$bdd = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);
	$req = "SELECT count( * ) , proj_id, proj_catego, proj_name, proj_country, proj_funds_obj, proj_funds_received, proj_photo, proj_present, user_name, user_firstname
	FROM projects INNER JOIN users ON projects._user_id=users.user_id
	GROUP BY proj_catego
	HAVING COUNT( * ) >0
	LIMIT 5";
	// $req = "SELECT count(*), (proj_id, proj_catego, proj_name, proj_country, proj_funds_obj, proj_photo, proj_present) FROM projects GROUP BY proj_catego HAVING COUNT(*) > 0 LIMIT 5"; INNER JOIN users ON projects._user_id=users.user_id
	$result = $bdd->query($req);
	$projectHeart = $result->fetchAll();
	return $projectHeart;
} 

function get_project_last()
{
	$bdd = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);
	$result = $bdd->query("SELECT * FROM projects ORDER BY proj_name ASC LIMIT 2");
	$projectLast = $result->fetchAll();
	return $projectLast;
} 

function get_top_member()
{
	$bdd = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);
	$result = $bdd->query("SELECT * FROM users ORDER BY user_name ASC LIMIT 2"); // à refaire en fonction de fond donné/investit
	$topMember = $result->fetchAll();
	return $topMember;
} 

function get_top_member2()
{
	$bdd = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);
	$result = $bdd->query("SELECT * FROM users ORDER BY user_name ASC LIMIT 2 OFFSET 2 "); // à refaire en fonction de fond donné/investit
	$topMember2 = $result->fetchAll();
	return $topMember2;
} 

?>