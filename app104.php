<?php
// 4. Return anonymous function
function multiplier($x){
    return function($y, $z) use ($x) {
        return $x * $y + $z;
    };
}

$double = multiplier(100);
echo $double(2, 3) . "<br/>";

$triple = multiplier(100); 
echo $triple(3, 3) . "<br/>";
