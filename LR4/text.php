<?php
require_once($_SERVER['DOCUMENT_ROOT'].'../LR4/header.php');
require_once($_SERVER['DOCUMENT_ROOT'].'../LR4/preset.php');
require_once($_SERVER['DOCUMENT_ROOT'].'../LR4/correction_text.php');
$tableIndex = '';
$text = '';
$corrected = '';
// Проверка, отправлены ли данные формы
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получение текста из POST-запроса
    $text = $_POST['text'] ?? '';
    $corrected = CorrectionText::task5($text);

    $corrected = CorrectionText::task7($corrected);

    list($tableIndex, $corrected) = CorrectionText::task12($corrected);
    $corrected = CorrectionText::task18($corrected);

}
// Проверка, был ли передан параметр 'preset'
if (isset($_GET['preset'])) {
    switch ($_GET['preset']) {
        case '1':
            $text = $text1; // Убедитесь, что $text1 определен в preset.php
            break;
        case '2':
            $text = $text2; // Убедитесь, что $text2 определен в preset.php
            break;
        case '3':
            $text = $text3; // Убедитесь, что $text3 определен в preset.php
            break;
        default:
            break;
    }
}

?>

<div class="container">
    <form class="m-5" action="text.php" method="POST">
        <label class="form-label">Введите текст</label>
        <textarea class="form-control" name="text"><?= htmlspecialchars($text) ?></textarea>
        <button class="btn btn-block butn-primary tx-tfm register-btn mt-2">Отправить</button>
    </form>
    <div class="container">
        <div class="example">
            <div class="linksList">
                <?php
                if(!empty($tableIndex)){
                    echo "<h4>Задание 12</h4>";
                    echo $tableIndex;
                }
                ?>
            </div>
        </div>
        <div class="text">

            <?php
            if(!empty($corrected)){
                echo $corrected;
            } ?>
        </div>
    </div>
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'../LR4/footer.php');
?>
