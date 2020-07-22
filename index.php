<?php
require_once "core/bootstrap.php"; //this lifts up the application (db..)

require Router::loadRoutes()
    ->direct(Request::uri());
