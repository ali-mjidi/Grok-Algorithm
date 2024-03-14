<?php
    function binary_search($array, $item) {
        $low = 0;
        $high = sizeof($array) - 1;

        while ($low <= $high) {
            $mid = floor(($low + $high) / 2);
            $guess = $array[$mid];
            
            if ($guess < $item) {
                $low = $mid++;
            } else if ($guess > $item) {
                $high = $mid--;
            } else {
                return $mid;
            }
        }

        return NULL;
    }

    $array = range(1, 100);
    echo binary_search($array, 99);

?>