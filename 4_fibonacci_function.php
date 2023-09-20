<?php
function printFibonacci($count){
$n1 = 0;
$n2 = 1;

echo $n1 . " " . $n2 . " ";

for ($i=2; $i<$count; $i++){
    $next = $n1+$n2;
    echo $next . " ";
    $n1 = $n2;
    $n2 = $next;
}
}
printFibonacci(15);