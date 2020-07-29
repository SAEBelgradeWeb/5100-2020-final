<?php

App::get('database')->insert('messages', [
    'subject' => $_POST['subject'],
    'message' => $_POST['message']
]);

header('Location: /');