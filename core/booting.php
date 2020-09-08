<?php

    $config = require 'config.php';

    require 'core/Router.php';
    require 'core/database/Connection.php';
    require 'core/database/QueryBuilder.php';
    require 'core/Request.php';
    require 'public/utilities.php';


    return new QueryBuilder(
        Connection::make($config['database'])
    );