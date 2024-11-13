<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../LR5/header.php');
$uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/LR5/upload/';

if (isset($_GET['file'])) {
    $fileName = basename($_GET['file']); // Защита от попыток проникновения через пути
    $filePath = $uploadDir . $fileName;

    if (file_exists($filePath)) {
        // Если файл существует, отображаем ссылку для скачивания, обернув её в div с классом
        echo "<div class='download-link-container'><a href='/LR5/upload/{$fileName}' download='{$fileName}'>Ссылка на скачивание файла</a></div>";
    } else {
        echo '<div class="download-link-container">Файл не найден</div>';
    }
} else {
    echo '<div class="download-link-container">Имя файла не указано</div>';
}

?>
