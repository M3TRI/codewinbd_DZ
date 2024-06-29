<?php
header('Content-Type: application/json');

if (isset($_FILES['file_upload'])) {
    $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/fileupload/img/';
    $arFiles = [];
    foreach ($_FILES['file_upload'] as $field => $arValues) {
        foreach ($arValues as $key => $value) {
            $arFiles[$key][$field] = $value;
        }
    }

    foreach ($arFiles as $key => $file) {

        // Получаем нужные элементы массива file
        $tmpFileName = $file['tmp_name'];
        $uploadErrorCode = $file['error'];

        if ($uploadErrorCode !== UPLOAD_ERR_OK || !is_uploaded_file($tmpFileName)) {
            //Выводим соответствующее $errorCode сообщение об ошибке
            $message = isset($uploadErrorMessages[$uploadErrorCode]) ? $uploadErrorMessages[$uploadErrorCode] : 'При загрузке файла произошла неизвестная ошибка.';
            //Завершаем работу скрипта, выводим сообщение об ошибке
            echo json_encode(['status' => 'error', 'msg' => $message], JSON_UNESCAPED_UNICODE);
            die();
        } else {
            //Добавим проверку на тип файла
            $allowedFormats = ['image/jpeg', 'image/gif', 'image/png'];
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $fileInfo = finfo_file($finfo, $tmpFileName);

            if (in_array($fileInfo, $allowedFormats)) {
                if (move_uploaded_file($file['tmp_name'], $uploadDir . $file['name'])) {
                    echo json_encode(['status' => 'ok', 'msg' => 'Файл загружен в директорию ' . $uploadDir], JSON_UNESCAPED_UNICODE);
                } else {
                    echo json_encode(['status' => 'error', 'msg' => 'Ошибка загрузки файла'], JSON_UNESCAPED_UNICODE);
                }
            } else {
                echo json_encode(['status' => 'error', 'msg' => 'Можно загружать только изображения jpg, png или gif формата'], JSON_UNESCAPED_UNICODE);
            }
        }
    }
}
