<?php

/*
    Write a PHP script AnnualExpenses.php that receives n years from an input HTML form
    and creates a table (like the one shown below) with random expenses by months and the corresponding years (n years back).
    For example, if N is 10, create a table that shows the expenses for each month for the last 10 years.
    Add a "Total" column at the end, showing the total expenses for the same year.
    The random expenses in the table should be in the range [0…999].
*/


echo '<form action="#" method="get">' .
        '<label for="years">Enter number of years: </label>' .
        '<input type="text" id="years" name="yearsInput" placeholder="Number of years" />' .
        '<input type="submit" name="submitted" value="Show costs" />' .
    '</form>';

if (!isset($_GET['submitted'], $_GET['yearsInput']) ||
    trim($_GET['yearsInput']) === '' ||
    !is_numeric(trim($_GET['yearsInput']))
) {
    echo 'Invalid input!';
} else if (trim($_GET['yearsInput'] == 0)) {
    echo 'Nothing to calculate';
} else {
    date_default_timezone_set('Europe/Sofia');
    $yearsBack = trim($_GET['yearsInput']);
    $fromYear = new DateTime();
    $fromYear = (int)($fromYear->format('Y') - 1);
    $toYear = $fromYear - $yearsBack;

    echo '<table border="1">'.
            '<thead>'.
                '<th>'.
                    'Year'.
                '</th>';
            for ($i = 1; $i <= 12; $i++) {
                $currentMonth = new DateTime('01.'.$i.'.2000');
            echo '<th>'.
                    $currentMonth->format('F').
                 '</th>';
            }
            echo '<th>'.
                    'Total:'.
                '</th>'.
            '</thead>'.
            '<tbody>';
            for ($currentYear = $fromYear; $currentYear > $toYear; $currentYear--) {
            $sum = 0;
            echo '<tr>'.
                    '<td>'.
                        $currentYear.
                    '</td>';
            for ($i = 1; $i <= 12; $i++) {
                $expense = rand(0, 999);
                $sum += $expense;
                echo '<td>'.
                        $expense.
                    '</td>';
            }
                echo '<td>'.
                        $sum.
                     '</td>';
            echo '</tr>';
            }
       echo '</tbody>'.
         '</table>';
}