<form action="#" method="get">
    <!--TEXT-->
    <label for="text">Text</label>
    <textarea name="text" id="text" cols="30" rows="10" placeholder="Type..." style="display: block">
    </textarea>
    <!--WORD-->
    <label for="word"></label>
    <input type="text" name="word" id="word" placeholder="Word..." style="display: block"/>
    <!--SUBMIT-->
    <input type="submit" name="submit" value="Extract"/>
</form>
<?php
/*
    Write a PHP program SentenceExtractor.php that takes a text from a textarea
    and a word from an input field and prints all sentences from the text, containing that word.
    A sentence is any sequence of words ending with ., ! or ?.
*/

if (isset($_GET['submit'], $_GET['text'], $_GET['word'])) {
    //IF INPUTS ARE NOT EMPTY
    if (strlen(trim($_GET['text'])) > 0 &&
        strlen(trim($_GET['word'])) > 0) {

        $sentences = preg_split('/\s*(?<=[.?!])\s+/', $_GET['text'], -1, PREG_SPLIT_NO_EMPTY);

        foreach ($sentences as $sentence) {
            $sentence = trim($sentence);
            if (preg_match('/(\s+)' . $_GET["word"] . '\1(.*)[.?!]/', $sentence)) {
                echo htmlentities($sentence, ENT_HTML5) . "<br />";
            }
        }
    }
}