<form action = "" method="get">
    <label for="basketamount">How much baskets are you buying?</label><br>
    <input id="basketamount" name="basketamount"><br>
    <input type="submit" name="submit" class="button" value="submit"/><br>
</form>
<?php
$basket = array(
            array("bananas", "6", 1),
            array("apples", "3", 1.5),
            array("wine","2",10));

$basketAmount = $_GET["basketamount"];

if(!empty($basketAmount))
{
    $totalCost = $basketAmount * ((6*1) + (3*1.5) + (2*10));
    $totalTax = $basketAmount * ((10.5*0.06) + (20*0.21));
    echo "You are buying " . $basketAmount . " baskets.";
    echo nl2br("\n");
    echo "The total cost for " . $basketAmount . " of baskets is €" . $totalCost . ".";
    echo nl2br("\n");
    echo "The tamount of tax you pay for this is €" . $totalTax . ".";
}
?>