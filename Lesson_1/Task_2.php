<?php
echo "Hello, World!".'<br>';
$name = "Milosh".'<br>';
echo "$name";
define ('MY_CONST', 28);
echo MY_CONST." "."age".'<br>';

//boolean - Истина и ложь
$bool_false = false;
$bool_true = true;

//integer - Целое число
$intMin = -2147483647;
$intMax = 2147483647;

//double - Переменная с плавающей точкой
$double = 2.4568;

//string - Строка
$string = "text";

//array - Массив
$array = array(); // до версии 5.4
$array54 = []; // в версии 5.4

//Object - Объекты
$date = new \DateTime();

//Resourse - Ресурсы 
$resourse = fopen('test.txt', "w");

//NULL - Ничего
$null = null;

//echo 5 + "4" = 9

$i = 5.7;
$j = (int)$i;
echo $j.'<br>'; //5

$a = 10;
$b = 2;

echo $a + $b; // сложение
echo PHP_EOL;
echo $a - $b; // вычитание
echo PHP_EOL;
echo $a * $b; // умножение
echo PHP_EOL;
echo $a / $b; // деление
echo PHP_EOL;
echo $a % $b; // остаток от деления
echo PHP_EOL;
echo $a ** $b; // возвести в степень
echo PHP_EOL.'<br>';

$z = 2;
//Постинкремент
echo $z++;
echo PHP_EOL;
//Постдекремент
echo $z--;
echo PHP_EOL;
//Преинкремент
echo ++$z;
echo PHP_EOL;
//Предекремент
echo --$z;
echo PHP_EOL.'<br>';

$m = 5;
$n = 5.0;

var_dump($m == $n); // Сравнение по значению
var_dump($m === $n); // Сравнение по значению и типу - "Строгое значение"
var_dump($m > $n); // Больше
var_dump($m < $n); // Меньше
var_dump($m != $n); // Не равно
var_dump($m !== $n); // Не равно без приведения типов
var_dump($m <= $n); // Меньше или равно 
var_dump($m >= $n); // Больше или равно