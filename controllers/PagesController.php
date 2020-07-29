<?php

class PagesController {
    public function home()
    {
        $tasks = App::get('database')->getAll('tasks');

        require_once "views/index.view.php";
    }

    public function about()
    {
        require_once "views/about.view.php";
    }

    public function contact()
    {
        require_once "views/contact.view.php";
    }

}