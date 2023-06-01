<?php

function isPolindrome($str)
{
    for ($i = 0; $i < strlen($str); $i++) {
        if (strcasecmp($str[$i], $str[(strlen($str) - 1 - $i)]) == 0) {
            continue;
        } else {
            return 0;
            break;
        }

    }
    return true;
}
