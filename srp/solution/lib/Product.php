<?php
  namespace SRP\Solution;

  class Product {
    private string $productId;
    private string $name;
    private float $price;

    public function __construct(string $productId, string $name, float $price) {
      $this->productId = $productId;
      $this->name = $name;
      $this->price = $price;
    }

    public function getName()
    {
      return $this->name;
    }

    public function getProductId()
    {
      return $this->productId;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function toPrimitive() {
      return [
        'id' => $this->getProductId(),
        'name' => $this->getName(),
        'price' => $this->getPrice(),
      ];
    }
  }
?>