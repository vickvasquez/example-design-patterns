<?php
namespace OCP\Solution;

use OCP\Solution\Order;
use OCP\Solution\Delivery\Factory;

class Store {
  public function calculatDeliveryCost(Order $order): float {
    $deliveryCalculator = Factory::getInstance()->create($order->getCountry());

    return $deliveryCalculator->calculatDeliveryCost($order);
  }
}
?>