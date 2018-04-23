<?php
include_once("../model/m_list_fund_projects.php");
$fundProjects = get_list_fund_projects();
include_once("../view/v_list_fund_projects.php");
?>