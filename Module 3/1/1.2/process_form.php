<!-- process_form.php -->
<?php
session_start();

// Получаем данные из формы
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $surname = htmlspecialchars($_POST['surname']);
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    
    // Сохраняем данные в сессию
    $_SESSION['surname'] = $surname;
    $_SESSION['name'] = $name;
    $_SESSION['age'] = $age;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>1.2</title>
</head>
<body>
    <h2>Ваши данные:</h2>
    <p><strong>Фамилия:</strong> <?php echo $_SESSION['surname']; ?></p>
    <p><strong>Имя:</strong> <?php echo $_SESSION['name']; ?></p>
    <p><strong>Возраст:</strong> <?php echo $_SESSION['age']; ?></p>
    <p><a href="form_page.php">Вернуться к вводу данных</a></p>
</body>
</html>
