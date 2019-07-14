<?php 
require('vendor/autoload.php');


use Money\Money;

$first = Money::EUR(100);                  
$second = Money::EUR(200);                 
$third = Money::EUR(300);                  

$max = Money::max($first, $second, $third) ;