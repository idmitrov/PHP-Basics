<form action="#" method="get">
    <label for="text-input">Input string:</label>
    <input type="text" id="text-input" name="inputString" placeholder="1111, 2222, 3333, 4444"/>
    <input type="submit" name="submitted" value="submit"/>
</form>
<?php
/*
    Write a PHP script SumOfDigits.php which receives a comma-separated list of integers from an input form
    and creates a two-column table.
    The first column should contain each of the values from the input.
    The second column should contain the sum of the digits of each value.
    If the value is not an integer number, print "I cannot sum that".
*/

//IF ARE SET
if (isset($_GET['submitted'], $_GET['inputString'])) {
    //IF INPUT IS NOT EMPTY
    if (strlen(trim($_GET['inputString'])) > 0) {
        $input = trim($_GET['inputString']);
        $values = explode(',', $input);
        //PRINT TABLE
        echo '<table border="1">';
            foreach ($values as $value) {
                echo '<tr>'.
                         '<td>'.
                            $value.
                         '</td>'.
                         '<td>';
                            if (is_numeric($value)):
                                $sum = 0;
                                for ($i = 0; $i < strlen($value); $i++) {
                                    $sum += (int)$value[$i];
                                }
                                echo $sum;
                            else:
                                echo 'I can not sum that';
                            endif;
                    echo '</td>'.
                     '</tr>';
            }
        echo '</table>';
   }
}
