<?php


    function findRelativeRanks($score) {

        arsort($score);
        $arrayPresent = ["Gold Medal","Silver Medal","Bronze Medal"];
        $arraySorted = [];
        $i = 0;
        $count = 1;

        foreach ($score as $key => $value) {

            if ($i == 0) {
                $arraySorted[$key] = $arrayPresent[$i];
            }
            if ($i == 1) {
                $arraySorted[$key] = $arrayPresent[$i];
            }
            if ($i == 2) {
                $arraySorted[$key] = $arrayPresent[$i];
            }
            if ($i >= 3) {
            $arraySorted[$key] = strval($count);
            }
            $count++;
            $i++;
        }
        ksort($arraySorted);
        return $arraySorted;
    }