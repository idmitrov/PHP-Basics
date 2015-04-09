<?php
/*
    Write a PHP script InformationTable.php which generates an HTML table by given information about a person (name, phone number, age, address).
    Styling the table is optional. Semantic HTML is required.
*/

function drawPersonTable($name, $phoneNumber, $age, $address) {
    echo '<table class="table">'.
           '<tbody>'.
                '<tr>'.
                '<td class="orange">'.'Name'.'</td>'.
                '<td>'.$name.'</td>'.
                '</tr>'.
                '<tr>'.
                '<td class="orange">'.'Phone number'.'</td>'.
                '<td>'.$phoneNumber.'</td>'.
                '</tr>'.
                '<tr>'.
                '<td class="orange">'.'Age'.'</td>'.
                '<td>'.(int)$age.'</td>'.
                '</tr>'.
                '<tr>'.
                '<td class="orange last">'.'Address'.'</td>'.
                '<td>'.$address.'</td>'.
                '</tr>'.
            '</tbody>'.
        '</table>';
}

drawPersonTable("Gosho", "0882-321-423", 24, "Hadji Dimitar");