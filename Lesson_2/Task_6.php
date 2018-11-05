<?php

// С помощью рекурсии организовать функцию возведения числа в степень.
// Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

echo power(3, -2) . '<br>';
echo power(3, 0) . '<br>';
echo power(3, 2);
function power($val, $pow){
    if ($pow < 0){
        return power (1/$val, -$pow);
    }
    if ($pow == 0) {
        return 1;
    }
    if ($pow > 0) 
    return $val * power($val, $pow - 1);
}