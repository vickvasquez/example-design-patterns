<?php
require './vendor/autoload.php';

use OCP\Solution\Order;
use OCP\Solution\Store;
use OCP\Solution\EnumCountry;

$store = new Store();

$orderColombia = new Order(EnumCountry::COLOMBIA, 2, 5000);
$orderMexico = new Order(EnumCountry::MEXICO, 2, 5000);
$orderPeru = new Order(EnumCountry::PERU, 6, 5000);

$costColombia = $store->calculatDeliveryCost($orderColombia);
$costMexico = $store->calculatDeliveryCost($orderMexico);
$costPeru = $store->calculatDeliveryCost($orderPeru);

echo "Delivery cost for México = ". $costMexico."\n";
echo "Delivery cost for Colombia = ". $costColombia. "\n";
echo "Delivery cost for Peru = ". $costPeru. "\n";
?>