
<form action="upload.php" method="post" enctype="multipart/form-data">
    <!-- Виберіть файл для завантаження: -->
    <label for="fileToUpload">Виберіть файл для завантаження:<br>
        <input type="file" name="fileToUpload" id="fileToUpload">
    </label>
    <br>
    <label for="fileNameNew">Введіть назву файлу:</label>
    <input type="text" name="fileNameNew" id="fileNameNew"><br>
    <!-- Кнопка для завантаження файлу -->
    <input type="submit" value="Завантажити файл" name="submit">
<h3>Список файлів:</h3>


