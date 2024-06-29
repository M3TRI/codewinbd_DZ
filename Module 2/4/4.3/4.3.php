<?php
session_start();

$selected_language = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['language'])) {
    $selected_language = $_POST['language'];
    $_SESSION['language'] = $selected_language;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4.3</title>
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
        .form-container select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            background-color: #2a2a2a;
            color: #ffffff;
            font-size: 1em;
            cursor: pointer;
        }
        .form-container select option {
            background-color: #2a2a2a;
            color: #ffffff;
        }
        .form-container select option[value=""] {
            color: #aaaaaa;
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
        .form-container button {
            transition: background-color 0.3s ease;
        }

        .form-container button:hover {
            background-color: #367d39;
        }
        .popup {
            display: none;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background-color: #333;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            color: #ffffff;
        }
        .popup.show {
            display: block;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form method="POST" action="" id="languageForm">
            <label for="language">Выберите язык:</label>
            <select name="language" id="language" required>
                <option value="">--Выберите язык--</option>
                <option value="ru" <?php if ($selected_language == 'ru') echo 'selected'; ?>>Русский</option>
                <option value="en" <?php if ($selected_language == 'en') echo 'selected'; ?>>English</option>
                <option value="es" <?php if ($selected_language == 'es') echo 'selected'; ?>>Español</option>
                <option value="fr" <?php if ($selected_language == 'fr') echo 'selected'; ?>>Français</option>
                <option value="de" <?php if ($selected_language == 'de') echo 'selected'; ?>>Deutsch</option>
                <option value="zh" <?php if ($selected_language == 'zh') echo 'selected'; ?>>中文</option>
                <option value="ja" <?php if ($selected_language == 'ja') echo 'selected'; ?>>日本語</option>
                <option value="ko" <?php if ($selected_language == 'ko') echo 'selected'; ?>>한국어</option>
                <option value="it" <?php if ($selected_language == 'it') echo 'selected'; ?>>Italiano</option>
                <option value="pt" <?php if ($selected_language == 'pt') echo 'selected'; ?>>Português</option>
                <option value="hi" <?php if ($selected_language == 'hi') echo 'selected'; ?>>हिन्दी</option>
                <option value="ar" <?php if ($selected_language == 'ar') echo 'selected'; ?>>العربية</option>
                <option value="tr" <?php if ($selected_language == 'tr') echo 'selected'; ?>>Türkçe</option>
                <option value="nl" <?php if ($selected_language == 'nl') echo 'selected'; ?>>Nederlands</option>
                <option value="sv" <?php if ($selected_language == 'sv') echo 'selected'; ?>>Svenska</option>
                <option value="pl" <?php if ($selected_language == 'pl') echo 'selected'; ?>>Polski</option>
                <option value="th" <?php if ($selected_language == 'th') echo 'selected'; ?>>ไทย</option>
            </select>
            <button type="submit">Выбрать</button>
        </form>
    </div>
</body>
</html>