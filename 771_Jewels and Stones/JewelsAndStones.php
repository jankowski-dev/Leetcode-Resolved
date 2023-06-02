<?php

    function numJewelsInStones($jewels, $stones) {
            $count = 0;
    for ($i = 0; $i < strlen($jewels); $i++) {
            $count += substr_count($stones, $jewels[$i]);
    }
    return $count;
    }