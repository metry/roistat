<?php

namespace App\Classes;

class Reverter
{
    const PATTERN = '/[^A-Za-zА-Яа-яёЁ0-9 _]/';

    public function revertPunctuationMarks($str)
    {
        preg_match_all(self::PATTERN, $str, $marks);

        for ($i = 0; $i < strlen($str); $i++) {
            if (preg_match(self::PATTERN, $str[$i])) {
                $str[$i] = array_pop($marks[0]);
            }
        }
        return $str;
    }
}
