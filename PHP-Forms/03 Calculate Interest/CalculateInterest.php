<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Calculate Interest</title>
</head>
<body>
    <form action="#" method="get">
        <div>
            <label for="amountOfMoney">Enter Amount</label>
            <input type="text" name="amountOfMoney" id="amountOfMoney" required="required" placeholder="The amount of money..."/>
        </div>
        <div>
            <input type="radio" name="currency" value="dollars" id="dollars" required="required"/>
            <label for="dollars">USD</label>

            <input type="radio" name="currency" value="euros" id="euros" required="required"/>
            <label for="euros">EUR</label>

            <input type="radio" name="currency" value="leva" id="leva" checked="checked" required="required"/>
            <label for="leva">BGN</label>
        </div>
        <div>
            <label for="tax">compound interest amount</label>
            <input type="text" name="yearlyTax" id="tax" required="required" placeholder="Interest amount..."/>
        </div>
       <div>
           <select name="periodOfTime" id="period">
               <option value="6M">6 Months</option>
               <option value="1Y" selected="selected">1 Year</option>
               <option value="2Y">2 Years</option>
               <option value="5Y">5 Years</option>
           </select>

           <input type="submit" value="Calculate"/>
       </div>
    </form>
</body>
</html>
<?php
/*
    Write a PHP script CalculateInterest.php which generates an HTML page that contains:
    An input text field to hold the amount of money
    Radio buttons to choose the currency
    An input text field to enter the compound annual interest amount
    A dropdown menu to choose the period of time
	A submit button

    When the information is submitted, the script should print out the amount of money you will have after the selected period,
    rounded to 2 decimal places.
    Semantic HTML is required. Styling is not required.
*/
include 'calcFunctions.php';

$methodType = getMethodType($_SERVER);
$areInputsSet = areInputsSet($methodType);
$areInputsValid = areInputsValid($methodType);

if ($areInputsSet && $areInputsValid) {
    $interestAmount = (int)$methodType['yearlyTax'];
    $amountOfMoney = (float)$methodType['amountOfMoney'];
    $timePeriod = getPeriod($methodType);
    $currency = getCurrency($methodType);
    $taxPerMonth = ($interestAmount / 12 + 100) / 100;
    $amountOfMoneyAfterCalc = calculate($amountOfMoney, $currency, $timePeriod, $taxPerMonth);

    echo $amountOfMoneyAfterCalc;
} else {
    echo "<p>Invalid Input</p>";
}