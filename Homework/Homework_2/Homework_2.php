<!-- 1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. 
Затем написать скрипт, который работает по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;
Ноль можно считать положительным число -->


<?php
$a= -10;
$b= 5;
if ($a >=0 && $b >= 0){
   echo ($a - $b);
}
else if ($a < 0 && $b < 0){
    echo ($a * $b);
 }
 else {
    echo ($a + $b);
 }
?>


<!-- 2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15. -->
<?php

$a = 13;

switch ($a) {
    case 0:
        echo "0 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15";
        break;
    case 1:
        echo "1 2 3 4 5 6 7 8 9 10 11 12 13 14 15";
        break;
    case 2:
        echo "2 3 4 5 6 7 8 9 10 11 12 13 14 15";
        break;
    case 3:
        echo "3 4 5 6 7 8 9 10 11 12 13 14 15";
        break;
    case 4:
        echo "4 5 6 7 8 9 10 11 12 13 14 15";
        break;
    case 5:
        echo "5 6 7 8 9 10 11 12 13 14 15";
        break;
    case 6:
        echo "6 7 8 9 10 11 12 13 14 15";
        break;
    case 7:
        echo "7 8 9 10 11 12 13 14 15";
        break;
    case 8:
        echo "8 9 10 11 12 13 14 15";
        break;
    case 9:
        echo "9 10 11 12 13 14 15";
        break;
    case 10:
        echo "10 11 12 13 14 15";
        break;
    case 11:
        echo "11 12 13 14 15";
        break;
    case 12:
        echo "112 13 14 15";
        break;
    case 13:
        echo "13 14 15";
        break;
    case 14:
        echo "14 15";
        break;
    case 15:
        echo "15";
        break;
    default:
        echo "Число должно быть от 0 до 15";
        break;
}

$a = 13;

switch ($a) {
    case 0:
        echo ($a++);
    case 1:
        echo ($a++);
    case 2:
        echo ($a++);
    case 3:
        echo ($a++);
    case 4:
        echo ($a++);
    case 5:
        echo ($a++);
    case 6:
        echo ($a++);
    case 7:
        echo ($a++);
    case 8:
        echo ($a++);
    case 9:
        echo ($a++);
    case 10:
        echo ($a++);
    case 11:
        echo ($a++);
    case 12:
        echo ($a++);
    case 13:
        echo ($a++);
    case 14:
        echo ($a++);
    case 15:
        echo ($a++);
        break;
    default:
        echo "Число должно быть от 0 до 15";
        break;
}

?>


<!-- 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return. -->
<?php
// Функция сложения


function sum($a, $b)
{
    return ($a + $b);
}
 echo sum(1, 5);

// Функция вычитания

function minus($a, $b)
{
    return ($a - $b);
}
echo minus(1, 5);

// Функция умножения

function mult($a, $b)
{
    return ($a * $b);
}
echo mult(3, 5);

// Функция деления
function del($a, $b)
{
    return ($a / $b);
}
echo del(3, 5);
?>

 <!-- 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), 
     где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
     В зависимости от переданного значения операции выполнить одну из арифметических операций 
     (использовать функции из пункта 3) и вернуть полученное значение (использовать switch). -->

<?php
function sum($arg1, $arg2)
{
    return ($arg1 + $arg2);
}

function minus($arg1, $arg2)
{
    return ($arg1 - $arg2);
}

function mult($arg1, $arg2)
{
    return ($arg1 * $arg2);
}

function del($arg1, $arg2)
{
    return ($arg1 / $arg2);
}

function mathOperation($arg1, $arg2, $operation) {


    switch ($operation) {
        case 'Plus':
            return sum($arg1, $arg2);
            break;
        case 'Minus':
            return minus($arg1, $arg2);
            break;
        case 'Mult':
            return mult($arg1, $arg2);
            break;
        case 'Del':
            return del($arg1, $arg2);
            break;
        default:
            echo "Введены некорректные данные";
            break;
    }
}

echo mathOperation(2, -3, 'Plus');

?>

<!-- 6. *С помощью рекурсии организовать функцию возведения числа в степень. 
        Формат: function power($val, $pow), где $val – заданное число, $pow – степень. -->
<?php

function  power($val, $pow) {
    if ($pow == 1) {
      return $val;
    } else {
      return $val * power($val, $pow - 1);
    }
  }

  echo power(2,3);
?>


<!-- 7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате 
    с правильными склонениями, например:
    22 часа 15 минут
    21 час 43 минуты -->

<?php
$datetime = getdate(); 
echo $datetime['hours'].":".$datetime['minutes']; 



function getTime() {
$h = date("H")-1;
$m = date("i");
if ($h==1 || $h==21) {
$hours = "час";}
elseif (($h>=2 && $h<=4) || ($h>=22 && $h<=24)) {
$hour = "часа";}
else {$hour = "часов";}
if (($m<20) || ($m>10))
{$min = "минут";}
elseif (($m % 10) === 1) {
$min = "минута";}
elseif ((($m % 10)>=2) && (($m % 10)<=4)) {
$min = "минуты";}
else {
$min = "минут";}
echo $h . $hour . " " . $m . $min;
}

getTime();
?>



