<?php
//
//$router->register([
//    '' => 'controllers/index.php',
//    'about' => 'controllers/about.php',
//    'about/culture' => 'controllers/about.culture.php',
//    'contact' => 'controllers/contact.php',
//    'api/tasks' => 'controllers/api.tasks.php',
//    'contact-submit' => 'controllers/contact.submit.php'
//
//]);

//$routes = [
//    'GET' => ['' => 'controllers/index.php',
//        'about' => 'controllers/about.php',
//        'about/culture' => 'controllers/about.culture.php',
//        'contact' => 'controllers/contact.php',
//        'api/tasks' => 'controllers/api.tasks.php',
//    ],
//    'POST' => [
//        'contact-submit' => 'controllers/contact.submit.php'
//    ]
//];
//

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
//$router->get('api/tasks', 'controllers/api.tasks.php');
//$router->post('contact-submit', 'controllers/contact.submit.php');