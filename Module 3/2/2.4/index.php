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

// SQL-запрос на выбор всех записей из таблицы users
$query = "SELECT * FROM users";

// Выполняем запрос и проверяем успешность выполнения
$result = mysqli_query($link, $query);
if (!$result) {
    die('Ошибка запроса: ' . mysqli_error($link));
}

// Считываем данные из результата запроса
$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Закрываем соединение с базой данных
mysqli_close($link);
?>
<!-- Создаем таблицу для отображения данных -->
<table border="1" style="border-collapse: collapse;">
    <tr>
        <th>id</th>
        <th>имя</th>
        <th>возраст</th>
        <th>зарплата</th>
        <th>удалить</th>
        <th>редактировать</th>
    </tr>
    <?php
    foreach ($data as $elem) : ?>
        <tr>
        <td><a href="./show.php?id=<?= $elem['id'] ?>"><?= $elem['name'] ?></a></td>
        <td><?= $elem['name'] ?></td>
        <td><?= $elem['age'] ?></td>
        <td><?= $elem['salary'] ?></td>
        <td><a href="./del.php?del=<?= $elem['id'] ?>">удалить</a></td>
        <td><a href="edit.php?id=<?= $elem['id'] ?>">редактировать</a></td>
        </tr>
    <?php endforeach; ?>
</tabl>
<h1>Хотите <a href="./new.php">добавить</a> нового пользователя ?</h1>

