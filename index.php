<?php
header('Content-Type:text/html;charset=utf-8');
// Controll Error
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ERROR);

function singleNumber($nums) {
    $newNums = asort($nums, SORT_REGULAR);
    return $newNums;
}

$nums = [4,1,2,1,2];


print_r(singleNumber($nums));