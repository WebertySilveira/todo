<?php

namespace App\Entity\Enum;

enum Lane: int
{
    case TODO = 1;
    case DOING = 2;
    case DONE = 3;
}
