<?php

function add($a = 1, $b= 2 ) 
{
    $sum = $a + $b;
    return $sum;
}

echo add() . '<br>';
var_dump(add());

echo '<hr>';

function getCircleArea($radius)
{
    return $radius * $radius * pi();
}

echo getCircleArea(5);
?>

