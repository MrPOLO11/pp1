<?php
/**
 * Marcos Rivera
 * Date: 1/6/20
 * http://marcosrivera.greenriverdev.com/328/pp1/index.php
 *
 */

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include "functions.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 1</title>
</head>
<body>
    <h1>Pair Program 1</h1>
    <?php
    $numbers = [7, 9, 8, 9, 8, 8, 6];

    echo "<p>Print original array: </p>";
    printArr($numbers);

    echo "<p>Largest number in the array is: ".largest($numbers)."</p>";

    //$noDups = removeDups($numbers);
    echo "<p>Print non-duplicates array from original array: </p>";
    printArr(removeDups($numbers));

    echo "<p>Use of Distribution method: </p>";
    $numbersA = distribution($numbers);

    $result = "[";
    foreach($numbersA as $key => $val) {
        $result .= $key."=>".$val.",";
    }

    rtrim($result, ",");
    $result .= "]";
    echo "<p>$result</p>";
    ?>
</body>
</html>
