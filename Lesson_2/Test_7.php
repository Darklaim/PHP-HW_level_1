<?php

// Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
// 22 часа 15 минут

$hours = date('H');
$minutes = date('m');
$endingHours = array('час', 'часа', 'часов');
$endingMinutes = array('минута', 'минуты', 'минут');
echo $hours . ' ' . getTimeHours($hours, $endingHours) . ' ' .
     $minutes . ' ' . getTimeMinutes($minutes, $endingMinutes);

 /* function getTimeHours($number, $endingHours) {
    if ($number = 0 && $number >= 5 || $number <= 20) {
        return $endingHours[2];
    }
    else if ($number == 1 && $number == 21) {
        return $endingHours[0];
    }
    else ($number >= 2 || $number <= 4 && $number >= 22 || $number <= 24) {
        $endingHours[1]
    }; */
    function getTimeHours($number, $endingHours) {
        if ($number >= 11 && $number <= 14) {
            $endingh = $endingHours[2];
        } 
        else {
        $i = $number % 10;
        switch ($i) {
            case 1:
            $endingh = $endingHours[0];
                break;
            case 2:
            $endingh = $endingHours[1];
                break;
            case 3:
            $endingh = $endingHours[1];
                break;
            case 4:
            $endingh = $endingHours[1];
                break;
            default:
            $endingh = $endingHours[2];
        }
    }
    return $endingh;
}

/* function getTimeMinutes($number, $endingMinutes){
    if ($number == 0 
    && $number >= 5 || $number <= 20 
    && $number >= 25 || $number <= 30 
    && $number >= 35 || $number <= 40
    && $number >= 45 || $number <= 50
    && $number >= 55 || $number <= 59)
     {
        return $endingMinutes[2];
    }
    else if ($number == 1 && $number == 21  && $number == 31  && $number == 41   && $number == 51) {
        return $endingMinutes[0];
    }
    else ($number >= 2 || $number <= 4 
    && $number >= 22 || $number <= 24 
    && $number >= 32 || $number <= 34
    && $number >= 42 || $number <= 44
    && $number >= 52 || $number <= 54) {
         $endingMinutes[1]
    };
} */
function getTimeMinutes($number, $endingMinutes){
    if ($number >= 11 && $number <= 14) {
        $endingm = $endingHours[2];
    } 
    else {
    $i = $number % 10;
    switch ($i) {
            case 1:
            $endingm = $endingMinutes[0];
                break;
            case 2:
             $endingm = $endingMinutes[1];
                break;
            case 3:
            $endingm = $endingMinutes[1];
                break;
            case 4:
            $endingm = $endingMinutes[1];
                break;
            default:
            $endingm = $endingMinutes[2];
        }   
    }
   return $endingm;
}

