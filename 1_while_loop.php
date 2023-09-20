<?php
function printEvenNumbers($start, $end, $step) {
    if ($start % 2 !== 0) {
        $start += 1; // Ensure the starting number is even
    }

    while ($start <= $end) {
        echo $start . " ";
        $start += $step;
    }
}

// Call the function to print even numbers from 1 to 20 with a step of 2
printEvenNumbers(1, 20, 2);
?>