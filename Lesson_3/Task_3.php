<?php

/* Объявить массив, в котором в качестве ключей будут использоваться названия областей, 
а в качестве значений – массивы с названиями городов из соответствующей области.
Вывести в цикле значения массива, чтобы результат был таким:
Московская область:
Москва, Зеленоград, Клин
Ленинградская область:
Санкт-Петербург, Всеволожск, Павловск, Кронштадт
Рязанская область … (названия городов можно найти на maps.yandex.ru) */

$region = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Санкт-Петербург'    => ['Всеволжск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['(названия городов можно найти на maps.yandex.ru)']
  ];
  regArray($region);
  function  regArray($region) {
    foreach ($region as $key => $val) {
      echo "$key:<br>";
      echo implode(', ', $val).'<br>';
    }
  }