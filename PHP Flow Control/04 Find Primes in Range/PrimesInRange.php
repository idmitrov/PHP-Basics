<form action="#" method="get">
    <label for="start-index">Start Index:</label>
    <input id="start-index" type="text" name="startIndex"/>
    <label for="end-index">End:</label>
    <input id="end-index" type="text" name="endIndex"/>
    <input type="submit" name="submitted" value="Submit"/>
</form>
<?php

/*
    Write a PHP script PrimesInRange.php that receives two numbers
    – start and end – from an input field and displays all numbers in that range as a comma-separated list.
    Prime numbers should be bolded.
*/

if (isset($_GET['submitted'])) {
    //IF SUBMITTED
    if (!isset($_GET['startIndex'], $_GET['endIndex']) ||
        trim($_GET['startIndex']) === '' ||
        trim($_GET['endIndex']) === '' ||
        !is_numeric(trim($_GET['startIndex'])) ||
        !is_numeric(trim($_GET['endIndex']))) {
        //IF IS NAN OR EMPTY
        echo '<p>Invalid input!</p>';
    } else if ((float)$_GET['startIndex'] % 1 != 0 ||
               (float)$_GET['endIndex'] % 1 != 0) {
        //IF IS FLOATING POINT
        echo '<p>Please use integers numbers only</p>';
    } else if (trim($_GET['startIndex']) > trim($_GET['endIndex'])) {
        //IF START IS GREATER
        echo '<p>START index can not be greater than END index</p>';
    } else if (trim($_GET['startIndex']) === trim($_GET['endIndex'])) {
        //IF BOTH EQUAL
        echo '<p>START index is equal to END index</p>'.
             '<p>result</p>';
             $value = (int)$_GET['startIndex'];
             $isPrime = false;
             //IF GREATER THAN 1
             if ($value > 1) {
                 $isPrime = true;
                 //CHECK IS PRIME
                 for ($i = 2; $i < $value; $i++) {
                     if ($value % $i === 0) {
                         $isPrime = false;
                     }
                 }
             }
             echo $isPrime ? '<p style="font-weight: bold">'.$value.'</p>' : '<p>'.$value.'</p>';
    } else {
        //ELSE INPUT IS VALID
        //SET START/END

        $start = (int)$_GET['startIndex'];
        $end = (int)$_GET['endIndex'];

        //LOOP FROM START TO END
        for ($i = $start; $i <= $end; $i++) {
            $isPrime = false;
            //IF IS GREATER THAN 1 AND NON NEGATIVE
            if ($i > 1) {
                $isPrime = true;
            }
            //CHECK IS PRIME
            for ($j = 2; $j < $i; $j++) {
                if ($i % $j === 0) {
                    $isPrime = false;
                    break;
                }
            }
            //IF IS PRIME
            if ($isPrime) {
                //IS LAST DIGIT? DO NOT ADD COMMA ,
                echo $i < $end ?
                    '<span style="font-weight: bold">'.$i.', '.'</span>' :
                    '<span style="font-weight: bold">'.$i.'</span>';
            } else {
                //ELSE IS NOT PRIME
                //IS LAST DIGIT? DO NOT ADD COMMA ,
                echo $i < $end ?
                    '<span>'.$i.', '.'</span>' :
                    '<span>'.$i.'</span>';
            }
        }
    }
} else {
    //IF NOT SUBMITTED
    echo '<p>Please set START and END</p>';
}