<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1.4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="file_upload">
            <h2>Загрузка файлов</h2>
            <form id="uploadForm" enctype="multipart/form-data">
                <label for="gallery" class="form_label">Фотогалерея</label>
                <input class="form_control" type="file" id="file_upload" name="file_upload[]" multiple><br>
                <button type="button" id="uploadButton" class="btn">Отправить</button>
            </form>
            <div id="response"></div>
        </div>
        <div class="file_manager">
            <h2>Список файлов в /img/</h2>
            <ul>
                <?
                $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/fileupload/img/';
                $arFiles = scandir($uploadDir, 1);
                if(is_array($arFiles)) {
                    foreach ($arFiles as $file)
                    {
                        ?>
                        <li><a href="/fileupload/img/<?=$file?>" target="_blank"><?=$file?></a></li>
                        <?
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</div>
<script src="upload.js"></script>
</body>
</html>
