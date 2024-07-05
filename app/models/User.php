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

        try {
            $db = Database::getInstance();
            $pdo = $db->getConnection();

            return $pdo->query('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return [];
        }

    }

    public function getId(int $id): array
    {

        try {
            $db = Database::getInstance();
            $pdo = $db->getConnection();
            $requestDB = $pdo->prepare('SELECT * FROM users WHERE id = ?');
            $requestDB->execute([$id]);

            return $requestDB->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return [];
        }
    }

    public function post(): bool
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $status = $_POST['status'];

        try {
            $db = Database::getInstance();
            $pdo = $db->getConnection();

            return $pdo->query("INSERT INTO users (name, email, gender, status) VALUES('$name','$email','$gender','$status')");
        } catch (PDOException $e) {
            return false;
        }
    }

    public function update(int $id): bool
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $status = $_POST['status'];

        try {
            $db = Database::getInstance();
            $pdo = $db->getConnection();
            $requestDB = $pdo->prepare("UPDATE users SET name = ?, email = ?, gender = ?, status = ? WHERE id = ?");

            return $requestDB->execute([$name, $email, $gender, $status, $id]);
        } catch (PDOException $e) {
            return false;
        }

    }

    public function delete(int $id): bool
    {
        try {
            $db = Database::getInstance();
            $pdo = $db->getConnection();
            $requestDB = $pdo->prepare("DELETE FROM users WHERE id = ?");

            return $requestDB->execute([$id]);
        } catch (PDOException $e) {
            return false;
        }
    }

}