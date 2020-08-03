<?php
namespace App\Controllers;
use App\Core\App;

class PostsController {

    public function index()
    {
        $posts = App::get('database')->getAll('posts');

        return view('posts-index', compact('posts'));
    }

    public function create()
    {
        
    }

    public function store()
    {
        
    }

    public function show()
    {
        $post = App::get('database')->getOne('posts', $_GET['id']);

        return view('posts-show', compact('post'));
    }

    public function edit()
    {
        
    }

    public function update()
    {

    }

    public function destroy()
    {

    }
    
}