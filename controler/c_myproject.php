<?php
session_start();
$proj_name = $_GET['name'];
$user_id = $_SESSION['user_id'] ;
$user_name = $_SESSION['user_name'];

require('../model/m_myproject.php');

$rewards = getRewards();
$Projects = getProjects();

include('../view/v_myproject.php');

?>