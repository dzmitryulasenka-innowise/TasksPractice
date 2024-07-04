<?php

namespace app\models;

use app\models\Database;
use PDO;
use PDOException;

class User
{
    private int $id;
    private string $name;
    private string $email;
    private string $gender;
    private string $status;

    public function getAll(): array
    {
        $db = Database::getInstance();
        $pdo = $db->getConnection();

        //TODO обработка ошибок при запросах в базу данных
        return $pdo->query('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getId(int $id): array
    {
        $db = Database::getInstance();
        $pdo = $db->getConnection();

        $requestDatabase = $pdo->prepare('SELECT * FROM users WHERE id = ?');
        $requestDatabase->execute([$id]);

        return $requestDatabase->fetch(PDO::FETCH_ASSOC);
    }

    public function post(): void
    {
        $db = Database::getInstance();
        $pdo = $db->getConnection();

        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $status = $_POST['status'];

        $pdo->query("INSERT INTO users (name, email, gender, status) VALUES('$name','$email','$gender','$status')");
    }

    public function delete(int $id)
    {
        $db = Database::getInstance();
        $pdo = $db->getConnection();

        $rqdb = $pdo->prepare("DELETE FROM users WHERE id = ?");
        $rqdb->execute([$id]);

        //TODO не работает $id в удалении и выборе 1
        //TODO проверить все по мвс
    }


}