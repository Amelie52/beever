<?php

require('../model/m_users.php');

$Users = allUsers() ;

include('../view/v_users.php');

?>