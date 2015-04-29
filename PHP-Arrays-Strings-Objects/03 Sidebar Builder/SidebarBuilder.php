<form action="#" method="get">
    <!--CATEGORIES-->
    <label for="categories" style="display: block; margin-top: 10px">Categories:</label>
    <input type="text" name="categories" id="categories" />
    <!--TAGS-->
    <label for="tags" style="display: block; margin-top: 10px">Tags:</label>
    <input type="text" name="tags" id="tags" />
    <!--MONTHS-->
    <label for="months" style="display: block; margin-top: 10px">Months:</label>
    <input type="text" name="months" id="months" />
    <!--SUBMIT-->
    <input type="submit" name="submit" value="Generate" style="display: block; margin-top: 10px" />
</form>
<?php
/*
    Write a PHP program SidebarBuilder.php that takes data from several input fields and builds 3 sidebars.
    The input fields are categories, tags and months.
    The first sidebar should contain a list of the categories,
    the second sidebar – a list of the tags and the third should contain the months.
    The entries in the input strings will be separated by a comma and space ", ".
    Styling the page is optional. Semantic HTML is required.
*/
if (isset($_GET['submit'], $_GET['categories'], $_GET['tags'], $_GET['months'])):
    //IF INPUTS ARE NOT EMPTY
    if (strlen(trim($_GET['categories'])) > 0 &&
        strlen(trim($_GET['tags'])) > 0 &&
        strlen(trim($_GET['months'])) > 0):
        //SET INPUTS
        $categories = preg_split('/, /', trim($_GET['categories']));
        $tags = preg_split('/, /', trim($_GET['tags']));
        $months = preg_split('/, /', trim($_GET['months']));
        echo '<aside style="display: inline-block">'.
                 '<article  style="background-color: #09F; padding: 10px">'.
                    '<header style="font-weight: bold; border-bottom: solid 1px #000">Categories</header>'.
                 '<ul style="list-style-type: circle">';
                    foreach($categories as $category):
                        echo '<li>'.
                                "<a style=\"display: inline-block; padding: 6px; color: #000\" href=\"#\" title=\"$category\">$category</a>".
                             '</li>';
                    endforeach;
            echo '</ul>';
            echo '</article>';
            echo '<article  style="background-color: #09F; padding: 10px">'.
                    '<header style="font-weight: bold; border-bottom: solid 1px #000">Tags</header>'.
                 '<ul style="list-style-type: circle">';
                    foreach($tags as $tag):
                        echo '<li>'.
                                "<a style=\"display: inline-block; padding: 6px; color: #000\" href=\"#\" title=\"$tag\">$tag</a>".
                             '</li>';
                    endforeach;
            echo '</ul>';
            echo '</article>';
            echo '<article  style="background-color: #09F; padding: 10px">'.
                    '<header style="font-weight: bold; border-bottom: solid 1px #000">Months</header>'.
                 '<ul style="list-style-type: circle">';
                    foreach($months as $month):
                        echo '<li>'.
                                "<a style=\"display: inline-block; padding: 6px; color: #000\" href=\"#\" title=\"$month\">$month</a>".
                             '</li>';
                    endforeach;
                echo '</ul>';
            echo '</article>';
        echo '</aside>';
    endif;
endif;