<?php
require_once(__DIR__ . "/user_logic.php");
class UserActions
{
  public static function signIN(): string
  {

      if ('POST' != $_SERVER['REQUEST_METHOD'])
      {
        return '';
      }

      if (!isset($_SESSION['blocked_until'])) {
          $_SESSION['blocked_until'] = null; // Инициализация времени блокировки
      }

      if ($_SESSION['blocked_until'] && time() < $_SESSION['blocked_until']) {
          $remainingTime = $_SESSION['blocked_until'] - time();
          return "Ваш аккаунт заблокирован. Осталось ждать: " . ceil($remainingTime) . " секунд.";
      }else{
          $error = UserLogic::signIn($_POST['email'], $_POST['password']);
          if (!empty($error))
          {
              if (!empty( UserLogic::errPass())){
                  return UserLogic::errPass();
              }
              return $error;
          }

          return 'true';
      }
  }

  public static function signUP(): array
  {
      if ('POST' != $_SERVER['REQUEST_METHOD'])
      {
          return [];
      }

      if ('signup' != $_POST['action']){
          return [];
      }

      $errors = UserLogic::signUp(
          $_POST['full_name'], $_POST['birth'], $_POST['email'], $_POST['gender'],  $_POST['interests'],
          $_POST['vk'], $_POST['blood_type'], $_POST['factor'], $_POST['password'], $_POST['password_confirm']
      );
      //if(!count($errors)){
          //header('Location: ' . $_SERVER['PHP_SELF'] . '?success=y');
          //die();
      //}

      return $errors;
  }


}

?>