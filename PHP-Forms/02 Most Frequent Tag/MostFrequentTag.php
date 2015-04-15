<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Print Tags</title>
    <link rel="stylesheet" href="./styles/formStyles.css"/>
</head>
<body>
<?php
/*
    Write a PHP script MostFrequentTag.php
    which generates an HTML input text field and a submit button.
    In the text field the user must enter different tags, separated by a comma and a space (", ").
    When the information is submitted, the script should generate a list of the tags, sorted by frequency.
    Then you must print: "Most Frequent Tag is: [most frequent tag]".
    Semantic HTML is required. Styling is not required.
*/
    echo '<form action="#" method="post">';
        echo '<label for="tagsInput">Tags</label>';
        echo '<input type="text" id="tagsInput" name="userInput" maxlength="100" placeholder="Tags..."/>'.
            '<input class="submitBtn" type="submit" name="submitBtn" value="Submit">';

        if (isset($_POST['userInput']) && !ctype_space($_POST['userInput']) && $_POST['userInput'] != '') {
            $tags = explode(', ', $_POST['userInput']);
            $frequents = array_count_values($tags);
            arsort($frequents);
            $mostFrequentTag = 0;
            $result = '';

            foreach ($frequents as $key => $value) {
                echo '<p class="output">'.htmlspecialchars($key).' : '.htmlspecialchars($value).'</p>';
                echo '<br>';

                if ($value >  $mostFrequentTag) {
                    $mostFrequentTag = $value;
                    $result = $key;
                }
            }

            echo '<br>';
            echo '<p class="output">Most Frequent Tag is: '.htmlspecialchars($result).'</p>';
        } else {
            echo "<p class='incorrect-input'>Input must not be empty</p>";
        }

    echo '</form>';
?>
</body>
</html>
