<?php
    function download_and_check_image()
    {   
        if($_FILES['upload']['tmp_name']) 
        {
            $filePath  = $_FILES['upload']['tmp_name'];
            $errorCode = $_FILES['upload']['error'];

                // Проверим на ошибки
            if ($errorCode !== UPLOAD_ERR_OK || !is_uploaded_file($filePath)) {
                $errorMessages = [
                    UPLOAD_ERR_INI_SIZE   => 'Размер файла превысил значение upload_max_filesize в конфигурации PHP.',
                    UPLOAD_ERR_FORM_SIZE  => 'Размер загружаемого файла превысил значение MAX_FILE_SIZE в HTML-форме.',
                    UPLOAD_ERR_PARTIAL    => 'Загружаемый файл был получен только частично.',
                    UPLOAD_ERR_NO_FILE    => 'Файл не был загружен.',
                    UPLOAD_ERR_NO_TMP_DIR => 'Отсутствует временная папка.',
                    UPLOAD_ERR_CANT_WRITE => 'Не удалось записать файл на диск.',
                    UPLOAD_ERR_EXTENSION  => 'PHP-расширение остановило загрузку файла.',
                ];

                $unknownMessage = 'При загрузке файла произошла неизвестная ошибка.';
                $outputMessage = isset($errorMessages[$errorCode]) ? $errorMessages[$errorCode] : $unknownMessage;
                die($outputMessage);
            }

            $fi = finfo_open(FILEINFO_MIME_TYPE);
            // Получим MIME-тип
            $mime = (string) finfo_file($fi, $filePath);
            finfo_close($fi);

            if (strpos($mime, 'image') === false) die('Можно загружать только изображения.');
            $image = getimagesize($filePath);
            $limitBytes  = 1024 * 1024 * 5;
            $limitWidth  = 1280;
            $limitHeight = 768;

            if (filesize($filePath) > $limitBytes) die('Размер изображения не должен превышать 5 Мбайт.');
            if ($image[1] > $limitHeight)          die('Высота изображения не должна превышать 768 точек.');
            if ($image[0] > $limitWidth)           die('Ширина изображения не должна превышать 1280 точек.');

            $name = md5_file($filePath);
            $extension = image_type_to_extension($image[2]);
            $format = str_replace('jpeg', 'jpg', $extension);

            // Переместим картинку с новым именем и расширением в папку /pics
            if (!move_uploaded_file($filePath, 'pics/' . $name . $format)) {
                die('При записи изображения на диск произошла ошибка.');
            }
            else {
                return $name.$format;
            }

        }


        
    
    }
?> 