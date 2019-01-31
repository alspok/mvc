<?php

namespace App\Helpers;

class Helper{

    public static function getSlug($line)
    {
        $line = strtolower($line);
        return $line;
    }
}