<?php

namespace App;

class Helpers
{
    public function dd(string $value): string
    {
        echo "<pre>";
        var_dump($value);
        echo "</pre>";

        die();
    }

    public function url(): string|false|null
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}
