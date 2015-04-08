<?php
/*
    Write a PHP script DumpVariable.php that declares a variable.
    If the variable is numeric, print it by the built-in function var_dump().
    If the variable is not numeric, print its type at the input.
*/

function checkType($var) {
    if (is_string($var)) {
        echo gettype($var);
    } else {
        var_dump($var);
    }
}

checkType("hello");
checkType(15);
checkType(1.234);
checkType(array(1, 2, 3));
checkType((object)[2, 34]);