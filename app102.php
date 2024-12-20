<?php
//2.Anonymous functions
$sayHi = function ($name) : string {
    return "$name : Anonymous functions <br/>";
};
echo $sayHi('Mark Zuckerberg');
echo $sayHi('John Doe');
echo $sayHi('Elon Musk');