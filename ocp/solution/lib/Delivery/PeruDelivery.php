<?php
namespace OCP\Solution\Delivery;

use OCP\Solution\Order;
use OCP\Solution\Delivery\Deliver;

class PeruDelivery implements Deliver {
  public function calculatDeliveryCost(Order $order) {
    $result = $order->getTotal() * 0.02;

    if ($order->getWeight() > 5) {
      $result = $order->getTotal() * 0.05;
    }

    return $result;
  }
}