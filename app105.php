<?php
//5.Scope of the anonymous function
$message = "Hi";
$say = function ($name) use ($message) {
    echo $message. "-" . $name;
};

$say("Mark" . "<br/>");