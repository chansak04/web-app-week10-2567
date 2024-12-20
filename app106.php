<?php
//6.PHP Closutre
$anony = function(){
    return 'Lambda';
};
//Closutre
echo get_class($anony) . "<br/>";
echo gettype($anony) . "<br/>";