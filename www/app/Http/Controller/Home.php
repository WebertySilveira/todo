<?php

namespace App\Http\Controller;

class Home {

    public function __construct()
    {
        $this->index();
    }

    public function index(): string
    {
        return require_once __DIR__ . "/../../View/home.php";
    }
}