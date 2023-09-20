<?php
function printEvenNumbers($start, $end, $step) {
    for ($i = $start; $i <= $end; $i++) {
        if ($i % 2 == 0) {
            $start++; // Ensure the starting number is even
            echo $i . " ";
            // $i += $step - 1; // Skip the next odd number
        }
    }
}

// Call the function to print even numbers from 1 to 20 with a step of 2
printEvenNumbers(1, 20, 2);
?>