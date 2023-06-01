<?php

function isPalindrome($string)
{
    if (preg_match('/^\\s\\S*\\s$/u', $string)) {
        return true;
    } else {
        $string = preg_replace('/[^a-zA-Z0-9]/', '', $string);
        for ($i = 0; $i < strlen($string); $i++) {
            if (!(strcasecmp($string[$i], $string[(strlen($string) - 1 - $i)]) == 0)) {
                return false;
                break;
            }
        }
        return true;
    }
}
