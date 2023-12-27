<?php

namespace App\Model;

use App\Entity\Connect;

class Kanban
{
    public function save($card): bool
    {
        $lane = $card->lane->getColumn();

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
}
