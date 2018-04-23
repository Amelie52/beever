<?php

include_once("../config.inc.php");

function get_list_fund_projects()
{

	$bdd = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);
	if (!empty($_POST['country']) || !empty($_POST['category'])) {
		$country = $_POST['country'];
		$category = $_POST['category'];
		if (!empty($_POST['country']) && !empty($_POST['category'])) {
			$req = "SELECT * FROM projects INNER JOIN users ON projects._user_id=users.user_id WHERE proj_statut='ended' AND proj_country = '".$country."' AND proj_catego = '".$category."'";
		} else if (!empty($_POST['country'])) {
			$req = "SELECT * FROM projects INNER JOIN users ON projects._user_id=users.user_id WHERE proj_statut='ended' AND proj_country = '".$country."'";
		} else if (!empty($_POST['category'])) {
			$req = "SELECT * FROM projects INNER JOIN users ON projects._user_id=users.user_id WHERE proj_statut='ended' AND proj_catego = '".$category."'";
		}
	} else {
		$req = "SELECT * FROM projects INNER JOIN users ON projects._user_id=users.user_id WHERE proj_statut='ended'";
	}

	$result = $bdd->query($req);
	$fundProjects = $result->fetchAll();
	return $fundProjects;
}

