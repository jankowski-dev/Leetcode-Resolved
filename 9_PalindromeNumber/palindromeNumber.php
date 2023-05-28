<?php

function isPalindrome($x)
{
    $variableString = strval($x);
    $countNumber = strlen(strval($x)) - 1;

    for ($i = 0; $i <= $countNumber; $i++) {
        if ($variableString[$i] !== $variableString[$countNumber - $i]) {
            return false;
        }
    }
    return true;
}
