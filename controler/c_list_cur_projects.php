<?php
include_once("../model/m_list_cur_projects.php");
$projects = get_list_cur_projects();
include_once("../view/v_list_cur_projects.php");
?>