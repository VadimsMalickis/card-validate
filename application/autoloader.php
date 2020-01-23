<?php
/**
 * Created by IntelliJ IDEA.
 * User: ann
 * Date: 1/18/20
 * Time: 11:16 PM
 */
spl_autoload_register(function ($class) {
    $path = __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

    if(file_exists($path)){
        require_once(__DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php');
    }
})
;
