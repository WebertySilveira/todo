<?php

namespace App\Http\Controller;

use App\Entity\Card;

class Kanban
{
    public function insert()
    {
        $card = new Card();
        $card->title = $_POST['title'];
        $card->description = $_POST['description'];

        if (!(new \App\Model\Kanban())->save($card)) {
            http_response_code(400);
        }
    }
}
