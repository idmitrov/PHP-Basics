<form action="#" method="get">
    <!--FORM TEXT INPUT-->
    <label for="form-text-string">Type a string</label>
    <input type="text" id="form-text-string" name="textInputString" placeholder="Hello!" />
    <!--PALINDROME-->
    <input type="radio" id="radio-palindrome" name="modifies" value="palindrome" />
    <label for="radio-palindrome">Check Palindrome</label>
    <!--REVERSE STRING-->
    <input type="radio" id="radio-reverse" name="modifies" value="reverse"/>
    <label for="radio-reverse">Reverse String</label>
    <!--SPLIT-->
    <input type="radio" id="radio-split" name="modifies" value="split"/>
    <label for="radio-split">Split</label>
    <!--HASH STRING-->
    <input type="radio" id="radio-hash" name="modifies" value="hash"/>
    <label for="radio-hash">Hash String</label>
    <!--SHUFFLE STRING-->
    <input type="radio" id="radio-shuffle" name="modifies" value="shuffle"/>
    <label for="radio-shuffle">Shuffle String</label>

    <!--SUBMIT-->
    <input type="submit" name="formSubmit" value="submit"/>
</form>

<?php
//IS SUBMITTED
if (isset($_GET['formSubmit'], $_GET['textInputString'], $_GET['modifies'])) {
    //IF INPUT TEXT IS NOT EMPTY
    if (strlen(trim($_GET['textInputString'])) > 0) {
        //SET OPERATION TO RUN AND GET THE TEXT FROM INPUT
        $operation = $_GET['modifies'];
        $input = trim($_GET['textInputString']);
        $output = '';

        //OPERATION FILTER
        switch ($operation):
            case 'palindrome': $output = strrev($input) === $input ? $input.' is a palindrome!' : $input.' is not a palindrome!' ; break;
            case 'reverse': $output = strrev($input); break;
            case 'split': $textSplitted = str_split($input, 1);$output = implode(' ', $textSplitted); break;
            case 'hash': $output = crypt($input, 'crypt'); break;
            case 'shuffle': $output = str_shuffle($input); break;
            default: break;
        endswitch;
        echo htmlentities($output, ENT_HTML5);
    }
}