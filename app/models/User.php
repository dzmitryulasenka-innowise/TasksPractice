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

            $resultRequstDB = $pdo->query('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC);
            return [
                'status' => 'success',
                'data' => $resultRequstDB
            ];
        } catch (PDOException $e) {
            return [
                'status' => 'error',
                'message' => $e->getMessage(),
                'code' => $e->getCode()
            ];
        }

    }

    public function getId(int $id): array
    {

        try {
            $db = Database::getInstance();
            $pdo = $db->getConnection();
            $requestDB = $pdo->prepare('SELECT * FROM users WHERE id = ?');
            $requestDB->execute([$id]);

            $resultRequestBD = $requestDB->fetch(PDO::FETCH_ASSOC);
            return [
                'status' => 'success',
                'data' => $resultRequestBD
            ];
        } catch (PDOException $e) {
            return [
                'status' => 'error',
                'message' => $e->getMessage(),
                'code' => $e->getCode()
            ];
        }
    }

    public function post(): array
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $status = $_POST['status'];

        try {
            $db = Database::getInstance();
            $pdo = $db->getConnection();

            $resultRequestDB = $pdo->query("INSERT INTO users (name, email, gender, status) VALUES('$name','$email','$gender','$status')");
            return [
                'status' => 'success',
            ];
        } catch (PDOException $e) {
            return [
                'status' => 'error',
                'message' => $e->getMessage(),
                'code' => $e->getCode()
            ];
        }
    }

    public function update(int $id): array
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $status = $_POST['status'];

        try {
            $db = Database::getInstance();
            $pdo = $db->getConnection();
            $requestDB = $pdo->prepare("UPDATE users SET name = ?, email = ?, gender = ?, status = ? WHERE id = ?");

            $resultRequestDB = $requestDB->execute([$name, $email, $gender, $status, $id]);
            return [
                'status' => 'success',
            ];
        } catch (PDOException $e) {
            return [
                'status' => 'error',
                'message' => $e->getMessage(),
                'code' => $e->getCode()
            ];
        }

    }

    public function delete(int $id): array
    {
        try {
            $db = Database::getInstance();
            $pdo = $db->getConnection();
            $requestDB = $pdo->prepare("DELETE FROM users WHERE id = ?");

            $resultRequestDB = $requestDB->execute([$id]);
            return [
                'status' => 'success',
            ];
        } catch (PDOException $e) {
            return [
                'status' => 'error',
                'message' => $e->getMessage(),
                'code' => $e->getCode()
            ];
        }
    }

}