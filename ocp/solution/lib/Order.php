<?php

namespace OCP\Solution;

class Order {
  private string $country;
  private float $weight;
  private float $total;

  public function __construct(string $country, float $weight, float $total) {
    $this->country = $country;
    $this->weight = $weight;
    $this->total = $total;
  }

  public function getCountry()
  {
    return $this->country;
  }

  public function getWeight()
  {
    return $this->weight;
  }

  public function getTotal()
  {
    return $this->total;
  }
}