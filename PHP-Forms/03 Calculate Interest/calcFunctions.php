<?php

function getMethodType($server) {
    if ($server['REQUEST_METHOD'] === 'GET') {
        return $_GET;
    } else {
        return $_POST;
    }
}

//ARE SET INPUTS
function areInputsSet($query) {
    if (isset($query['amountOfMoney'],
        $query['currency'],
        $query['yearlyTax'],
        $query['periodOfTime'])) {
        return true;
    } else {
        return false;
    }
}

//ARE VALID INPUTS
function areInputsValid($query) {
    if ((float)$query['amountOfMoney'] &&
        (float)$query['yearlyTax'] &&
        (int)$query['periodOfTime']) {
        return true;
    } else {
        return false;
    }
}

//CONVERT TIME PERIOD
function getPeriod($query) {
    $timePeriod = (int)1;
    $length = strlen($query['periodOfTime']);
    if ($query['periodOfTime'][$length - 1] === 'Y') {
        $timePeriod *= 12;
    }
    return $timePeriod * (int)$query['periodOfTime'];
}

//GET CURRENCY
function getCurrency($query) {
    switch($query['currency']) {
        case 'dollars': return htmlentities('$', ENT_HTML5);
        case 'euros': return htmlentities('€', ENT_HTML5);
        case 'leva':
        default: return htmlentities('лв', ENT_HTML5);
    }
}

function calculate($amountOfMoney, $currency, $timePeriod, $taxPerMonth) {
    for ($payMonth = 1; $payMonth <= $timePeriod; $payMonth++) {
        $amountOfMoney *= $taxPerMonth;
    }
    return $currency == htmlentities('лв', ENT_HTML5) ?
        "$amountOfMoney $currency" : "$currency $amountOfMoney";
}