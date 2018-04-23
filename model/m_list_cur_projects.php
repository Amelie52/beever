<?php

include_once("../config.inc.php");

function get_list_cur_projects()
{

	$bdd = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);
	if (!empty($_POST['country']) || !empty($_POST['category'])) {
		$country = $_POST['country'];
		$category = $_POST['category'];
		if (!empty($_POST['country']) && !empty($_POST['category'])) {
			$req = "SELECT * FROM projects INNER JOIN users ON projects._user_id=users.user_id WHERE proj_statut = 'in progress' AND proj_country = '".$country."' AND proj_catego = '".$category."'";
		} else if (!empty($_POST['country'])) {
			$req = "SELECT * FROM projects INNER JOIN users ON projects._user_id=users.user_id WHERE proj_statut = 'in progress' AND proj_country = '".$country."'";
		} else if (!empty($_POST['category'])) {
			$req = "SELECT * FROM projects INNER JOIN users ON projects._user_id=users.user_id WHERE proj_statut = 'in progress' AND proj_catego = '".$category."'";
		}
	} else {
		$req = "SELECT * FROM projects INNER JOIN users ON projects._user_id=users.user_id WHERE proj_statut = 'in progress'";
	}

	$result = $bdd->query($req);
	$projects = $result->fetchAll();
	return $projects;
}

