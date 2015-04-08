<?php
/*
    Write a PHP script SumTwoNumbers.php that decleares two variables, firstNumber and secondNumber.
    They should hold integer or floating-point numbers (hard-coded values).
    Print their sum in the output in the format shown in the examples below.
    The numbers should be rounded to the second number after the decimal point.
    Find in Internet how to round a given number in PHP.
*/

$firstNumber = 2;
$secondNumber = 5;
$sum = $firstNumber + $secondNumber;

//NOTICE number_format RETURN STRING
echo "\$firstNumber + \$secondNumber = " . $firstNumber . " + " . $secondNumber . " = " . number_format((float)$sum, 2, '.', '');

//echo "\$firstNumber + \$secondNumber = " . $firstNumber . " + " . $secondNumber . " = " . round($sum, 2); RETURN NUMBER

function sumNumbers($firstNumber, $secondNumber) {
    $sum = $firstNumber + $secondNumber;
    echo "<br><br>\r\n";
    echo "\$firstNumber + \$secondNumber = " . $firstNumber . " + " . $secondNumber . " = " . number_format((float)$sum, 2, '.', '');
}

sumNumbers(1.567808, 0.356);