<?php

function plusOne($digits)
{
    $str = '';
    $numeric = 0;
    $arrayNumber = [];

    foreach ($digits as $number) {
        $str .= strval($number);
    }

    $precision = 0;
    $numeric = bcadd($str, 1, 0);

    $str = strval($numeric);

    for ($i = 0; $i <= strlen($str); $i++) {
        if (isset($str[$i])) {
            array_push($arrayNumber, $str[$i]);
        }
    }

    return $arrayNumber;
}
