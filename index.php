<?php

use sys\Application;

spl_autoload_register(function ($className) {
    $className = str_replace('\\', '/', $className);
    if (is_file($className . '.php')) {
        require_once($className . '.php');
    } else {
        die($className . 'not exists');
    }
});

(new Application())->run(['run']);