<?php

spl_autoload_register(function($className){
    $className .= '.class.php';
    if (file_exists($className)) {
        require_once $className;
    }
});

$user = new ReflectionClass('User');
Reflection::export($user);