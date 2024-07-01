<form action="" method="POST">
    <label for="name">Имя:</label>
    <input id="name" name="name" type="text"><br>
    <label for="age">Возраст:</label>
    <input id="age" name="age" type="number"><br>
    <label for="salary">Зарплата:</label>
    <input id="salary" name="salary" type="number"><br>
    <input type="submit" value="Создать">
</form>

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
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    $query = "INSERT INTO users SET name='$name', age='$age', salary='$salary'";
    mysqli_query($link, $query) or die(mysqli_error($link));
    echo "Добавили пользователя $name ($age лет) с ЗП $salary";
} else {
    die('Одно или более из полей формы, не было заполнено!');
}
?>