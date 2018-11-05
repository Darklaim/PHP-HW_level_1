<?php

// Реализовать функцию с тремя параметрами: 
// function mathOperation($arg1, $arg2, $operation), 
// где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
// В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) 
// и вернуть полученное значение (использовать switch).

$arg1 = rand (0, 10);
$arg2 = rand (0, 10);
mathOperation($arg1, $arg2,'sum');
mathOperation($arg1, $arg2, 'dif');
mathOperation($arg1, $arg2,'mult');
mathOperation($arg1, $arg2, 'div');
function mathOperation($arg1, $arg2, $operation){
    switch ($operation){
        case 'sum': {
            function sum($arg1, $arg2){
                return $arg1 + $arg2;
            }
            $sum = sum($arg1, $arg2);
            echo $arg1.' + '.$arg2.' = '.$sum.'<br>';
            break;
        }
        case 'dif': {
            function dif($arg1, $arg2){
            return $arg1 - $arg2;
            }
            $dif = dif($arg1, $arg2);
            echo $arg1.' - '.$arg2.' = '. $dif.'<br>';
            break;
        }
        case 'mult': {
            function mult($arg1, $arg2){
                return $arg1 * $arg2;
            }
            $mult = mult($arg1, $arg2);
            echo $arg1.' * '.$arg2.' = '.$mult.'<br>';
            break;
        }
        case 'div': {
            function div($arg1, $arg2){
                if ($arg2 == 0) return 'На 0 делить нельзя';
                return $arg1 / $arg2;
            }
            $div = div($arg1, $arg2);
            echo $arg1.' / '.$arg2.' = '.$div.'<br>';
        }
    }
}