<?php

namespace App\Model;

use App\Entity\Card;
use App\Entity\Connect;
use App\Entity\Enum\Lane;

class Kanban
{
    public function save(Card $card): bool
    {
        $lane = $card->lane->value;

        $pdo = Connect::getInstance()->prepare(
            "INSERT INTO card (title, description, lane) values (:title, :description, :lane)"
        );
        $pdo->bindParam(":title", $card->title);
        $pdo->bindParam(":description", $card->description);
        $pdo->bindParam(":lane", $lane);

        if (!$pdo->execute()) {
            return false;
        }

        return true;
    }

    public function list(Lane $lane)
    {
        $lane = $lane->value;

        $pdo = Connect::getInstance()->prepare(
            "SELECT * FROM card WHERE lane = (:lane)"
        );
        $pdo->bindParam(":lane", $lane);
        $pdo->execute();

        return $pdo->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function delete(Card $card)
    {
        $pdo = Connect::getInstance()->prepare(
            "DELETE FROM card where id = (:id);"
        );
        $pdo->bindParam(":id", $card->id);

        if (!$pdo->execute()) {
            return false;
        }

        return true;
    }

    public function update(Card $card)
    {
        $lane = $card->lane->value;

        $pdo = Connect::getInstance()->prepare(
            "UPDATE card SET lane = (:lane) where id = (:id);"
        );
        $pdo->bindParam(":id", $card->id);
        $pdo->bindParam(":lane", $lane);

        if (!$pdo->execute()) {
            return false;
        }

        return true;
    }

    public function updateText(Card $card)
    {
        $pdo = Connect::getInstance()->prepare(
            "UPDATE card SET title = (:title), description = (:description) where id = (:id);"
        );
        $pdo->bindParam(":id", $card->id);
        $pdo->bindParam(":title", $card->title);
        $pdo->bindParam(":description", $card->description);

        if (!$pdo->execute()) {
            return false;
        }

        return true;
    }
}
