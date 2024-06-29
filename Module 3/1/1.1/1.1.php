<?php

$filename = 'number.txt';

// Проверяем существует ли файл
if (file_exists($filename)) {
    // Открываем файл для чтения
    $file = fopen($filename, 'r');
    if ($file) {
        // Считываем содержимое файла
        $number = fgets($file);
        fclose($file);

        // Проверяем, является ли содержимое числом
        if (is_numeric($number)) {
            // Возводим число в квадрат
            $squaredNumber = $number * $number;

            // Открываем файл для записи
            $file = fopen($filename, 'w');
            if ($file) {
                // Записываем результат обратно в файл
                fwrite($file, $squaredNumber);
                fclose($file);
                echo "Число успешно возведено в квадрат и записано обратно в файл.";
            } else {
                echo "Ошибка при открытии файла для записи.";
            }
        } else {
            echo "Содержимое файла не является числом.";
        }
    } else {
        echo "Ошибка при открытии файла для чтения.";
    }
} else {
    echo "Файл number не существует.";
}

?>
