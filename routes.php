<?php

$router->define([
    'CodecoolerBook' => 'controllers/index.php',
    'Todolist/add' => 'controllers/add.php',
    'Todolist/about/culture' => 'controllers/about-culture.php',
    'Todolist/contact' => 'controllers/contact.php',
    'Todolist/models/index-model' => 'models/index.model.php',
    'Todolist/models/index-show-table' => 'models/indexShowTable.model.php',
    'Todolist/models/addTask' => 'models/add.model.php'
]);