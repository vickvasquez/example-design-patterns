<?php

namespace SRP;

use PDO;
use SRP\Product;

class Service {
  private $database = null;
  private $dbPath = './db/products.db';

  public function __construct() {
    $this->initDatabase();
    $this->createTable();
  }

  public function addProduct(Product $product) {
    $query = $this->database->prepare("INSERT INTO products(id, name, price) VALUES(:id, :name, :price);");

    $id = $product->getProductId();
    $name = $product->getName();
    $price = $product->getPrice();

    $query->bindParam(":id", $id);
    $query->bindParam(":name", $name);
    $query->bindParam(":price", $price);

    $query->execute();
  }

  public function listProducts() {
    $data = $this->database->query("SELECT * FROM products");

    return $data->fetchAll(PDO::FETCH_ASSOC);
  }

  private function initDatabase() {
    $this->database = new PDO("sqlite:".$this->dbPath);
    $this->database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  private function createTable() {
    $table = 'CREATE TABLE IF NOT EXISTS products (id varchar(255) NOT NULL PRIMARY KEY, name varchar(255) NOT NULL, price DECIMAL(2,2) NOT NULL)';

    $this->database->exec($table);
  }
}
?>