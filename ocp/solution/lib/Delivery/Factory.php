<?php
namespace OCP\Solution\Delivery;

use OCP\Solution\EnumCountry;
use OCP\Solution\Delivery\Factory;
use OCP\Solution\Delivery\PeruDelivery;
use OCP\Solution\Delivery\MexicoDelivery;
use OCP\Solution\Delivery\ColombiaDelivery;

class Factory {
  private static $instance = null;
  private $dictionary = [];

  private function __construct() {
    $this->dictionary = [
      EnumCountry::COLOMBIA => new ColombiaDelivery(),
      EnumCountry::MEXICO => new MexicoDelivery(),
      EnumCountry::PERU => new PeruDelivery(),
    ];
  }

  public static function getInstance() {
    if(is_null(self::$instance)) {
      return new Factory();
    }

    return self::$instance;
  }

  public function create(string $country) {
    $deliveryCalculator = $this->dictionary[$country] ?? null;

    return $deliveryCalculator;
  }
}