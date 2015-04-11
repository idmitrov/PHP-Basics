<?php
/*
    Write a PHP script GetFormData.php which retrieves the input data from an HTML form, and displays it as string.
    The input fields should hold name, age and gender (radio buttons).
    The returned string should be a message containing the information submitted by the form.
    100% accuracy is NOT required. Semantic HTML is required.
*/

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstName = $_POST['first-name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    if (isset($firstName) && !ctype_space($firstName) &&  $firstName != '' && !is_numeric($firstName) &&
        isset($age) && $age > 0 &&
        isset($gender)) {

        echo '<p>'.
                'My name is ' . $firstName . '.' .
                ' I am ' . $age . ' years old.' .
                ' I am ' . $gender.
             '</p>';
    } else {
        echo '<p class="incorrect-input">'.
                'INCORRECT INPUT!'.
            '</p>';
    }
}