<?php
$list = [10,20,30];
$result = array_map(
    fn($item) => $item * 2,
    $list
);

print_r($result);