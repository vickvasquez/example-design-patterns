<?php
namespace OCP\Sympthom;

use OCP\Sympthom\Order;
use OCP\Sympthom\EnumCountry;

class Store {
  public function calculatDeliveryCost(Order $order): float {
    if (is_null($order)) {
      return -1;
    }

    $result = 0;

    switch ($order->getCountry()) {
      case EnumCountry::COLOMBIA:
        $result = $order->getTotal() * 0.01;

        if ($order->getWeight() <= 2) {
            $result += 9900;
        } else {
            $result += $order->getWeight() * 5000;
        }

        break;
      case EnumCountry::MEXICO:
        $result = 98;
        break;
    }

    return $result;
  }
}
?>