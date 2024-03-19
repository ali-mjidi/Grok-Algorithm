<?php
    function find_smallest($array) {
        $smallest = $array[0];
        $smallestIndex = 0;

        for ($index = 1; $index < sizeof($array); $index++) {
            if ($array[$index] < $smallest) {
                $smallest = $array[$index];
                $smallestIndex = $index;
            }
        }

        return $smallestIndex;
    }

    function selection_sort($array) {
        $repetitionNumber = sizeof($array);
        $newArray = array();

        for ($i = 0; $i < $repetitionNumber; $i++) {
            $smallest = find_smallest($array);
            array_push($newArray, array_splice($array, $smallest, 1)[0]);
        }

        return $newArray;
    }

    $myArray = [10, 102, 78, 22, 82, 51];
    $sortedArray = selection_sort($myArray);

    print_r($sortedArray);
?>