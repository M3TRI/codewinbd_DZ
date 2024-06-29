<!-- hello.php -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>1.3</title>
</head>
<body>
    <?php
    // Проверяем, было ли отправлено имя пользователя из формы
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username'])) {
        $username = htmlspecialchars($_POST['username']);
        
        // Устанавливаем куку с именем пользователя на один час
        setcookie('username', $username, time() + 3600);
        
        // Перенаправляем на hello.php
        header('Location: hello.php');
        exit;
    }
    
    // Проверяем, есть ли кука с именем пользователя
    if (isset($_COOKIE['username'])) {
        $username = $_COOKIE['username'];
        echo "<h2>Привет, $username!</h2>";
    } else {
        echo "<h2>Привет, незнакомец!</h2>";
    }
    ?>
    <p><a href="index.php">Вернуться к вводу имени</a></p>
</body>
</html>
