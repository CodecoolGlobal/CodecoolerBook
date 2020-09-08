<?php

$database = require 'core/booting.php';

require Router::load('routes.php')-> direct(Request::uri());
