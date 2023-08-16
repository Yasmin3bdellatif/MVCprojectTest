<?php

use core\database\Connection;

$app['config']=require "config.php";
Connection::make($app['config']['database']);

function view($file, $data) {

    extract ($data);
    return require "app/views/$file.view.php";
}


