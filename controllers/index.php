<?php

$tasks = $app['database']->getAll('tasks');

require_once "views/index.view.php";