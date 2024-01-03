<?php

namespace App\Helpers;

class RandomHelper
{
    public static function generateRandomNumber($min, $max)
    {
        return random_int($min, $max);
    }

    public static function getRandomCharacters($length)
    {
        $string = '0123456789';
        $shuffled = str_shuffle($string);
        return substr($shuffled, 0, $length);
    }
}
