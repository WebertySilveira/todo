<?php

namespace App\Entity\Enum;

enum Column
{
    case TODO;
    case DOING;
    case DONE;

    public function getColumn(): string
    {
        return match($this) {
            Column::TODO => '1',
            Column::DOING => '2',
            Column::DONE => '3',
        };
    }
}
