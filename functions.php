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
