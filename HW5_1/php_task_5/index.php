<?php

include 'form.php';
$images = glob('uploads/images/*');
$docs = glob('uploads/docs/*');
$files= glob('uploads/*');

echo "Список зображень:<br>";
foreach ($images as $image) {
    echo basename($image) . "<br>";
}

echo "<br>Список документів:<br>";
foreach ($docs as $doc) {
    echo basename($doc) . "<br>";
}
echo "Список файлів:<br>";
foreach ($files as $file) {
    echo basename($file) . "<br>";
}
?>
