<?php

// Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
// 22 часа 15 минут

$hours = date('H');
$minutes = date('m');
echo $hours . ' ' . getTimeEnding($hours, array('час', 'часа', 'часов')) .' '.
     $minutes . ' ' . getTimeEnding($minutes, array('минута', 'минуты', 'минут'));

function getTimeEnding($number, $endingArray){
    if ($number >= 11 && $number <= 14) {
        $ending = $endingArray[2];
    } 
    else {
        $i = $number % 10;
        switch ($i) {
            case 1:
            $ending = $endingArray[0];
                break;
            case 2:
            $ending = $endingArray[1];
                break;
            case 3:
            $ending = $endingArray[1];
                break;
            case 4:
            $ending = $endingArray[1];
                break;
            default:
            $ending = $endingArray[2];
        }
    }
    return $ending;
}