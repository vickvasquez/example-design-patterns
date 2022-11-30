<?php

require './vendor/autoload.php';

use SRP\Solution\Product;
use SRP\Solution\Service;

// php main.php --name="Churromaiz" --price=19.5

function main(array $argsParsed) {
  list('name' => $name, 'price' => $price) = $argsParsed;

  $service = new Service();
  $service->addProduct(new Product(uniqid(), $name, $price));

  print_r($service->listProducts());
}

$argsParsed = parseArgs($argv);
main($argsParsed);

?>