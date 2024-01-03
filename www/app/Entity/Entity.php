<?php

namespace App\Entity;

use App\Entity\Enum\Lane;

class Entity extends \stdClass
{
    public Lane $lane = Lane::TODO;
}
