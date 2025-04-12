<?php

function dd($value)
{

    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

//dd($_SERVER);  
//echo $_SERVER['REQUEST_URI'];

function urlIs($value)
{
    return strpos($_SERVER['REQUEST_URI'], $value);
}

$isTrue = urlIs("/about.php") ?  "True" :  "False";


//dd($_SERVER);
//dd($isTrue);
