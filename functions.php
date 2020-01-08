<?php

function printArr($arr) {
    foreach ($arr as $val) {
        echo "<p>$val</p>";
    }
}

function largest($arr) {
    $largest = $arr[0];
    foreach ($arr as $val) {
        if($val > $largest) {
            $largest = $val;
        }
    }
    return $largest;
}

function removeDups($arr) {
    //Below is a single line of code for solving function
    //$result = array_unique($arr);
    $result = [];
    foreach($arr as $val) {
        if(!in_array($val, $result)) {
            array_push($result, $val);
        }
    }
    return $result;
}

