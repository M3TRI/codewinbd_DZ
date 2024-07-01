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
<form action="save.php?id=<?= $_GET['id'] ?>" method="POST">
    <input name="name" value="<?= $user['name'] ?>">
    <input name="age" value="<?= $user['age'] ?>">
    <input name="salary" value="<?= $user['salary'] ?>">
    <input type="submit">
</form>
