<?php

namespace app\models;

use app\models\Database;
use PDO;
use PDOException;
use app\models\User;

class UserDB
{

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

    public function post(User $user): array
    {
        $name = $user->getName();
        $email = $user->getEmail();
        $gender = $user->getGender();
        $status = $user->getStatus();

        try {
            $db = Database::getInstance();
            $pdo = $db->getConnection();

            $pdo->query("INSERT INTO users (name, email, gender, status) VALUES('$name','$email','$gender','$status')");
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

    public function update($user): array
    {
        $name = $user->getName();
        $email = $user->getEmail();
        $gender = $user->getGender();
        $status = $user->getStatus();
        $id = $user->getId();

        try {
            $db = Database::getInstance();
            $pdo = $db->getConnection();
            $requestDB = $pdo->prepare("UPDATE users SET name = ?, email = ?, gender = ?, status = ? WHERE id = ?");

            $requestDB->execute([$name, $email, $gender, $status, $id]);
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