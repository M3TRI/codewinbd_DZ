<?php
// Переменные для хранения сообщения о доступе
$message = '';

// Если форма была отправлена
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Получаем введенные данные из формы
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Проверяем соответствие введенных данных заданным значениям
    if ($login === 'user' && $password === '12345') {
        $message = 'Доступ разрешен';
    } else {
        $message = 'Доступ запрещен';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .form-container {
            background-color: #1e1e1e;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 350px;
            height: 350px;

        }
        .form-container label {
            font-size: 1.2em;
            margin-bottom: 10px;
            display: block;
        }
        .form-container input[type="text"],
        .form-container input[type="password"] {
            width: 330px;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            background-color: #2a2a2a;
            color: #ffffff;
            font-size: 1em;
        }
        .form-container button {
            width: 350px;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            font-size: 1em;
        }
        .form-container button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form method="POST" action="">
            <label for="login">Логин:</label>
            <input type="text" id="login" name="login" required>
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Войти</button>
        </form>
        <?php if (!empty($message)): ?>
        <p><?php echo $message; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
