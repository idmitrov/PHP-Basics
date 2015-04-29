<form action="#" method="get">
    <label for="form-text-area">Text</label>
    <textarea name="textInput" id="form-text-area" cols="60" rows="4" style="display: block"></textarea>
    <input type="submit" name="submit" value="Count words"/>
</form>

<?php
if (isset($_GET['submit'], $_GET['textInput'])):
    if (strlen(trim($_GET['textInput'])) > 0) {
        $text = trim(strtolower($_GET['textInput']));
        $words = array_filter(preg_split('/[\W_]+/', $text));
        var_dump($words);
        $counter = array_count_values($words);

        echo '<table border="1">';
            foreach ($counter as $key => $value):
                echo
                    '<tr>'.
                        '<td>'.
                            $key.
                        '</td>'.
                        '<td>'.
                            $value,
                        '</td>'.
                    '</tr>';
            endforeach;
        echo '</table>';
    }
endif;