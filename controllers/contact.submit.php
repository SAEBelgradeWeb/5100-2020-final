<?php

$app['database']->insert('messages', [
    'subject' => $_POST['subject'],
    'message' => $_POST['message']
]);