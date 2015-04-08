<?php
/*
    Write a PHP script NonRepeatingDigits.php that declares an integer variable N,
    and then finds all 3-digit numbers that are less or equal than N (<= N) and consist of unique digits.
    Print "no" if no such numbers exist.
*/

function getNonRepeatingDigits($n) {
    $isNumberFound = false;
    if ($n > 101) {
        for ($firstDigit = 1; $firstDigit < 10; $firstDigit++) {
            for ($secondDigit = 0; $secondDigit < 10; $secondDigit++) {
                for ($thirdDigit = 0; $thirdDigit < 10; $thirdDigit++) {
                    if ($firstDigit != $secondDigit && $secondDigit != $thirdDigit && $thirdDigit != $firstDigit) {
                        $nonRepeatingNumber = (int)($firstDigit . $secondDigit . $thirdDigit);
                        $isNumberFound = true;
                        if ($nonRepeatingNumber <= $n) {
                            echo $nonRepeatingNumber . "\r\n";
                        } else {
                            break;
                        }
                    }
                }
            }
        }
    }
    return $isNumberFound ? "" : "no";
}

echo getNonRepeatingDigits(1234);
//echo getNonRepeatingDigits(145);
//echo getNonRepeatingDigits(15);
//echo getNonRepeatingDigits(247);