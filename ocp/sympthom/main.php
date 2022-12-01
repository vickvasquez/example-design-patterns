<?php

require './vendor/autoload.php';

use OCP\Sympthom\Order;
use OCP\Sympthom\Store;
use OCP\Sympthom\EnumCountry;


$store = new Store();
$orderColombia = new Order(EnumCountry::COLOMBIA, 2, 5000);
$orderMexico = new Order(EnumCountry::MEXICO, 2, 5000);

$costColombia = $store->calculatDeliveryCost($orderColombia);
$costMexico = $store->calculatDeliveryCost($orderMexico);

echo "Delivery cost for México = ". $costMexico;

echo "\n";

echo "Delivery cost for Colombia = ". $costColombia. "\n";
?>