<?php
function printEvenNumbers($start, $end, $step){
    if($start%2 !== 0){
        $start++;
    }
    do{
        echo $start . " ";
        $start += $step;
    }
    while ($start<=$end);
}

printEvenNumbers(1,20,2);