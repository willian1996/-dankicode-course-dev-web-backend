<?php
function myAutoLoad($class){
    $class = str_replace('\\', '/', $class);
    echo $class;
    if(file_exists("classes/".$class.".php")){
        require_once "classes/".$class.".php";
    }
}

spl_autoload_register('myAutoLoad');