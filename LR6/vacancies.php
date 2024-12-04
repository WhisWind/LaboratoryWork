<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '../LR6/header.php');
require_once(__DIR__ . "/.core/logic.php");

$results = Logic::getData();

?>

<body>
    <div class="container mb-5">
        <div class="text-center"><h1>Вакансии</h1></div>
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>Фото</th>
                <th>Название </th>
                <th>Работодатель </th>
                <th>Текст </th>
                <th>Предлагаемая зарплата </th>
            </tr>
            </thead>
            <tbody>
            <?php if (!empty($results)): ?>
                <?php foreach ($results as $row): ?>
                    <tr>
                        <td><b><?= htmlspecialchars($row['id']) ?></b></td>
                        <th scope="row"><img src="./inc/catalog_images/<?= htmlspecialchars($row['paint_vacancie']) ?>" alt="Фото <?= htmlspecialchars($row['name']) ?>" style="max-width: 200px;"></th>
                        <td><?= htmlspecialchars($row['name']) ?></td>
                        <td><?= htmlspecialchars($row['landlord']) ?></td>
                        <td><?= htmlspecialchars($row['text']) ?></td>
                        <td><?= htmlspecialchars($row['salary']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">Нет результатов</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
        <a class="btn butn-primary" type="button" href="add.php">Добавить</a>
    </div>
</body>

<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../LR6/footer.php');
?>

