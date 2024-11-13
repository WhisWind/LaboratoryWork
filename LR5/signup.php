<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../LR5/header.php'); // Подключение шапки
require_once($_SERVER['DOCUMENT_ROOT'] . '../LR5/.core/user_action.php'); // Подключение логики регистрации

$error = []; // Инициализация переменной для результата

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $error = UserActions::signUP();
    if (!isset($error['errors'])) { // Успешная регистрация, перенаправляем на страницу входа
        header('Location: login.php');
        exit();
    }
}

?>

<div class="col-md-5 mx-auto">

    <form action="signup.php" method="POST">
        <input type="hidden" name="action" value="signup">
        <div class="form-group">
            <label for="full_name">ФИО</label>
            <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Иванов Иван Иванович" required
            value="<?= htmlspecialchars($_POST['full_name'] ?? '') ?>">
        </div>
        <div class="form-group">
            <label for="birth">Дата рождения</label>
            <input type="date" name="birth" id="birth" class="form-control" min="1900-01-01" max="<?=date('Y')?>-01-01" placeholder="00.00.0000"  required
            value="<?= htmlspecialchars($_POST['birth'] ?? '') ?>">

        </div>
        <div class="form-group">
            <label for="email">Email (Логин)</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="example@example.com" required
            value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
        </div>
        <div class="form-group">
            <label for="gender">Пол</label>
            <select name="gender" id="gender" class="form-control" required>
                <option value="" disabled <?= empty($_POST['gender']) ? 'selected' : '' ?>>Пол</option>
                <option value="1" <?= (isset($_POST['gender']) && $_POST['gender'] == '1') ? 'selected' : '' ?>>Женский</option>
                <option value="2" <?= (isset($_POST['gender']) && $_POST['gender'] == '2') ? 'selected' : '' ?>>Мужской</option>
            </select>
        </div>
        <div class="form-group">
            <label for="interests" class="form-label">Интересы</label>
            <input type="text" class="form-control" id="interests" name="interests" placeholder="Напишите ваши интересы" required
            value="<?= htmlspecialchars($_POST['interests'] ?? '') ?>">
        </div>
        <div class="form-group">
            <label for="vk">Ссылка на профиль Вконтакте</label>
            <input type="url" name="vk" id="vk" class="form-control" placeholder="https://vk.com/idx" required
            value="<?= htmlspecialchars($_POST['vk'] ?? '') ?>">
        </div>
        <div class="form-group">
            <label for="blood_type">Группа крови</label>
            <select name="blood_type" id="blood_type" class="form-control" required>
                <option value="" disabled <?= empty($_POST['blood_type']) ? 'selected' : '' ?>>Группа крови</option>
                <option value="1" <?= (isset($_POST['blood_type']) && $_POST['blood_type'] == '1') ? 'selected' : '' ?>>0 (I)</option>
                <option value="2" <?= (isset($_POST['blood_type']) && $_POST['blood_type'] == '2') ? 'selected' : '' ?>>A (II)</option>
                <option value="3" <?= (isset($_POST['blood_type']) && $_POST['blood_type'] == '3') ? 'selected' : '' ?>>B (III)</option>
                <option value="4" <?= (isset($_POST['blood_type']) && $_POST['blood_type'] == '4') ? 'selected' : '' ?>>AB (IV)</option>
            </select>
        </div>
        <div class="form-group">
            <label for="factor">Резус-фактор</label>
            <select name="factor" id="factor" class="form-control" required>
                <option value="" disabled <?= empty($_POST['factor']) ? 'selected' : '' ?>>Резус-Фактор</option>
                <option value="plus" <?= (isset($_POST['factor']) && $_POST['factor'] == 'plus') ? 'selected' : '' ?>>Положительный (+)</option>
                <option value="minus" <?= (isset($_POST['factor']) && $_POST['factor'] == 'minus') ? 'selected' : '' ?>>Отрицательный (-)</option>
            </select>
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Совершенно секретно" required>
        </div>
        <div class="form-group">
            <label for="password_confirm">Подтвердите пароль</label>
            <input type="password" name="password_confirm" id="password_confirm" class="form-control" placeholder="Совершенно секретно" required>
        </div>
        <div class="col-md-12 text-center ">
            <button type="submit" class="btn btn-block butn-primary tx-tfm register-btn">
                Зарегистрироваться
            </button>
        </div>
        <div class="form-group">
            <p class="text-center">Уже есть аккаунт? <a href="login.php" class="text-color">Войти в аккаунт</a></p>
        </div>
    </form>

    <?php
    if ($error) {
        if (isset($error['success']) && $error['success']) {
            echo '<div class="alert alert-success">' . $error['message'] . '</div>';
            // Перенаправление на страницу входа
            header('Location: login.php');
            exit();
        } else {
            if (isset($error['errors'])) {
                foreach ($error['errors'] as $errors) {
                    echo '<div class="alert alert-danger">' . $errors . '</div>';
                }
            } else {
                echo '<div class="alert alert-danger">' . $error['message'] . '</div>';
            }
        }
    }
    ?>
</div>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '../LR5/footer.php'); // Подключение шапки ?>
