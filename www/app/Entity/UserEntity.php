<?php

namespace App\Entity;

class UserEntity extends Entity
{
    public int $id;
    public string $email;
    public string $password;
}
