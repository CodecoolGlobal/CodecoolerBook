<?php
session_start();
var_dump($_SESSION['userEmail']);

require "views/wall.view.php";