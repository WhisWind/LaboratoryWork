<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../LR5/.core/export.php');
$error = '';
if ('POST' == $_SERVER['REQUEST_METHOD'] && 'export' == $_POST['action']){
    $error = Export();
}
require_once($_SERVER['DOCUMENT_ROOT'] . '../LR5/header.php');
?>

<section>
    <div class="container  mt-2 mb-5">
        <form method="post" action="export.php">
            <input type="hidden" name="action" value="export">
            <div class="form-group">
                <label for="path_to_save">Путь сохранения CSV относительно корня сайта</label>
                <input type="text" class="form-control " id="path_to_save" name="path_to_save" placeholder="/LR5/export.csv" required="">
            </div>
            <button type="submit" class="btn btn-primary ">Сохранить</button>
            <div class="form-group">
                <p class="text-center" style="color: #be1524"><?= $error ?></p>
            </div>
        </form>
    </div>
</section>

<?php
require_once($_SERVER['DOCUMENT_ROOT']. '/LR5/footer.php');
?>

