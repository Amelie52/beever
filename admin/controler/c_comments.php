<?php

require('../model/m_comments.php');

$Comments = allComments() ;

include('../view/v_comments.php');

?>