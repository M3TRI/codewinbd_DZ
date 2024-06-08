<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сумма чисел</title>
    <style>
        body {
            background-color: #222;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #333;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        label, input[type="number"], input[type="submit"] {
            display: block;
            margin-bottom: 10px;
        }

        input[type="number"], input[type="submit"] {
            padding: 5px;
            width: 100%;
            border: none;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form method="post">
        <label for="number1">Число 1:</label>
        <input type="number" name="number1" id="number1" required>
        <br>
        <label for="number2">Число 2:</label>
        <input type="number" name="number2" id="number2" required>
        <br>
        <label for="number3">Число 3:</label>
        <input type="number" name="number3" id="number3" required>
        <br>
        <input type="submit" value="Посчитать сумму">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Получаем значения из POST запроса
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $number3 = $_POST["number3"];

        // Вычисляем сумму чисел
        $sum = $number1 + $number2 + $number3;

        // Выводим сумму на экран
        echo "<p>Сумма чисел: $sum</p>";
    }
    ?>
</body>
</html>