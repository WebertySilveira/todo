<?php

namespace App\Http\Controller;

use App\Entity\Card;
use App\Entity\Enum\Lane;

class Kanban
{
    public function insert()
    {
        $card = new Card();
        $card->title = strip_tags($_POST['title']);
        $card->description = strip_tags($_POST['description']);

        if (!(new \App\Model\Kanban())->save($card)) {
            http_response_code(400);
        }
    }

    public function delete()
    {
        $card = new Card();
        $card->id = $_POST["id"];
        if (!(new \App\Model\Kanban())->delete($card)) {
            http_response_code(400);
        }
    }

    public function update()
    {
        $card = new Card();
        $card->id = $_POST["id"];
        $card->lane = Lane::from(intval($_POST["lane"]));

        if (!(new \App\Model\Kanban())->update($card)) {
            http_response_code(400);
        }
    }

    public function updateText()
    {
        $card = new Card();
        $card->id = $_POST["id"];
        $card->title = strip_tags($_POST['title']);
        $card->description = strip_tags($_POST['description']);

        if (!(new \App\Model\Kanban())->updateText($card)) {
            http_response_code(400);
        }
    }
}
