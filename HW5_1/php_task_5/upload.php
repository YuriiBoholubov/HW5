<?php
    // 1. Перевірити, чи була натиснута кнопка "submit" на формі
    if(!isset($_POST["submit"])){
        header("Location: index.php");
    }

    global $fileNameNew;
    $fileNameNew = $_POST["fileNameNew"] . "_" . date('Y-m-d_H-i-s');
    $fileName = $_FILES["fileToUpload"]["name"];
    $fileSize = $_FILES["fileToUpload"]["size"];
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $fileExtensions = ['txt', 'pdf', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx','jpg','gif','jpeg','png'];
    $fileDOC=['txt', 'pdf', 'doc', 'docx'];
    $fileIMG=['jpg','gif','jpeg','png'];
    // 3. Перевірити, чи файл вже існує в папці "uploads"
    if(file_exists("uploads/" . $fileName)){
        echo "Файл з ім'ям $fileName вже існує.";
    }

    elseif(!in_array($fileExtension, $fileExtensions )) {
        echo "Цей тип файлу не підтримується.";
    }

    // 5. Перевірити розмір файлу
    elseif($fileSize > 10000000){
        echo "Файл занадто великий. Максимальний розмір файлу - 10MB.";
    }
    else {
        if(in_array( $fileExtension,$fileDOC)){
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "uploads/docs/". $fileNameNew);
            echo "Файл  $fileNameNew успішно завантажено.";
        } elseif(in_array( $fileExtension,$fileIMG)){
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "uploads/images/". $fileNameNew);
            echo "Файл  $fileNameNew успішно завантажено.";
        } else {
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "uploads/". $fileNameNew);
            echo "Файл  $fileNameNew успішно завантажено.";
        }
    }
?>
    <p>
        <a href="index.php">Go home</a>
    </p>

