<?php

namespace SRP\Solution;

use SRP\Solution\Product;
use SRP\Solution\Repository;

class Service {
  private Repository $repository;

  public function __construct() {
    $this->repository = new Repository();
  }

  public function addProduct(Product $product) {
    $id = $product->getProductId();
    $name = $product->getName();
    $price = $product->getPrice();

    $this->repository->addProduct($id, $name, $price);
  }

  public function listProducts() {
    return $this->repository->listProducts();
  }
}
?>