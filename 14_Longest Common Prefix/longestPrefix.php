<?php

function longestCommonPrefix($strs)
{
    $prefix = '';
    $word = $strs[0];

    for ($i = 0; $i < strlen($word); $i++) {

        $actuallySymbol = $word[$i];
        foreach ($strs as $elem) {
            if ($elem[$i] !== $actuallySymbol) {
                return (strlen($prefix) > 0) ? mb_substr($prefix, 0, strlen($prefix)) : $prefix;
            }
        }
        $prefix .= $actuallySymbol;
    }
    return $prefix;
}
