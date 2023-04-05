<?php

function manageZodiacSign($birthdate)
{
    $zodiac = '';
    list($year, $month, $day) = explode('-', $birthdate);

    if (($month == 3 && $day > 20) || ($month == 4 && $day < 20)) {
        $zodiac = "Bélier";
    } elseif (($month == 4 && $day > 19) || ($month == 5 && $day < 21)) {
        $zodiac = "Taureau";
    } elseif (($month == 5 && $day > 20) || ($month == 6 && $day < 21)) {
        $zodiac = "Gémeaux";
    } elseif (($month == 6 && $day > 20) || ($month == 7 && $day < 23)) {
        $zodiac = "Cancer";
    } elseif (($month == 7 && $day > 22) || ($month == 8 && $day < 23)) {
        $zodiac = "Lion";
    } elseif (($month == 8 && $day > 22) || ($month == 9 && $day < 23)) {
        $zodiac = "Vierge";
    } elseif (($month == 9 && $day > 22) || ($month == 10 && $day < 23)) {
        $zodiac = "Balance";
    } elseif (($month == 10 && $day > 22) || ($month == 11 && $day < 22)) {
        $zodiac = "Scorpion";
    } elseif (($month == 11 && $day > 21) || ($month == 12 && $day < 22)) {
        $zodiac = "Sagittaire";
    } elseif (($month == 12 && $day > 21) || ($month == 1 && $day < 20)) {
        $zodiac = "Capricorne";
    } elseif (($month == 1 && $day > 19) || ($month == 2 && $day < 19)) {
        $zodiac = "Verseau";
    } elseif (($month == 2 && $day > 18) || ($month == 3 && $day < 21)) {
        $zodiac = "Poisson";
    }

    return $zodiac;
}
