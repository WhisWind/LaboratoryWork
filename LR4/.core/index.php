<?php
//Подключение к БД
require_once($_SERVER['DOCUMENT_ROOT']. '../LR4/.core/db.php');

//Начало сессии
require_once($_SERVER['DOCUMENT_ROOT']. '../LR4/.core/session.php');

//Всё для работы с "пользователями"
require_once($_SERVER['DOCUMENT_ROOT']. '../LR4/.core/user_table.php');
require_once($_SERVER['DOCUMENT_ROOT']. '../LR4/.core/user_action.php');
require_once($_SERVER['DOCUMENT_ROOT']. '../LR4/.core/user_logic.php');
?>


