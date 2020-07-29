<?php
require_once "core/functions.php";


App::register('config', require_once "config.php");

App::register('database', new QueryBuilder(Database::connect(App::get('config')['database'])));

//App::register('ime', 'vrednost');
//
//App::get('ime');
