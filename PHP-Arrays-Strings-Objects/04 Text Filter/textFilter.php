<form action="#" method="get">
    <!--TEXT-->
    <label for="text-input">Text</label>
    <textarea name="textInput" id="text-input" cols="30" rows="10" placeholder="Type..." style="display: block">
    </textarea>
    <!--BAN LIST-->
    <label for="ban-list">Ban list</label>
    <input type="text" name="banList" id="ban-list" placeholder="Ban list..." style="display: block">
    <!--SUBMIT-->
    <input type="submit" name="submit" value="Filter"/>
</form>
<?php
/*
    Write a PHP program TextFilter.php that takes a text from a textfield and a string of banned words from a text input field.
    All words included in the ban list should be replaced with asterisks "*", equal to the word’s length.
    The entries in the banlist will be separated by a comma and space ", ".
*/
if (isset($_GET['submit'], $_GET['textInput'], $_GET['banList'])) {
    //IF INPUTS ARE NOT EMPTY
    if (strlen(trim($_GET['textInput'])) > 0 &&
        strlen(trim($_GET['banList'])) > 0) {
        //SET INPUTS
        $textInput = trim($_GET['textInput']);
        $banList = preg_split('/, /', trim($_GET['banList']));
        $output = '';
        //SET OUTPUT
        foreach ($banList as $banWord) {
            $pattern = str_pad('', strlen($banWord), '*',STR_PAD_LEFT);
            $output = str_replace($banList, $pattern, $textInput);
        }
        echo $output;
    }
}
