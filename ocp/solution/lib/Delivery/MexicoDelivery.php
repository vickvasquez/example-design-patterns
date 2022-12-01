<?php
namespace OCP\Solution\Delivery;

use OCP\Solution\Order;
use OCP\Solution\Delivery\Deliver;

class MexicoDelivery implements Deliver {
  public function calculatDeliveryCost(Order $order) {
    return 98;
  }
}