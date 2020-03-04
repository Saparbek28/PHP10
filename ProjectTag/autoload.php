<?php

spl_autoload_register(function ($name){
    //echo $name;
    //die($name);
    $file = "classes" . DIRECTORY_SEPARATOR . "{$name}.php";

    if(!file_exists($file))
        die("<b>{$file}</b> doesnt exist");
    include_once $file;

    if(!class_exists($name)){
        die("Class <b>{$file}</b> doesnt exist");
    }
});