<?php
/*
    Write a PHP script TimeUntilNewYear.php. Use the built-in function getdate() to get the current date and time.
    Print how many hours, minutes and seconds are left until New Year
    and how many days, hours, minutes and seconds are left in a counter format .
    Look at examples below to get a better idea.
    The examples show the current date and time in "d-m-Y G:i:s" format.
    Use the current time.
    (Note: Keep the Spring/Autumn time shifts in mind in your calculations.)
*/
//DATE TIME VALUES
$dateInfo = getdate();
$currentHour = $dateInfo['hours'] + 1;
$currentMinute = $dateInfo['minutes'];
$currentSecond = $dateInfo['seconds'];

//TOTAL YEAR DAYS/DAYS PAST/DAYS LEFT
$yearDaysTotal = date("z", mktime(0, 0, 0, 12, 31, 2015)) + 1;
$yearDaysPast = $dateInfo['yday'] + 1;
$yearDaysLeft = $yearDaysTotal - $yearDaysPast;

//CONVERT DAYS LEFT TO HOURS/MINUTES/SECONDS
$yearDaysLeftInHours = $yearDaysLeft * 24;
$yearDaysLeftInMinutes = (($yearDaysLeftInHours * 60) - 1) + (60 - $currentMinute);
$yearDaysLeftInSeconds = (($yearDaysLeftInMinutes * 60) - 1) + (60 - $currentSecond);

//TOTAL TIME LEFT IN FORMAT: DAY:HOUR:MIN:SECOND
$yearHoursLeft = 24 - $currentHour;
$yearMinutesLeft = 60 - $currentMinute;
$yearSecondsLeft = 60 - $currentSecond;

$timeUntilNewYear = 'Days:Hours:Minutes:Seconds ' . $yearDaysLeft . ":" .
                                                    $yearHoursLeft . ":" .
                                                    $yearMinutesLeft . ":" .
                                                    $yearSecondsLeft;

echo 'Hours until new year : ' . $yearDaysLeftInHours . "\r\n";
echo 'Minutes until new year : ' . $yearDaysLeftInMinutes . "\r\n";
echo 'Seconds until new year : ' . $yearDaysLeftInSeconds . "\r\n";
echo $timeUntilNewYear;