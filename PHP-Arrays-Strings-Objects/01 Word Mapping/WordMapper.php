<form action="#" method="get">
    <label for="form-text-area">Text</label>
    <textarea name="textInput" id="form-text-area" cols="60" rows="4" style="display: block"></textarea>
    <input type="submit" name="submit" value="Count words"/>
</form>

<?php
/*
    Write a PHP program WordMapper.php that takes a text from a textarea
    and prints each word and the number of times it occurs in the text.
    The search should be case-insensitive.
    The result should be printed as an HTML table.
*/
if (isset($_GET['submit'], $_GET['textInput'])):
    if (strlen(trim($_GET['textInput'])) > 0) {
        $text = trim(strtolower($_GET['textInput']));
        $words = array_filter(preg_split('/[\W_]+/', $text));
        $counter = array_count_values($words);

        echo '<table border="1">';
            foreach ($counter as $key => $value):
                echo
                    '<tr>'.
                        '<td>'.
                            htmlentities($key, ENT_HTML5).
                        '</td>'.
                        '<td>'.
                            htmlentities($value, ENT_HTML5),
                        '</td>'.
                    '</tr>';
            endforeach;
        echo '</table>';
    }
endif;