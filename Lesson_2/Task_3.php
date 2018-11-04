<?php

// Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
// Обязательно использовать оператор return.

$a = rand(0, 10);
$b = rand(0, 10);
function sum($a, $b){
    return $a + $b;
}
function dif($a, $b){
    return $a - $b;
}
function mult($a, $b){
    return $a * $b;
}
function div($a, $b){
    if ($b == 0) return 'На 0 делить нельзя';
    return $a / $b;
}
$sum = sum($a, $b);
echo $a.' + '.$b.' = '.$sum.'<br>';

$dif = dif($a, $b);
echo $a.' - '.$b.' = '.$dif.'<br>';

$mult = mult($a, $b);
echo $a.' * '.$b.' = '.$mult.'<br>';

$div = div($a, $b);
echo $a.' / '.$b.' = '.$div.'<br>';