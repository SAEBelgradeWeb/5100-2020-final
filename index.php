<?php
require_once "vendor/autoload.php";
require_once "core/bootstrap.php"; //this lifts up the application (db..)

Router::loadRoutes()
    ->direct(Request::uri(), Request::method());
