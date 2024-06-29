<?php
$array = array("Первый", "Второй");

$array[0] = "Модифицированный первый";
echo $array[0] . "<br>";

array_unshift($array, "");
echo $array[0] . "<br>";

$new_array = array("Элемент 1", "Элемент 2", "Элемент 3");
array_unshift($array, $new_array);

echo $array[0][1] . "<br>";