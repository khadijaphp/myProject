<?php
spl_autoload_register('myAutoLoader');

function myAutoLoader($className)
{
    $path="classes/";
    $extention=".php";
    $fullPath=$path.$className.$extention;
    if(!file_exists($fullPath))
    {
        return false;
    }
    include_once $fullPath;
}
?>