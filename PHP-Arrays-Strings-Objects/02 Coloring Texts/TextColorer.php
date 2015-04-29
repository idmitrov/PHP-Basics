<form action="#" method="get">
    <label for="text-input">Text</label>
    <textarea name="textInput" id="text-input" cols="60" rows="4" style="display: block"></textarea>
    <input type="submit" name="submit" value="Color text"/>
</form>
<?php
/*
    Write a PHP program TextColorer.php that takes a text from a textfield,
    colors each character according to its ASCII value and prints the result.
    If the ASCII value of a character is odd, the character should be printed in blue.
    If it’s even, it should be printed in red.
*/
if (isset($_GET['submit'], $_GET['textInput'])):
    if (strlen(trim($_GET['textInput'])) > 0):
        $text = trim($_GET['textInput']);
        $textLetters = str_split($text);

        foreach ($textLetters as $letter):
            if ($letter !== ' '):
                if (ord($letter) % 2 === 0):
                    echo '<span style="color: #F00">'.htmlentities($letter, ENT_HTML5).' '.'</span>';
                else:
                    echo '<span style="color: #00F">'.htmlentities($letter, ENT_HTML5).' '.'</span>';
                endif;
            endif;
        endforeach;
    endif;
endif;


