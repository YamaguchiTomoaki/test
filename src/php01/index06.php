<?php
function get_triangle($bottom, $height){
    $answer = $bottom * $height / 2;
    return $answer;
}

function get_squre($vertical, $beside){
    $answer = $vertical * $beside;
    return $answer;
}

function get_trapezoid($up, $down, $height){
    $answer = ($up + $down) * $height /2;
    return $answer;
}

print get_triangle(4, 4) . "<br />";
print get_squre(5, 5) . "<br />";
print get_trapezoid(10, 10, 3);