<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Подключаем файл конфигурации базы данных
require_once('./data/config_db.php');

// Устанавливаем соединение с базой данных
$link = mysqli_connect($host, $user, $pass, $name);

// Проверяем успешность соединения
if (!$link) {
    die('Ошибка соединения: ' . mysqli_connect_error());
}

if (!empty($_POST)) {
    $id = $_GET['id'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	$salary = $_POST['salary'];
} else {
    die('Одно или более из полей формы, не было заполнено!');
}
$query = "UPDATE users SET name='$name', age='$age', salary='$salary' WHERE id=$id";
mysqli_query($link, $query) or die(mysqli_error($link));
echo "Пользователь успешно изменен! <a href='./index.php'>Вернуться назад</a>";