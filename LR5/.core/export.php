<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../LR5/.core/db.php');

function Export():array
{
    $errors = [''];
    try {
        // Подключаемся к базе данных и получаем данные
        $pdo = Database::connection();
        $query = $pdo->query("SELECT * FROM vacancies");
        $data = $query->fetchAll(PDO::FETCH_ASSOC);

        // Получаем путь, указанный в форме
        $uploadDir = $_SERVER['DOCUMENT_ROOT'] . $_POST['path_to_save'];
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true); // Создание папки, если она не существует
        }

        // Генерация уникального имени для файла, чтобы избежать перезаписи
        $fileName = 'vacancies_exported_' . time() . '.csv';
        $filePath = $uploadDir . $fileName; // Полный путь до созданного файла

        // Открываем файл для записи
        $file = fopen($filePath, 'w');
        //Проверка на открытие
        if ($file === false) {
            $errors[] .= 'Не удалось открыть файл для записи.';
        }

        // Записываем данные в CSV файл
        if (!empty($data)) {
            fputcsv($file, array_keys($data[0])); // Заголовки
            foreach ($data as $row) {
                fputcsv($file, $row); // Данные
            }
        }

        fclose($file); // Закрываем файл
        // Перенаправляем пользователя на worker.php с именем файла в URL
        header("Location: /LR5/worker.php?file={$fileName}");
        exit;
    } catch (Exception $e) {
        $errors[] = 'Ошибка: ' . $e->getMessage();
    }
    return ['success' => false, 'errors' => $errors];
}
?>