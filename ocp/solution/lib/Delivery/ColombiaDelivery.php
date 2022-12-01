<?php
namespace OCP\Solution\Delivery;

use OCP\Solution\Order;
use OCP\Solution\Delivery\Deliver;

class ColombiaDelivery implements Deliver
{
    public function calculatDeliveryCost(Order $order)
    {
        $result = $order->getTotal() * 0.01;

        if ($order->getWeight() <= 2) {
            $result += 9900;
        } else {
            $result += $order->getWeight() * 5000;
        }

        return $result;
    }
}
