<?php

function addDigits($num)
{
    $str = strval($num);

    if (strlen($str) >= 2) {
        for ($i = 0; $i <= strlen($str); $i++) {
            $number += intval($str[$i]);
        }
        return addDigits($number);
    }
    return $num;
}
