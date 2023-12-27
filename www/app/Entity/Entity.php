<?php

namespace App\Entity;

use App\Entity\Enum\Column;

class Entity extends \stdClass
{
    public Column $lane = Column::TODO;
}
