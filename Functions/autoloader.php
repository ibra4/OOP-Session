<?php

function autoloader($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);

    if (file_exists(ROOT . '/' . $className . '.php')) {
        require_once ROOT . '/' . $className . '.php';
    } else {
        throw new Exception('[ - ] Class Not Found : ' . ROOT . '/' . $className . '.php');
    }
}