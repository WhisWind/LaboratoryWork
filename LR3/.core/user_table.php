<?php
require_once(__DIR__ . "/db.php");
class Usertable
{
    public static function create(
        string $full_name, string $birth, string $email, string $gender, string $interests,
        string $vk, string $blood_type, string $rh_factor, string $password){
        $query = Database::prepare(
            'INSERT INTO register (full_name, birth, email, gender, interests, vk, blood_type, rh_factor, password)'.
            'VALUES (:full_name, :birth, :email, :gender, :interests, :vk, :blood_type, :rh_factor, :password)');
        $query->bindValue(':full_name', $full_name);
        $query->bindValue(':birth', $birth);
        $query->bindValue(':email', $email);
        $query->bindValue(':gender', $gender);
        $query->bindValue(':interests', $interests);
        $query->bindValue(':vk', $vk);
        $query->bindValue(':blood_type', $blood_type);
        $query->bindValue(':rh_factor', $rh_factor);
        $query->bindValue(':password', $password);

        if (!$query->execute()){
            throw new PDOException('При добавлении пользователя возникла ошибка');
        }
    }

    public static function get_by_email(string $email){
        $query = Database::prepare('SELECT * FROM register WHERE email = :email LIMIT 1');
        $query->bindValue(':email', $email);
        $query->execute();

        $user = $query->fetchAll();

        if (!count($user)){
            return null;
        }

        return $user[0];
    }

    public static function get_by_id(int $id){
        $query = Database::prepare('SELECT * FROM register WHERE id = :id');
        $query->bindValue(':id', $id);
        $query->execute();

        $id = $query->fetchAll();

        if (!count($id)){
            return null;
        }

        return $id;
    }


}
?>