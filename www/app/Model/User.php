<?php

namespace App\Model;

use App\Entity\Connect;
use App\Entity\UserEntity;

class User
{
    public function save(UserEntity $user): bool
    {
        $user->password = password_hash($user->password, PASSWORD_DEFAULT);

        $pdo = Connect::getInstance()->prepare(
            "INSERT INTO user (email, password) values (:email, :password)"
        );
        $pdo->bindParam(":email", $user->email);
        $pdo->bindParam(":password", $user->password);

        if (!$pdo->execute()) {
            return false;
        }

        return true;
    }

    public function login(UserEntity $user)
    {
        $pdo = Connect::getInstance()->prepare(
            "SELECT id, password FROM user WHERE email = :email"
        );
        $pdo->bindParam(":email", $user->email);
        $pdo->execute();

        $row = $pdo->fetch();

        if (!$row || !password_verify($user->password, $row['password'])) {
            return false;
        }

        setcookie('user_token', $row['id'], time() + (86400 * 30), "/"); // 86400 = 1 dia
        return true;
    }
}
