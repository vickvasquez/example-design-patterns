<?php

require './vendor/autoload.php';

use SRP\Product;
use SRP\Service;

$product = new Product(uniqid(), 'Coca cola', 19.5);
$product1 = new Product(uniqid(), 'Gansito', 15);
$product2 = new Product(uniqid(), 'Galletas Maria', 13.5);

$service = new Service();

$service->addProduct($product);
$service->addProduct($product1);
$service->addProduct($product2);

print_r($service->listProducts());
?>