<?php
/*
 Write a PHP script SquareRootSum.php that displays a table in your browser with 2 columns.
 The first column should contain a number (even numbers from 0 to 100)
 and the second column should contain the square root of that number, rounded to the second digit after the decimal point.
 The last row of the table should contain the sum of all values in the Square column. Styling the page is optional.
*/

$sum = 0;

echo '<table border="1">'.
        '<thead>'.
            '<th>'.
                'Number'.
            '</th>'.
            '<th>'.
                'Square'.
            '</th>'.
        '</thead>'.
        '<tbody>';
for ($i = 0; $i <= 100; $i++) {
    if ((int)$i % 2 === 0) {
    $sum += (float)round(sqrt($i), 2);
    echo '<tr>'.
            '<td>'.
                $i.
            '</td>'.
            '<td>'.
                round(sqrt($i), 2).
            '</td>'.
         '</tr>';
    }
}
echo    '</tbody>'.
        '<tfoot>'.
            '<tr>'.
                '<td style="font-weight: bold">'.
                    'Total:'.
                '</td>'.
                '<td>'.
                    $sum.
                '</td>'.
            '</tr>'.
        '</tfoot>'.
     '</table>';