<?php

//session_start();
$profileId = $_GET['id'];

$_SESSION['profId'] = $profileId;
var_dump($_SESSION);

require "models/apiAjaxQueryBuilder.php";
require "views/wall.view.php";