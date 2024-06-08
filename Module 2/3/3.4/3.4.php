<?php
function getRandomElement($array) {
    $randomIndex = array_rand($array);
    return $array[$randomIndex];
}

$myArray = array("1", "2", "3", "4", "5");
$randomElement = getRandomElement($myArray);
echo "Случайный элемент массива: $randomElement";
