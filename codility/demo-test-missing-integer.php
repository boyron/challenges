<?php

// O(n)

function solution($A) {
    // write your code in PHP7.0
    
    $return = 1;
    $input_array_length = count($A);
    $b = array_fill(1, $input_array_length+1, false);
    
    foreach ($A as $i => $v) {
        if ($v > 0 && $v <= $input_array_length+1) {
            $b[$v] = true;
        }
    }
    
    foreach ($b as $i => $v) {
        if ($v === false) {
            $return = $i;
            break;
        }
    }
    
    return $return;
}
