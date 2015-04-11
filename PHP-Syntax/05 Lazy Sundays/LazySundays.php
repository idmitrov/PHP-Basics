<?php
/*
    Write a PHP script LazySundays.php which prints the dates of all Sundays in the current month.
*/

function getSundays($year, $month) {
    return new DatePeriod(
        new DateTime("first sunday of $year-$month"),
        DateInterval::createFromDateString('next sunday'),
        new DateTime("last day of $year-$month")
    );
}

$currentYear = date('Y');
$currentMonth = date('m');

foreach (getSundays($currentYear, $currentMonth) as $lazySunday) {
    echo $lazySunday -> format("jS F, Y\n");
}