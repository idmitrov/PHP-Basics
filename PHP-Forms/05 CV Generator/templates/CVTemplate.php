<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Generated CV</title>
    <link rel="stylesheet" href="./styles/CVStyles.css"/>
</head>
<body>
<div id="wrapper">
    <section>
        <header>
            <h1>CV</h1>
        </header>
        <article>
            <header>
                <h1>Personal information</h1>
            </header>
            <div class="col1">
                <ul>
                    <li>First Name</li>
                    <li>Last Name</li>
                    <li>Email</li>
                    <li>Phone Number</li>
                    <li>Gender</li>
                    <li>Birth Date</li>
                    <li>Nationality</li>
                </ul>
            </div>
            <div class="col2">
                <ul>
                    <?php
                    echo '<li>'.$firstName.'</li>'.
                         '<li>'.$lastName.'</li>'.
                         '<li>'.$email.'</li>'.
                         '<li>'.$phoneNumber.'</li>';
                    echo $gender ? '<li>'.$gender.'</li>' : '<li>Not set</li>';
                    echo $birthday ? '<li>'.$birthday.'</li>' : '<li>Not set</li>';
                    echo $nationality ? '<li>'.$nationality.'</li>' : '<li>Not set</li>';
                    ?>
                </ul>
            </div>
        </article>
        <article>
            <header>
                <h1>Last Work Position</h1>
            </header>
            <div class="col1">
                <ul>
                    <li>Company Name</li>
                    <li>From</li>
                    <li>To</li>
                </ul>
            </div>
            <div class="col2">
                <ul>
                    <?php
                    echo $companyName ? '<li>'.$companyName.'</li>' : '<li>Not set</li>';
                    echo $fromDate ? '<li>'.$fromDate.'</li>' : '<li>Not set</li>';
                    echo $toDate ? '<li>'.$toDate.'</li>' : '<li>Not set</li>';
                    ?>
                </ul>
            </div>
        </article>
        <article>
            <header>
                <h1>Computer Skills</h1>
            </header>
            <div class="col1 noBorder">
                <ul>
                    <li>Programming Languages</li>
                </ul>
            </div>
            <div class="col2">
                <article class="col2Col">
                    <header>
                        <h1>Language</h1>
                    </header>
                    <ul>
                        <?php
                            if (strlen($programmingLang[0])) {
                                foreach ($programmingLang as $lang) {
                                    echo '<li>'.htmlentities($lang, ENT_HTML5).'</li>';
                                }
                            } else {
                                echo '<li>NO DATA</li>';
                            }
                        ?>
                    </ul>
                </article>
                <article class="col2Col">
                    <header>
                        <h1>Skill Level</h1>
                    </header>
                    <ul>
                        <?php
                        if (strlen($programmingLang[0])) {
                            foreach ($programmingLevel as $level) {
                                echo '<li>'.htmlentities($level, ENT_HTML5).'</li>';
                            }
                        } else {
                            echo '<li>NO DATA</li>';
                        }
                        ?>
                    </ul>
                </article>
            </div>
        </article>
        <article>
            <header>
                <h1>Other Skills</h1>
            </header>
            <div class="col1 other">
                <ul>
                    <li>Languages</li>
                </ul>
            </div>
            <div class="col2colTable">
                <article class="table">
                    <header>
                        <h1>Language</h1>
                    </header>
                    <ul>
                        <?php
                        if ($languages[0]) {
                            foreach ($languages as $language) {
                                echo '<li>'.htmlentities($language, ENT_HTML5).'</li>';
                            }
                        }
                        ?>
                    </ul>
                </article>
                <article class="table">
                    <header>
                        <h1>    Comprehension</h1>
                    </header>
                   <ul>
                       <?php
                       if ($languages[0]) {
                           foreach ($langComprehension as $level) {
                               if ($level != 'disabled') {
                                   echo '<li>'.htmlentities($level, ENT_HTML5).'</li>';
                               }
                           }
                       }
                       ?>
                   </ul>
                </article>
                <article class="table">
                    <header>
                        <h1>Reading</h1>
                    </header>
                    <ul>
                        <?php
                        if ($languages[0]) {
                            foreach ($langReading as $level) {
                                if ($level != 'disabled') {
                                    echo '<li>'.htmlentities($level, ENT_HTML5).'</li>';
                                }
                            }
                        }
                        ?>
                    </ul>
                </article>
                <article class="table">
                    <header>
                        <h1>Writing</h1>
                    </header>
                    <ul>
                        <?php
                        if ($languages[0]) {
                            foreach ($langWriting as $level) {
                                if ($level != 'disabled') {
                                    echo '<li>'.htmlentities($level, ENT_HTML5).'</li>';
                                }
                            }
                        }
                        ?>
                    </ul>
                </article>
            </div>
            <div>
                <div class="col1">
                    <ul>
                        <li>Driver License</li>
                    </ul>
                </div>
                <div class="col2">
                    <ul>
                        <?php
                        if (isset($driveLicense)) {
                            $license = implode(', ',$driveLicense);
                            echo '<li>'.htmlentities($license, ENT_HTML5).'</li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </article>
    </section>
</div>
</body>
</html>