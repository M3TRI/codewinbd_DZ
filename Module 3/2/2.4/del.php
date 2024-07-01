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

$del = $_GET['del'];
$query = "DELETE FROM users WHERE id=$del";
mysqli_query($link, $query) or die(mysqli_error($link));
echo "Пользователь был удалён <a href='./index.php'>Вернуться назад</a>";