<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../LR5/.core/db.php');

function Import() : array {
    $errors = [];
    $updateCount = 0;
    $insertCount = 0;

    try {
        $fileTmpName = $_FILES['csv_file']['tmp_name'];

        // Создание таблицы, если её не существует
        function creatNewTable() {
            $table_name = "vacancies_imported";
            $create_table_sql = "CREATE TABLE IF NOT EXISTS `$table_name` (
                `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                `guid` VARCHAR(36) UNIQUE NOT NULL,
                `paint_vacancie` VARCHAR(45) NOT NULL DEFAULT 'no_img.png',
                `name` VARCHAR(45) NOT NULL,
                `employer_id` INT(10) UNSIGNED NOT NULL,
                `text` VARCHAR(255) DEFAULT NULL,
                `salary` VARCHAR(50) NOT NULL
            )";

            $pdo = Database::connection();
            $stmt = $pdo->prepare($create_table_sql);
            $stmt->execute(); // Создание таблицы, если её не существует

            return $table_name;
        }

        $table_name = creatNewTable();

        // Проверка ошибок загрузки файла
        if ($_FILES['csv_file']['error'] !== UPLOAD_ERR_OK) {
            $errors[] = 'Ошибка при загрузке файла.';
            return $errors;
        }

        // Проверяем, что файл - это CSV
        if (pathinfo($_FILES['csv_file']['name'], PATHINFO_EXTENSION) !== 'csv') {
            $errors[] = 'Неверный формат файла. Ожидается CSV.';
            return $errors;
        }

        // Открываем файл для чтения
        $handle = fopen($fileTmpName, 'r');
        if (!$handle) {
            $errors[] = 'Не удалось открыть файл.';
            return $errors;
        }

        // Пропускаем заголовок, если он есть
        $header = fgetcsv($handle);

        // Подготовка запросов для вставки и обновления
        $pdo = Database::connection();
        $insertStmt = $pdo->prepare("INSERT INTO $table_name (id, guid, paint_vacancie, name, employer_id, text, salary) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $updateStmt = $pdo->prepare("UPDATE $table_name SET paint_vacancie = ?, name = ?, employer_id = ?, text = ?, salary = ? WHERE guid = ?");

        // Чтение данных из файла и вставка/обновление в таблицу
        while ($row = fgetcsv($handle)) {
            if (count($row) !== 7) { // Проверяем, что строка соответствует нужному количеству столбцов
                continue; // Пропускаем некорректные строки
            }

            // Проверяем, существует ли запись с таким guid
            $stmt = $pdo->prepare("SELECT * FROM $table_name WHERE guid = ?");
            $stmt->execute([$row[1]]);
            $existingRecord = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($existingRecord) {
                // Сравниваем данные и обновляем, если они отличаются
                if (
                    $existingRecord['paint_vacancie'] !== (string)$row[2] ||
                    $existingRecord['name'] !== (string)$row[3] ||
                    $existingRecord['employer_id'] !== (int)$row[4] ||
                    $existingRecord['text'] !== (string)$row[5] ||
                    $existingRecord['salary'] !== (string)$row[6]
                ) {
                    $updateStmt->execute([$row[2], $row[3], $row[4], $row[5], $row[6], $row[1]]);
                    $updateCount += 1;
                }
            } else {
                // Вставляем новую запись, если guid не существует
                $insertStmt->execute([$row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6]]);
                $insertCount += 1;
            }
        }

        fclose($handle);

        $errors[] = "Файл успешно импортирован. Данных добавлено: $insertCount, обновлено: $updateCount.";

    } catch (Exception $e) {
        $errors[] = 'Ошибка: ' . $e->getMessage();
    }

    return $errors;
}
?>
