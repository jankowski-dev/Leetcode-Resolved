<?php

function singleNumber($nums) {
    $data = [];
    foreach ($nums as $num) {
        if (!in_array($num, $data)) {
            array_push($data, $num);
    } else {
        $index = array_search($num, $data);
        unset($data[$index]);
    }
}
    $result = 0;
    foreach ($data as $number) {
        $result = $number;
    }
    return $result;
}