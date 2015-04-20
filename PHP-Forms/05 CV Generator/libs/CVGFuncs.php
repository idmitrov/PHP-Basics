<?php

//CHECK IF ALL INPUTS ARE SET
function checkInput(array $arr) {
    foreach ($arr as $input) {
        if(!isset($_GET[$input])) {
            return false;
        }
    }
    return true;
}

//CHECK IF GIVEN INPUT IS VALID
function validateInput($input)
{
    $isInputValid = false;
    switch ($input) {
        case 'firstName':
        case 'lastName':
            preg_match('/[0-9]+/', $_GET["$input"], $containingNumbers);
            $isInputValid = !isset($containingNumbers[0]) && trim(strlen($_GET["$input"])) >= 2 &&
                trim(strlen($_GET["$input"])) <= 20;
            break;
        case 'language':
            foreach($_GET['language'] as $language) {
               if ($_GET['language'][0]) {
                   preg_match('/[0-9]+/', $language, $containingNumbers);
                   $isInputValid = !isset($containingNumbers[0]) && trim(strlen($language)) >= 2 &&
                       trim(strlen($language)) <= 20;
                   if (!$isInputValid) {
                       return false;
                   }
               } else {
                   return true;
               }
            }
            break;
        case 'companyName':
            $isInputValid = strlen(trim($_GET['companyName'])) >= 2 && strlen(trim($_GET['companyName'])) <= 20;
            break;
        case 'email':
            preg_match('/[a-zA-Z0-9]+@{1}[a-zA-Z0-9]+.{1}[a-zA-Z]+/', $_GET["$input"], $emailInput);
            $isInputValid = isset($emailInput[0]) && $emailInput[0] === $_GET['email'];
            break;
        case 'phoneNumber':
            preg_match('/(\+?)([0-9]+)(-|\s)([0-9]+)(-|\s)([0-9]+)(-|\s)([0-9]+)/', $_GET['phoneNumber'], $phoneInput);
            $isInputValid = isset($phoneInput[0]) && $phoneInput[0] === trim($_GET['phoneNumber']);
            break;
        default:
            break;
    }
    return $isInputValid;
}

//CHECK IF ALL GIVEN INPUT(S) IS/ARE VALID
function checkIfIsValid (array $arr) {
    foreach ($arr as $input) {
        $isValid = validateInput($input);

        if (!$isValid) {
            return false;
        }
    }
    return true;
}