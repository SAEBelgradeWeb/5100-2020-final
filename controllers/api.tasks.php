<?php

$tasks = $app['database']->getAll('tasks');
var_dump($tasks);
//echo json_encode($tasks);