<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../LR5/.core/import.php');
$errorMessages = [];

// Проверка метода запроса и наличия файла
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES['csv_file'])) {
    $errorMessages = Import(); // Предполагаем, что Import() возвращает массив ошибок
}

require_once($_SERVER['DOCUMENT_ROOT'] . '../LR5/header.php');
?>

    <div class="container">
        <form action="import.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="csv_file">Ссылка на файл</label>
                <input type="file" class="form-control" name="csv_file" id="csv_file" required>
            </div>
            <button type="submit" class="btn btn-primary">Загрузить</button>

            <!-- Вывод ошибок, если они есть -->
            <?php if (!empty($errorMessages)): ?>
                <div class="alert alert-danger mt-3">
                    <ul>
                        <?php foreach ($errorMessages as $errorMessage): ?>
                            <li><?= htmlspecialchars($errorMessage) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </form>
    </div>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/LR5/footer.php'); ?>