<?php

// Настройки подключения
    $host = "127.0.0.1";
    $db = "recruitment_agenc";
    $user = "root";
    $pass = "";

    // Формируем DSN
    $dsn = "mysql:host=$host;dbname=$db";
function createConnection($dsn, $user, $pass): ?PDO
{
    try {
        // Создаем объект PDO
        $pdo = new PDO($dsn, $user, $pass);
        // Устанавливаем режим обработки ошибок
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $exception) {
        // В случае ошибки выводим сообщение
        echo "Ошибка подключения: " . $exception->getMessage();
        return null;
    }
}

$pdo = createConnection($dsn, $user, $pass);

$landlord = isset($_GET['landlord']) ? $_GET['landlord'] : null;
$description = isset($_GET['description']) ? $_GET['description'] : null;
$salary = isset($_GET['salary']) ? $_GET['salary'] : null;
$vacancy = isset($_GET['vacancy']) ? $_GET['vacancy'] : null;

$sql = "SELECT vacancies.id, vacancies.paint_vacancie, vacancies.name, employers.landlord as 'landlord',
        vacancies.text, vacancies.salary    
        FROM vacancies
        INNER JOIN employers ON vacancies.employer_id = employers.id";

$filters = [];
$params = [];

// Фильтр по арендодателю
if ($landlord) {
    $filters[] = "employers.id = :landlord";
    $params[':landlord'] = $landlord;
}

// Фильтр по описанию
if ($description) {
    $filters[] = "vacancies.text LIKE :description";
    $params[':description'] = '%' . $description . '%';
}

// Фильтр по зарплате
if ($salary) {
    // Преобразуем зарплату в числа, ожидается формат "100,000-150,000 руб."
    $filters[] = "vacancies.salary LIKE :salary";
    $params[':salary'] = '%' . $salary . '%';
}

// Фильтр по вакансии
if ($vacancy) {
    $filters[] = "vacancies.name LIKE :vacancy";
    $params[':vacancy'] = '%' . $vacancy . '%';
}

// Если есть фильтры, добавляем их в SQL-запрос
if (!empty($filters)) {
    $sql .= " WHERE " . implode(" AND ", $filters);
}

// Подготавливаем запрос
$stmt = $pdo->prepare($sql);

// Привязываем параметры
foreach ($params as $key => $value) {
    $stmt->bindValue($key, $value);
}

// Выполняем запрос
$stmt->execute();

// Получаем результаты
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

$request = "SELECT employers.id, employers.landlord FROM `employers`";
$stmt = $pdo->prepare($request);
$stmt->execute();

$countries = $stmt->fetchAll(PDO::FETCH_ASSOC);