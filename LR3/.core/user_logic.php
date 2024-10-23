<?php
require_once(__DIR__ . "/user_table.php");
class UserLogic
{
    public static function signUp(
        string $full_name, string $birth, string $email, string $gender, string $interest,
        string $vk, string $blood_type, string $rh_factor, string $password1, string $password2) :array
    {
        // Валидация данных
        $errors = [];
        if (empty($full_name) || empty($email) || empty($password1)) {
            $errors[] = 'Пожалуйста, заполните все обязательные поля.';
        }
        if ($password1 !== $password2) {
            $errors[] = 'Пароли не совпадают.';
        }

        if(!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
            $errors[] = 'Неправильно указана почта';
        }

        if (!empty(UserTable::get_by_email($email))) {
            $errors[] = 'Пользователь с таким логином уже существует';
        }

        if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_])(?=.*[ -_])[A-Za-z\d\W_]{7,}$/', $password1))
        {
            $errors[] = 'Пароль должен быть длиннее 6 символов и содержать: большие и маленькие латинские буквы, цифры, специальные символы, пробел, дефис, подчеркивание.';
        }

        if (!preg_match('/^[А-ЯЁ][а-яё]+ [А-ЯЁ][а-яё]+( [А-ЯЁ][а-яё]+)?$/u', $full_name))
        {
            $errors[] = 'Вы ввели неполное ФИО или забыли поставить пробелы между словами';
        }

        if (!empty($birth)){
            if (!preg_match('/^(\d{4})-(\d{2})-(\d{2})$/', $birth, $matches)) {
                $errors[] = 'Неправильная запись даты.';
            }else{
                // Разбиваем дату на день, месяц и год
                $year = (int)$matches[1];
                $month = (int)$matches[2];
                $day = (int)$matches[3];

                // Проверяем год
                if ($year < 1880 || $year > date('Y')) {
                    $errors[] .= 'Указанный вами год меньше 1880 или больше '. date('Y') . '.';
                }

                // Проверяем, является ли дата действительной
                if (!checkdate($month, $day, $year)) {
                    $errors[] .= 'Указанной даты не существует.';
                }
            }
        }

        // Если нет ошибок, добавляем пользователя в базу данных
        if (empty($errors)) {
            try {
                Usertable::create($full_name, $birth, $email, $gender, $interest, $vk, $blood_type, $rh_factor, password_hash($password1, PASSWORD_DEFAULT));
                return ['success' => true, 'message' => 'Регистрация прошла успешно!'];
            } catch (PDOException $e) {
                return ['success' => false, 'message' => 'Ошибка: ' . $e->getMessage()];
            }
        } else {
            return ['success' => false, 'errors' => $errors];
        }
    }

    public static function errPass() : string{
        if (!isset($_SESSION['num_user_password'])) {
            $_SESSION['num_user_password'] = 0;
        }

        $_SESSION['num_user_password'] += 1; // Увеличиваем счетчик

        // Проверка на превышение попыток
        if ($_SESSION['num_user_password'] > 2) {
            $_SESSION['blocked_until'] = time() + 3600; // Блокировка на 5 минут (300 секунд)
            return 'Слишком много неудачных попыток. Ваш аккаунт заблокирован на 60 минут.';
        }
        return '';
    }
    public static function signIn(string $email, string $password) : string
    {
        if (!isset($_SESSION['USER_ID'])) {
            $_SESSION['USER_ID'] = null;
        }
        if (static::isAuthorized())
        {
            return 'Вы уже авторизованы';
        }
        $user = UserTable::get_by_email($email);
        if (null == $user){
            return 'Пользователь с таким email не найден';
        }

        // Используем password_verify() для проверки пароля
        if (!password_verify($password, $user['password'])) {
            return 'Неверно указан пароль';
        }

        $_SESSION['USER_ID'] = $user['id'];
        $_SESSION['login'] = $user['email'];
        return '';
    }

    public static function signOUT(){
        unset($_SESSION['USER_ID']);
    }

    public static function isAuthorized() : bool
    {
        return intval($_SESSION['USER_ID']) > 0;
    }

    public static function current(): ?array
    {
        if(!static::isAuthorized()){
            return null;
        }
        return UserTable::get_by_id($_SESSION['USER_ID']);
    }
}
?>