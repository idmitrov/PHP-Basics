<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>HTML Tags Counter</title>
</head>
<body>
<form action="#" method="get">
    <label for="tagsInput">Enter HTML Tags:</label>
    <input type="text" id="tagsInput" name="input" placeholder="Tag..." maxlength="100"/>
    <input
        type="submit" value="Submit" name="submit"/>
</form>
</body>
</html>

<?php
/*
Write a PHP script HTMLTagsCounter.php which generates an HTML form like in the example below.
It should contain a label, an input text field and a submit button.
The user enters HTML tag in the input field.
If the tag is valid, the script should print “Valid HTML tag!”, and if it is invalid – “Invalid HTML Tag!”.
On the second line, there should be a score counter.
For every valid tag entered, the score should increase by 1.
Hint: You may use sessions. Use an array to store all valid HTML5 tags.
*/
include 'validHtmlTags.php';
    session_start();

    if (isset($_GET['submit'])) {
        if (!isset($_SESSION['score'])) {
            $_SESSION['score'] = 0;
        }

        if (isset($_GET['input'])) {
            $isValidTag = checkTag($_GET['input'], $validHtmlTags);

            if ($isValidTag) {
                $_SESSION['score']++;
                echo "<p>Valid HTML tag!</p>";
            } else {
                echo "<p>Invalid HTML tag!</p>";
            }
        }

        echo 'SCORE: ' . $_SESSION['score'];
    }