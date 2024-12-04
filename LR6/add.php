<?php
require_once($_SERVER['DOCUMENT_ROOT'].'../LR6/header.php');
require_once(__DIR__ . "/.core/action.php");

$errors = [''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = Actions::addElement();
}

$selectedLandlord = htmlspecialchars($_POST['landlord'] ?? '', ENT_QUOTES, 'UTF-8');
?>

<body>
<div class="container mb-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item "><a class="text-color" href="/LR6/vacancies">Вакансии</a></li>
            <li class="breadcrumb-item active" aria-current="page">Новая вакансия</li>
        </ol>
    </nav>
    <form class="row row-cols-lg-auto g-3 align-items-center " name="addStudent" method="POST" action="add.php" enctype="multipart/form-data">
        <div class="col-3">
            <div class="input-group">
                <input type="hidden" name="MAX_FILE_SIZE" value="300000000">
                <input type="file" class="form-control" name="setStudentPhoto" id="setStudentPhoto" title="Фото">
            </div>
        </div>
        <div class="col-3">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Профессия" name="Profession" id="Profession" maxlength="60" title="Имя студента" required
                       value="<?= htmlspecialchars($_POST['Profession'] ?? '') ?>">
            </div>
        </div>
        <div class="col-4">
            <div class="input-group">
                <select class="form-select" aria-label="Группа" name="landlord" id="landlord" title="Группа">
                    <option value="5" <?= $selectedLandlord == '5' ? 'selected' : '' ?>>Андрей</option>
                    <option value="7" <?= $selectedLandlord == '7' ? 'selected' : '' ?>>Иван</option>
                    <option value="8" <?= $selectedLandlord == '8' ? 'selected' : '' ?>>Илья</option>
                    <option value="10" <?= $selectedLandlord == '10' ? 'selected' : '' ?>>Виктор</option>
                    <option value="11" <?= $selectedLandlord == '11' ? 'selected' : '' ?>>Николай</option>
                </select>
            </div>
        </div>
        <div class="col-3">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Текст" name="textInfo" id="textInfo" maxlength="60" title="Образование" required
                       value="<?= htmlspecialchars($_POST['textInfo'] ?? '') ?>">
            </div>
        </div>
        <div class="col-2">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Минимальная зарплата" name="minWage" id="minWage" maxlength="60" title="Электронная почта" required
                       value="<?= htmlspecialchars($_POST['minWage'] ?? '') ?>">
            </div>
        </div>
        <div class="col-2">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Максимальная зарплата" name="maxWage" id="maxWage" maxlength="60" title="Электронная почта" required
                       value="<?= htmlspecialchars($_POST['maxWage'] ?? '') ?>">
            </div>
        </div>
        <div class="col-3"><button class="btn butn-primary " type="submit">Отправить</button>	</div>
    </form>
    <form class = "row row-cols-lg-auto text-center justify-content-center mt-4">
        <div class="col ">
            <p class="text-center" style="color: #be1524"><?= implode('<br>', $errors) ?></p>
        </div>
    </form>
</div>
</body>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'../LR6/footer.php');
?>