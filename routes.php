<?php

$router->define([
    'codecoolerbook' => 'controllers/index.php',
    'codecoolerbook/register' => 'controllers/register.php',
    'codecoolerbook/login' => 'controllers/login.php',
    'codecoolerbook/wall' => 'controllers/wall.php',
//    'codecoolerbook/viewprofile' => 'controllers/viewprofile.php',
//    'codecoolerbook/editprofile' => 'controllers/editprofile.php',
//    'codecoolerbook/search' => 'controllers/search.php',
//    'Todolist/models/addTask' => 'models/add.model.php'
    'codecoolerbook/models/getpostdata' => 'models/apiAjaxQueryBuilder.php'
]);