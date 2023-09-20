<?php
$n1 = 0;
$n2 = 1;

echo $n1 . " " . $n2 . " ";

for ($i=2; $i<10; $i++){
    $next = $n1+$n2;
    if($next>100){
        break;
    }
    echo $next . " ";
    $n1 = $n2;
    $n2 = $next;
}