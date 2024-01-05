<?php

namespace App\Http\Controller;

class Home
{
    public function __construct()
    {
        $this->index();
    }

    public function index(): string
    {
        if (!isset($_SESSION)) {
            session_set_cookie_params(0, '/');
            session_start();
        }
        return require_once __DIR__ . "/../../View/home.php";
    }
}
