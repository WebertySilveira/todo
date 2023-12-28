<?php

namespace App\Model;

use App\Entity\Connect;
use App\Entity\Enum\Column;

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

    public function list(Column $lane)
    {
        $lane = $lane->getColumn();

        $pdo = Connect::getInstance()->prepare(
            "SELECT * FROM card WHERE lane = (:lane) group by lane"
        );
        $pdo->bindParam(":lane", $lane);
        $pdo->execute();

        return $pdo->fetchAll(\PDO::FETCH_ASSOC);
    }
}
