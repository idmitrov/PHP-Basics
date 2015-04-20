<?php

include 'libs/CVGFuncs.php';

$areSetInputs = checkInput(['firstName', 'lastName', 'email',
    'phoneNumber', 'gender', 'birthday',
    'nationality', 'companyName', 'workExpFrom',
    'workExpTo', 'programmingLang', 'programmingLevel',
    'language', 'langComprehension', 'langReading', 'langWriting', 'submit']);

if (!$areSetInputs) {
    $errMessage = 'Invalid input!';
    include 'templates/ErrorTemplate.php';
} else {
    if ($_GET['companyName'] || $_GET['language']) {
        if ($_GET['companyName']) {
            $areInputsValidated = checkIfIsValid(['firstName', 'lastName', 'phoneNumber', 'email', 'companyName']);
        } else {
            $areInputsValidated = checkIfIsValid(['firstName', 'lastName', 'phoneNumber', 'email', 'language']);
        }
    } else if($_GET['companyName'] && $_GET['language']) {
        $areInputsValidated = checkIfIsValid(['firstName', 'lastName', 'phoneNumber', 'email', 'companyName', 'language']);
    } else {
        $areInputsValidated = checkIfIsValid(['firstName', 'lastName', 'phoneNumber', 'email']);
    }

    if (!$areInputsValidated) {
        $errMessage = 'Invalid input!';
        include 'templates/ErrorTemplate.php';
    } else {
        $firstName = htmlentities($_GET['firstName'], ENT_HTML5);
        $lastName = htmlentities($_GET['lastName'], ENT_HTML5);
        $email = htmlentities($_GET['email'], ENT_HTML5);
        $phoneNumber = htmlentities($_GET['phoneNumber'], ENT_HTML5);
        $gender = htmlentities($_GET['gender'], ENT_HTML5);
        $birthday = htmlentities($_GET['birthday'], ENT_HTML5);
        $nationality = htmlentities($_GET['nationality'], ENT_HTML5);
        $companyName = htmlentities($_GET['companyName'], ENT_HTML5);
        $fromDate = htmlentities($_GET['workExpFrom'], ENT_HTML5);
        $toDate = htmlentities($_GET['workExpTo'], ENT_HTML5);
        $programmingLang = $_GET['programmingLang'];
        $programmingLevel = $_GET['programmingLevel'];
        $languages = $_GET['language'];
        $langComprehension = $_GET['langComprehension'];
        $langReading = $_GET['langReading'];
        $langWriting = $_GET['langWriting'];
        if (isset($_GET['driveLicense'])) {
            $driveLicense = $_GET['driveLicense'];
        }
        //RENDER CV TEMPLATE
        include 'templates/CVTemplate.php';
    }
}