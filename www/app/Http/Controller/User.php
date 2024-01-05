<?php

namespace App\Http\Controller;

use App\Entity\UserEntity;

class User
{
    public function __construct()
    {
        $this->index();
    }

    public function index(): string
    {
        return require_once __DIR__ . "/../../View/login.php";
    }

    public function insert()
    {
        $user = new UserEntity();
        $user->email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $user->password = strip_tags($_POST["password"]);


        if (!(new \App\Model\User())->save($user)) {
            http_response_code(400);
        }
    }

    public function login()
    {
        $user = new UserEntity();
        $user->email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $user->password = strip_tags($_POST["password"]);

        if (!(new \App\Model\User())->login($user)) {
            header('Content-Type: application/json');
            http_response_code(400);
            echo json_encode(['status' => 'error', 'message' => 'Falha no login']);
        }

        header('Content-Type: application/json');
        http_response_code(200);
        echo json_encode(['status' => 'success', 'message' => 'Login bem-sucedido']);
    }
}
