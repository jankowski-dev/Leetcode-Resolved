<?php

  function thirdMax($nums) {
    $unique_nums = array_unique($nums);
    rsort($unique_nums);
    $count = count($unique_nums);
    if ($count >= 3) {
        return $unique_nums[2];
    } elseif ($count == 2) {
        return $unique_nums[0];
    } elseif ($count == 1) {
        return $unique_nums[0];
    }
    };