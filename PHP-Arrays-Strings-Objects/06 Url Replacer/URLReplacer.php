<form action="#" method="get">
    <label for="text">Text</label>
    <textarea rows="5" cols="50" name="text" id="text" placeholder="Type..." style="display: block">
    </textarea>
    <input type="submit" name="formSubmit" value="submit">
</form>
<br>
<?php
if (isset($_GET['formSubmit'], $_GET['text'])) {
    if (strlen(trim($_GET['text'])) > 0) {
        $text = trim($_GET['text']);
        $aTagMatcher = preg_match_all('/(?i)<a\s*href\s*=\s*([^>]+)>(.+?)<\/a>/', $text, $aTag);

        for ($i = 0; $i < count($aTag[0]); $i++) {
            $url = substr($aTag[1][$i], 1, strlen($aTag[1][$i]) - 2);
            $aTagText = $aTag[2][$i];
            $replacement = "[URL=" . $url . "]" . $aTagText. "[/URL]";
            $text = str_replace($aTag[0][$i], $replacement, $text);
        }

        echo htmlentities($text, ENT_HTML5);
    }
}