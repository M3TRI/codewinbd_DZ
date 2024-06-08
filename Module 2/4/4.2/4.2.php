<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4.2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        form {
            margin-top: 20px;
        }

        label, input[type="text"], input[type="email"], input[type="submit"] {
            display: block;
            margin-bottom: 10px;
            width: 100%;
        }

        input[type="text"], input[type="email"], input[type="submit"] {
            padding: 5px;
            border: 1px solid #ccc;
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

        #errorMessages {
            color: red;
            margin-top: 10px;
        }

        #confirmationMessage {
            color: green;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Форма регистрации</h2>
        <form method="post">
            <label for="firstName">Имя:</label>
            <input type="text" name="firstName" id="firstName" required>
            <label for="lastName">Фамилия:</label>
            <input type="text" name="lastName" id="lastName" required>
            <label for="email">Почта:</label>
            <input type="email" name="email" id="email" required>
            <input type="submit" name="submit" value="Submit">
            <div id="errorMessages">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $firstName = trim($_POST["firstName"]);
                $lastName = trim($_POST["lastName"]);
                $email = trim($_POST["email"]);

                $errors = array();

                if (empty($firstName)) {
                    $errors[] = "Укажите имя!";
                }
                if (empty($lastName)) {
                    $errors[] = "Укажите фамилию!";
                }
                if (empty($email)) {
                    $errors[] = "Укажите прочту!";
                }

                if (empty($errors)) {
                    echo "Спасибо за регестрацию, $lastName $firstName!";
                } else {
                    foreach ($errors as $error) {
                        echo $error . "<br>";
                    }
                }
            }
            ?>
            </div>
        </form>
    </div>
</body>
</html>