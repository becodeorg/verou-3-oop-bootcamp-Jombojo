<form action = "" method="get">
    <label for="basketamount">How much baskets are you buying?</label><br>
    <input id="basketamount" name="basketamount"><br>
    <input type="submit" name="submit" class="button" value="submit"/><br>
</form>

<?php
require './basket2_class.php';
require './fruit2_class.php';
require './alcohol2_class.php';

$basketAmount = $_GET["basketamount"];



echo "Total cost is €" . $basketAmount*($bananas->getPrice()+$apples->getPrice()+$wine->getPrice()) . "<br>";
echo "Total tax is €" . $basketAmount*($bananas->getTax()+$apples->getTax()+$wine->getTax()) . "<br>";
echo "Total cost of fruit is " . ($apples->getPrice() + $bananas->getPrice()) . "<br>";
echo "Total cost of wine is " . $wine->getPrice() . "<br>";