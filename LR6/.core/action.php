<?php
require_once(__DIR__ . "/logic.php");
class Actions
{
    public static function addElement(): array
    {
        if ('POST' != $_SERVER['REQUEST_METHOD'])
        {
            return [];
        }

        $errors = Logic::POSTData(
            $_POST['Profession'] ?? '',
            $_POST['landlord'] ?? '',
            $_POST['textInfo'] ?? '',
            $_POST['minWage'] ?? '',
            $_POST['maxWage'] ?? ''
        );

        return $errors;
    }
}
?>