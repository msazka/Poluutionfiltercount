<?php

function solution($A) {
    // write your code in PHP7.0
    $goal = 0;
    $filter = 0;
    $sizeOfFactories = sizeof($A); 
    if ($sizeOfFactories >= 1 && $sizeOfFactories <= 30000) 
    {
        foreach ($A as $key => $factoryP) {
        if ($factoryP > 0  && $factoryP < 70000) {
            $goal += $factoryP;
        }
    }
        $goal = $goal / 2;
        /*Divide the array into two halves*/
        $temp = [];
        $count = 0;
        foreach($A as $pollution) {
            if ($count < $sizeOfFactories/2) {
                $temp[] = $pollution / 2;      
            }            
            $count++;
        }
        /*Add up unito we get 16.5*/
        $sum = 0;
        foreach($temp as $key => $val) {
            $sum = $sum + $val;
            $filter++;
        }
        
        if ($sum < $goal) {
            $filter++;
        }
    }
    return $filter;
}

$A = [3,0,5];
solution($A);