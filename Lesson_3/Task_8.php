<?php

// Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».

$region = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин', 'Коломна'],
    'Санкт-Петербург'    => ['Всеволжск', 'Павловск', 'Кронштадт'],
  ];
  regArray($region);
  function regArray($region) {
    foreach ($region as $key => $val) {
      echo "$key:<br>";
      $kArr = [];
      foreach ($val as $kVal) {
        if (substr($kVal, 0, 2) == 'К') $kArr[] = $kVal;
      }
      echo implode(', ', $kArr) . '<br>';
    }
  }