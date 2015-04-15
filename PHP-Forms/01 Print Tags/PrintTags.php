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
    Write a PHP script PrintTags.php
    which generates an HTML input text field and a submit button.
    In the text field the user must enter different tags, separated by a comma and a space (", ").
    When the information is submitted, the script should split the tags, put them in an array and print out the array.
    Semantic HTML is required. Styling is not required.
 */
    echo '<form action="#" method="post">';
        echo '<label for="tagsInput">Tags</label>';
        echo '<input type="text" id="tagsInput" name="userInput" maxlength="100" placeholder="Tags..."/>'.
             '<input type="submit" name="submitBtn" value="Submit">';

        if (isset($_POST['userInput']) && !ctype_space($_POST['userInput']) && $_POST['userInput'] != '') {
            $tags = explode(', ', $_POST['userInput']);
            $index = 0;
            foreach($tags as $tag) {
                echo '<p class="output">'. $index.' : '.htmlspecialchars($tag).'</p><br>';
                $index++;
            }
        } else {
            echo '<p class="incorrect-input">Input must not be empty</p>';
        }

    echo '</form>';
?>
</body>
</html>
