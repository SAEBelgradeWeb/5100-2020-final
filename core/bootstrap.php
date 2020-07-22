<?php
require_once "core/functions.php";
require_once "core/database/Database.php";
require_once "core/database/QueryBuilder.php";
require_once "core/Request.php";
require_once "core/Router.php";

$app = [];
$app['config'] = require_once "config.php";

$app['database']  = new QueryBuilder(Database::connect($app['config']['database']));
