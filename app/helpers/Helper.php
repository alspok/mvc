<?php

// namespace App\Helpers;
namespace App\Helper\Helper;

class Helper{

    public static function getSlug($line)
    {
        $line = strtolower($line);
        return $line;
    }
}