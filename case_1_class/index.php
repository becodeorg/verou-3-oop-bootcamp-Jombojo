<form action = "" method="get">
    <label for="basketamount">How much baskets are you buying?</label><br>
    <input id="basketamount" name="basketamount"><br>
    <input type="submit" name="submit" class="button" value="submit"/><br>
</form>

<?php
require './basket_class.php';
require './fruit_class.php';
require './alcohol_class.php';

$basketAmount = $_GET["basketamount"];



echo "Total cost is €" . $basketAmount*($bananas->getPrice()+$apples->getPrice()+$wine->getPrice()) . "<br>";
echo "Total tax is €" . $basketAmount*($bananas->getTax()+$apples->getTax()+$wine->getTax()) . "<br>";
echo $bananas->getTax() . "<br>";
echo $apples->getTax() . "<br>";
echo $wine->getTax() . "<br>";