<?php
    function linear_search($array, $item) {
        for ($index = 0; $index < sizeof($array); $index++) {
            if ($array[$index] === $item) return $index;
        }

        return NULL;
    }

    $myArray = range(1, 100);
    echo linear_search($myArray, 99);
?>