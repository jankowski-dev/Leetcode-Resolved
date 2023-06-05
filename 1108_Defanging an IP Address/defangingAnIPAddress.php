<?php


    function defangIPaddr($address) {
        $newStr = str_replace('.', '[.]', $address);
        return $newStr;
    }