<?php 

// Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.

echo replaceSpaces('Жизнь моя жестянка!');
function replaceSpaces($string, $underscore = '_') {
  $array = explode(' ', $string);
  return implode($underscore, $array);
}