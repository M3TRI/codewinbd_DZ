<!-- form_page.php -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>1.2</title>
</head>
<body>
    <h2>Введите ваши данные:</h2>
    <form action="process_form.php" method="post">
        <label>Фамилия: <input type="text" name="surname"></label><br>
        <label>Имя: <input type="text" name="name"></label><br>
        <label>Возраст: <input type="text" name="age"></label><br>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>
