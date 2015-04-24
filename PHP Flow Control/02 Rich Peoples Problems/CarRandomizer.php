<?php
/*
 You are a very rich billionaire with an unhidden passion for cars.
 You like certain car manufacturers but you don’t really care about anything else,
 and that’s why you need your own randomizing algorithm that helps you decide how many and what color cars you should buy.
 Write a PHP script CarRandomizer.php that receives a string of cars from an input HTML form, separated by a comma and space (“, “).
 It then prints each car, a random color and a random quantity in a table like the one shown below.
 Use colors by your choice. Use as quantity a random number in range [1...5].
*/

echo '<form method="post" action="#">'.
        '<input type    ="text" name="carsInput" style="width: 320px; padding: 10px;"
                placeholder="Car(s) pattern -> “Mitsubishi, Maseratti, Maybach“"/>'.
        '<input type="submit" name="submitted" value="show result" style="margin-left: 10px; padding: 10px;"/>'.
     '</form>';

if (!isset($_POST['submitted'])) {
    echo '<p style="color: #1C1;">Please type a car(s), separated by a comma and space (“, “).</p>';
} else {
    if (!isset($_POST['carsInput']) ||
        trim($_POST['carsInput']) === '') {
        echo '<p style="color: #F00;">Invalid input!</p>';
    } else {
        $cars = preg_split("/, /", trim($_POST['carsInput']));
        $carsColors = ['White', 'Black', 'Grey', 'Yellow', 'Purple', 'Red', 'Green', 'Blue'];
        $carsColorsLength = count($carsColors);
        echo '<table border="1">'.
                '<thead>'.
                    '<tr>'.
                        '<th>'.
                            'Car'.
                        '</th>'.
                        '<th>'.
                            'Color'.
                        '</th>'.
                        '<th>'.
                            'Count'.
                        '</th>'.
                    '</tr>'.
                '</thead>';
        foreach ($cars as $car) {
            echo '<tbody>'.
                    '<tr>'.
                        '<td>'.
                            trim(htmlentities($car, ENT_HTML5)).
                        '</td>'.
                        '<td>'.
                            $carsColors[rand(0, $carsColorsLength - 1)].
                        '</td>'.
                        '<td>'.
                            rand(0, 5).
                        '</td>'.
                    '</tr>'.
                 '</tbody>';
        }
        echo '</table>';
    }
}