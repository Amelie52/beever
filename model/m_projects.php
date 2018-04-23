<?php

include_once("../config.inc.php");

function get_projects()
{

	$bdd = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS);
	if (!empty($_POST['country']) || !empty($_POST['category'])) {
		$country = $_POST['country'];
		$category = $_POST['category'];
		if (!empty($_POST['country']) && !empty($_POST['category'])) {
			$req = "SELECT * FROM projects WHERE proj_statut <> 'end' AND proj_country = '".$country."' AND proj_catego = '".$category."'";
		} else if (!empty($_POST['country'])) {
			$req = "SELECT * FROM projects WHERE proj_statut <> 'end' AND proj_country = '".$country."'";
		} else if (!empty($_POST['category'])) {
			$req = "SELECT * FROM projects WHERE proj_statut <> 'end' AND proj_catego = '".$category."'";
		}
	} else {
		$req = "SELECT * FROM projects WHERE proj_statut <> 'end'";
	}

	$result = $bdd->query($req);
	$projects = $result->fetchAll();
	return $projects;
}

