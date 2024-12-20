<?php
//7.PHP Closutre
$sayHi = "Hello";
$closure = function($name) use($sayHi){
    return $sayHi . "-". $name;
};
//Closutre
echo get_class($closure) . "<br/>";
echo gettype($closure) . "<br/>";
echo $closure("World") . "<br/>";