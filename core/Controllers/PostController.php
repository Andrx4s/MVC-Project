<?php

namespace Controllers;

use Models\Post;

class PostController extends BaseController
{
    public function create(){
        return view('post/create');
    }
    public function createPost(){
        $errors = [];
        if(!isset($_POST['title'])) $errors['title'][] = 'Нет поля заголовок';
        if(!isset($_POST['body'])) $errors['body'][] = 'Нет поля описание';

        if(!has_session('id'))
            $errors['auth'][] = 'Не авторизрован';
        if($errors!=[])
            return view('create', compact('errors'));

        $post = new Post();
        $_POST['user_id'] = session('id');
        $post->create($_POST);

    }
}