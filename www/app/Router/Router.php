<?php

namespace App\Router;

use App\Helpers;
use App\Http\Controller\Home;
use App\Http\Controller\Kanban;

class Router
{
    public function __construct()
    {
        $this->route();
    }

    public function route()
    {
        switch ((new Helpers())->url()) {
            case '/kanban/insert':
                (new Kanban())->insert();
                break;
            default:
                (new Home());
                break;
        }
    }
}
