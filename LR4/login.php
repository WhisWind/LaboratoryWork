<?php
session_start();
require_once(__DIR__ . '/.core/user_action.php');
require_once($_SERVER['DOCUMENT_ROOT']. '/LR4/header.php');

if (!empty($_SESSION['USER_ID'])) {
    header('location: recruitment_agency.php');
    die();
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $error = UserActions::signIN();
    if ($error == 'true') {
        $_SESSION['num_user_password'] = 0;
        header('location: recruitment_agency.php');
        die();
    }
}
?>

<div class="main py-5">
    <div class="container">
        <div class="col-md-5 mx-auto">
            <div class="alert alert-danger error-msg d-none"></div>
            <form action="login.php" method="POST">
                <input type="hidden" name="action" value="signin">
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="example@example.com">
                </div>
                <div class="mb-3">
                    <label for="password">Пароль</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="**********">
                </div>
                <div class="col-md-12 text-center ">
                    <button type="submit" class=" button_color btn btn-block mybtn butn-primary tx-tfm login-btn " style="" >Войти</button>
                </div>
                <div class="form-group">
                    <p class="text-center" style="color: #be1524"><?= $error ?></p>
                </div>
                <div class="form-group">
                    <p class="text-center">Ещё нет аккаунта? <a href="signup.php " class="text-color">Зарегистрируйтесь</a></p>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once($_SERVER['DOCUMENT_ROOT']. '/LR4/footer.php'); // Подключение подвала ?>