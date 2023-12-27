<?php

namespace App\Entity;

use PDO;
use PDOException;

class Connect
{
    public const HOST = "mysql";
    public const USER = "root";
    public const DBNAME = "todo";
    public const PASSWD = "root";

    private static PDO $instance;

    public static function getInstance(): PDO
    {
        if (empty(self::$instance)) {
            try {
                self::$instance = new PDO(
                    "mysql:host=" . self::HOST . ";dbname=" . self::DBNAME,
                    self::USER,
                    self::PASSWD
                );
            } catch (PDOException $exception) {
                die("Erro ao Conectar!");
            }
        }
        return self::$instance;
    }
}
