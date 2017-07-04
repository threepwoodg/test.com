<?php

    /*Домашнее задание
    Базовый блок
    1. Объявите две целочисленные переменные $a и $b и задайте им произвольные начальные значения. Затем напишите
    скрипт, который работает по следующему принципу:
    a. если $a и $b положительные, выведите их разность;
    b. если $а и $b отрицательные, выведите их произведение;
    c. если $а и $b разных знаков, выведите их сумму.
    Ноль можно считать положительным числом.
    2. Присвойте переменной $а значение в промежутке [0..15]. С помощью оператора switch организуйте вывод чисел
    от $a до 15;
    3. Реализуйте основные 4 арифметические операции (+, -, *, %) в виде функций с двумя параметрами. Обязательно
    используйте оператор return.
    4. Реализуйте функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2
    – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции
    выполните одну из арифметических операций (используйте функции из пункта 4) и верните полученное значение
    (используйте switch).
    Продвинутый блок
    5. С помощью рекурсии организуйте функцию возведения числа в степень. Формат: function power($val, $pow),
    где $val – заданное число, $pow – степень.
    6. Напишите функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями,
    например:
    22 часа 15 минут
    21 час 43 минуты
    итд.
    Подсказка: часы и минуты можно узнать с помощью встроенной функции PHP – date.*/

    // *** Functions ***

    function Plus ($x, $y)
    {
        return $x + $y;
    }

    function Minus ($x, $y)
    {
        return $x - $y;
    }

    function Division ($x, $y)
    {
        return $x % $y;
    }

    function Multiplication ($x, $y)
    {
        return $x * $y;
    }

    function mathOperation($x, $y, $z)
    {
        $result = $z;
        switch ($result)
        {
            case 'Plus':
                echo $result = Plus($x, $y);
                break;
            case 'Minus':
                echo $result = Minus($x, $y);
                break;
            case 'Division':
                echo $result = Division($x, $y);
                break;
            case 'Multiplication':
                echo $result = Multiplication($x, $y);
                break;
        }
        return $result;
    }

    function Power($val, $pow)
    {
        if(!$pow) return 1;
        else return $val*Power($val,$pow-1);
    }

    function TheTime($h, $m)
    {
        $result = $h;
        switch ($result)
        {
            case 01 :
                $result = 'час';
                break;
            case 21 :
                $result = 'час';
                break;
            case 02 :
                $result = 'часа';
                break;
            case 03 :
                $result = 'часа';
                break;
            case 04 :
                $result = 'часа';
                break;
            case 22 :
                $result = 'часа';
                break;
            case 23 :
                $result = 'часа';
                break;
            case 24 :
                $result = 'часа';
                break;
            default:
                $result = 'часов';
        }
        
        $rm = $m;
        switch($rm)
        {
            case 1 :
                $rm = 'минута';
                break;
            case 21 :
                $rm = 'минута';
                break;
            case 2 :
                $rm = 'минуты';
                break;
            case 3 :
                $rm = 'минуты';
                break;
            case 4 :
                $rm = 'минуты';
                break;
            case 22 :
                $rm = 'минуты';
                break;
            case 23 :
                $rm = 'минуты';
                break;
            case 24 :
                $rm = 'минуты';
                break;
            default:
                $rm = 'минут';
        }
        return $h . " " . $result . "<br>" . $m . " " . $rm;
    }

    // *** Task 1 ***

    $a = 10;
    $b = 20;

    echo "<h2 style='color: gold'>Operation on a and b (Task 1)</h2>";
    echo "<h4 style='text-decoration: underline'>a = 10, b = 20</h4>";

    if ($a && $b > 0)
        echo $a / $b;
    elseif ($a && $b < 0)
        echo $a * $b;
    elseif ($a || $b < 0)
        echo $a + $b;

    // *** Task 3 ***

    echo "<h2 style='color : deepskyblue'>Operation on two variables (Task 3)</h2>";
    echo "<h4 style='text-decoration: underline'> x = 100, y = 250</h4>";
    echo "<h4>Summary: " . Plus(100,250) . "</h4>";
    echo "<h4>Subtraction: " . Minus(100,250) . "</h4>";
    echo "<h4>Division: " . Division(100,250) . "</h4>";
    echo "<h4>Multiplication: " . Multiplication(100,250) . "</h4>";

    // *** Task 4 ***

    echo "<h2 style='color: greenyellow;'>Operation on two variables and operand (Task 4)</h2>";
    echo "<h4>" . mathOperation(30,40,'Multiplication') . "</h4>";

    // *** Task 5 ***

    echo "<h2 style='color : deepskyblue'>Function POW(Task 5)</h2>";
    echo Power(2,10);
    echo "<br>";

    // *** Task 6 ***

    echo "<h2 style='color: gold'>Function TheTime(Task 6)</h2>";
    echo date('h:i');
    echo "<br>";
    echo TheTime(date('h'), date('i'));

?>