<?php
namespace OCP\Solution\Delivery;

use OCP\Solution\Order;

interface Deliver {
  public function calculatDeliveryCost(Order $order);
}