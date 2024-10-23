<?php

class Database
{
    //Единственный существующий экземпляр данного класса
    private static $instance = null;

    //Экземпляр подключения к БД
    private $connection = null;

    //Запрещаем создание новых экземпляров снаружи класса
    protected function __construct()
    {

        $this->connection = new \PDO(
            "mysql:host=localhost;dbname=recruitment_agenc",
            "root",
            "",
        [
            //В ходе проблем выбрасывает исключения
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

            // По умолчанию использовать имена столбцов (более наглядно)
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

            //Будет использоваться подготовка на уровне БД
            PDO::ATTR_EMULATE_PREPARES => false
        ]);
    }

    //Запрещаем копировать
    protected function __clone()
    {
    }

    //Запрещаем десериализацию
    public function __wakeup()
    {
        throw new \BadMethodCallException('Unable to deserialize database connection');
    }

    //Создаём экземпляр класса, хранящий подключение к БД
    public static function getInstance(): Database
    {
        if (null === self::$instance) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    //Экземпляр подключения к БД
    public static function connection(): \PDO
    {
        return static::getInstance()->connection;
    }

    //Подготовленное выражение
    public static function prepare($statement): \PDOStatement
    {
        return static::connection()->prepare($statement);
    }

    //ID последней добавленной записи
    public static function lastInsertId(): int
    {
        return intval(static::connection()->lastInsertId());
    }

}
?>