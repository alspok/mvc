<?php

// namespace App\Helpers;
namespace App;

class Helper{

    public static function getSlug($line)
    {
        $line = strtolower($line);
        return $line;
    }
}