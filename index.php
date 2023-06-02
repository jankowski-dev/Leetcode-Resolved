<?php
header('Content-Type:text/html;charset=utf-8');
// Controll Error
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ERROR);

$jewels = "aA";
$stones = "aAAbbbb";

    function numJewelsInStones($jewels, $stones) {
        $count = 0;
        for ($i = 0; $i < strlen($jewels); $i++) {
            $count = $count + substr_count($stones, $jewels[$i]);
        }
        return $count;
    }



    print_r(numJewelsInStones($jewels, $stones));