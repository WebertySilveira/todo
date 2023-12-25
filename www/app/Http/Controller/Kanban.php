<?php

namespace App\Http\Controller;

class Kanban
{
    public function insert(): bool
    {
        $isPost = $_SERVER['REQUEST_METHOD'];

        if ($isPost) {
            echo "teste";
        }
    }
}