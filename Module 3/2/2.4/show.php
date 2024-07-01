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

$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$user = mysqli_fetch_assoc($result);
?>
<div>
	<h1><?= $user['name'] ?></h1>
	<p>
		Возраст: <span class="age"><?= $user['age'] ?></span>,
		Зарплата: <span class="salary"><?= $user['salary'] ?></span>
	</p>
</div>

