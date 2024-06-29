<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Решение квадратного уравнения</title>
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
            width: 300px;
        }
        .form-container label {
            font-size: 1.2em;
            margin-bottom: 10px;
            display: block;
        }
        .form-container input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            background-color: #2a2a2a;
            color: #ffffff;
            font-size: 1em;
        }
        .form-container button {
            width: 100%;
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


        .result-container {
            background-color: #1e1e1e;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 300px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form method="POST">
            <label for="a">Коэффициент a:</label>
            <input type="number" id="a" name="a" required>
            <label for="b">Коэффициент b:</label>
            <input type="number" id="b" name="b" required>
            <label for="c">Коэффициент c:</label>
            <input type="number" id="c" name="c" required>
            <button type="submit">Решить</button>
        </form>
    </div>
</body>
</html>
<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

if ($a != 0) {
    $D = $b * $b - 4 * $a * $c;
    if ($D > 0) {
        $x1 = (-$b + sqrt($D)) / (2 * $a);
        $x2 = (-$b - sqrt($D)) / (2 * $a);
        $solution = "Уравнение имеет два корня: x1 = $x1, x2 = $x2";
    } elseif ($D == 0) {
        $x = -$b / (2 * $a);
        $solution = "Уравнение имеет один корень: x = $x";
    } else {
        $solution = "Уравнение не имеет корней";
    }
} else {
    $solution = "Коэффициент a не может быть равен нулю";
}
?>
<div class="result-container">
    <h2>Результат решения квадратного уравнения</h2>
    <p><?php echo $solution; ?></p>
    <p><a href="javascript:history.back()">Вернуться назад</a></p>
</div>