<?php

class Helper{

    public static function getSlug($line)
    {
        $line = strtolower($line);
        return $line;
    }
}