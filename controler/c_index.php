<?php
include_once("../model/m_index.php");
$projectLast = get_project_last();
$projectHeart = get_project_heart();
$topMember = get_top_member();
$topMember2 = get_top_member2();
include_once("../view/v_index.php");
?>