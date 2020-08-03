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

//POSTS
$router->get('posts', 'PostsController@index');
$router->get('posts/create', 'PostsController@create');
$router->post('posts', 'PostsController@store');
$router->get('posts/show', 'PostsController@show');
$router->get('posts/edit', 'PostsController@edit');
$router->post('posts/edit', 'PostsController@update');
$router->get('posts/destroy', 'PostsController@destroy');



//$router->post('ovo/je/ruta', 'OvoJeKontroler@metodUKontroleru');


// 5 or 7
// index - get all posts
// show(id) - one post
// insert

//$router->get('api/tasks', 'controllers/api.tasks.php');
$router->post('contact-submit', 'PagesController@contactFormSubmit');