<?php
echo "Функция strtolower - преобразует строку в нижний регистр<br>";
$str = "Привет, Мир!";
$lowercase_str = mb_strtolower($str);
echo "Оригинал: $str<br>";
echo "Выход: $lowercase_str<br>";

echo "Функция strtoupper - преобразует строку в верхний регистр<br>";
$str = "Привет, Мир!";
$uppercase_str = mb_strtoupper($str);
echo "Оригинал: $str<br>";
echo "Выход: $uppercase_str<br>";

echo "Функция strlen - возвращает длину строки<br>";
$str = "Привет, Мир!";
$length = mb_strlen($str);
echo "Оригинал: $str<br>";
echo "Выход: $length<br>";

echo "Функция str_replace - заменяет все вхождения подстроки в строке другой подстрокой<br>";
$str = "Привет, Мир!";
$new_str = str_replace("Мир", "PHP", $str);
echo "Оригинал: $str<br>";
echo "Выход: $new_str<br>";

echo "Функция implode - объединяет элементы массива в строку<br>";
$fruits = array("apple", "banana", "orange");
$str = implode(", ", $fruits);
echo "Оригинал: <br>";
print_r($fruits);
echo "Выход: $str<br>";

echo "Функция in_array - проверяет, присутствует ли значение в массиве<br>";
$fruits = array("Яблоко", "Банан", "Апельсин");
$check = "Банан";
if (in_array($check, $fruits)) {
    echo "$check находится в массиве.<br>";
} else {
    echo "$check не находится в массиве.<br>";
}
print_r($fruits);