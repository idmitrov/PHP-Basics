<?php

/*
    Write a PHP script PersonalInfo.php. Declare a few variables.
    The first variable should hold your first name,
    the second should hold your last name,
    the third - your age, and the last one should hold your full name (use concatenation).
*/

$firstName = "Pesho";
$lastName = "Georgiev";
$age = 25;
$fullName = $firstName . " " . $lastName;

echo "My name is " . $fullName . " and I am " . $age . " years old";