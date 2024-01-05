<?php

namespace App\Router;

use App\Helpers;
use App\Http\Controller\Home;
use App\Http\Controller\Kanban;
use App\Http\Controller\User;

class Router
{
    public function __construct()
    {
        $this->route();
    }

    public function route()
    {
        switch ((new Helpers())->url()) {
            case '/':
                (new Home());
                break;
            case '/user':
                (new User());
                break;
            case '/user/insert':
                (new User())->insert();
                break;
            case '/user/login':
                (new User())->login();
                break;
            case '/kanban/insert':
                (new Kanban())->insert();
                break;
            case '/kanban/delete':
                (new Kanban())->delete();
                break;
            case '/kanban/update':
                (new Kanban())->update();
                break;
            case '/kanban/updateText':
                (new Kanban())->updateText();
                break;
        }
    }
}
